<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodGetPlayInfoRequest</code>
 */
class VodGetPlayInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 视频ID 
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     */
    protected $Vid = '';
    /**
     * 封装格式，支持 mp4、dash、hls、mp3、m4a、ogg, 默认mp4 
     *
     * Generated from protobuf field <code>string Format = 2;</code>
     */
    protected $Format = '';
    /**
     * 编码格式，支持 mp3、aac、opus、H264、H265、H266, 视频默认H264，音频默认aac
     *
     * Generated from protobuf field <code>string Codec = 3;</code>
     */
    protected $Codec = '';
    /**
     * 视频流清晰度，支持：240p,360p,480p,540p,720p,1080p,2k,4k,od,oe.默认返回全部
     *
     * Generated from protobuf field <code>string Definition = 4;</code>
     */
    protected $Definition = '';
    /**
     * 流文件类型,支持:
     * 加密视频流evideo，加密音频流传eaudio,非加密视频流video,普通音频音频流audio.默认video
     *
     * Generated from protobuf field <code>string FileType = 5;</code>
     */
    protected $FileType = '';
    /**
     * 水印贴片标签 
     *
     * Generated from protobuf field <code>string LogoType = 6;</code>
     */
    protected $LogoType = '';
    /**
     * 播放地址是否base64编码，默认否，支持设置： 0-否，1-是 
     *
     * Generated from protobuf field <code>string Base64 = 7;</code>
     */
    protected $Base64 = '';
    /**
     * 返回https播放地址，默认否, 1-是；0-否 
     *
     * Generated from protobuf field <code>string Ssl = 8;</code>
     */
    protected $Ssl = '';
    /**
     * 是否需要雪碧图（缩略图），默认否，1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedThumbs = 9;</code>
     */
    protected $NeedThumbs = '';
    /**
     * 是否需要蒙版弹幕，默认否，1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedBarrageMask = 10;</code>
     */
    protected $NeedBarrageMask = '';
    /**
     * 指定CDN类型, 默认不传为普通CDN, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string CdnType = 11;</code>
     */
    protected $CdnType = '';
    /**
     * 唯一性标识信息, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string UnionInfo = 12;</code>
     */
    protected $UnionInfo = '';
    /**
     * HDR清晰度，默认不查询，支持：all, 240p, 360p, 420p, 480p, 540p, 720p,
     * 1080p, 2k, 4k 
     *
     * Generated from protobuf field <code>string HDRDefinition = 13;</code>
     */
    protected $HDRDefinition = '';
    /**
     * 播放场景，指定获取对应场景的音视频流。当前支持：preview-试看 
     *
     * Generated from protobuf field <code>string PlayScene = 14;</code>
     */
    protected $PlayScene = '';
    /**
     * DRM过期时间戳, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string DrmExpireTimestamp = 15;</code>
     */
    protected $DrmExpireTimestamp = '';
    /**
     * 音频音质。当FileType为audio和eaudio时起作用,表示音频音质参数.支持: medium,
     * higher, highest.默认返回所有音频流
     *
     * Generated from protobuf field <code>string Quality = 16;</code>
     */
    protected $Quality = '';
    /**
     *播放配置,可指定播放域名
     *
     * Generated from protobuf field <code>string PlayConfig = 17;</code>
     */
    protected $PlayConfig = '';
    /**
     *控制是否需要将原片信息置于 VideoInfos 中
     *
     * Generated from protobuf field <code>string NeedOriginal = 18;</code>
     */
    protected $NeedOriginal = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vid
     *           视频ID 
     *     @type string $Format
     *           封装格式，支持 mp4、dash、hls、mp3、m4a、ogg, 默认mp4 
     *     @type string $Codec
     *           编码格式，支持 mp3、aac、opus、H264、H265、H266, 视频默认H264，音频默认aac
     *     @type string $Definition
     *           视频流清晰度，支持：240p,360p,480p,540p,720p,1080p,2k,4k,od,oe.默认返回全部
     *     @type string $FileType
     *           流文件类型,支持:
     *           加密视频流evideo，加密音频流传eaudio,非加密视频流video,普通音频音频流audio.默认video
     *     @type string $LogoType
     *           水印贴片标签 
     *     @type string $Base64
     *           播放地址是否base64编码，默认否，支持设置： 0-否，1-是 
     *     @type string $Ssl
     *           返回https播放地址，默认否, 1-是；0-否 
     *     @type string $NeedThumbs
     *           是否需要雪碧图（缩略图），默认否，1-是；0-否 
     *     @type string $NeedBarrageMask
     *           是否需要蒙版弹幕，默认否，1-是；0-否 
     *     @type string $CdnType
     *           指定CDN类型, 默认不传为普通CDN, 若需使用请联系技术支持 
     *     @type string $UnionInfo
     *           唯一性标识信息, 若需使用请联系技术支持 
     *     @type string $HDRDefinition
     *           HDR清晰度，默认不查询，支持：all, 240p, 360p, 420p, 480p, 540p, 720p,
     *           1080p, 2k, 4k 
     *     @type string $PlayScene
     *           播放场景，指定获取对应场景的音视频流。当前支持：preview-试看 
     *     @type string $DrmExpireTimestamp
     *           DRM过期时间戳, 若需使用请联系技术支持 
     *     @type string $Quality
     *           音频音质。当FileType为audio和eaudio时起作用,表示音频音质参数.支持: medium,
     *           higher, highest.默认返回所有音频流
     *     @type string $PlayConfig
     *          播放配置,可指定播放域名
     *     @type string $NeedOriginal
     *          控制是否需要将原片信息置于 VideoInfos 中
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 视频ID 
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     * 视频ID 
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vid = $var;

        return $this;
    }

    /**
     * 封装格式，支持 mp4、dash、hls、mp3、m4a、ogg, 默认mp4 
     *
     * Generated from protobuf field <code>string Format = 2;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * 封装格式，支持 mp4、dash、hls、mp3、m4a、ogg, 默认mp4 
     *
     * Generated from protobuf field <code>string Format = 2;</code>
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
     * 编码格式，支持 mp3、aac、opus、H264、H265、H266, 视频默认H264，音频默认aac
     *
     * Generated from protobuf field <code>string Codec = 3;</code>
     * @return string
     */
    public function getCodec()
    {
        return $this->Codec;
    }

    /**
     * 编码格式，支持 mp3、aac、opus、H264、H265、H266, 视频默认H264，音频默认aac
     *
     * Generated from protobuf field <code>string Codec = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkString($var, True);
        $this->Codec = $var;

        return $this;
    }

    /**
     * 视频流清晰度，支持：240p,360p,480p,540p,720p,1080p,2k,4k,od,oe.默认返回全部
     *
     * Generated from protobuf field <code>string Definition = 4;</code>
     * @return string
     */
    public function getDefinition()
    {
        return $this->Definition;
    }

    /**
     * 视频流清晰度，支持：240p,360p,480p,540p,720p,1080p,2k,4k,od,oe.默认返回全部
     *
     * Generated from protobuf field <code>string Definition = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDefinition($var)
    {
        GPBUtil::checkString($var, True);
        $this->Definition = $var;

        return $this;
    }

    /**
     * 流文件类型,支持:
     * 加密视频流evideo，加密音频流传eaudio,非加密视频流video,普通音频音频流audio.默认video
     *
     * Generated from protobuf field <code>string FileType = 5;</code>
     * @return string
     */
    public function getFileType()
    {
        return $this->FileType;
    }

    /**
     * 流文件类型,支持:
     * 加密视频流evideo，加密音频流传eaudio,非加密视频流video,普通音频音频流audio.默认video
     *
     * Generated from protobuf field <code>string FileType = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileType = $var;

        return $this;
    }

    /**
     * 水印贴片标签 
     *
     * Generated from protobuf field <code>string LogoType = 6;</code>
     * @return string
     */
    public function getLogoType()
    {
        return $this->LogoType;
    }

    /**
     * 水印贴片标签 
     *
     * Generated from protobuf field <code>string LogoType = 6;</code>
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
     * 播放地址是否base64编码，默认否，支持设置： 0-否，1-是 
     *
     * Generated from protobuf field <code>string Base64 = 7;</code>
     * @return string
     */
    public function getBase64()
    {
        return $this->Base64;
    }

    /**
     * 播放地址是否base64编码，默认否，支持设置： 0-否，1-是 
     *
     * Generated from protobuf field <code>string Base64 = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setBase64($var)
    {
        GPBUtil::checkString($var, True);
        $this->Base64 = $var;

        return $this;
    }

    /**
     * 返回https播放地址，默认否, 1-是；0-否 
     *
     * Generated from protobuf field <code>string Ssl = 8;</code>
     * @return string
     */
    public function getSsl()
    {
        return $this->Ssl;
    }

    /**
     * 返回https播放地址，默认否, 1-是；0-否 
     *
     * Generated from protobuf field <code>string Ssl = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSsl($var)
    {
        GPBUtil::checkString($var, True);
        $this->Ssl = $var;

        return $this;
    }

    /**
     * 是否需要雪碧图（缩略图），默认否，1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedThumbs = 9;</code>
     * @return string
     */
    public function getNeedThumbs()
    {
        return $this->NeedThumbs;
    }

    /**
     * 是否需要雪碧图（缩略图），默认否，1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedThumbs = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setNeedThumbs($var)
    {
        GPBUtil::checkString($var, True);
        $this->NeedThumbs = $var;

        return $this;
    }

    /**
     * 是否需要蒙版弹幕，默认否，1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedBarrageMask = 10;</code>
     * @return string
     */
    public function getNeedBarrageMask()
    {
        return $this->NeedBarrageMask;
    }

    /**
     * 是否需要蒙版弹幕，默认否，1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedBarrageMask = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setNeedBarrageMask($var)
    {
        GPBUtil::checkString($var, True);
        $this->NeedBarrageMask = $var;

        return $this;
    }

    /**
     * 指定CDN类型, 默认不传为普通CDN, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string CdnType = 11;</code>
     * @return string
     */
    public function getCdnType()
    {
        return $this->CdnType;
    }

    /**
     * 指定CDN类型, 默认不传为普通CDN, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string CdnType = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setCdnType($var)
    {
        GPBUtil::checkString($var, True);
        $this->CdnType = $var;

        return $this;
    }

    /**
     * 唯一性标识信息, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string UnionInfo = 12;</code>
     * @return string
     */
    public function getUnionInfo()
    {
        return $this->UnionInfo;
    }

    /**
     * 唯一性标识信息, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string UnionInfo = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setUnionInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->UnionInfo = $var;

        return $this;
    }

    /**
     * HDR清晰度，默认不查询，支持：all, 240p, 360p, 420p, 480p, 540p, 720p,
     * 1080p, 2k, 4k 
     *
     * Generated from protobuf field <code>string HDRDefinition = 13;</code>
     * @return string
     */
    public function getHDRDefinition()
    {
        return $this->HDRDefinition;
    }

    /**
     * HDR清晰度，默认不查询，支持：all, 240p, 360p, 420p, 480p, 540p, 720p,
     * 1080p, 2k, 4k 
     *
     * Generated from protobuf field <code>string HDRDefinition = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setHDRDefinition($var)
    {
        GPBUtil::checkString($var, True);
        $this->HDRDefinition = $var;

        return $this;
    }

    /**
     * 播放场景，指定获取对应场景的音视频流。当前支持：preview-试看 
     *
     * Generated from protobuf field <code>string PlayScene = 14;</code>
     * @return string
     */
    public function getPlayScene()
    {
        return $this->PlayScene;
    }

    /**
     * 播放场景，指定获取对应场景的音视频流。当前支持：preview-试看 
     *
     * Generated from protobuf field <code>string PlayScene = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setPlayScene($var)
    {
        GPBUtil::checkString($var, True);
        $this->PlayScene = $var;

        return $this;
    }

    /**
     * DRM过期时间戳, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string DrmExpireTimestamp = 15;</code>
     * @return string
     */
    public function getDrmExpireTimestamp()
    {
        return $this->DrmExpireTimestamp;
    }

    /**
     * DRM过期时间戳, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string DrmExpireTimestamp = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setDrmExpireTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->DrmExpireTimestamp = $var;

        return $this;
    }

    /**
     * 音频音质。当FileType为audio和eaudio时起作用,表示音频音质参数.支持: medium,
     * higher, highest.默认返回所有音频流
     *
     * Generated from protobuf field <code>string Quality = 16;</code>
     * @return string
     */
    public function getQuality()
    {
        return $this->Quality;
    }

    /**
     * 音频音质。当FileType为audio和eaudio时起作用,表示音频音质参数.支持: medium,
     * higher, highest.默认返回所有音频流
     *
     * Generated from protobuf field <code>string Quality = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setQuality($var)
    {
        GPBUtil::checkString($var, True);
        $this->Quality = $var;

        return $this;
    }

    /**
     *播放配置,可指定播放域名
     *
     * Generated from protobuf field <code>string PlayConfig = 17;</code>
     * @return string
     */
    public function getPlayConfig()
    {
        return $this->PlayConfig;
    }

    /**
     *播放配置,可指定播放域名
     *
     * Generated from protobuf field <code>string PlayConfig = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setPlayConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->PlayConfig = $var;

        return $this;
    }

    /**
     *控制是否需要将原片信息置于 VideoInfos 中
     *
     * Generated from protobuf field <code>string NeedOriginal = 18;</code>
     * @return string
     */
    public function getNeedOriginal()
    {
        return $this->NeedOriginal;
    }

    /**
     *控制是否需要将原片信息置于 VideoInfos 中
     *
     * Generated from protobuf field <code>string NeedOriginal = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setNeedOriginal($var)
    {
        GPBUtil::checkString($var, True);
        $this->NeedOriginal = $var;

        return $this;
    }

}

