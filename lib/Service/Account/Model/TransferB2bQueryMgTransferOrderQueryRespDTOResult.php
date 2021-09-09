<?php
/**
 * TransferB2bQueryMgTransferOrderQueryRespDTOResult
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
 * TransferB2bQueryMgTransferOrderQueryRespDTOResult Class Doc Comment
 * @author   Swagger Codegen team
 * @package  Yeepay\Yop\Sdk\
 * @category Class
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferB2bQueryMgTransferOrderQueryRespDTOResult implements ModelInterface, ArrayAccess
{

    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'TransferB2bQueryMgTransferOrderQueryRespDTOResult';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'returnCode'     => 'string',
        'returnMsg'      => 'string',
        'requestNo'      => 'string',
        'orderNo'        => 'string',
        'orderAmount'    => 'string',
        'transferType'   => 'string',
        'fromMerchantNo' => 'string',
        'toMerchantNo'   => 'string',
        'transferStatus' => 'string',
        'usage'          => 'string',
        'fee'            => 'string',
        'createTime'     => 'string',
        'finishTime'     => 'string',
        'debitAmount'    => 'string',
        'receiveAmount'  => 'string',
        'feeMerchantNo'  => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerFormats = [
        'returnCode'     => null,
        'returnMsg'      => null,
        'requestNo'      => null,
        'orderNo'        => null,
        'orderAmount'    => null,
        'transferType'   => null,
        'fromMerchantNo' => null,
        'toMerchantNo'   => null,
        'transferStatus' => null,
        'usage'          => null,
        'fee'            => null,
        'createTime'     => null,
        'finishTime'     => null,
        'debitAmount'    => null,
        'receiveAmount'  => null,
        'feeMerchantNo'  => null,
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
        'returnCode'     => 'returnCode',
        'returnMsg'      => 'returnMsg',
        'requestNo'      => 'requestNo',
        'orderNo'        => 'orderNo',
        'orderAmount'    => 'orderAmount',
        'transferType'   => 'transferType',
        'fromMerchantNo' => 'fromMerchantNo',
        'toMerchantNo'   => 'toMerchantNo',
        'transferStatus' => 'transferStatus',
        'usage'          => 'usage',
        'fee'            => 'fee',
        'createTime'     => 'createTime',
        'finishTime'     => 'finishTime',
        'debitAmount'    => 'debitAmount',
        'receiveAmount'  => 'receiveAmount',
        'feeMerchantNo'  => 'feeMerchantNo',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'returnCode'     => 'setReturnCode',
        'returnMsg'      => 'setReturnMsg',
        'requestNo'      => 'setRequestNo',
        'orderNo'        => 'setOrderNo',
        'orderAmount'    => 'setOrderAmount',
        'transferType'   => 'setTransferType',
        'fromMerchantNo' => 'setFromMerchantNo',
        'toMerchantNo'   => 'setToMerchantNo',
        'transferStatus' => 'setTransferStatus',
        'usage'          => 'setUsage',
        'fee'            => 'setFee',
        'createTime'     => 'setCreateTime',
        'finishTime'     => 'setFinishTime',
        'debitAmount'    => 'setDebitAmount',
        'receiveAmount'  => 'setReceiveAmount',
        'feeMerchantNo'  => 'setFeeMerchantNo',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'returnCode'     => 'getReturnCode',
        'returnMsg'      => 'getReturnMsg',
        'requestNo'      => 'getRequestNo',
        'orderNo'        => 'getOrderNo',
        'orderAmount'    => 'getOrderAmount',
        'transferType'   => 'getTransferType',
        'fromMerchantNo' => 'getFromMerchantNo',
        'toMerchantNo'   => 'getToMerchantNo',
        'transferStatus' => 'getTransferStatus',
        'usage'          => 'getUsage',
        'fee'            => 'getFee',
        'createTime'     => 'getCreateTime',
        'finishTime'     => 'getFinishTime',
        'debitAmount'    => 'getDebitAmount',
        'receiveAmount'  => 'getReceiveAmount',
        'feeMerchantNo'  => 'getFeeMerchantNo',
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
        $this->container['returnCode']     = isset($data['returnCode']) ? $data['returnCode'] : null;
        $this->container['returnMsg']      = isset($data['returnMsg']) ? $data['returnMsg'] : null;
        $this->container['requestNo']      = isset($data['requestNo']) ? $data['requestNo'] : null;
        $this->container['orderNo']        = isset($data['orderNo']) ? $data['orderNo'] : null;
        $this->container['orderAmount']    = isset($data['orderAmount']) ? $data['orderAmount'] : null;
        $this->container['transferType']   = isset($data['transferType']) ? $data['transferType'] : null;
        $this->container['fromMerchantNo'] = isset($data['fromMerchantNo']) ? $data['fromMerchantNo'] : null;
        $this->container['toMerchantNo']   = isset($data['toMerchantNo']) ? $data['toMerchantNo'] : null;
        $this->container['transferStatus'] = isset($data['transferStatus']) ? $data['transferStatus'] : null;
        $this->container['usage']          = isset($data['usage']) ? $data['usage'] : null;
        $this->container['fee']            = isset($data['fee']) ? $data['fee'] : null;
        $this->container['createTime']     = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['finishTime']     = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['debitAmount']    = isset($data['debitAmount']) ? $data['debitAmount'] : null;
        $this->container['receiveAmount']  = isset($data['receiveAmount']) ? $data['receiveAmount'] : null;
        $this->container['feeMerchantNo']  = isset($data['feeMerchantNo']) ? $data['feeMerchantNo'] : null;
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
     * @param  string  $returnCode  返回码
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
     * @param  string  $returnMsg  返回信息
     * @return $this
     */
    public function setReturnMsg($returnMsg)
    {
        $this->container['returnMsg'] = $returnMsg;

        return $this;
    }

    /**
     * Gets requestNo
     * @return string
     */
    public function getRequestNo()
    {
        return $this->container['requestNo'];
    }

    /**
     * Sets requestNo
     * @param  string  $requestNo  商户请求号
     * @return $this
     */
    public function setRequestNo($requestNo)
    {
        $this->container['requestNo'] = $requestNo;

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
     * @param  string  $orderNo  订单号
     * @return $this
     */
    public function setOrderNo($orderNo)
    {
        $this->container['orderNo'] = $orderNo;

        return $this;
    }

    /**
     * Gets orderAmount
     * @return string
     */
    public function getOrderAmount()
    {
        return $this->container['orderAmount'];
    }

    /**
     * Sets orderAmount
     * @param  string  $orderAmount  转账金额
     * @return $this
     */
    public function setOrderAmount($orderAmount)
    {
        $this->container['orderAmount'] = $orderAmount;

        return $this;
    }

    /**
     * Gets transferType
     * @return string
     */
    public function getTransferType()
    {
        return $this->container['transferType'];
    }

    /**
     * Sets transferType
     * @param  string  $transferType  转账类型
     * @return $this
     */
    public function setTransferType($transferType)
    {
        $this->container['transferType'] = $transferType;

        return $this;
    }

    /**
     * Gets fromMerchantNo
     * @return string
     */
    public function getFromMerchantNo()
    {
        return $this->container['fromMerchantNo'];
    }

    /**
     * Sets fromMerchantNo
     * @param  string  $fromMerchantNo  转出方商户编号
     * @return $this
     */
    public function setFromMerchantNo($fromMerchantNo)
    {
        $this->container['fromMerchantNo'] = $fromMerchantNo;

        return $this;
    }

    /**
     * Gets toMerchantNo
     * @return string
     */
    public function getToMerchantNo()
    {
        return $this->container['toMerchantNo'];
    }

    /**
     * Sets toMerchantNo
     * @param  string  $toMerchantNo  转入方商户编号
     * @return $this
     */
    public function setToMerchantNo($toMerchantNo)
    {
        $this->container['toMerchantNo'] = $toMerchantNo;

        return $this;
    }

    /**
     * Gets transferStatus
     * @return string
     */
    public function getTransferStatus()
    {
        return $this->container['transferStatus'];
    }

    /**
     * Sets transferStatus
     * @param  string  $transferStatus  转账状态
     * @return $this
     */
    public function setTransferStatus($transferStatus)
    {
        $this->container['transferStatus'] = $transferStatus;

        return $this;
    }

    /**
     * Gets usage
     * @return string
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     * @param  string  $usage  用途
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets fee
     * @return string
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     * @param  string  $fee  手续费
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

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
     * @param  string  $createTime  转账下单时间
     * @return $this
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets finishTime
     * @return string
     */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
     * Sets finishTime
     * @param  string  $finishTime  转账完成时间
     * @return $this
     */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;

        return $this;
    }

    /**
     * Gets debitAmount
     * @return string
     */
    public function getDebitAmount()
    {
        return $this->container['debitAmount'];
    }

    /**
     * Sets debitAmount
     * @param  string  $debitAmount  扣账金额
     * @return $this
     */
    public function setDebitAmount($debitAmount)
    {
        $this->container['debitAmount'] = $debitAmount;

        return $this;
    }

    /**
     * Gets receiveAmount
     * @return string
     */
    public function getReceiveAmount()
    {
        return $this->container['receiveAmount'];
    }

    /**
     * Sets receiveAmount
     * @param  string  $receiveAmount  入账金额
     * @return $this
     */
    public function setReceiveAmount($receiveAmount)
    {
        $this->container['receiveAmount'] = $receiveAmount;

        return $this;
    }

    /**
     * Gets feeMerchantNo
     * @return string
     */
    public function getFeeMerchantNo()
    {
        return $this->container['feeMerchantNo'];
    }

    /**
     * Sets feeMerchantNo
     * @param  string  $feeMerchantNo  手续费承担方商户编号
     * @return $this
     */
    public function setFeeMerchantNo($feeMerchantNo)
    {
        $this->container['feeMerchantNo'] = $feeMerchantNo;

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


