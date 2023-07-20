<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_cdn.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodDomainoInfo</code>
 */
class VodDomainoInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *域名
     *
     * Generated from protobuf field <code>string Domain = 1;</code>
     */
    protected $Domain = '';
    /**
     * cname域名
     *
     * Generated from protobuf field <code>string Cname = 2;</code>
     */
    protected $Cname = '';
    /**
     *配置状态
     *
     * Generated from protobuf field <code>string ConfigStatus = 3;</code>
     */
    protected $ConfigStatus = '';
    /**
     *解析状态
     *
     * Generated from protobuf field <code>string CnameStatus = 4;</code>
     */
    protected $CnameStatus = '';
    /**
     *运行状态
     *
     * Generated from protobuf field <code>string Status = 5;</code>
     */
    protected $Status = '';
    /**
     *证书
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodDomainCertificateInfo Certificate = 6;</code>
     */
    protected $Certificate = null;
    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 7;</code>
     */
    protected $CreateTime = '';
    /**
     *更新时间
     *
     * Generated from protobuf field <code>string UpdateTime = 8;</code>
     */
    protected $UpdateTime = '';
    /**
     *加速区域，cn:国内,overseas:海外，global:全球
     *
     * Generated from protobuf field <code>string Region = 9;</code>
     */
    protected $Region = '';
    /**
     * 源站信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodDomainSourceInfo Sources = 10;</code>
     */
    private $Sources;
    /**
     *是否锁定，可否配置
     *
     * Generated from protobuf field <code>string LockStatus = 11;</code>
     */
    protected $LockStatus = '';
    /**
     *在CDN侧是否启用停用
     *
     * Generated from protobuf field <code>string CDNStatus = 12;</code>
     */
    protected $CDNStatus = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Domain
     *          域名
     *     @type string $Cname
     *           cname域名
     *     @type string $ConfigStatus
     *          配置状态
     *     @type string $CnameStatus
     *          解析状态
     *     @type string $Status
     *          运行状态
     *     @type \Volc\Service\Vod\Models\Business\VodDomainCertificateInfo $Certificate
     *          证书
     *     @type string $CreateTime
     *          创建时间
     *     @type string $UpdateTime
     *          更新时间
     *     @type string $Region
     *          加速区域，cn:国内,overseas:海外，global:全球
     *     @type \Volc\Service\Vod\Models\Business\VodDomainSourceInfo[]|\Google\Protobuf\Internal\RepeatedField $Sources
     *           源站信息
     *     @type string $LockStatus
     *          是否锁定，可否配置
     *     @type string $CDNStatus
     *          在CDN侧是否启用停用
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     *域名
     *
     * Generated from protobuf field <code>string Domain = 1;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     *域名
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
     * cname域名
     *
     * Generated from protobuf field <code>string Cname = 2;</code>
     * @return string
     */
    public function getCname()
    {
        return $this->Cname;
    }

    /**
     * cname域名
     *
     * Generated from protobuf field <code>string Cname = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCname($var)
    {
        GPBUtil::checkString($var, True);
        $this->Cname = $var;

        return $this;
    }

    /**
     *配置状态
     *
     * Generated from protobuf field <code>string ConfigStatus = 3;</code>
     * @return string
     */
    public function getConfigStatus()
    {
        return $this->ConfigStatus;
    }

    /**
     *配置状态
     *
     * Generated from protobuf field <code>string ConfigStatus = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setConfigStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->ConfigStatus = $var;

        return $this;
    }

    /**
     *解析状态
     *
     * Generated from protobuf field <code>string CnameStatus = 4;</code>
     * @return string
     */
    public function getCnameStatus()
    {
        return $this->CnameStatus;
    }

    /**
     *解析状态
     *
     * Generated from protobuf field <code>string CnameStatus = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCnameStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->CnameStatus = $var;

        return $this;
    }

    /**
     *运行状态
     *
     * Generated from protobuf field <code>string Status = 5;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     *运行状态
     *
     * Generated from protobuf field <code>string Status = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->Status = $var;

        return $this;
    }

    /**
     *证书
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodDomainCertificateInfo Certificate = 6;</code>
     * @return \Volc\Service\Vod\Models\Business\VodDomainCertificateInfo|null
     */
    public function getCertificate()
    {
        return $this->Certificate;
    }

    public function hasCertificate()
    {
        return isset($this->Certificate);
    }

    public function clearCertificate()
    {
        unset($this->Certificate);
    }

    /**
     *证书
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodDomainCertificateInfo Certificate = 6;</code>
     * @param \Volc\Service\Vod\Models\Business\VodDomainCertificateInfo $var
     * @return $this
     */
    public function setCertificate($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\VodDomainCertificateInfo::class);
        $this->Certificate = $var;

        return $this;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 7;</code>
     * @return string
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->CreateTime = $var;

        return $this;
    }

    /**
     *更新时间
     *
     * Generated from protobuf field <code>string UpdateTime = 8;</code>
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }

    /**
     *更新时间
     *
     * Generated from protobuf field <code>string UpdateTime = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->UpdateTime = $var;

        return $this;
    }

    /**
     *加速区域，cn:国内,overseas:海外，global:全球
     *
     * Generated from protobuf field <code>string Region = 9;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     *加速区域，cn:国内,overseas:海外，global:全球
     *
     * Generated from protobuf field <code>string Region = 9;</code>
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
     * 源站信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodDomainSourceInfo Sources = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSources()
    {
        return $this->Sources;
    }

    /**
     * 源站信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodDomainSourceInfo Sources = 10;</code>
     * @param \Volc\Service\Vod\Models\Business\VodDomainSourceInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodDomainSourceInfo::class);
        $this->Sources = $arr;

        return $this;
    }

    /**
     *是否锁定，可否配置
     *
     * Generated from protobuf field <code>string LockStatus = 11;</code>
     * @return string
     */
    public function getLockStatus()
    {
        return $this->LockStatus;
    }

    /**
     *是否锁定，可否配置
     *
     * Generated from protobuf field <code>string LockStatus = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setLockStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->LockStatus = $var;

        return $this;
    }

    /**
     *在CDN侧是否启用停用
     *
     * Generated from protobuf field <code>string CDNStatus = 12;</code>
     * @return string
     */
    public function getCDNStatus()
    {
        return $this->CDNStatus;
    }

    /**
     *在CDN侧是否启用停用
     *
     * Generated from protobuf field <code>string CDNStatus = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setCDNStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->CDNStatus = $var;

        return $this;
    }

}

