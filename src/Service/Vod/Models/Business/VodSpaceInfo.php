<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_space.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodSpaceInfo</code>
 */
class VodSpaceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * 空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 所属区域
     *
     * Generated from protobuf field <code>string Region = 3;</code>
     */
    protected $Region = '';
    /**
     * IAM项目名称
     *
     * Generated from protobuf field <code>string ProjectName = 4;</code>
     */
    protected $ProjectName = '';
    /**
     * 绑定的TOS Bucket名称
     *
     * Generated from protobuf field <code>string BucketName = 5;</code>
     */
    protected $BucketName = '';
    /**
     * 绑定的TosBucket状态
     *
     * Generated from protobuf field <code>string BucketStatus = 6;</code>
     */
    protected $BucketStatus = '';
    /**
     * 描述
     *
     * Generated from protobuf field <code>string Description = 7;</code>
     */
    protected $Description = '';
    /**
     * 创建人
     *
     * Generated from protobuf field <code>string UserName = 8;</code>
     */
    protected $UserName = '';
    /**
     * 创建时间
     *
     * Generated from protobuf field <code>string CreatedAt = 9;</code>
     */
    protected $CreatedAt = '';
    /**
     * 类型
     *
     * Generated from protobuf field <code>string Type = 10;</code>
     */
    protected $Type = '';
    /**
     * 媒资同步类型
     *
     * Generated from protobuf field <code>string MediaSyncLevel = 11;</code>
     */
    protected $MediaSyncLevel = '';
    /**
     *是否可使用归档存储
     *
     * Generated from protobuf field <code>bool CanUseArchive = 12;</code>
     */
    protected $CanUseArchive = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           空间名
     *     @type string $Region
     *           所属区域
     *     @type string $ProjectName
     *           IAM项目名称
     *     @type string $BucketName
     *           绑定的TOS Bucket名称
     *     @type string $BucketStatus
     *           绑定的TosBucket状态
     *     @type string $Description
     *           描述
     *     @type string $UserName
     *           创建人
     *     @type string $CreatedAt
     *           创建时间
     *     @type string $Type
     *           类型
     *     @type string $MediaSyncLevel
     *           媒资同步类型
     *     @type bool $CanUseArchive
     *          是否可使用归档存储
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodSpace::initOnce();
        parent::__construct($data);
    }

    /**
     * 空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SpaceName = $var;

        return $this;
    }

    /**
     * 所属区域
     *
     * Generated from protobuf field <code>string Region = 3;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     * 所属区域
     *
     * Generated from protobuf field <code>string Region = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->Region = $var;

        return $this;
    }

    /**
     * IAM项目名称
     *
     * Generated from protobuf field <code>string ProjectName = 4;</code>
     * @return string
     */
    public function getProjectName()
    {
        return $this->ProjectName;
    }

    /**
     * IAM项目名称
     *
     * Generated from protobuf field <code>string ProjectName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->ProjectName = $var;

        return $this;
    }

    /**
     * 绑定的TOS Bucket名称
     *
     * Generated from protobuf field <code>string BucketName = 5;</code>
     * @return string
     */
    public function getBucketName()
    {
        return $this->BucketName;
    }

    /**
     * 绑定的TOS Bucket名称
     *
     * Generated from protobuf field <code>string BucketName = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->BucketName = $var;

        return $this;
    }

    /**
     * 绑定的TosBucket状态
     *
     * Generated from protobuf field <code>string BucketStatus = 6;</code>
     * @return string
     */
    public function getBucketStatus()
    {
        return $this->BucketStatus;
    }

    /**
     * 绑定的TosBucket状态
     *
     * Generated from protobuf field <code>string BucketStatus = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->BucketStatus = $var;

        return $this;
    }

    /**
     * 描述
     *
     * Generated from protobuf field <code>string Description = 7;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * 描述
     *
     * Generated from protobuf field <code>string Description = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->Description = $var;

        return $this;
    }

    /**
     * 创建人
     *
     * Generated from protobuf field <code>string UserName = 8;</code>
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * 创建人
     *
     * Generated from protobuf field <code>string UserName = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setUserName($var)
    {
        GPBUtil::checkString($var, True);
        $this->UserName = $var;

        return $this;
    }

    /**
     * 创建时间
     *
     * Generated from protobuf field <code>string CreatedAt = 9;</code>
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * 创建时间
     *
     * Generated from protobuf field <code>string CreatedAt = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->CreatedAt = $var;

        return $this;
    }

    /**
     * 类型
     *
     * Generated from protobuf field <code>string Type = 10;</code>
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * 类型
     *
     * Generated from protobuf field <code>string Type = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->Type = $var;

        return $this;
    }

    /**
     * 媒资同步类型
     *
     * Generated from protobuf field <code>string MediaSyncLevel = 11;</code>
     * @return string
     */
    public function getMediaSyncLevel()
    {
        return $this->MediaSyncLevel;
    }

    /**
     * 媒资同步类型
     *
     * Generated from protobuf field <code>string MediaSyncLevel = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setMediaSyncLevel($var)
    {
        GPBUtil::checkString($var, True);
        $this->MediaSyncLevel = $var;

        return $this;
    }

    /**
     *是否可使用归档存储
     *
     * Generated from protobuf field <code>bool CanUseArchive = 12;</code>
     * @return bool
     */
    public function getCanUseArchive()
    {
        return $this->CanUseArchive;
    }

    /**
     *是否可使用归档存储
     *
     * Generated from protobuf field <code>bool CanUseArchive = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanUseArchive($var)
    {
        GPBUtil::checkBool($var);
        $this->CanUseArchive = $var;

        return $this;
    }

}

