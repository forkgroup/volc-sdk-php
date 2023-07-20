<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.DirectUrl</code>
 */
class DirectUrl extends \Google\Protobuf\Internal\Message
{
    /**
     * 文件名
     *
     * Generated from protobuf field <code>string FileName = 1;</code>
     */
    protected $FileName = '';
    /**
     * Bucket名称
     *
     * Generated from protobuf field <code>string BucketName = 2;</code>
     */
    protected $BucketName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $FileName
     *           文件名
     *     @type string $BucketName
     *           Bucket名称
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 文件名
     *
     * Generated from protobuf field <code>string FileName = 1;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * 文件名
     *
     * Generated from protobuf field <code>string FileName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileName = $var;

        return $this;
    }

    /**
     * Bucket名称
     *
     * Generated from protobuf field <code>string BucketName = 2;</code>
     * @return string
     */
    public function getBucketName()
    {
        return $this->BucketName;
    }

    /**
     * Bucket名称
     *
     * Generated from protobuf field <code>string BucketName = 2;</code>
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

