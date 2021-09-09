<?php
/**
 * BindcardRequestOpenAuthBindCardResponseDTOResult
 * PHP version 5
 * @author   Swagger Codegen team
 * @package  Yeepay\Yop\Sdk\
 * @category Class
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 前置收银台
 * <p>前置收银台</p>
 * OpenAPI spec version: 1.0.0
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * BindcardRequestOpenAuthBindCardResponseDTOResult Class Doc Comment
 * @author   Swagger Codegen team
 * @package  Yeepay\Yop\Sdk\
 * @category Class
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BindcardRequestOpenAuthBindCardResponseDTOResult implements ModelInterface, ArrayAccess
{

    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'BindcardRequestOpenAuthBindCardResponseDTOResult';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'code'             => 'string',
        'message'          => 'string',
        'parentMerchantNo' => 'string',
        'merchantNo'       => 'string',
        'merchantFlowId'   => 'string',
        'nopOrderId'       => 'string',
        'bindId'           => 'string',
        'signStatus'       => 'string',
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
        'merchantFlowId'   => null,
        'nopOrderId'       => null,
        'bindId'           => null,
        'signStatus'       => null,
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
        'merchantFlowId'   => 'merchantFlowId',
        'nopOrderId'       => 'nopOrderId',
        'bindId'           => 'bindId',
        'signStatus'       => 'signStatus',
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
        'merchantFlowId'   => 'setMerchantFlowId',
        'nopOrderId'       => 'setNopOrderId',
        'bindId'           => 'setBindId',
        'signStatus'       => 'setSignStatus',
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
        'merchantFlowId'   => 'getMerchantFlowId',
        'nopOrderId'       => 'getNopOrderId',
        'bindId'           => 'getBindId',
        'signStatus'       => 'getSignStatus',
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
        $this->container['merchantFlowId']   = isset($data['merchantFlowId']) ? $data['merchantFlowId'] : null;
        $this->container['nopOrderId']       = isset($data['nopOrderId']) ? $data['nopOrderId'] : null;
        $this->container['bindId']           = isset($data['bindId']) ? $data['bindId'] : null;
        $this->container['signStatus']       = isset($data['signStatus']) ? $data['signStatus'] : null;
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
     * @param  string  $message  返回信息
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets parentMerchantNo
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->container['parentMerchantNo'];
    }

    /**
     * Sets parentMerchantNo
     * @param  string  $parentMerchantNo  主商户编号
     * @return $this
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->container['parentMerchantNo'] = $parentMerchantNo;

        return $this;
    }

    /**
     * Gets merchantNo
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->container['merchantNo'];
    }

    /**
     * Sets merchantNo
     * @param  string  $merchantNo  商户编号
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets merchantFlowId
     * @return string
     */
    public function getMerchantFlowId()
    {
        return $this->container['merchantFlowId'];
    }

    /**
     * Sets merchantFlowId
     * @param  string  $merchantFlowId  绑卡请求号
     * @return $this
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->container['merchantFlowId'] = $merchantFlowId;

        return $this;
    }

    /**
     * Gets nopOrderId
     * @return string
     */
    public function getNopOrderId()
    {
        return $this->container['nopOrderId'];
    }

    /**
     * Sets nopOrderId
     * @param  string  $nopOrderId  易宝绑卡流水号
     * @return $this
     */
    public function setNopOrderId($nopOrderId)
    {
        $this->container['nopOrderId'] = $nopOrderId;

        return $this;
    }

    /**
     * Gets bindId
     * @return string
     */
    public function getBindId()
    {
        return $this->container['bindId'];
    }

    /**
     * Sets bindId
     * @param  string  $bindId  绑卡ID
     * @return $this
     */
    public function setBindId($bindId)
    {
        $this->container['bindId'] = $bindId;

        return $this;
    }

    /**
     * Gets signStatus
     * @return string
     */
    public function getSignStatus()
    {
        return $this->container['signStatus'];
    }

    /**
     * Sets signStatus
     * @param  string  $signStatus  签约状态
     * @return $this
     */
    public function setSignStatus($signStatus)
    {
        $this->container['signStatus'] = $signStatus;

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


