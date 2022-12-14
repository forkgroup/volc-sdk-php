<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_upload.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.CallbackResponse</code>
 */
class CallbackResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string RequestId = 1;</code>
     */
    protected $RequestId = '';
    /**
     * Generated from protobuf field <code>string Version = 2;</code>
     */
    protected $Version = '';
    /**
     * Generated from protobuf field <code>string EventTime = 3;</code>
     */
    protected $EventTime = '';
    /**
     * Generated from protobuf field <code>string EventType = 4;</code>
     */
    protected $EventType = '';
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodUploadCallbackData Data = 5;</code>
     */
    protected $Data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $RequestId
     *     @type string $Version
     *     @type string $EventTime
     *     @type string $EventType
     *     @type \Volc\Service\Vod\Models\Business\VodUploadCallbackData $Data
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string RequestId = 1;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->RequestId;
    }

    /**
     * Generated from protobuf field <code>string RequestId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->RequestId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * Generated from protobuf field <code>string Version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->Version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EventTime = 3;</code>
     * @return string
     */
    public function getEventTime()
    {
        return $this->EventTime;
    }

    /**
     * Generated from protobuf field <code>string EventTime = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEventTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->EventTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EventType = 4;</code>
     * @return string
     */
    public function getEventType()
    {
        return $this->EventType;
    }

    /**
     * Generated from protobuf field <code>string EventType = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkString($var, True);
        $this->EventType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodUploadCallbackData Data = 5;</code>
     * @return \Volc\Service\Vod\Models\Business\VodUploadCallbackData|null
     */
    public function getData()
    {
        return $this->Data;
    }

    public function hasData()
    {
        return isset($this->Data);
    }

    public function clearData()
    {
        unset($this->Data);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodUploadCallbackData Data = 5;</code>
     * @param \Volc\Service\Vod\Models\Business\VodUploadCallbackData $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\VodUploadCallbackData::class);
        $this->Data = $var;

        return $this;
    }

}

