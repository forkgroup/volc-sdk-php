<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodListCdnUsageDataRequest</code>
 */
class VodListCdnUsageDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 域名，多个用逗号隔开
     *
     * Generated from protobuf field <code>string Domains = 1;</code>
     */
    protected $Domains = '';
    /**
     * 聚合度
     *
     * Generated from protobuf field <code>string Interval = 2;</code>
     */
    protected $Interval = '';
    /**
     * 查询范围起始时间
     *
     * Generated from protobuf field <code>int64 StartTimestamp = 3;</code>
     */
    protected $StartTimestamp = 0;
    /**
     * 查询范围截止时间
     *
     * Generated from protobuf field <code>int64 EndTimestamp = 4;</code>
     */
    protected $EndTimestamp = 0;
    /**
     *统计数据类别
     *
     * Generated from protobuf field <code>string DataType = 5;</code>
     */
    protected $DataType = '';
    /**
     *指标类别
     *
     * Generated from protobuf field <code>string Metric = 6;</code>
     */
    protected $Metric = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Domains
     *           域名，多个用逗号隔开
     *     @type string $Interval
     *           聚合度
     *     @type int|string $StartTimestamp
     *           查询范围起始时间
     *     @type int|string $EndTimestamp
     *           查询范围截止时间
     *     @type string $DataType
     *          统计数据类别
     *     @type string $Metric
     *          指标类别
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 域名，多个用逗号隔开
     *
     * Generated from protobuf field <code>string Domains = 1;</code>
     * @return string
     */
    public function getDomains()
    {
        return $this->Domains;
    }

    /**
     * 域名，多个用逗号隔开
     *
     * Generated from protobuf field <code>string Domains = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomains($var)
    {
        GPBUtil::checkString($var, True);
        $this->Domains = $var;

        return $this;
    }

    /**
     * 聚合度
     *
     * Generated from protobuf field <code>string Interval = 2;</code>
     * @return string
     */
    public function getInterval()
    {
        return $this->Interval;
    }

    /**
     * 聚合度
     *
     * Generated from protobuf field <code>string Interval = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkString($var, True);
        $this->Interval = $var;

        return $this;
    }

    /**
     * 查询范围起始时间
     *
     * Generated from protobuf field <code>int64 StartTimestamp = 3;</code>
     * @return int|string
     */
    public function getStartTimestamp()
    {
        return $this->StartTimestamp;
    }

    /**
     * 查询范围起始时间
     *
     * Generated from protobuf field <code>int64 StartTimestamp = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->StartTimestamp = $var;

        return $this;
    }

    /**
     * 查询范围截止时间
     *
     * Generated from protobuf field <code>int64 EndTimestamp = 4;</code>
     * @return int|string
     */
    public function getEndTimestamp()
    {
        return $this->EndTimestamp;
    }

    /**
     * 查询范围截止时间
     *
     * Generated from protobuf field <code>int64 EndTimestamp = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->EndTimestamp = $var;

        return $this;
    }

    /**
     *统计数据类别
     *
     * Generated from protobuf field <code>string DataType = 5;</code>
     * @return string
     */
    public function getDataType()
    {
        return $this->DataType;
    }

    /**
     *统计数据类别
     *
     * Generated from protobuf field <code>string DataType = 5;</code>
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
     *指标类别
     *
     * Generated from protobuf field <code>string Metric = 6;</code>
     * @return string
     */
    public function getMetric()
    {
        return $this->Metric;
    }

    /**
     *指标类别
     *
     * Generated from protobuf field <code>string Metric = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMetric($var)
    {
        GPBUtil::checkString($var, True);
        $this->Metric = $var;

        return $this;
    }

}

