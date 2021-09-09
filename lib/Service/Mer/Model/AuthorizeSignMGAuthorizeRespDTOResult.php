<?php
/**
 * AuthorizeSignMGAuthorizeRespDTOResult
 * PHP version 5
 * @author   Swagger Codegen team
 * @package  Yeepay\Yop\Sdk\
 * @category Class
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 子商户管理
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 * OpenAPI spec version: 1.0.0
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * AuthorizeSignMGAuthorizeRespDTOResult Class Doc Comment
 * @author   Swagger Codegen team
 * @package  Yeepay\Yop\Sdk\
 * @category Class
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthorizeSignMGAuthorizeRespDTOResult implements ModelInterface, ArrayAccess
{

    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'AuthorizeSignMGAuthorizeRespDTOResult';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'code'                => 'string',
        'message'             => 'string',
        'authorizeMerchantNo' => 'string',
        'status'              => 'string',
        'orderNo'             => 'string',
        'bizType'             => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerFormats = [
        'code'                => null,
        'message'             => null,
        'authorizeMerchantNo' => null,
        'status'              => null,
        'orderNo'             => null,
        'bizType'             => null,
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
        'code'                => 'code',
        'message'             => 'message',
        'authorizeMerchantNo' => 'authorizeMerchantNo',
        'status'              => 'status',
        'orderNo'             => 'orderNo',
        'bizType'             => 'bizType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'code'                => 'setCode',
        'message'             => 'setMessage',
        'authorizeMerchantNo' => 'setAuthorizeMerchantNo',
        'status'              => 'setStatus',
        'orderNo'             => 'setOrderNo',
        'bizType'             => 'setBizType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'code'                => 'getCode',
        'message'             => 'getMessage',
        'authorizeMerchantNo' => 'getAuthorizeMerchantNo',
        'status'              => 'getStatus',
        'orderNo'             => 'getOrderNo',
        'bizType'             => 'getBizType',
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
        $this->container['code']                = isset($data['code']) ? $data['code'] : null;
        $this->container['message']             = isset($data['message']) ? $data['message'] : null;
        $this->container['authorizeMerchantNo'] = isset($data['authorizeMerchantNo']) ? $data['authorizeMerchantNo'] : null;
        $this->container['status']              = isset($data['status']) ? $data['status'] : null;
        $this->container['orderNo']             = isset($data['orderNo']) ? $data['orderNo'] : null;
        $this->container['bizType']             = isset($data['bizType']) ? $data['bizType'] : null;
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

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param  string  $code  返回码
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param  string  $message  返回消息
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets authorizeMerchantNo
     * @return string
     */
    public function getAuthorizeMerchantNo()
    {
        return $this->container['authorizeMerchantNo'];
    }

    /**
     * Sets authorizeMerchantNo
     * @param  string  $authorizeMerchantNo  委托方商户编号
     * @return $this
     */
    public function setAuthorizeMerchantNo($authorizeMerchantNo)
    {
        $this->container['authorizeMerchantNo'] = $authorizeMerchantNo;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param  string  $status  授权状态
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets orderNo
     * @return string
     */
    public function getOrderNo()
    {
        return $this->container['orderNo'];
    }

    /**
     * Sets orderNo
     * @param  string  $orderNo  易宝授权订单号
     * @return $this
     */
    public function setOrderNo($orderNo)
    {
        $this->container['orderNo'] = $orderNo;

        return $this;
    }

    /**
     * Gets bizType
     * @return string
     */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
     * Sets bizType
     * @param  string  $bizType  授权业务类型
     * @return $this
     */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;

        return $this;
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


