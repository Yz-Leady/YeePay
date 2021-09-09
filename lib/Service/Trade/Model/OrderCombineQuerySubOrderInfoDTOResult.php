<?php
/**
 * OrderCombineQuerySubOrderInfoDTOResult
 * PHP version 5
 * @author   Swagger Codegen team
 * @package  Yeepay\Yop\Sdk\
 * @category Class
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 标准交易
 * <p>名称（中文）：新交易下单接口<br />名称（英文，xx.war）：opr-hessian.war<br />简介：合单支付下单与标准收款内部下单接口合并<br />wiki文档地址：http://wiki.yeepay.com/pages/viewpage.action?pageId=122095805(4.新api分组相关接口规划)<br />预计项目上线时间：2020年6月9日<br />归属/拟申请的sp编码（可选）：opr<br />期望api分组编码、名称（可选）：trade(标准交易)<br />涉及的接口：申请下单、订单查询、申请退款、退款查询</p>
 * OpenAPI spec version: 1.0.0
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * OrderCombineQuerySubOrderInfoDTOResult Class Doc Comment
 * @author   Swagger Codegen team
 * @package  Yeepay\Yop\Sdk\
 * @category Class
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderCombineQuerySubOrderInfoDTOResult implements ModelInterface, ArrayAccess
{

    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'OrderCombineQuerySubOrderInfoDTOResult';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'merchantNo'      => 'string',
        'orderId'         => 'string',
        'uniqueOrderNo'   => 'string',
        'bankOrderId'     => 'string',
        'channelOrderId'  => 'string',
        'orderAmount'     => 'float',
        'payAmount'       => 'float',
        'goodsName'       => 'string',
        'merchantFee'     => 'float',
        'customerFee'     => 'float',
        'memo'            => 'string',
        'status'          => 'string',
        'payWay'          => 'string',
        'paySuccessDate'  => 'string',
        'fundProcessType' => 'string',
        'channel'         => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerFormats = [
        'merchantNo'      => null,
        'orderId'         => null,
        'uniqueOrderNo'   => null,
        'bankOrderId'     => null,
        'channelOrderId'  => null,
        'orderAmount'     => null,
        'payAmount'       => null,
        'goodsName'       => null,
        'merchantFee'     => null,
        'customerFee'     => null,
        'memo'            => null,
        'status'          => null,
        'payWay'          => null,
        'paySuccessDate'  => null,
        'fundProcessType' => null,
        'channel'         => null,
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
        'merchantNo'      => 'merchantNo',
        'orderId'         => 'orderId',
        'uniqueOrderNo'   => 'uniqueOrderNo',
        'bankOrderId'     => 'bankOrderId',
        'channelOrderId'  => 'channelOrderId',
        'orderAmount'     => 'orderAmount',
        'payAmount'       => 'payAmount',
        'goodsName'       => 'goodsName',
        'merchantFee'     => 'merchantFee',
        'customerFee'     => 'customerFee',
        'memo'            => 'memo',
        'status'          => 'status',
        'payWay'          => 'payWay',
        'paySuccessDate'  => 'paySuccessDate',
        'fundProcessType' => 'fundProcessType',
        'channel'         => 'channel',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantNo'      => 'setMerchantNo',
        'orderId'         => 'setOrderId',
        'uniqueOrderNo'   => 'setUniqueOrderNo',
        'bankOrderId'     => 'setBankOrderId',
        'channelOrderId'  => 'setChannelOrderId',
        'orderAmount'     => 'setOrderAmount',
        'payAmount'       => 'setPayAmount',
        'goodsName'       => 'setGoodsName',
        'merchantFee'     => 'setMerchantFee',
        'customerFee'     => 'setCustomerFee',
        'memo'            => 'setMemo',
        'status'          => 'setStatus',
        'payWay'          => 'setPayWay',
        'paySuccessDate'  => 'setPaySuccessDate',
        'fundProcessType' => 'setFundProcessType',
        'channel'         => 'setChannel',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantNo'      => 'getMerchantNo',
        'orderId'         => 'getOrderId',
        'uniqueOrderNo'   => 'getUniqueOrderNo',
        'bankOrderId'     => 'getBankOrderId',
        'channelOrderId'  => 'getChannelOrderId',
        'orderAmount'     => 'getOrderAmount',
        'payAmount'       => 'getPayAmount',
        'goodsName'       => 'getGoodsName',
        'merchantFee'     => 'getMerchantFee',
        'customerFee'     => 'getCustomerFee',
        'memo'            => 'getMemo',
        'status'          => 'getStatus',
        'payWay'          => 'getPayWay',
        'paySuccessDate'  => 'getPaySuccessDate',
        'fundProcessType' => 'getFundProcessType',
        'channel'         => 'getChannel',
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
        $this->container['merchantNo']      = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['orderId']         = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['uniqueOrderNo']   = isset($data['uniqueOrderNo']) ? $data['uniqueOrderNo'] : null;
        $this->container['bankOrderId']     = isset($data['bankOrderId']) ? $data['bankOrderId'] : null;
        $this->container['channelOrderId']  = isset($data['channelOrderId']) ? $data['channelOrderId'] : null;
        $this->container['orderAmount']     = isset($data['orderAmount']) ? $data['orderAmount'] : null;
        $this->container['payAmount']       = isset($data['payAmount']) ? $data['payAmount'] : null;
        $this->container['goodsName']       = isset($data['goodsName']) ? $data['goodsName'] : null;
        $this->container['merchantFee']     = isset($data['merchantFee']) ? $data['merchantFee'] : null;
        $this->container['customerFee']     = isset($data['customerFee']) ? $data['customerFee'] : null;
        $this->container['memo']            = isset($data['memo']) ? $data['memo'] : null;
        $this->container['status']          = isset($data['status']) ? $data['status'] : null;
        $this->container['payWay']          = isset($data['payWay']) ? $data['payWay'] : null;
        $this->container['paySuccessDate']  = isset($data['paySuccessDate']) ? $data['paySuccessDate'] : null;
        $this->container['fundProcessType'] = isset($data['fundProcessType']) ? $data['fundProcessType'] : null;
        $this->container['channel']         = isset($data['channel']) ? $data['channel'] : null;
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
     * Gets orderId
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     * @param  string  $orderId  商户收款请求号
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets uniqueOrderNo
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->container['uniqueOrderNo'];
    }

    /**
     * Sets uniqueOrderNo
     * @param  string  $uniqueOrderNo  易宝收款订单号
     * @return $this
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->container['uniqueOrderNo'] = $uniqueOrderNo;

        return $this;
    }

    /**
     * Gets bankOrderId
     * @return string
     */
    public function getBankOrderId()
    {
        return $this->container['bankOrderId'];
    }

    /**
     * Sets bankOrderId
     * @param  string  $bankOrderId  银行订单号
     * @return $this
     */
    public function setBankOrderId($bankOrderId)
    {
        $this->container['bankOrderId'] = $bankOrderId;

        return $this;
    }

    /**
     * Gets channelOrderId
     * @return string
     */
    public function getChannelOrderId()
    {
        return $this->container['channelOrderId'];
    }

    /**
     * Sets channelOrderId
     * @param  string  $channelOrderId  渠道订单号
     * @return $this
     */
    public function setChannelOrderId($channelOrderId)
    {
        $this->container['channelOrderId'] = $channelOrderId;

        return $this;
    }

    /**
     * Gets orderAmount
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->container['orderAmount'];
    }

    /**
     * Sets orderAmount
     * @param  float  $orderAmount  订单金额
     * @return $this
     */
    public function setOrderAmount($orderAmount)
    {
        $this->container['orderAmount'] = $orderAmount;

        return $this;
    }

    /**
     * Gets payAmount
     * @return float
     */
    public function getPayAmount()
    {
        return $this->container['payAmount'];
    }

    /**
     * Sets payAmount
     * @param  float  $payAmount  支付金额
     * @return $this
     */
    public function setPayAmount($payAmount)
    {
        $this->container['payAmount'] = $payAmount;

        return $this;
    }

    /**
     * Gets goodsName
     * @return string
     */
    public function getGoodsName()
    {
        return $this->container['goodsName'];
    }

    /**
     * Sets goodsName
     * @param  string  $goodsName  商品描述
     * @return $this
     */
    public function setGoodsName($goodsName)
    {
        $this->container['goodsName'] = $goodsName;

        return $this;
    }

    /**
     * Gets merchantFee
     * @return float
     */
    public function getMerchantFee()
    {
        return $this->container['merchantFee'];
    }

    /**
     * Sets merchantFee
     * @param  float  $merchantFee  商户手续费
     * @return $this
     */
    public function setMerchantFee($merchantFee)
    {
        $this->container['merchantFee'] = $merchantFee;

        return $this;
    }

    /**
     * Gets customerFee
     * @return float
     */
    public function getCustomerFee()
    {
        return $this->container['customerFee'];
    }

    /**
     * Sets customerFee
     * @param  float  $customerFee  用户手续费
     * @return $this
     */
    public function setCustomerFee($customerFee)
    {
        $this->container['customerFee'] = $customerFee;

        return $this;
    }

    /**
     * Gets memo
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     * @param  string  $memo  对账备注
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

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
     * @param  string  $status  订单状态
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payWay
     * @return string
     */
    public function getPayWay()
    {
        return $this->container['payWay'];
    }

    /**
     * Sets payWay
     * @param  string  $payWay  支付方式
     * @return $this
     */
    public function setPayWay($payWay)
    {
        $this->container['payWay'] = $payWay;

        return $this;
    }

    /**
     * Gets paySuccessDate
     * @return string
     */
    public function getPaySuccessDate()
    {
        return $this->container['paySuccessDate'];
    }

    /**
     * Sets paySuccessDate
     * @param  string  $paySuccessDate  支付成功时间
     * @return $this
     */
    public function setPaySuccessDate($paySuccessDate)
    {
        $this->container['paySuccessDate'] = $paySuccessDate;

        return $this;
    }

    /**
     * Gets fundProcessType
     * @return string
     */
    public function getFundProcessType()
    {
        return $this->container['fundProcessType'];
    }

    /**
     * Sets fundProcessType
     * @param  string  $fundProcessType  分账标识
     * @return $this
     */
    public function setFundProcessType($fundProcessType)
    {
        $this->container['fundProcessType'] = $fundProcessType;

        return $this;
    }

    /**
     * Gets channel
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     * @param  string  $channel  渠道类型
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

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


