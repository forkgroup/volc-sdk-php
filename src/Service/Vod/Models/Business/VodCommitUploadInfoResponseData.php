<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_upload.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodCommitUploadInfoResponseData</code>
 */
class VodCommitUploadInfoResponseData extends \Google\Protobuf\Internal\Message
{
    /**
     * 视频的 id 
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     */
    protected $Vid = '';
    /**
     * 视频的元信息 
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodSourceInfo SourceInfo = 2;</code>
     */
    protected $SourceInfo = null;
    /**
     * 视频的封面图 URI 
     *
     * Generated from protobuf field <code>string PosterUri = 3;</code>
     */
    protected $PosterUri = '';
    /**
     * 视频透传业务的参数 
     *
     * Generated from protobuf field <code>string CallbackArgs = 4;</code>
     */
    protected $CallbackArgs = '';
    /**
     * 素材 id 
     *
     * Generated from protobuf field <code>string Mid = 5;</code>
     */
    protected $Mid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vid
     *           视频的 id 
     *     @type \Volc\Service\Vod\Models\Business\VodSourceInfo $SourceInfo
     *           视频的元信息 
     *     @type string $PosterUri
     *           视频的封面图 URI 
     *     @type string $CallbackArgs
     *           视频透传业务的参数 
     *     @type string $Mid
     *           素材 id 
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * 视频的 id 
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     * 视频的 id 
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
     * 视频的元信息 
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodSourceInfo SourceInfo = 2;</code>
     * @return \Volc\Service\Vod\Models\Business\VodSourceInfo|null
     */
    public function getSourceInfo()
    {
        return $this->SourceInfo;
    }

    public function hasSourceInfo()
    {
        return isset($this->SourceInfo);
    }

    public function clearSourceInfo()
    {
        unset($this->SourceInfo);
    }

    /**
     * 视频的元信息 
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodSourceInfo SourceInfo = 2;</code>
     * @param \Volc\Service\Vod\Models\Business\VodSourceInfo $var
     * @return $this
     */
    public function setSourceInfo($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\VodSourceInfo::class);
        $this->SourceInfo = $var;

        return $this;
    }

    /**
     * 视频的封面图 URI 
     *
     * Generated from protobuf field <code>string PosterUri = 3;</code>
     * @return string
     */
    public function getPosterUri()
    {
        return $this->PosterUri;
    }

    /**
     * 视频的封面图 URI 
     *
     * Generated from protobuf field <code>string PosterUri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPosterUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->PosterUri = $var;

        return $this;
    }

    /**
     * 视频透传业务的参数 
     *
     * Generated from protobuf field <code>string CallbackArgs = 4;</code>
     * @return string
     */
    public function getCallbackArgs()
    {
        return $this->CallbackArgs;
    }

    /**
     * 视频透传业务的参数 
     *
     * Generated from protobuf field <code>string CallbackArgs = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackArgs($var)
    {
        GPBUtil::checkString($var, True);
        $this->CallbackArgs = $var;

        return $this;
    }

    /**
     * 素材 id 
     *
     * Generated from protobuf field <code>string Mid = 5;</code>
     * @return string
     */
    public function getMid()
    {
        return $this->Mid;
    }

    /**
     * 素材 id 
     *
     * Generated from protobuf field <code>string Mid = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Mid = $var;

        return $this;
    }

}

