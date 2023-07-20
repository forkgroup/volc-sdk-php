<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodDescribeIPInfoRequest</code>
 */
class VodDescribeIPInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ip，多个用逗号隔开
     *
     * Generated from protobuf field <code>string Ips = 1;</code>
     */
    protected $Ips = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Ips
     *           ip，多个用逗号隔开
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * ip，多个用逗号隔开
     *
     * Generated from protobuf field <code>string Ips = 1;</code>
     * @return string
     */
    public function getIps()
    {
        return $this->Ips;
    }

    /**
     * ip，多个用逗号隔开
     *
     * Generated from protobuf field <code>string Ips = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIps($var)
    {
        GPBUtil::checkString($var, True);
        $this->Ips = $var;

        return $this;
    }

}

