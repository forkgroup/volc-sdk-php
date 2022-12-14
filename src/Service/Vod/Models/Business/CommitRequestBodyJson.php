<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_upload.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.CommitRequestBodyJson</code>
 */
class CommitRequestBodyJson extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * Generated from protobuf field <code>string SessionKey = 2;</code>
     */
    protected $SessionKey = '';
    /**
     * Generated from protobuf field <code>string CallbackArgs = 3;</code>
     */
    protected $CallbackArgs = '';
    /**
     * Generated from protobuf field <code>string Functions = 4;</code>
     */
    protected $Functions = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *     @type string $SessionKey
     *     @type string $CallbackArgs
     *     @type string $Functions
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
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
     * Generated from protobuf field <code>string SessionKey = 2;</code>
     * @return string
     */
    public function getSessionKey()
    {
        return $this->SessionKey;
    }

    /**
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
     * Generated from protobuf field <code>string CallbackArgs = 3;</code>
     * @return string
     */
    public function getCallbackArgs()
    {
        return $this->CallbackArgs;
    }

    /**
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
     * Generated from protobuf field <code>string Functions = 4;</code>
     * @return string
     */
    public function getFunctions()
    {
        return $this->Functions;
    }

    /**
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

}

