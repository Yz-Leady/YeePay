<?php
/**
 * DividebackYopDivideBackResDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 分账
 *
 * <p>名称（中文）：分账<br />名称（英文，xx.war）：opr-hessian.war<br />简介：中台收款交易支持分账<br />wiki文档地址：http://wiki.yeepay.com/pages/viewpage.action?pageId=108380664<br />预计项目上线时间：2020年6月9日<br />归属/拟申请的sp编码（可选）：opr<br />期望api分组编码、名称（可选）：divide（分账）<br />涉及的接口：申请分账、分账查询、分账资金归还/分账退回、分账退回查询</p>
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

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * DividebackYopDivideBackResDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DividebackYopDivideBackResDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DividebackYopDivideBackResDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'bizSystemNo' => 'string',
        'parentMerchantNo' => 'string',
        'merchantNo' => 'string',
        'orderId' => 'string',
        'uniqueOrderNo' => 'string',
        'divideRequestId' => 'string',
        'divideBackRequestId' => 'string',
        'uniqueDivideBackNo' => 'string',
        'divideBackDetail' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'bizSystemNo' => null,
        'parentMerchantNo' => null,
        'merchantNo' => null,
        'orderId' => null,
        'uniqueOrderNo' => null,
        'divideRequestId' => null,
        'divideBackRequestId' => null,
        'uniqueDivideBackNo' => null,
        'divideBackDetail' => null,
        'status' => null
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
        'code' => 'code',
        'message' => 'message',
        'bizSystemNo' => 'bizSystemNo',
        'parentMerchantNo' => 'parentMerchantNo',
        'merchantNo' => 'merchantNo',
        'orderId' => 'orderId',
        'uniqueOrderNo' => 'uniqueOrderNo',
        'divideRequestId' => 'divideRequestId',
        'divideBackRequestId' => 'divideBackRequestId',
        'uniqueDivideBackNo' => 'uniqueDivideBackNo',
        'divideBackDetail' => 'divideBackDetail',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'bizSystemNo' => 'setBizSystemNo',
        'parentMerchantNo' => 'setParentMerchantNo',
        'merchantNo' => 'setMerchantNo',
        'orderId' => 'setOrderId',
        'uniqueOrderNo' => 'setUniqueOrderNo',
        'divideRequestId' => 'setDivideRequestId',
        'divideBackRequestId' => 'setDivideBackRequestId',
        'uniqueDivideBackNo' => 'setUniqueDivideBackNo',
        'divideBackDetail' => 'setDivideBackDetail',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'bizSystemNo' => 'getBizSystemNo',
        'parentMerchantNo' => 'getParentMerchantNo',
        'merchantNo' => 'getMerchantNo',
        'orderId' => 'getOrderId',
        'uniqueOrderNo' => 'getUniqueOrderNo',
        'divideRequestId' => 'getDivideRequestId',
        'divideBackRequestId' => 'getDivideBackRequestId',
        'uniqueDivideBackNo' => 'getUniqueDivideBackNo',
        'divideBackDetail' => 'getDivideBackDetail',
        'status' => 'getStatus'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['bizSystemNo'] = isset($data['bizSystemNo']) ? $data['bizSystemNo'] : null;
        $this->container['parentMerchantNo'] = isset($data['parentMerchantNo']) ? $data['parentMerchantNo'] : null;
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['uniqueOrderNo'] = isset($data['uniqueOrderNo']) ? $data['uniqueOrderNo'] : null;
        $this->container['divideRequestId'] = isset($data['divideRequestId']) ? $data['divideRequestId'] : null;
        $this->container['divideBackRequestId'] = isset($data['divideBackRequestId']) ? $data['divideBackRequestId'] : null;
        $this->container['uniqueDivideBackNo'] = isset($data['uniqueDivideBackNo']) ? $data['uniqueDivideBackNo'] : null;
        $this->container['divideBackDetail'] = isset($data['divideBackDetail']) ? $data['divideBackDetail'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 返回码
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 返回信息描述
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets bizSystemNo
     *
     * @return string
     */
    public function getBizSystemNo()
    {
        return $this->container['bizSystemNo'];
    }

    /**
     * Sets bizSystemNo
     *
     * @param string $bizSystemNo 业务方标识
     *
     * @return $this
     */
    public function setBizSystemNo($bizSystemNo)
    {
        $this->container['bizSystemNo'] = $bizSystemNo;

        return $this;
    }

    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->container['parentMerchantNo'];
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo 发起方商编
     *
     * @return $this
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->container['parentMerchantNo'] = $parentMerchantNo;

        return $this;
    }

    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->container['merchantNo'];
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo 商户编号
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId 商户收款请求号
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets uniqueOrderNo
     *
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->container['uniqueOrderNo'];
    }

    /**
     * Sets uniqueOrderNo
     *
     * @param string $uniqueOrderNo 易宝收款订单号
     *
     * @return $this
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->container['uniqueOrderNo'] = $uniqueOrderNo;

        return $this;
    }

    /**
     * Gets divideRequestId
     *
     * @return string
     */
    public function getDivideRequestId()
    {
        return $this->container['divideRequestId'];
    }

    /**
     * Sets divideRequestId
     *
     * @param string $divideRequestId 商户分账请求号
     *
     * @return $this
     */
    public function setDivideRequestId($divideRequestId)
    {
        $this->container['divideRequestId'] = $divideRequestId;

        return $this;
    }

    /**
     * Gets divideBackRequestId
     *
     * @return string
     */
    public function getDivideBackRequestId()
    {
        return $this->container['divideBackRequestId'];
    }

    /**
     * Sets divideBackRequestId
     *
     * @param string $divideBackRequestId 商户分账资金归还请求号
     *
     * @return $this
     */
    public function setDivideBackRequestId($divideBackRequestId)
    {
        $this->container['divideBackRequestId'] = $divideBackRequestId;

        return $this;
    }

    /**
     * Gets uniqueDivideBackNo
     *
     * @return string
     */
    public function getUniqueDivideBackNo()
    {
        return $this->container['uniqueDivideBackNo'];
    }

    /**
     * Sets uniqueDivideBackNo
     *
     * @param string $uniqueDivideBackNo 易宝分账资金归还订单号(在资金归还后易宝返回的分账资金归还订单号)
     *
     * @return $this
     */
    public function setUniqueDivideBackNo($uniqueDivideBackNo)
    {
        $this->container['uniqueDivideBackNo'] = $uniqueDivideBackNo;

        return $this;
    }

    /**
     * Gets divideBackDetail
     *
     * @return string
     */
    public function getDivideBackDetail()
    {
        return $this->container['divideBackDetail'];
    }

    /**
     * Sets divideBackDetail
     *
     * @param string $divideBackDetail 分账资金归还明细
     *
     * @return $this
     */
    public function setDivideBackDetail($divideBackDetail)
    {
        $this->container['divideBackDetail'] = $divideBackDetail;

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
     * @param string $status 分账资金归还状态
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


