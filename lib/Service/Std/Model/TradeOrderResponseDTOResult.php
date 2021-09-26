<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;

use ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

class TradeOrderResponseDTOResult implements ModelInterface, ArrayAccess
{

    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'TradeOrderResponseDTOResult';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'code'             => 'string',
        'message'          => 'string',
        'parentMerchantNo' => 'string',
        'merchantNo'       => 'string',
        'orderId'          => 'string',
        'uniqueOrderNo'    => 'string',
        'goodsParamExt'    => 'string',
        'memo'             => 'string',
        'token'            => 'string',
        'fundProcessType'  => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerFormats = [
        'code'             => null,
        'message'          => null,
        'parentMerchantNo' => null,
        'merchantNo'       => null,
        'orderId'          => null,
        'uniqueOrderNo'    => null,
        'goodsParamExt'    => null,
        'memo'             => null,
        'token'            => null,
        'fundProcessType'  => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'code'             => 'code',
        'message'          => 'message',
        'parentMerchantNo' => 'parentMerchantNo',
        'merchantNo'       => 'merchantNo',
        'orderId'          => 'orderId',
        'uniqueOrderNo'    => 'uniqueOrderNo',
        'goodsParamExt'    => 'goodsParamExt',
        'memo'             => 'memo',
        'token'            => 'token',
        'fundProcessType'  => 'fundProcessType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'code'             => 'setCode',
        'message'          => 'setMessage',
        'parentMerchantNo' => 'setParentMerchantNo',
        'merchantNo'       => 'setMerchantNo',
        'orderId'          => 'setOrderId',
        'uniqueOrderNo'    => 'setUniqueOrderNo',
        'goodsParamExt'    => 'setGoodsParamExt',
        'memo'             => 'setMemo',
        'token'            => 'setToken',
        'fundProcessType'  => 'setFundProcessType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'code'             => 'getCode',
        'message'          => 'getMessage',
        'parentMerchantNo' => 'getParentMerchantNo',
        'merchantNo'       => 'getMerchantNo',
        'orderId'          => 'getOrderId',
        'uniqueOrderNo'    => 'getUniqueOrderNo',
        'goodsParamExt'    => 'getGoodsParamExt',
        'memo'             => 'getMemo',
        'token'            => 'getToken',
        'fundProcessType'  => 'getFundProcessType',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param  mixed[]  $data  Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['code']             = isset($data['code']) ? $data['code'] : null;
        $this->container['message']          = isset($data['message']) ? $data['message'] : null;
        $this->container['parentMerchantNo'] = isset($data['parentMerchantNo']) ? $data['parentMerchantNo'] : null;
        $this->container['merchantNo']       = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['orderId']          = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['uniqueOrderNo']    = isset($data['uniqueOrderNo']) ? $data['uniqueOrderNo'] : null;
        $this->container['goodsParamExt']    = isset($data['goodsParamExt']) ? $data['goodsParamExt'] : null;
        $this->container['memo']             = isset($data['memo']) ? $data['memo'] : null;
        $this->container['token']            = isset($data['token']) ? $data['token'] : null;
        $this->container['fundProcessType']  = isset($data['fundProcessType']) ? $data['fundProcessType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    public function setCode($value = '')
    {
        $this->container['code'] = $value;

        return $this;
    }

    public function setMessage($value = '')
    {
        $this->container['message'] = $value;

        return $this;
    }

    public function setParentMerchantNo($value = '')
    {
        $this->container['parentMerchantNo'] = $value;

        return $this;
    }

    public function setMerchantNo($value = '')
    {
        $this->container['merchantNo'] = $value;

        return $this;
    }

    public function setOrderId($value = '')
    {
        $this->container['orderId'] = $value;

        return $this;
    }

    public function setUniqueOrderNo($value = '')
    {
        $this->container['uniqueOrderNo'] = $value;

        return $this;
    }

    public function setGoodsParamExt($value = '')
    {
        $this->container['goodsParamExt'] = $value;

        return $this;
    }

    public function setMemo($value = '')
    {
        $this->container['memo'] = $value;

        return $this;
    }

    public function setToken($value = '')
    {
        $this->container['token'] = $value;

        return $this;
    }

    public function setFundProcessType($value = '')
    {
        $this->container['fundProcessType'] = $value;

        return $this;
    }

    public function getCode()
    {
        return $this->container['code'] ?? '';
    }

    public function getMessage()
    {
        return $this->container['message'] ?? '';
    }

    public function getParentMerchantNo()
    {
        return $this->container['parentMerchantNo'] ?? '';
    }

    public function getMerchantNo()
    {
        return $this->container['merchantNo'] ?? '';
    }

    public function getOrderId()
    {
        return $this->container['orderId'] ?? '';
    }

    public function getUniqueOrderNo()
    {
        return $this->container['uniqueOrderNo'] ?? '';
    }

    public function getGoodsParamExt()
    {
        return $this->container['goodsParamExt'] ?? '';
    }

    public function getMemo()
    {
        return $this->container['memo'] ?? '';
    }

    public function getToken()
    {
        return $this->container['token'] ?? '';
    }

    public function getFundProcessType()
    {
        return $this->container['fundProcessType'] ?? '';
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer  $offset  Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer  $offset  Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer  $offset  Offset
     * @param  mixed  $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer  $offset  Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

}