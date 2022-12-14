<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodUploadMediaRequest</code>
 */
class VodUploadMediaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 上传的空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 上传文件的路径 
     *
     * Generated from protobuf field <code>string FilePath = 2;</code>
     */
    protected $FilePath = '';
    /**
     * 业务希望上传透传的信息，会在上传成功时返回给用户 
     *
     * Generated from protobuf field <code>string CallbackArgs = 3;</code>
     */
    protected $CallbackArgs = '';
    /**
     * 上传的功能函数 
     *
     * Generated from protobuf field <code>string Functions = 4;</code>
     */
    protected $Functions = '';
    /**
     * 上传的文件在存储中的名字，即 bucket/key 中的 key 
     *
     * Generated from protobuf field <code>string FileName = 5;</code>
     */
    protected $FileName = '';
    /**
     * 上传的文件的存储类型，1-标准存储，2-归档存储，非必填参数，默认为标准存储 
     *
     * Generated from protobuf field <code>int32 StorageClass = 6;</code>
     */
    protected $StorageClass = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           上传的空间名 
     *     @type string $FilePath
     *           上传文件的路径 
     *     @type string $CallbackArgs
     *           业务希望上传透传的信息，会在上传成功时返回给用户 
     *     @type string $Functions
     *           上传的功能函数 
     *     @type string $FileName
     *           上传的文件在存储中的名字，即 bucket/key 中的 key 
     *     @type int $StorageClass
     *           上传的文件的存储类型，1-标准存储，2-归档存储，非必填参数，默认为标准存储 
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 上传的空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 上传的空间名 
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
     * 上传文件的路径 
     *
     * Generated from protobuf field <code>string FilePath = 2;</code>
     * @return string
     */
    public function getFilePath()
    {
        return $this->FilePath;
    }

    /**
     * 上传文件的路径 
     *
     * Generated from protobuf field <code>string FilePath = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->FilePath = $var;

        return $this;
    }

    /**
     * 业务希望上传透传的信息，会在上传成功时返回给用户 
     *
     * Generated from protobuf field <code>string CallbackArgs = 3;</code>
     * @return string
     */
    public function getCallbackArgs()
    {
        return $this->CallbackArgs;
    }

    /**
     * 业务希望上传透传的信息，会在上传成功时返回给用户 
     *
     * Generated from protobuf field <code>string CallbackArgs = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackArgs($var)
    {
        GPBUtil::checkString($var, True);
        $this->CallbackArgs = $var;

        return $this;
    }

    /**
     * 上传的功能函数 
     *
     * Generated from protobuf field <code>string Functions = 4;</code>
     * @return string
     */
    public function getFunctions()
    {
        return $this->Functions;
    }

    /**
     * 上传的功能函数 
     *
     * Generated from protobuf field <code>string Functions = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFunctions($var)
    {
        GPBUtil::checkString($var, True);
        $this->Functions = $var;

        return $this;
    }

    /**
     * 上传的文件在存储中的名字，即 bucket/key 中的 key 
     *
     * Generated from protobuf field <code>string FileName = 5;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * 上传的文件在存储中的名字，即 bucket/key 中的 key 
     *
     * Generated from protobuf field <code>string FileName = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileName = $var;

        return $this;
    }

    /**
     * 上传的文件的存储类型，1-标准存储，2-归档存储，非必填参数，默认为标准存储 
     *
     * Generated from protobuf field <code>int32 StorageClass = 6;</code>
     * @return int
     */
    public function getStorageClass()
    {
        return $this->StorageClass;
    }

    /**
     * 上传的文件的存储类型，1-标准存储，2-归档存储，非必填参数，默认为标准存储 
     *
     * Generated from protobuf field <code>int32 StorageClass = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStorageClass($var)
    {
        GPBUtil::checkInt32($var);
        $this->StorageClass = $var;

        return $this;
    }

}

