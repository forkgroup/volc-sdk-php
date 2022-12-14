<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class VodWorkflow
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�!
vod/business/vod_workflow.protoVolcengine.Vod.Models.Business"\'
VodStartWorkflowResult
RunId (	"�
WorkflowParamsF
OverrideParams (2..Volcengine.Vod.Models.Business.OverrideParamsP
	Condition (2=.Volcengine.Vod.Models.Business.WorkflowParams.ConditionEntry0
ConditionEntry
key (	
value (:8"�
OverrideParams:
Logo (2,.Volcengine.Vod.Models.Business.LogoOverrideN
TranscodeVideo (26.Volcengine.Vod.Models.Business.TranscodeVideoOverrideN
TranscodeAudio (26.Volcengine.Vod.Models.Business.TranscodeAudioOverrideB
Snapshot (20.Volcengine.Vod.Models.Business.SnapshotOverride"�
LogoOverride

TemplateId (	D
Vars (26.Volcengine.Vod.Models.Business.LogoOverride.VarsEntry+
	VarsEntry
key (	
value (	:8"�
TranscodeVideoOverride

TemplateId (	2
Clip (2$.Volcengine.Vod.Models.Business.Clip
OutputIndex (
FileName (	"*
Clip
	StartTime (
EndTime ("r
TranscodeAudioOverride

TemplateId (	2
Clip (2$.Volcengine.Vod.Models.Business.Clip
FileName (	"R
SnapshotOverride

TemplateId (	

OffsetTime (
OffsetTimeList ("�
TranscodeResult
Vid (	>

Inspection (2*.Volcengine.Vod.Models.Business.InspectionE
CategoryTags (2/.Volcengine.Vod.Models.Business.CategoryTagInfo"�

Inspection8
Quality (2\'.Volcengine.Vod.Models.Business.Quality:
DeLogo (2*.Volcengine.Vod.Models.Business.DeLogoInfo"�
Quality=
Visual (2-.Volcengine.Vod.Models.Business.VisualQuality>

VolumeInfo (2*.Volcengine.Vod.Models.Business.VolumeInfo"q

DeLogoInfo
AnchorWidth (
AnchorHeight (
PosX (
PosY (
SizeX (
SizeY ("|
VisualQuality
VQScore (
Contrast (
Colorfulness (

Brightness (
Texture (
Noise ("S

VolumeInfo
Loudness (
Peak (

MeanVolume (
	MaxVolume ("�
CategoryTagInfo
TagId (
Prob (
TagName (	
Level (S

ParentInfo (2?.Volcengine.Vod.Models.Business.CategoryTagInfo.ParentInfoEntry1
ParentInfoEntry
key (	
value (	:8"�
VodListWorkflowExecutionResult?
Data (21.Volcengine.Vod.Models.Business.WorkflowExecution

TotalCount (
PageSize (
Offset ("�
WorkflowExecution
RunId (	
Vid (	

TemplateId (	
TemplateName (	
	SpaceName (	
Status (	

TaskListId (	
EnableLowPriority (
	JobSource	 (	.

CreateTime
 (2.google.protobuf.Timestamp-
	StartTime (2.google.protobuf.Timestamp+
EndTime (2.google.protobuf.Timestamp=
Input (2..Volcengine.Vod.Models.Business.WorkflowParams
Priority (
CallbackArgs (	?
TasksDetail (2*.Volcengine.Vod.Models.Business.TaskDetail"�
#VodGetWorkflowExecutionDetailResult
RunId (	
Vid (	

TemplateId (	
	SpaceName (	
Status (	

TaskListId (	
EnableLowPriority (
	JobSource	 (	>
Stages
 (2..Volcengine.Vod.Models.Business.ExecutionStage.

CreateTime (2.google.protobuf.Timestamp-
	StartTime (2.google.protobuf.Timestamp+
EndTime (2.google.protobuf.Timestamp"�
ExecutionStage
DisplayName (	@
StageDetail (2+.Volcengine.Vod.Models.Business.StageDetail-
	StartTime (2.google.protobuf.Timestamp+
EndTime (2.google.protobuf.Timestamp"�
StageDetail

Id (	
DisplayName (	
Type (	

TemplateId (	;
Status (2+.Volcengine.Vod.Models.Business.StageStatus
	ErrorCode (
Message (	-
	StartTime (2.google.protobuf.Timestamp+
EndTime	 (2.google.protobuf.Timestamp"�

TaskDetail
DisplayName (	

TemplateId (	;
Status (2+.Volcengine.Vod.Models.Business.StageStatus
Progress (-
	StartTime	 (2.google.protobuf.Timestamp+
EndTime
 (2.google.protobuf.Timestamp*z
StageStatus
Unknown 
	Scheduled
Running
Canceled
TimedOut
Skipped
	Completed

FailedB�
)com.volcengine.service.vod.model.businessBVodWorkflowPZAgithub.com/volcengine/volc-sdk-golang/service/vod/models/business��� Volc\\Service\\Vod\\Models\\Business�#Volc\\Service\\Vod\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

