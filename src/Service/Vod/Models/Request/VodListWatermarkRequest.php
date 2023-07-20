<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodListWatermarkRequest</code>
 */
class VodListWatermarkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 空间名称 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 模板ID 
     *
     * Generated from protobuf field <code>string TemplateId = 2;</code>
     */
    protected $TemplateId = '';
    /**
     * 模板名称 
     *
     * Generated from protobuf field <code>string Name = 3;</code>
     */
    protected $Name = '';
    /**
     * 模板类型 
     *
     * Generated from protobuf field <code>string Type = 5;</code>
     */
    protected $Type = '';
    /**
     * 返回个数 
     *
     * Generated from protobuf field <code>int32 Limit = 6;</code>
     */
    protected $Limit = 0;
    /**
     * 偏移量 
     *
     * Generated from protobuf field <code>int32 Offset = 7;</code>
     */
    protected $Offset = 0;
    /**
     * 排序维度 
     *
     * Generated from protobuf field <code>string OrderByKey = 8;</code>
     */
    protected $OrderByKey = '';
    /**
     * 排序方式 
     *
     * Generated from protobuf field <code>string Order = 9;</code>
     */
    protected $Order = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           空间名称 
     *     @type string $TemplateId
     *           模板ID 
     *     @type string $Name
     *           模板名称 
     *     @type string $Type
     *           模板类型 
     *     @type int $Limit
     *           返回个数 
     *     @type int $Offset
     *           偏移量 
     *     @type string $OrderByKey
     *           排序维度 
     *     @type string $Order
     *           排序方式 
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 空间名称 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 空间名称 
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
     * 模板ID 
     *
     * Generated from protobuf field <code>string TemplateId = 2;</code>
     * @return string
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }

    /**
     * 模板ID 
     *
     * Generated from protobuf field <code>string TemplateId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TemplateId = $var;

        return $this;
    }

    /**
     * 模板名称 
     *
     * Generated from protobuf field <code>string Name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * 模板名称 
     *
     * Generated from protobuf field <code>string Name = 3;</code>
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
     * 模板类型 
     *
     * Generated from protobuf field <code>string Type = 5;</code>
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * 模板类型 
     *
     * Generated from protobuf field <code>string Type = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->Type = $var;

        return $this;
    }

    /**
     * 返回个数 
     *
     * Generated from protobuf field <code>int32 Limit = 6;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * 返回个数 
     *
     * Generated from protobuf field <code>int32 Limit = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->Limit = $var;

        return $this;
    }

    /**
     * 偏移量 
     *
     * Generated from protobuf field <code>int32 Offset = 7;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * 偏移量 
     *
     * Generated from protobuf field <code>int32 Offset = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->Offset = $var;

        return $this;
    }

    /**
     * 排序维度 
     *
     * Generated from protobuf field <code>string OrderByKey = 8;</code>
     * @return string
     */
    public function getOrderByKey()
    {
        return $this->OrderByKey;
    }

    /**
     * 排序维度 
     *
     * Generated from protobuf field <code>string OrderByKey = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderByKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->OrderByKey = $var;

        return $this;
    }

    /**
     * 排序方式 
     *
     * Generated from protobuf field <code>string Order = 9;</code>
     * @return string
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     * 排序方式 
     *
     * Generated from protobuf field <code>string Order = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkString($var, True);
        $this->Order = $var;

        return $this;
    }

}

