<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodApplyUploadInfoRequest</code>
 */
class VodApplyUploadInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 上传的空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 上传重试时可选择带上的 Session 信息，作为下发参数的辅助信息 
     *
     * Generated from protobuf field <code>string SessionKey = 2;</code>
     */
    protected $SessionKey = '';
    /**
     * 上传的文件大小，单位为字节，非必填参数 
     *
     * Generated from protobuf field <code>double FileSize = 3;</code>
     */
    protected $FileSize = 0.0;
    /**
     * 上传的类型，可不填，默认为 media 
     *
     * Generated from protobuf field <code>string FileType = 4;</code>
     */
    protected $FileType = '';
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
     *     @type string $SessionKey
     *           上传重试时可选择带上的 Session 信息，作为下发参数的辅助信息 
     *     @type float $FileSize
     *           上传的文件大小，单位为字节，非必填参数 
     *     @type string $FileType
     *           上传的类型，可不填，默认为 media 
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
     * 上传重试时可选择带上的 Session 信息，作为下发参数的辅助信息 
     *
     * Generated from protobuf field <code>string SessionKey = 2;</code>
     * @return string
     */
    public function getSessionKey()
    {
        return $this->SessionKey;
    }

    /**
     * 上传重试时可选择带上的 Session 信息，作为下发参数的辅助信息 
     *
     * Generated from protobuf field <code>string SessionKey = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->SessionKey = $var;

        return $this;
    }

    /**
     * 上传的文件大小，单位为字节，非必填参数 
     *
     * Generated from protobuf field <code>double FileSize = 3;</code>
     * @return float
     */
    public function getFileSize()
    {
        return $this->FileSize;
    }

    /**
     * 上传的文件大小，单位为字节，非必填参数 
     *
     * Generated from protobuf field <code>double FileSize = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setFileSize($var)
    {
        GPBUtil::checkDouble($var);
        $this->FileSize = $var;

        return $this;
    }

    /**
     * 上传的类型，可不填，默认为 media 
     *
     * Generated from protobuf field <code>string FileType = 4;</code>
     * @return string
     */
    public function getFileType()
    {
        return $this->FileType;
    }

    /**
     * 上传的类型，可不填，默认为 media 
     *
     * Generated from protobuf field <code>string FileType = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileType = $var;

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

