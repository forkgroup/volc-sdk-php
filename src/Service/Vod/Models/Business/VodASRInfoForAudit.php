<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodASRInfoForAudit</code>
 */
class VodASRInfoForAudit extends \Google\Protobuf\Internal\Message
{
    /**
     * 识别的语音文本
     *
     * Generated from protobuf field <code>string Text = 1;</code>
     */
    protected $Text = '';
    /**
     * 识别结果语音分句信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodASRUtteranceForAudit Utterances = 3;</code>
     */
    private $Utterances;
    /**
     * 整个音频对应的语言
     *
     * Generated from protobuf field <code>string Language = 4;</code>
     */
    protected $Language = '';
    /**
     * 语言的详情，描述每个语言的概率
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodASRLanguageDetailForAudit LanguageDetails = 5;</code>
     */
    private $LanguageDetails;
    /**
     *语速，即一秒钟几个字
     *
     * Generated from protobuf field <code>double SpeechRate = 6;</code>
     */
    protected $SpeechRate = 0.0;
    /**
     *音量
     *
     * Generated from protobuf field <code>double Volume = 7;</code>
     */
    protected $Volume = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Text
     *           识别的语音文本
     *     @type \Volc\Service\Vod\Models\Business\VodASRUtteranceForAudit[]|\Google\Protobuf\Internal\RepeatedField $Utterances
     *           识别结果语音分句信息
     *     @type string $Language
     *           整个音频对应的语言
     *     @type \Volc\Service\Vod\Models\Business\VodASRLanguageDetailForAudit[]|\Google\Protobuf\Internal\RepeatedField $LanguageDetails
     *           语言的详情，描述每个语言的概率
     *     @type float $SpeechRate
     *          语速，即一秒钟几个字
     *     @type float $Volume
     *          音量
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     * 识别的语音文本
     *
     * Generated from protobuf field <code>string Text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * 识别的语音文本
     *
     * Generated from protobuf field <code>string Text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->Text = $var;

        return $this;
    }

    /**
     * 识别结果语音分句信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodASRUtteranceForAudit Utterances = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUtterances()
    {
        return $this->Utterances;
    }

    /**
     * 识别结果语音分句信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodASRUtteranceForAudit Utterances = 3;</code>
     * @param \Volc\Service\Vod\Models\Business\VodASRUtteranceForAudit[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUtterances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodASRUtteranceForAudit::class);
        $this->Utterances = $arr;

        return $this;
    }

    /**
     * 整个音频对应的语言
     *
     * Generated from protobuf field <code>string Language = 4;</code>
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * 整个音频对应的语言
     *
     * Generated from protobuf field <code>string Language = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->Language = $var;

        return $this;
    }

    /**
     * 语言的详情，描述每个语言的概率
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodASRLanguageDetailForAudit LanguageDetails = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLanguageDetails()
    {
        return $this->LanguageDetails;
    }

    /**
     * 语言的详情，描述每个语言的概率
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodASRLanguageDetailForAudit LanguageDetails = 5;</code>
     * @param \Volc\Service\Vod\Models\Business\VodASRLanguageDetailForAudit[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLanguageDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodASRLanguageDetailForAudit::class);
        $this->LanguageDetails = $arr;

        return $this;
    }

    /**
     *语速，即一秒钟几个字
     *
     * Generated from protobuf field <code>double SpeechRate = 6;</code>
     * @return float
     */
    public function getSpeechRate()
    {
        return $this->SpeechRate;
    }

    /**
     *语速，即一秒钟几个字
     *
     * Generated from protobuf field <code>double SpeechRate = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setSpeechRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->SpeechRate = $var;

        return $this;
    }

    /**
     *音量
     *
     * Generated from protobuf field <code>double Volume = 7;</code>
     * @return float
     */
    public function getVolume()
    {
        return $this->Volume;
    }

    /**
     *音量
     *
     * Generated from protobuf field <code>double Volume = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setVolume($var)
    {
        GPBUtil::checkDouble($var);
        $this->Volume = $var;

        return $this;
    }

}

