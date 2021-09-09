<?php
/**
 * RecordsQuerySettleRecordDetailsDtoResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 商户结算2.0
 *
 * <p><a href=\"http://wiki.yeepay.com/pages/viewpage.action?pageId=112010456\">http://wiki.yeepay.com/pages/viewpage.action?pageId=112010456</a></p>
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * RecordsQuerySettleRecordDetailsDtoResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecordsQuerySettleRecordDetailsDtoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RecordsQuerySettleRecordDetailsDtoResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountNo' => 'string',
        'realAmount' => 'float',
        'status' => 'string',
        'statusDesc' => 'string',
        'errorCode' => 'string',
        'errorMessage' => 'string',
        'correct' => 'bool',
        'channelRequestNo' => 'string',
        'accountType' => 'string',
        'accountTypeDesc' => 'string',
        'accountNameMast' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountNo' => null,
        'realAmount' => null,
        'status' => null,
        'statusDesc' => null,
        'errorCode' => null,
        'errorMessage' => null,
        'correct' => null,
        'channelRequestNo' => null,
        'accountType' => null,
        'accountTypeDesc' => null,
        'accountNameMast' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'accountNo' => 'accountNo',
        'realAmount' => 'realAmount',
        'status' => 'status',
        'statusDesc' => 'statusDesc',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'correct' => 'correct',
        'channelRequestNo' => 'channelRequestNo',
        'accountType' => 'accountType',
        'accountTypeDesc' => 'accountTypeDesc',
        'accountNameMast' => 'accountNameMast'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountNo' => 'setAccountNo',
        'realAmount' => 'setRealAmount',
        'status' => 'setStatus',
        'statusDesc' => 'setStatusDesc',
        'errorCode' => 'setErrorCode',
        'errorMessage' => 'setErrorMessage',
        'correct' => 'setCorrect',
        'channelRequestNo' => 'setChannelRequestNo',
        'accountType' => 'setAccountType',
        'accountTypeDesc' => 'setAccountTypeDesc',
        'accountNameMast' => 'setAccountNameMast'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountNo' => 'getAccountNo',
        'realAmount' => 'getRealAmount',
        'status' => 'getStatus',
        'statusDesc' => 'getStatusDesc',
        'errorCode' => 'getErrorCode',
        'errorMessage' => 'getErrorMessage',
        'correct' => 'getCorrect',
        'channelRequestNo' => 'getChannelRequestNo',
        'accountType' => 'getAccountType',
        'accountTypeDesc' => 'getAccountTypeDesc',
        'accountNameMast' => 'getAccountNameMast'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['accountNo'] = isset($data['accountNo']) ? $data['accountNo'] : null;
        $this->container['realAmount'] = isset($data['realAmount']) ? $data['realAmount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusDesc'] = isset($data['statusDesc']) ? $data['statusDesc'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['correct'] = isset($data['correct']) ? $data['correct'] : null;
        $this->container['channelRequestNo'] = isset($data['channelRequestNo']) ? $data['channelRequestNo'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
        $this->container['accountTypeDesc'] = isset($data['accountTypeDesc']) ? $data['accountTypeDesc'] : null;
        $this->container['accountNameMast'] = isset($data['accountNameMast']) ? $data['accountNameMast'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
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
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets accountNo
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->container['accountNo'];
    }

    /**
     * Sets accountNo
     *
     * @param string $accountNo 账号
     *
     * @return $this
     */
    public function setAccountNo($accountNo)
    {
        $this->container['accountNo'] = $accountNo;

        return $this;
    }

    /**
     * Gets realAmount
     *
     * @return float
     */
    public function getRealAmount()
    {
        return $this->container['realAmount'];
    }

    /**
     * Sets realAmount
     *
     * @param float $realAmount 到账金额
     *
     * @return $this
     */
    public function setRealAmount($realAmount)
    {
        $this->container['realAmount'] = $realAmount;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status 到账状态
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets statusDesc
     *
     * @return string
     */
    public function getStatusDesc()
    {
        return $this->container['statusDesc'];
    }

    /**
     * Sets statusDesc
     *
     * @param string $statusDesc 到账状态描述
     *
     * @return $this
     */
    public function setStatusDesc($statusDesc)
    {
        $this->container['statusDesc'] = $statusDesc;

        return $this;
    }

    /**
     * Gets errorCode
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     *
     * @param string $errorCode 错误码
     *
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;

        return $this;
    }

    /**
     * Gets errorMessage
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
     * Sets errorMessage
     *
     * @param string $errorMessage 错误信息
     *
     * @return $this
     */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;

        return $this;
    }

    /**
     * Gets correct
     *
     * @return bool
     */
    public function getCorrect()
    {
        return $this->container['correct'];
    }

    /**
     * Sets correct
     *
     * @param bool $correct 是否冲退
     *
     * @return $this
     */
    public function setCorrect($correct)
    {
        $this->container['correct'] = $correct;

        return $this;
    }

    /**
     * Gets channelRequestNo
     *
     * @return string
     */
    public function getChannelRequestNo()
    {
        return $this->container['channelRequestNo'];
    }

    /**
     * Sets channelRequestNo
     *
     * @param string $channelRequestNo 出款流水号
     *
     * @return $this
     */
    public function setChannelRequestNo($channelRequestNo)
    {
        $this->container['channelRequestNo'] = $channelRequestNo;

        return $this;
    }

    /**
     * Gets accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
     * Sets accountType
     *
     * @param string $accountType 账户类型
     *
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;

        return $this;
    }

    /**
     * Gets accountTypeDesc
     *
     * @return string
     */
    public function getAccountTypeDesc()
    {
        return $this->container['accountTypeDesc'];
    }

    /**
     * Sets accountTypeDesc
     *
     * @param string $accountTypeDesc 账户类型描述
     *
     * @return $this
     */
    public function setAccountTypeDesc($accountTypeDesc)
    {
        $this->container['accountTypeDesc'] = $accountTypeDesc;

        return $this;
    }

    /**
     * Gets accountNameMast
     *
     * @return string
     */
    public function getAccountNameMast()
    {
        return $this->container['accountNameMast'];
    }

    /**
     * Sets accountNameMast
     *
     * @param string $accountNameMast 账户名
     *
     * @return $this
     */
    public function setAccountNameMast($accountNameMast)
    {
        $this->container['accountNameMast'] = $accountNameMast;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
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


