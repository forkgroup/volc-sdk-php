<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_cdn.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodCdnStatisticsData</code>
 */
class VodCdnStatisticsData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     */
    protected $Name = '';
    /**
     * Generated from protobuf field <code>string Metric = 2;</code>
     */
    protected $Metric = '';
    /**
     * Generated from protobuf field <code>string DataType = 3;</code>
     */
    protected $DataType = '';
    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodPoint Points = 4;</code>
     */
    private $Points;
    /**
     * Generated from protobuf field <code>string Region = 5;</code>
     */
    protected $Region = '';
    /**
     * Generated from protobuf field <code>string Isp = 6;</code>
     */
    protected $Isp = '';
    /**
     * Generated from protobuf field <code>string BillingRegion = 7;</code>
     */
    protected $BillingRegion = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Name
     *     @type string $Metric
     *     @type string $DataType
     *     @type \Volc\Service\Vod\Models\Business\VodPoint[]|\Google\Protobuf\Internal\RepeatedField $Points
     *     @type string $Region
     *     @type string $Isp
     *     @type string $BillingRegion
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Metric = 2;</code>
     * @return string
     */
    public function getMetric()
    {
        return $this->Metric;
    }

    /**
     * Generated from protobuf field <code>string Metric = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMetric($var)
    {
        GPBUtil::checkString($var, True);
        $this->Metric = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string DataType = 3;</code>
     * @return string
     */
    public function getDataType()
    {
        return $this->DataType;
    }

    /**
     * Generated from protobuf field <code>string DataType = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDataType($var)
    {
        GPBUtil::checkString($var, True);
        $this->DataType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodPoint Points = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPoints()
    {
        return $this->Points;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodPoint Points = 4;</code>
     * @param \Volc\Service\Vod\Models\Business\VodPoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodPoint::class);
        $this->Points = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Region = 5;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     * Generated from protobuf field <code>string Region = 5;</code>
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
     * Generated from protobuf field <code>string Isp = 6;</code>
     * @return string
     */
    public function getIsp()
    {
        return $this->Isp;
    }

    /**
     * Generated from protobuf field <code>string Isp = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setIsp($var)
    {
        GPBUtil::checkString($var, True);
        $this->Isp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string BillingRegion = 7;</code>
     * @return string
     */
    public function getBillingRegion()
    {
        return $this->BillingRegion;
    }

    /**
     * Generated from protobuf field <code>string BillingRegion = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setBillingRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->BillingRegion = $var;

        return $this;
    }

}

