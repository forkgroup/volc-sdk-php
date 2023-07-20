<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_play.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodGetPlayInfoWithLiveTimeShiftSceneResult</code>
 */
class VodGetPlayInfoWithLiveTimeShiftSceneResult extends \Google\Protobuf\Internal\Message
{
    /**
     * 播放信息列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodPlayInfoWithLiveTimeShiftScene PlayInfoList = 1;</code>
     */
    private $PlayInfoList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Business\VodPlayInfoWithLiveTimeShiftScene[]|\Google\Protobuf\Internal\RepeatedField $PlayInfoList
     *           播放信息列表
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodPlay::initOnce();
        parent::__construct($data);
    }

    /**
     * 播放信息列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodPlayInfoWithLiveTimeShiftScene PlayInfoList = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlayInfoList()
    {
        return $this->PlayInfoList;
    }

    /**
     * 播放信息列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodPlayInfoWithLiveTimeShiftScene PlayInfoList = 1;</code>
     * @param \Volc\Service\Vod\Models\Business\VodPlayInfoWithLiveTimeShiftScene[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlayInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodPlayInfoWithLiveTimeShiftScene::class);
        $this->PlayInfoList = $arr;

        return $this;
    }

}

