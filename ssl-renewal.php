<?php
/**
 * Plugin Name:     SSL Renewal
 * Plugin URI:      https://tomascordero.com
 * Description:     A simple plugin to renew SSL certificate with Let's Encrypt and wordpress CLI
 * Author:          Tomas Cordero
 * Author URI:      https://tomascordero.com
 * Text Domain:     ssl-renewal
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Ssl_Renewal
 */


require plugin_dir_path( __FILE__ ) . '/vendor/autoload.php';

if (defined('WP_CLI') && WP_CLI) {
    WP_CLI::add_command('ssl:renew', 'SSL_Renewal_Command');
    WP_CLI::add_command('ssl:dns-challenge', 'SSL_DNS_Challenge');
    WP_CLI::add_command('ssl:install', 'SSL_Move_Files');
}

use Aws\Route53\Route53Client;
use Aws\Exception\AwsException;

class SSL_Renewal_Command {
    public function __invoke($args, $assoc_args) {
        if (!isset($assoc_args['domain'])) {
            WP_CLI::error('Missing required argument: domain. ex: --domain=example.com');
            return;
        }
        $domain = $assoc_args['domain'];
        $wildcard = "*.{$assoc_args['domain']}";
        $zoneId = getenv('AWS_ROUTE53_ZONE_ID') ?: AWS_ROUTE53_ZONE_ID;

        WP_CLI::log('Starting SSL renewal process...');

        // Step 1: Request a new SSL certificate with Certbot (DNS Challenge)
        exec("sudo certbot certonly --manual --preferred-challenges dns --manual-auth-hook 'wp ssl:dns-challenge' -d {$domain} -d {$wildcard}", $output, $return_var);

        if ($return_var !== 0) {
            WP_CLI::error('Certbot failed! Check logs.');
            return;
        }

        WP_CLI::success('SSL renewed successfully!');
    }
}

// WP-CLI command to handle DNS challenge

class SSL_DNS_Challenge {
    public function __invoke($args, $assoc_args) {
        $domain = getenv('CERTBOT_DOMAIN');
        $recordValue = getenv('CERTBOT_VALIDATION');

        if (!$domain || !$recordValue) {
            WP_CLI::error('Missing required arguments: domain and value.');
            return;
        }

        WP_CLI::log("Adding DNS TXT record for {$domain}...");

        // Call Route 53 API to add TXT record
        try {
            $client = new Route53Client([
                'version' => 'latest',
                'region'  => AWS_REGION,
                'credentials' => [
                    'key'    => AWS_ACCESS_KEY_ID,
                    'secret' => AWS_SECRET_ACCESS_KEY,
                ],
            ]);

            $zoneId = AWS_ROUTE53_ZONE_ID;

            $result = $client->changeResourceRecordSets([
                'HostedZoneId' => $zoneId,
                'ChangeBatch'  => [
                    'Changes' => [
                        [
                            'Action'            => 'UPSERT',
                            'ResourceRecordSet' => [
                                'Name'            => "_acme-challenge.{$domain}",
                                'Type'            => 'TXT',
                                'TTL'             => 60,
                                'ResourceRecords' => [['Value' => "\"{$recordValue}\""]],
                            ],
                        ],
                    ],
                ],
            ]);

            WP_CLI::success("DNS record added! Waiting for propagation... once done, run 'wp ssl:install --domain={$domain}'");

        } catch (AwsException $e) {
            WP_CLI::error("AWS Route 53 Error: " . $e->getMessage());
        }
    }
}

class SSL_Move_Files {
    public function __invoke($args, $assoc_args) {
        $domain = $assoc_args['domain'];

        WP_CLI::log("Moving certificate files to web server...");

        try {
            $result_code = 0;
            exec("sudo mv /opt/bitnami/apache2/conf/bitnami/certs/server.crt /opt/bitnami/apache2/conf/bitnami/certs/server.crt.old", result_code: $result_code);
            if ($result_code !== 0) {
                WP_CLI::error("Error moving server.crt file!");
                return;
            }
            exec("sudo mv /opt/bitnami/apache2/conf/bitnami/certs/server.key /opt/bitnami/apache2/conf/bitnami/certs/server.key.old", result_code: $result_code);
            if ($result_code !== 0) {
                WP_CLI::error("Error moving server.key file!");
                return;
            }
            exec("sudo ln -sf /etc/letsencrypt/live/$domain/privkey.pem /opt/bitnami/apache2/conf/bitnami/certs/server.key", result_code: $result_code);
            if ($result_code !== 0) {
                WP_CLI::error("Error moving privkey.pem file!");
                return;
            }
            exec("sudo ln -sf /etc/letsencrypt/live/$domain/fullchain.pem /opt/bitnami/apache2/conf/bitnami/certs/server.crt", result_code: $result_code);
            if ($result_code !== 0) {
                WP_CLI::error("Error moving fullchain.pem file!");
                return;
            }
        } catch(\Exception $e) {
            WP_CLI::error("Error moving certificate files: " . $e->getMessage());
            return;
        }

        WP_CLI::success("Certificate files moved successfully!");
    }
}
