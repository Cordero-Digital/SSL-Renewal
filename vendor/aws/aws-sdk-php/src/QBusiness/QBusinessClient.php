<?php
namespace Aws\QBusiness;

use Aws\AwsClient;

/**
 * This client is used to interact with the **QBusiness** service.
 * @method \Aws\Result associatePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associatePermissionAsync(array $args = [])
 * @method \Aws\Result batchDeleteDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteDocumentAsync(array $args = [])
 * @method \Aws\Result batchPutDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchPutDocumentAsync(array $args = [])
 * @method \Aws\Result cancelSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelSubscriptionAsync(array $args = [])
 * @method \Aws\Result chatSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise chatSyncAsync(array $args = [])
 * @method \Aws\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \Aws\Result createDataAccessor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataAccessorAsync(array $args = [])
 * @method \Aws\Result createDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataSourceAsync(array $args = [])
 * @method \Aws\Result createIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIndexAsync(array $args = [])
 * @method \Aws\Result createPlugin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPluginAsync(array $args = [])
 * @method \Aws\Result createRetriever(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRetrieverAsync(array $args = [])
 * @method \Aws\Result createSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionAsync(array $args = [])
 * @method \Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Aws\Result createWebExperience(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWebExperienceAsync(array $args = [])
 * @method \Aws\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \Aws\Result deleteChatControlsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChatControlsConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteConversation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConversationAsync(array $args = [])
 * @method \Aws\Result deleteDataAccessor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataAccessorAsync(array $args = [])
 * @method \Aws\Result deleteDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataSourceAsync(array $args = [])
 * @method \Aws\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \Aws\Result deleteIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIndexAsync(array $args = [])
 * @method \Aws\Result deletePlugin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePluginAsync(array $args = [])
 * @method \Aws\Result deleteRetriever(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRetrieverAsync(array $args = [])
 * @method \Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \Aws\Result deleteWebExperience(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWebExperienceAsync(array $args = [])
 * @method \Aws\Result disassociatePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociatePermissionAsync(array $args = [])
 * @method \Aws\Result getApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationAsync(array $args = [])
 * @method \Aws\Result getChatControlsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChatControlsConfigurationAsync(array $args = [])
 * @method \Aws\Result getDataAccessor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataAccessorAsync(array $args = [])
 * @method \Aws\Result getDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataSourceAsync(array $args = [])
 * @method \Aws\Result getGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupAsync(array $args = [])
 * @method \Aws\Result getIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIndexAsync(array $args = [])
 * @method \Aws\Result getMedia(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMediaAsync(array $args = [])
 * @method \Aws\Result getPlugin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPluginAsync(array $args = [])
 * @method \Aws\Result getPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \Aws\Result getRetriever(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRetrieverAsync(array $args = [])
 * @method \Aws\Result getUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserAsync(array $args = [])
 * @method \Aws\Result getWebExperience(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWebExperienceAsync(array $args = [])
 * @method \Aws\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \Aws\Result listAttachments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttachmentsAsync(array $args = [])
 * @method \Aws\Result listConversations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConversationsAsync(array $args = [])
 * @method \Aws\Result listDataAccessors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataAccessorsAsync(array $args = [])
 * @method \Aws\Result listDataSourceSyncJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataSourceSyncJobsAsync(array $args = [])
 * @method \Aws\Result listDataSources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataSourcesAsync(array $args = [])
 * @method \Aws\Result listDocuments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentsAsync(array $args = [])
 * @method \Aws\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \Aws\Result listIndices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIndicesAsync(array $args = [])
 * @method \Aws\Result listMessages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMessagesAsync(array $args = [])
 * @method \Aws\Result listPluginActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPluginActionsAsync(array $args = [])
 * @method \Aws\Result listPluginTypeActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPluginTypeActionsAsync(array $args = [])
 * @method \Aws\Result listPluginTypeMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPluginTypeMetadataAsync(array $args = [])
 * @method \Aws\Result listPlugins(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPluginsAsync(array $args = [])
 * @method \Aws\Result listRetrievers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRetrieversAsync(array $args = [])
 * @method \Aws\Result listSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSubscriptionsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listWebExperiences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWebExperiencesAsync(array $args = [])
 * @method \Aws\Result putFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFeedbackAsync(array $args = [])
 * @method \Aws\Result putGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putGroupAsync(array $args = [])
 * @method \Aws\Result searchRelevantContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchRelevantContentAsync(array $args = [])
 * @method \Aws\Result startDataSourceSyncJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDataSourceSyncJobAsync(array $args = [])
 * @method \Aws\Result stopDataSourceSyncJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDataSourceSyncJobAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 * @method \Aws\Result updateChatControlsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChatControlsConfigurationAsync(array $args = [])
 * @method \Aws\Result updateDataAccessor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataAccessorAsync(array $args = [])
 * @method \Aws\Result updateDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataSourceAsync(array $args = [])
 * @method \Aws\Result updateIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIndexAsync(array $args = [])
 * @method \Aws\Result updatePlugin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePluginAsync(array $args = [])
 * @method \Aws\Result updateRetriever(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRetrieverAsync(array $args = [])
 * @method \Aws\Result updateSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriptionAsync(array $args = [])
 * @method \Aws\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 * @method \Aws\Result updateWebExperience(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWebExperienceAsync(array $args = [])
 */
class QBusinessClient extends AwsClient {}
