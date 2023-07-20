<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodCreateWatermarkRequest</code>
 */
class VodCreateWatermarkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 模板名称 
     *
     * Generated from protobuf field <code>string Name = 2;</code>
     */
    protected $Name = '';
    /**
     * 模板描述 
     *
     * Generated from protobuf field <code>string Description = 3;</code>
     */
    protected $Description = '';
    /**
     * 水印播放标签 
     *
     * Generated from protobuf field <code>string LogoType = 7;</code>
     */
    protected $LogoType = '';
    /**
     * 明水印 
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.AdaptLogo Logos = 8;</code>
     */
    private $Logos;
    /**
     * 贴片 
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.AdaptConcat Concats = 9;</code>
     */
    private $Concats;
    /**
     * 暗水印 
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.HiddenWatermarkAdd HiddenWatermark = 10;</code>
     */
    protected $HiddenWatermark = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           空间名 
     *     @type string $Name
     *           模板名称 
     *     @type string $Description
     *           模板描述 
     *     @type string $LogoType
     *           水印播放标签 
     *     @type \Volc\Service\Vod\Models\Business\AdaptLogo[]|\Google\Protobuf\Internal\RepeatedField $Logos
     *           明水印 
     *     @type \Volc\Service\Vod\Models\Business\AdaptConcat[]|\Google\Protobuf\Internal\RepeatedField $Concats
     *           贴片 
     *     @type \Volc\Service\Vod\Models\Business\HiddenWatermarkAdd $HiddenWatermark
     *           暗水印 
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 空间名 
     *
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
     * 模板名称 
     *
     * Generated from protobuf field <code>string Name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * 模板名称 
     *
     * Generated from protobuf field <code>string Name = 2;</code>
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
     * 模板描述 
     *
     * Generated from protobuf field <code>string Description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * 模板描述 
     *
     * Generated from protobuf field <code>string Description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->Description = $var;

        return $this;
    }

    /**
     * 水印播放标签 
     *
     * Generated from protobuf field <code>string LogoType = 7;</code>
     * @return string
     */
    public function getLogoType()
    {
        return $this->LogoType;
    }

    /**
     * 水印播放标签 
     *
     * Generated from protobuf field <code>string LogoType = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setLogoType($var)
    {
        GPBUtil::checkString($var, True);
        $this->LogoType = $var;

        return $this;
    }

    /**
     * 明水印 
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.AdaptLogo Logos = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogos()
    {
        return $this->Logos;
    }

    /**
     * 明水印 
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.AdaptLogo Logos = 8;</code>
     * @param \Volc\Service\Vod\Models\Business\AdaptLogo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\AdaptLogo::class);
        $this->Logos = $arr;

        return $this;
    }

    /**
     * 贴片 
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.AdaptConcat Concats = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConcats()
    {
        return $this->Concats;
    }

    /**
     * 贴片 
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.AdaptConcat Concats = 9;</code>
     * @param \Volc\Service\Vod\Models\Business\AdaptConcat[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConcats($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\AdaptConcat::class);
        $this->Concats = $arr;

        return $this;
    }

    /**
     * 暗水印 
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.HiddenWatermarkAdd HiddenWatermark = 10;</code>
     * @return \Volc\Service\Vod\Models\Business\HiddenWatermarkAdd|null
     */
    public function getHiddenWatermark()
    {
        return $this->HiddenWatermark;
    }

    public function hasHiddenWatermark()
    {
        return isset($this->HiddenWatermark);
    }

    public function clearHiddenWatermark()
    {
        unset($this->HiddenWatermark);
    }

    /**
     * 暗水印 
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.HiddenWatermarkAdd HiddenWatermark = 10;</code>
     * @param \Volc\Service\Vod\Models\Business\HiddenWatermarkAdd $var
     * @return $this
     */
    public function setHiddenWatermark($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\HiddenWatermarkAdd::class);
        $this->HiddenWatermark = $var;

        return $this;
    }

}

