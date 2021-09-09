<?php
/**
 * TradeOrderqueryBankPromotionInfoDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 子商户入网大算航旅
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
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

namespace Yeepay\Yop\Sdk\Service\Sys\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * TradeOrderqueryBankPromotionInfoDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TradeOrderqueryBankPromotionInfoDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TradeOrderqueryBankPromotionInfoDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'payInterface' => 'string',
        'bankOrderNo' => 'string',
        'tradeType' => 'string',
        'promotionId' => 'string',
        'promotionName' => 'string',
        'promotionScope' => 'string',
        'promotionType' => 'string',
        'amount' => 'float',
        'amountRefund' => 'float',
        'activityId' => 'string',
        'channelContribute' => 'string',
        'merchantContribute' => 'string',
        'otherContribute' => 'string',
        'memo' => 'string',
        'orderTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'payInterface' => null,
        'bankOrderNo' => null,
        'tradeType' => null,
        'promotionId' => null,
        'promotionName' => null,
        'promotionScope' => null,
        'promotionType' => null,
        'amount' => null,
        'amountRefund' => null,
        'activityId' => null,
        'channelContribute' => null,
        'merchantContribute' => null,
        'otherContribute' => null,
        'memo' => null,
        'orderTime' => 'date-time'
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
        'id' => 'id',
        'payInterface' => 'payInterface',
        'bankOrderNo' => 'bankOrderNo',
        'tradeType' => 'tradeType',
        'promotionId' => 'promotionId',
        'promotionName' => 'promotionName',
        'promotionScope' => 'promotionScope',
        'promotionType' => 'promotionType',
        'amount' => 'amount',
        'amountRefund' => 'amountRefund',
        'activityId' => 'activityId',
        'channelContribute' => 'channelContribute',
        'merchantContribute' => 'merchantContribute',
        'otherContribute' => 'otherContribute',
        'memo' => 'memo',
        'orderTime' => 'orderTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'payInterface' => 'setPayInterface',
        'bankOrderNo' => 'setBankOrderNo',
        'tradeType' => 'setTradeType',
        'promotionId' => 'setPromotionId',
        'promotionName' => 'setPromotionName',
        'promotionScope' => 'setPromotionScope',
        'promotionType' => 'setPromotionType',
        'amount' => 'setAmount',
        'amountRefund' => 'setAmountRefund',
        'activityId' => 'setActivityId',
        'channelContribute' => 'setChannelContribute',
        'merchantContribute' => 'setMerchantContribute',
        'otherContribute' => 'setOtherContribute',
        'memo' => 'setMemo',
        'orderTime' => 'setOrderTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'payInterface' => 'getPayInterface',
        'bankOrderNo' => 'getBankOrderNo',
        'tradeType' => 'getTradeType',
        'promotionId' => 'getPromotionId',
        'promotionName' => 'getPromotionName',
        'promotionScope' => 'getPromotionScope',
        'promotionType' => 'getPromotionType',
        'amount' => 'getAmount',
        'amountRefund' => 'getAmountRefund',
        'activityId' => 'getActivityId',
        'channelContribute' => 'getChannelContribute',
        'merchantContribute' => 'getMerchantContribute',
        'otherContribute' => 'getOtherContribute',
        'memo' => 'getMemo',
        'orderTime' => 'getOrderTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['payInterface'] = isset($data['payInterface']) ? $data['payInterface'] : null;
        $this->container['bankOrderNo'] = isset($data['bankOrderNo']) ? $data['bankOrderNo'] : null;
        $this->container['tradeType'] = isset($data['tradeType']) ? $data['tradeType'] : null;
        $this->container['promotionId'] = isset($data['promotionId']) ? $data['promotionId'] : null;
        $this->container['promotionName'] = isset($data['promotionName']) ? $data['promotionName'] : null;
        $this->container['promotionScope'] = isset($data['promotionScope']) ? $data['promotionScope'] : null;
        $this->container['promotionType'] = isset($data['promotionType']) ? $data['promotionType'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['amountRefund'] = isset($data['amountRefund']) ? $data['amountRefund'] : null;
        $this->container['activityId'] = isset($data['activityId']) ? $data['activityId'] : null;
        $this->container['channelContribute'] = isset($data['channelContribute']) ? $data['channelContribute'] : null;
        $this->container['merchantContribute'] = isset($data['merchantContribute']) ? $data['merchantContribute'] : null;
        $this->container['otherContribute'] = isset($data['otherContribute']) ? $data['otherContribute'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['orderTime'] = isset($data['orderTime']) ? $data['orderTime'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 优惠券主键id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets payInterface
     *
     * @return string
     */
    public function getPayInterface()
    {
        return $this->container['payInterface'];
    }

    /**
     * Sets payInterface
     *
     * @param string $payInterface 实体通道编码
     *
     * @return $this
     */
    public function setPayInterface($payInterface)
    {
        $this->container['payInterface'] = $payInterface;

        return $this;
    }

    /**
     * Gets bankOrderNo
     *
     * @return string
     */
    public function getBankOrderNo()
    {
        return $this->container['bankOrderNo'];
    }

    /**
     * Sets bankOrderNo
     *
     * @param string $bankOrderNo 订单号
     *
     * @return $this
     */
    public function setBankOrderNo($bankOrderNo)
    {
        $this->container['bankOrderNo'] = $bankOrderNo;

        return $this;
    }

    /**
     * Gets tradeType
     *
     * @return string
     */
    public function getTradeType()
    {
        return $this->container['tradeType'];
    }

    /**
     * Sets tradeType
     *
     * @param string $tradeType 交易类型
     *
     * @return $this
     */
    public function setTradeType($tradeType)
    {
        $this->container['tradeType'] = $tradeType;

        return $this;
    }

    /**
     * Gets promotionId
     *
     * @return string
     */
    public function getPromotionId()
    {
        return $this->container['promotionId'];
    }

    /**
     * Sets promotionId
     *
     * @param string $promotionId 优惠券编码
     *
     * @return $this
     */
    public function setPromotionId($promotionId)
    {
        $this->container['promotionId'] = $promotionId;

        return $this;
    }

    /**
     * Gets promotionName
     *
     * @return string
     */
    public function getPromotionName()
    {
        return $this->container['promotionName'];
    }

    /**
     * Sets promotionName
     *
     * @param string $promotionName 优惠券名称
     *
     * @return $this
     */
    public function setPromotionName($promotionName)
    {
        $this->container['promotionName'] = $promotionName;

        return $this;
    }

    /**
     * Gets promotionScope
     *
     * @return string
     */
    public function getPromotionScope()
    {
        return $this->container['promotionScope'];
    }

    /**
     * Sets promotionScope
     *
     * @param string $promotionScope 优惠券范围
     *
     * @return $this
     */
    public function setPromotionScope($promotionScope)
    {
        $this->container['promotionScope'] = $promotionScope;

        return $this;
    }

    /**
     * Gets promotionType
     *
     * @return string
     */
    public function getPromotionType()
    {
        return $this->container['promotionType'];
    }

    /**
     * Sets promotionType
     *
     * @param string $promotionType 优惠券类型
     *
     * @return $this
     */
    public function setPromotionType($promotionType)
    {
        $this->container['promotionType'] = $promotionType;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount 券金额
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amountRefund
     *
     * @return float
     */
    public function getAmountRefund()
    {
        return $this->container['amountRefund'];
    }

    /**
     * Sets amountRefund
     *
     * @param float $amountRefund 券退回金额
     *
     * @return $this
     */
    public function setAmountRefund($amountRefund)
    {
        $this->container['amountRefund'] = $amountRefund;

        return $this;
    }

    /**
     * Gets activityId
     *
     * @return string
     */
    public function getActivityId()
    {
        return $this->container['activityId'];
    }

    /**
     * Sets activityId
     *
     * @param string $activityId 优惠券活动id
     *
     * @return $this
     */
    public function setActivityId($activityId)
    {
        $this->container['activityId'] = $activityId;

        return $this;
    }

    /**
     * Gets channelContribute
     *
     * @return string
     */
    public function getChannelContribute()
    {
        return $this->container['channelContribute'];
    }

    /**
     * Sets channelContribute
     *
     * @param string $channelContribute 渠道出资
     *
     * @return $this
     */
    public function setChannelContribute($channelContribute)
    {
        $this->container['channelContribute'] = $channelContribute;

        return $this;
    }

    /**
     * Gets merchantContribute
     *
     * @return string
     */
    public function getMerchantContribute()
    {
        return $this->container['merchantContribute'];
    }

    /**
     * Sets merchantContribute
     *
     * @param string $merchantContribute 商户出资
     *
     * @return $this
     */
    public function setMerchantContribute($merchantContribute)
    {
        $this->container['merchantContribute'] = $merchantContribute;

        return $this;
    }

    /**
     * Gets otherContribute
     *
     * @return string
     */
    public function getOtherContribute()
    {
        return $this->container['otherContribute'];
    }

    /**
     * Sets otherContribute
     *
     * @param string $otherContribute 其他出资
     *
     * @return $this
     */
    public function setOtherContribute($otherContribute)
    {
        $this->container['otherContribute'] = $otherContribute;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string $memo 备注信息
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets orderTime
     *
     * @return string
     */
    public function getOrderTime()
    {
        return $this->container['orderTime'];
    }

    /**
     * Sets orderTime
     *
     * @param string $orderTime 订单交易时间
     *
     * @return $this
     */
    public function setOrderTime($orderTime)
    {
        $this->container['orderTime'] = $orderTime;

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


