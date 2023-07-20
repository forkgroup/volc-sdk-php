<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_upload.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodHeaderPair</code>
 */
class VodHeaderPair extends \Google\Protobuf\Internal\Message
{
    /**
     * 1001 阶段返回信息，1002-1004 上传时需要带的 header 中的 key 
     *
     * Generated from protobuf field <code>string Key = 1;</code>
     */
    protected $Key = '';
    /**
     * 1001 阶段返回信息，1002-1004 上传时需要带的 header 中的 value 
     *
     * Generated from protobuf field <code>string Value = 2;</code>
     */
    protected $Value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Key
     *           1001 阶段返回信息，1002-1004 上传时需要带的 header 中的 key 
     *     @type string $Value
     *           1001 阶段返回信息，1002-1004 上传时需要带的 header 中的 value 
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * 1001 阶段返回信息，1002-1004 上传时需要带的 header 中的 key 
     *
     * Generated from protobuf field <code>string Key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * 1001 阶段返回信息，1002-1004 上传时需要带的 header 中的 key 
     *
     * Generated from protobuf field <code>string Key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->Key = $var;

        return $this;
    }

    /**
     * 1001 阶段返回信息，1002-1004 上传时需要带的 header 中的 value 
     *
     * Generated from protobuf field <code>string Value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * 1001 阶段返回信息，1002-1004 上传时需要带的 header 中的 value 
     *
     * Generated from protobuf field <code>string Value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->Value = $var;

        return $this;
    }

}

