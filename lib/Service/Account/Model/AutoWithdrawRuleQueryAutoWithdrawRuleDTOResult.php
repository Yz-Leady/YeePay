<?php
/**
 * AutoWithdrawRuleQueryAutoWithdrawRuleDTOResult
 * PHP version 5
 * @author   Swagger Codegen team
 * @package  Yeepay\Yop\Sdk\
 * @category Class
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 账户
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

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * AutoWithdrawRuleQueryAutoWithdrawRuleDTOResult Class Doc Comment
 * @author   Swagger Codegen team
 * @package  Yeepay\Yop\Sdk\
 * @category Class
 * @description
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AutoWithdrawRuleQueryAutoWithdrawRuleDTOResult implements ModelInterface, ArrayAccess
{

    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'AutoWithdrawRuleQueryAutoWithdrawRuleDTOResult';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'ruleId'        => 'string',
        'createTime'    => 'string',
        'merchantNo'    => 'string',
        'status'        => 'string',
        'receiveType'   => 'string',
        'bindId'        => 'string',
        'bankAccountNo' => 'string',
        'triggerTime'   => 'string',
        'remainAmount'  => 'float',
        'remark'        => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerFormats = [
        'ruleId'        => null,
        'createTime'    => 'date-time',
        'merchantNo'    => null,
        'status'        => null,
        'receiveType'   => null,
        'bindId'        => null,
        'bankAccountNo' => null,
        'triggerTime'   => null,
        'remainAmount'  => null,
        'remark'        => null,
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
        'ruleId'        => 'ruleId',
        'createTime'    => 'createTime',
        'merchantNo'    => 'merchantNo',
        'status'        => 'status',
        'receiveType'   => 'receiveType',
        'bindId'        => 'bindId',
        'bankAccountNo' => 'bankAccountNo',
        'triggerTime'   => 'triggerTime',
        'remainAmount'  => 'remainAmount',
        'remark'        => 'remark',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ruleId'        => 'setRuleId',
        'createTime'    => 'setCreateTime',
        'merchantNo'    => 'setMerchantNo',
        'status'        => 'setStatus',
        'receiveType'   => 'setReceiveType',
        'bindId'        => 'setBindId',
        'bankAccountNo' => 'setBankAccountNo',
        'triggerTime'   => 'setTriggerTime',
        'remainAmount'  => 'setRemainAmount',
        'remark'        => 'setRemark',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ruleId'        => 'getRuleId',
        'createTime'    => 'getCreateTime',
        'merchantNo'    => 'getMerchantNo',
        'status'        => 'getStatus',
        'receiveType'   => 'getReceiveType',
        'bindId'        => 'getBindId',
        'bankAccountNo' => 'getBankAccountNo',
        'triggerTime'   => 'getTriggerTime',
        'remainAmount'  => 'getRemainAmount',
        'remark'        => 'getRemark',
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
        $this->container['ruleId']        = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['createTime']    = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['merchantNo']    = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['status']        = isset($data['status']) ? $data['status'] : null;
        $this->container['receiveType']   = isset($data['receiveType']) ? $data['receiveType'] : null;
        $this->container['bindId']        = isset($data['bindId']) ? $data['bindId'] : null;
        $this->container['bankAccountNo'] = isset($data['bankAccountNo']) ? $data['bankAccountNo'] : null;
        $this->container['triggerTime']   = isset($data['triggerTime']) ? $data['triggerTime'] : null;
        $this->container['remainAmount']  = isset($data['remainAmount']) ? $data['remainAmount'] : null;
        $this->container['remark']        = isset($data['remark']) ? $data['remark'] : null;
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
     * Gets ruleId
     * @return string
     */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
     * Sets ruleId
     * @param  string  $ruleId  规则id
     * @return $this
     */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;

        return $this;
    }

    /**
     * Gets createTime
     * @return string
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     * @param  string  $createTime  规则创建时间
     * @return $this
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

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
     * @param  string  $merchantNo  交易主体商编
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

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
     * @param  string  $status  规则状态
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets receiveType
     * @return string
     */
    public function getReceiveType()
    {
        return $this->container['receiveType'];
    }

    /**
     * Sets receiveType
     * @param  string  $receiveType  提现到账类型
     * @return $this
     */
    public function setReceiveType($receiveType)
    {
        $this->container['receiveType'] = $receiveType;

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
     * @param  string  $bindId  提现卡id
     * @return $this
     */
    public function setBindId($bindId)
    {
        $this->container['bindId'] = $bindId;

        return $this;
    }

    /**
     * Gets bankAccountNo
     * @return string
     */
    public function getBankAccountNo()
    {
        return $this->container['bankAccountNo'];
    }

    /**
     * Sets bankAccountNo
     * @param  string  $bankAccountNo  提现卡卡号
     * @return $this
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->container['bankAccountNo'] = $bankAccountNo;

        return $this;
    }

    /**
     * Gets triggerTime
     * @return string
     */
    public function getTriggerTime()
    {
        return $this->container['triggerTime'];
    }

    /**
     * Sets triggerTime
     * @param  string  $triggerTime  触发时间
     * @return $this
     */
    public function setTriggerTime($triggerTime)
    {
        $this->container['triggerTime'] = $triggerTime;

        return $this;
    }

    /**
     * Gets remainAmount
     * @return float
     */
    public function getRemainAmount()
    {
        return $this->container['remainAmount'];
    }

    /**
     * Sets remainAmount
     * @param  float  $remainAmount  保留金额
     * @return $this
     */
    public function setRemainAmount($remainAmount)
    {
        $this->container['remainAmount'] = $remainAmount;

        return $this;
    }

    /**
     * Gets remark
     * @return string
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     * @param  string  $remark  银行附言
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

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


