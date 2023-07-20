<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_common.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodCommonConfigInfo</code>
 */
class VodCommonConfigInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * 配置模块类型
     *
     * Generated from protobuf field <code>string Module = 1;</code>
     */
    protected $Module = '';
    /**
     * 配置Key
     *
     * Generated from protobuf field <code>string Key = 2;</code>
     */
    protected $Key = '';
    /**
     * 配置Value
     *
     * Generated from protobuf field <code>string Value = 3;</code>
     */
    protected $Value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Module
     *           配置模块类型
     *     @type string $Key
     *           配置Key
     *     @type string $Value
     *           配置Value
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * 配置模块类型
     *
     * Generated from protobuf field <code>string Module = 1;</code>
     * @return string
     */
    public function getModule()
    {
        return $this->Module;
    }

    /**
     * 配置模块类型
     *
     * Generated from protobuf field <code>string Module = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setModule($var)
    {
        GPBUtil::checkString($var, True);
        $this->Module = $var;

        return $this;
    }

    /**
     * 配置Key
     *
     * Generated from protobuf field <code>string Key = 2;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * 配置Key
     *
     * Generated from protobuf field <code>string Key = 2;</code>
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
     * 配置Value
     *
     * Generated from protobuf field <code>string Value = 3;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * 配置Value
     *
     * Generated from protobuf field <code>string Value = 3;</code>
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

