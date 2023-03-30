<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodSubmitUnblockMediaTaskRequest</code>
 */
class VodSubmitUnblockMediaTaskRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * Vid列表，以,隔开
     *
     * Generated from protobuf field <code>string Vids = 2;</code>
     */
    protected $Vids = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *          空间名
     *     @type string $Vids
     *           Vid列表，以,隔开
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     *空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     *空间名
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
     * Vid列表，以,隔开
     *
     * Generated from protobuf field <code>string Vids = 2;</code>
     * @return string
     */
    public function getVids()
    {
        return $this->Vids;
    }

    /**
     * Vid列表，以,隔开
     *
     * Generated from protobuf field <code>string Vids = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVids($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vids = $var;

        return $this;
    }

}

