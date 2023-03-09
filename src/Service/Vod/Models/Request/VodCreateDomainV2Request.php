<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodCreateDomainV2Request</code>
 */
class VodCreateDomainV2Request extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * Generated from protobuf field <code>string DomainType = 2;</code>
     */
    protected $DomainType = '';
    /**
     * 域名
     *
     * Generated from protobuf field <code>string Domain = 3;</code>
     */
    protected $Domain = '';
    /**
     * Generated from protobuf field <code>int32 SourceStationType = 5;</code>
     */
    protected $SourceStationType = 0;
    /**
     *源站地址类型
     *
     * Generated from protobuf field <code>int32 SourceStationAddressType = 6;</code>
     */
    protected $SourceStationAddressType = 0;
    /**
     *源站地址
     *
     * Generated from protobuf field <code>string Origins = 7;</code>
     */
    protected $Origins = '';
    /**
     *地区
     *
     * Generated from protobuf field <code>string Area = 8;</code>
     */
    protected $Area = '';
    /**
     *挂载tos 桶名称
     *
     * Generated from protobuf field <code>string BucketName = 9;</code>
     */
    protected $BucketName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *     @type string $DomainType
     *     @type string $Domain
     *           域名
     *     @type int $SourceStationType
     *     @type int $SourceStationAddressType
     *          源站地址类型
     *     @type string $Origins
     *          源站地址
     *     @type string $Area
     *          地区
     *     @type string $BucketName
     *          挂载tos 桶名称
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
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
     * Generated from protobuf field <code>string DomainType = 2;</code>
     * @return string
     */
    public function getDomainType()
    {
        return $this->DomainType;
    }

    /**
     * Generated from protobuf field <code>string DomainType = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDomainType($var)
    {
        GPBUtil::checkString($var, True);
        $this->DomainType = $var;

        return $this;
    }

    /**
     * 域名
     *
     * Generated from protobuf field <code>string Domain = 3;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * 域名
     *
     * Generated from protobuf field <code>string Domain = 3;</code>
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
     * Generated from protobuf field <code>int32 SourceStationType = 5;</code>
     * @return int
     */
    public function getSourceStationType()
    {
        return $this->SourceStationType;
    }

    /**
     * Generated from protobuf field <code>int32 SourceStationType = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSourceStationType($var)
    {
        GPBUtil::checkInt32($var);
        $this->SourceStationType = $var;

        return $this;
    }

    /**
     *源站地址类型
     *
     * Generated from protobuf field <code>int32 SourceStationAddressType = 6;</code>
     * @return int
     */
    public function getSourceStationAddressType()
    {
        return $this->SourceStationAddressType;
    }

    /**
     *源站地址类型
     *
     * Generated from protobuf field <code>int32 SourceStationAddressType = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSourceStationAddressType($var)
    {
        GPBUtil::checkInt32($var);
        $this->SourceStationAddressType = $var;

        return $this;
    }

    /**
     *源站地址
     *
     * Generated from protobuf field <code>string Origins = 7;</code>
     * @return string
     */
    public function getOrigins()
    {
        return $this->Origins;
    }

    /**
     *源站地址
     *
     * Generated from protobuf field <code>string Origins = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setOrigins($var)
    {
        GPBUtil::checkString($var, True);
        $this->Origins = $var;

        return $this;
    }

    /**
     *地区
     *
     * Generated from protobuf field <code>string Area = 8;</code>
     * @return string
     */
    public function getArea()
    {
        return $this->Area;
    }

    /**
     *地区
     *
     * Generated from protobuf field <code>string Area = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setArea($var)
    {
        GPBUtil::checkString($var, True);
        $this->Area = $var;

        return $this;
    }

    /**
     *挂载tos 桶名称
     *
     * Generated from protobuf field <code>string BucketName = 9;</code>
     * @return string
     */
    public function getBucketName()
    {
        return $this->BucketName;
    }

    /**
     *挂载tos 桶名称
     *
     * Generated from protobuf field <code>string BucketName = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->BucketName = $var;

        return $this;
    }

}

