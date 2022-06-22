<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class RequestVod
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        $pool->internalAddGeneratedFile(
            '
�6
vod/request/request_vod.protoVolcengine.Vod.Models.Requestvod/business/vod_workflow.protovod/business/vod_upload.proto"�
VodGetAllPlayInfoRequest
Vids (	
Formats (	
Codecs (	
Definitions (	
	FileTypes (	
	LogoTypes (	
NeedEncryptStream (	
Ssl (	

NeedThumbs	 (	
NeedBarrageMask
 (	
CdnType (	
	UnionInfo (	
	PlayScene (	
DrmExpireTimestamp (	
HDRType (	 
KeyFrameAlignmentVersion (	

UserAction (	
Quality (	"�
VodGetPlayInfoRequest
Vid (	
Format (	
Codec (	

Definition (	
FileType (	
LogoType (	
Base64 (	
Ssl (	

NeedThumbs	 (	
NeedBarrageMask
 (	
CdnType (	
	UnionInfo (	
HDRDefinition (	
	PlayScene (	
DrmExpireTimestamp (	
Quality (	"g
VodGetPrivateDrmPlayAuthRequest
DrmType (	
Vid (	
PlayAuthIds (	
	UnionInfo (	"Q
VodGetHlsDecryptionKeyRequest
DrmAuthToken (	

Ak (	
Source (	"�
+VodGetPlayInfoWithLiveTimeShiftSceneRequest
	StoreUris (	
	SpaceName (	
Ssl (	
ExpireTimestamp (	
NeedComposeBucketName (	"m
VodUrlUploadRequest
	SpaceName (	C
URLSets (22.Volcengine.Vod.Models.Business.VodUrlUploadURLSet"/
VodQueryUploadTaskInfoRequest
JobIds (	"x
VodApplyUploadInfoRequest
	SpaceName (	

SessionKey (	
FileSize (
FileType (	
FileName (	"w
VodUploadMediaRequest
	SpaceName (	
FilePath (	
CallbackArgs (	
	Functions (	
FileName (	"�
VodUploadMaterialRequest
	SpaceName (	
FilePath (	
CallbackArgs (	
	Functions (	
FileType (	
FileName (	"l
VodCommitUploadInfoRequest
	SpaceName (	

SessionKey (	
CallbackArgs (	
	Functions (	"=
VodUrlUploadJsonRequest
	SpaceName (	
URLSets (	".
VodGetRecommendedPosterRequest
Vids (	"A
"VodUpdateMediaPublishStatusRequest
Vid (	
Status (	"�
VodUpdateMediaInfoRequest
Vid (	/
	PosterUri (2.google.protobuf.StringValue+
Title (2.google.protobuf.StringValue1
Description (2.google.protobuf.StringValue*
Tags (2.google.protobuf.StringValue5
ClassificationId (2.google.protobuf.Int64Value"\'
VodGetMediaInfosRequest
Vids (	";
VodDeleteMediaRequest
Vids (	
CallbackArgs (	"P
VodDeleteTranscodesRequest
Vid (	
FileIds (	
CallbackArgs (	"�
VodGetMediaListRequest
	SpaceName (	
Vid (	
Status (	
Order (	
Tags (	
	StartTime (	
EndTime (	
Offset (	
PageSize	 (	
ClassificationIds
 (	"�
VodGetSubtitleInfoListRequest
Vid (	
FileIds (	
	Languages (	
Formats (	
LanguageIds (	
SubtitleIds (	
Status (	
Title (	
Tag	 (	
Offset
 (	
PageSize (	
Ssl (	"r
VodUpdateSubtitleStatusRequest
Vid (	
FileIds (	
	Languages (	
Formats (	
Status (	"�
VodUpdateSubtitleInfoRequest
Vid (	
FileId (	
Language (	
Format (	+
Title (2.google.protobuf.StringValue)
Tag (2.google.protobuf.StringValue"w
 VodGetAuditFramesForAuditRequest
Vid (	
Strategy (	
MinNumberOfFrames (	
MaxNumberOfFrames (	"�
VodGetMLFramesForAuditRequest
Vid (	
Strategy (	
FrameOpt (	
FrameFps (	
NumberOfFrames (	
CutTimeMills (	
NeedFirstFrame (	
NeedLastFrame (	
StartTimeMill	 (	
EndTimeMill
 (	
MinNumberOfFrames (	
MaxNumberOfFrames (	"U
!VodGetBetterFramesForAuditRequest
Vid (	
Strategy (	
	CoverRate (	"?
VodGetAudioInfoForAuditRequest
Vid (	
Strategy (	"P
/VodGetAutomaticSpeechRecognitionForAuditRequest
Vid (	
Strategy (	"I
(VodGetAudioEventDetectionForAuditRequest
Vid (	
Strategy (	"q
#VodCreateVideoClassificationRequest
	SpaceName (	
Level (
ParentId (
Classification (	"j
#VodUpdateVideoClassificationRequest
	SpaceName (	
ClassificationId (
Classification (	"R
#VodDeleteVideoClassificationRequest
	SpaceName (	
ClassificationId ("Q
"VodListVideoClassificationsRequest
	SpaceName (	
ClassificationId ("&
VodListSnapshotsRequest
Vid (	"�
VodStartWorkflowRequest
Vid (	

TemplateId (	=
Input (2..Volcengine.Vod.Models.Business.WorkflowParams
Priority (
CallbackArgs (	
EnableLowPriority ("D
!VodRetrieveTranscodeResultRequest
Vid (	

ResultType (	"v
VodCreateSpaceRequest
	SpaceName (	
ProjectName (	
Description (	
Region (	
UserName (	"-
VodGetSpaceDetailRequest
	SpaceName (	"4
VodListSpaceRequest
Offset (
Limit ("u
VodUpdateSpaceRequest
	SpaceName (	
SourceProjectName (	
TargetProjectName (	
Description (	"^
!VodUpdateSpaceUploadConfigRequest
	SpaceName (	
	ConfigKey (	
ConfigValue (	")
VodListDomainRequest
	SpaceName (	"O
VodCreateCdnRefreshTaskRequest
	SpaceName (	
Urls (	
Type (	"A
VodCreateCdnPreloadTaskRequest
	SpaceName (	
Urls (	"�
VodListCdnTasksRequest
	SpaceName (	
TaskId (	

DomainName (	
TaskType (	
Status (	
StartTimestamp (
EndTimestamp (
PageNum (
PageSize	 ("n
VodListCdnAccessLogRequest
Domains (	
StartTimestamp (
EndTimestamp (
	SpaceName (	"p
VodListCdnTopAccessUrlRequest
Domains (	
StartTimestamp (
EndTimestamp (
SortType (	"�
(VodDescribeVodDomainBandwidthDataRequest

DomainList (	
	StartTime (	
EndTime (	
Aggregation (
BandwidthType (	"�
VodListCdnUsageDataRequest
Domains (	
Interval (	
StartTimestamp (
EndTimestamp (
DataType (	
Metric (	"�
VodListCdnStatusDataRequest
Domains (	
Interval (	
StartTimestamp (
EndTimestamp (
DataType (	
Metric (	"\'
VodDescribeIPInfoRequest
Ips (	"|
VodListCdnPvDataRequest
Domains (	
Interval (	
StartTimestamp (
EndTimestamp (
DataType (	"C
!VodAddCallbackSubscriptionRequest
	SpaceName (	
Url (	"h
VodSetCallbackEventRequest
	SpaceName (	
Events (	
AuthEnabled (	

PrivateKey (	"�
&VodGetSmartStrategyLitePlayInfoRequest
PlayUrl (	
Format (	
Codec (	

Definition (	
FileType (	
LogoType (	
Ssl (	

NeedThumbs (	
NeedBarrageMask	 (	
	UnionInfo
 (	
HDRDefinition (	B�
(com.volcengine.service.vod.model.requestB
VodRequestPZ@github.com/volcengine/volc-sdk-golang/service/vod/models/request���Volc\\Service\\Vod\\Models\\Request�#Volc\\Service\\Vod\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

