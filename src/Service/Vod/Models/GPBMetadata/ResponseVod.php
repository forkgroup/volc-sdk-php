<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/response/response_vod.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class ResponseVod
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Volc\Service\Base\Models\GPBMetadata\Base::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodPlay::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodEdit::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodSpace::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodCommon::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodSmartStrategy::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodAppsManage::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        $pool->internalAddGeneratedFile(
            '
�f
vod/response/response_vod.protoVolcengine.Vod.Models.Responsevod/business/vod_play.protovod/business/vod_media.protovod/business/vod_upload.protovod/business/vod_workflow.protovod/business/vod_edit.protovod/business/vod_space.protovod/business/vod_cdn.protovod/business/vod_common.proto%vod/business/vod_smart_strategy.proto"vod/business/vod_apps_manage.protovod/business/vod_measure.proto"�
VodGetAllPlayInfoResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataD
Result (24.Volcengine.Vod.Models.Business.VodAllPlayInfoResult"�
VodGetPlayInfoResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata@
Result (20.Volcengine.Vod.Models.Business.VodPlayInfoModel"�
VodGetOriginalPlayInfoResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataL
Result (2<.Volcengine.Vod.Models.Business.VodGetOriginalPlayInfoResult"�
 VodGetPrivateDrmPlayAuthResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataN
Result (2>.Volcengine.Vod.Models.Business.VodGetPrivateDrmPlayAuthResult"�
VodGetHlsDecryptionKeyResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataL
Result (2<.Volcengine.Vod.Models.Business.VodGetHlsDecryptionKeyResult"�
,VodGetPlayInfoWithLiveTimeShiftSceneResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataZ
Result (2J.Volcengine.Vod.Models.Business.VodGetPlayInfoWithLiveTimeShiftSceneResult"�
VodUploadMediaResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata=
Result (2-.Volcengine.Vod.Models.Business.VodCommitData"�
VodQueryUploadTaskInfoResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata<
Result (2,.Volcengine.Vod.Models.Business.VodQueryData"�
VodUrlUploadResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataB
Result (22.Volcengine.Vod.Models.Business.VodUrlResponseData"�
VodApplyUploadInfoResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataH
Result (28.Volcengine.Vod.Models.Business.VodApplyUploadInfoResult"�
VodCommitUploadInfoResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataI
Result (29.Volcengine.Vod.Models.Business.VodCommitUploadInfoResult"�
VodGetMediaInfosResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataD
Result (24.Volcengine.Vod.Models.Business.VodGetMediaInfosData"e
VodUpdateMediaInfoResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
VodGetRecommendedPosterResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataC
Result (23.Volcengine.Vod.Models.Business.VodGetRecPosterData"n
#VodUpdateMediaPublishStatusResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
"VodUpdateMediaStorageClassResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataN
Result (2>.Volcengine.Vod.Models.Business.VodUpdateMediaStorageClassData"�
VodDeleteMediaResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataB
Result (22.Volcengine.Vod.Models.Business.VodDeleteMediaData"�
VodDeleteTranscodesResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataG
Result (27.Volcengine.Vod.Models.Business.VodDeleteTranscodesData"�
VodGetMediaListResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataC
Result (23.Volcengine.Vod.Models.Business.VodGetMediaListData"�
VodGetSubtitleInfoListResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataJ
Result (2:.Volcengine.Vod.Models.Business.VodGetSubtitleInfoListData"�
VodUpdateSubtitleStatusResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataK
Result (2;.Volcengine.Vod.Models.Business.VodUpdateSubtitleStatusData"h
VodUpdateSubtitleInfoResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
!VodGetAuditFramesForAuditResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataJ
Result (2:.Volcengine.Vod.Models.Business.VodGetFramesForAuditResult"�
VodGetMLFramesForAuditResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataJ
Result (2:.Volcengine.Vod.Models.Business.VodGetFramesForAuditResult"�
"VodGetBetterFramesForAuditResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataP
Result (2@.Volcengine.Vod.Models.Business.VodGetBetterFramesForAuditResult"�
VodGetAudioInfoForAuditResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataM
Result (2=.Volcengine.Vod.Models.Business.VodGetAudioInfoForAuditResult"�
0VodGetAutomaticSpeechRecognitionForAuditResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata^
Result (2N.Volcengine.Vod.Models.Business.VodGetAutomaticSpeechRecognitionForAuditResult"�
)VodGetAudioEventDetectionForAuditResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataW
Result (2G.Volcengine.Vod.Models.Business.VodGetAudioEventDetectionForAuditResult"�
$VodCreateVideoClassificationResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataP
Result (2@.Volcengine.Vod.Models.Business.VodCreateVideoClassificationData"o
$VodUpdateVideoClassificationResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"o
$VodDeleteVideoClassificationResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
#VodListVideoClassificationsResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataK
Result (2;.Volcengine.Vod.Models.Business.VodVideoClassificationsData"�
VodListSnapshotsResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata?
Result (2/.Volcengine.Vod.Models.Business.VodSnapshotData"�
VodGetFileListResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataD
Result (24.Volcengine.Vod.Models.Business.VodGetMediaInfosData"j
VodExtractMediaMetaTaskResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
VodStartWorkflowResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataF
Result (26.Volcengine.Vod.Models.Business.VodStartWorkflowResult"�
"VodRetrieveTranscodeResultResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata?
Result (2/.Volcengine.Vod.Models.Business.TranscodeResult"�
 VodListWorkflowExecutionResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataN
Result (2>.Volcengine.Vod.Models.Business.VodListWorkflowExecutionResult"�
%VodGetWorkflowExecutionDetailResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataS
Result (2C.Volcengine.Vod.Models.Business.VodGetWorkflowExecutionDetailResult"�
%VodGetWorkflowExecutionStatusResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataA
Result (21.Volcengine.Vod.Models.Business.WorkflowExecution"�
VodGetWorkflowResultResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataA
Result (21.Volcengine.Vod.Models.Business.VodWorkflowResult"�
$VodSubmitDirectEditTaskAsyncResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataO
Result (2?.Volcengine.Vod.Models.Business.SubmitDirectEditTaskAsyncResult"�
 VodGetDirectEditProgressResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataE
Result (25.Volcengine.Vod.Models.Business.GetDirectEditProgress"�
VodGetDirectEditResultResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataC
Result (23.Volcengine.Vod.Models.Business.GetDirectEditResult"a
VodCreateSpaceResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
VodListSpaceResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata<
Result (2,.Volcengine.Vod.Models.Business.VodSpaceInfo"�
VodGetSpaceDetailResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata<
Result (2,.Volcengine.Vod.Models.Business.VodSpaceInfo"a
VodUpdateSpaceResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"m
"VodUpdateSpaceUploadConfigResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
&VodDescribeVodSpaceStorageDataResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataT
Result (2D.Volcengine.Vod.Models.Business.VodDescribeVodSpaceStorageDataResult"�
VodListDomainResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataC
Result (23.Volcengine.Vod.Models.Business.VodDomainConfigInfo"�
VodCreateCdnRefreshTaskResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataF
Result (26.Volcengine.Vod.Models.Business.VodCreateCdnTaskResult"�
VodCreateCdnPreloadTaskResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataF
Result (26.Volcengine.Vod.Models.Business.VodCreateCdnTaskResult"�
VodListCdnTasksResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata@
Result (20.Volcengine.Vod.Models.Business.VodCdnTaskResult"�
VodListCdnAccessLogResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataI
Result (29.Volcengine.Vod.Models.Business.VodListCdnAccessLogResult"�
VodListCdnTopAccessUrlResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataL
Result (2<.Volcengine.Vod.Models.Business.VodListCdnTopAccessUrlResult"�
)VodDescribeVodDomainBandwidthDataResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataW
Result (2G.Volcengine.Vod.Models.Business.VodDescribeVodDomainBandwidthDataResult"�
VodCdnStatisticsCommonResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataL
Result (2<.Volcengine.Vod.Models.Business.VodCdnStatisticsCommonResult"�
VodDescribeIPInfoResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata<
Result (2,.Volcengine.Vod.Models.Business.VodCdnIpInfo"�
\'VodDescribeVodDomainTrafficDataResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataU
Result (2E.Volcengine.Vod.Models.Business.VodDescribeVodDomainTrafficDataResult"�
VodSubmitBlockTasksResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataI
Result (29.Volcengine.Vod.Models.Business.VodSubmitBlockTasksResult"�
VodGetContentBlockTasksResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataM
Result (2=.Volcengine.Vod.Models.Business.VodGetContentBlockTasksResult"d
VodCreateDomainV2ResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"j
VodUpdateDomainExpireV2ResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"n
#VodUpdateDomainAuthConfigV2ResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"m
"VodAddCallbackSubscriptionResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"f
VodSetCallbackEventResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
\'VodGetSmartStrategyLitePlayInfoResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataU
Result (2E.Volcengine.Vod.Models.Business.VodGetSmartStrategyLitePlayInfoResult"�
VodGetAppInfoResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataC
Result (23.Volcengine.Vod.Models.Business.VodGetAppInfoResult"�
%DescribeVodSpaceTranscodeDataResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataS
Result (2C.Volcengine.Vod.Models.Business.DescribeVodSpaceTranscodeDataResult"�
$DescribeVodSpaceAIStatisDataResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataR
Result (2B.Volcengine.Vod.Models.Business.DescribeVodSpaceAIStatisDataResult"�
*DescribeVodSpaceSubtitleStatisDataResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataX
Result (2H.Volcengine.Vod.Models.Business.DescribeVodSpaceSubtitleStatisDataResult"�
(DescribeVodSpaceDetectStatisDataResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataV
Result (2F.Volcengine.Vod.Models.Business.DescribeVodSpaceDetectStatisDataResult"�
DescribeVodSnapshotDataResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataM
Result (2=.Volcengine.Vod.Models.Business.DescribeVodSnapshotDataResultB�
)com.volcengine.service.vod.model.responseBVodResponsePZAgithub.com/volcengine/volc-sdk-golang/service/vod/models/response��� Volc\\Service\\Vod\\Models\\Response�#Volc\\Service\\Vod\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

