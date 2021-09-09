<?php
/**
 * BankAccountOpenOpenAccountRespDtoResult
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
 * BankAccountOpenOpenAccountRespDtoResult Class Doc Comment
 * @author   Swagger Codegen team
 * @package  Yeepay\Yop\Sdk\
 * @category Class
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankAccountOpenOpenAccountRespDtoResult implements ModelInterface, ArrayAccess
{

    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'BankAccountOpenOpenAccountRespDtoResult';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'returnCode'        => 'string',
        'returnMsg'         => 'string',
        'applicationNo'     => 'string',
        'applicationStatus' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerFormats = [
        'returnCode'        => null,
        'returnMsg'         => null,
        'applicationNo'     => null,
        'applicationStatus' => null,
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
        'returnCode'        => 'returnCode',
        'returnMsg'         => 'returnMsg',
        'applicationNo'     => 'applicationNo',
        'applicationStatus' => 'applicationStatus',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'returnCode'        => 'setReturnCode',
        'returnMsg'         => 'setReturnMsg',
        'applicationNo'     => 'setApplicationNo',
        'applicationStatus' => 'setApplicationStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'returnCode'        => 'getReturnCode',
        'returnMsg'         => 'getReturnMsg',
        'applicationNo'     => 'getApplicationNo',
        'applicationStatus' => 'getApplicationStatus',
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
        $this->container['returnCode']        = isset($data['returnCode']) ? $data['returnCode'] : null;
        $this->container['returnMsg']         = isset($data['returnMsg']) ? $data['returnMsg'] : null;
        $this->container['applicationNo']     = isset($data['applicationNo']) ? $data['applicationNo'] : null;
        $this->container['applicationStatus'] = isset($data['applicationStatus']) ? $data['applicationStatus'] : null;
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
     * Gets returnCode
     * @return string
     */
    public function getReturnCode()
    {
        return $this->container['returnCode'];
    }

    /**
     * Sets returnCode
     * @param  string  $returnCode  响应编码
     * @return $this
     */
    public function setReturnCode($returnCode)
    {
        $this->container['returnCode'] = $returnCode;

        return $this;
    }

    /**
     * Gets returnMsg
     * @return string
     */
    public function getReturnMsg()
    {
        return $this->container['returnMsg'];
    }

    /**
     * Sets returnMsg
     * @param  string  $returnMsg  响应描述
     * @return $this
     */
    public function setReturnMsg($returnMsg)
    {
        $this->container['returnMsg'] = $returnMsg;

        return $this;
    }

    /**
     * Gets applicationNo
     * @return string
     */
    public function getApplicationNo()
    {
        return $this->container['applicationNo'];
    }

    /**
     * Sets applicationNo
     * @param  string  $applicationNo  申请单编号
     * @return $this
     */
    public function setApplicationNo($applicationNo)
    {
        $this->container['applicationNo'] = $applicationNo;

        return $this;
    }

    /**
     * Gets applicationStatus
     * @return string
     */
    public function getApplicationStatus()
    {
        return $this->container['applicationStatus'];
    }

    /**
     * Sets applicationStatus
     * @param  string  $applicationStatus  申请单状态
     * @return $this
     */
    public function setApplicationStatus($applicationStatus)
    {
        $this->container['applicationStatus'] = $applicationStatus;

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


