<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_cdn.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodCdnAccessLogInfo</code>
 */
class VodCdnAccessLogInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * 域名
     *
     * Generated from protobuf field <code>string Domain = 1;</code>
     */
    protected $Domain = '';
    /**
     * 日志列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodCdnAccessLogElement LogList = 2;</code>
     */
    private $LogList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Domain
     *           域名
     *     @type \Volc\Service\Vod\Models\Business\VodCdnAccessLogElement[]|\Google\Protobuf\Internal\RepeatedField $LogList
     *           日志列表
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     * 域名
     *
     * Generated from protobuf field <code>string Domain = 1;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * 域名
     *
     * Generated from protobuf field <code>string Domain = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->Domain = $var;

        return $this;
    }

    /**
     * 日志列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodCdnAccessLogElement LogList = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogList()
    {
        return $this->LogList;
    }

    /**
     * 日志列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodCdnAccessLogElement LogList = 2;</code>
     * @param \Volc\Service\Vod\Models\Business\VodCdnAccessLogElement[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodCdnAccessLogElement::class);
        $this->LogList = $arr;

        return $this;
    }

}

