<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.SnapshotParamsSample</code>
 */
class SnapshotParamsSample extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Format = 1;</code>
     */
    protected $Format = '';
    /**
     * Generated from protobuf field <code>repeated string StoreUris = 2;</code>
     */
    private $StoreUris;
    /**
     * Generated from protobuf field <code>int32 Width = 3;</code>
     */
    protected $Width = 0;
    /**
     * Generated from protobuf field <code>int32 Height = 4;</code>
     */
    protected $Height = 0;
    /**
     * Generated from protobuf field <code>float Interval = 5;</code>
     */
    protected $Interval = 0.0;
    /**
     * Generated from protobuf field <code>int32 CaptureNum = 6;</code>
     */
    protected $CaptureNum = 0;
    /**
     * Generated from protobuf field <code>float Duration = 7;</code>
     */
    protected $Duration = 0.0;
    /**
     * Generated from protobuf field <code>string IndexUri = 8;</code>
     */
    protected $IndexUri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Format
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $StoreUris
     *     @type int $Width
     *     @type int $Height
     *     @type float $Interval
     *     @type int $CaptureNum
     *     @type float $Duration
     *     @type string $IndexUri
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Format = 1;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * Generated from protobuf field <code>string Format = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->Format = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string StoreUris = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStoreUris()
    {
        return $this->StoreUris;
    }

    /**
     * Generated from protobuf field <code>repeated string StoreUris = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStoreUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->StoreUris = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Width = 3;</code>
     * @return int
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * Generated from protobuf field <code>int32 Width = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->Width = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Height = 4;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * Generated from protobuf field <code>int32 Height = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->Height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float Interval = 5;</code>
     * @return float
     */
    public function getInterval()
    {
        return $this->Interval;
    }

    /**
     * Generated from protobuf field <code>float Interval = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkFloat($var);
        $this->Interval = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 CaptureNum = 6;</code>
     * @return int
     */
    public function getCaptureNum()
    {
        return $this->CaptureNum;
    }

    /**
     * Generated from protobuf field <code>int32 CaptureNum = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCaptureNum($var)
    {
        GPBUtil::checkInt32($var);
        $this->CaptureNum = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float Duration = 7;</code>
     * @return float
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * Generated from protobuf field <code>float Duration = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkFloat($var);
        $this->Duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string IndexUri = 8;</code>
     * @return string
     */
    public function getIndexUri()
    {
        return $this->IndexUri;
    }

    /**
     * Generated from protobuf field <code>string IndexUri = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->IndexUri = $var;

        return $this;
    }

}

