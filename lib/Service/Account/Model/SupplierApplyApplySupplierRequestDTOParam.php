<?php
/**
 * SupplierApplyApplySupplierRequestDTOParam
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
 * SupplierApplyApplySupplierRequestDTOParam Class Doc Comment
 * @author   Swagger Codegen team
 * @package  Yeepay\Yop\Sdk\
 * @category Class
 * @description
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupplierApplyApplySupplierRequestDTOParam implements ModelInterface, ArrayAccess
{

    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'SupplierApplyApplySupplierRequestDTOParam';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'requestNo'           => 'string',
        'initiateMerchantNo'  => 'string',
        'merchantNo'          => 'string',
        'supplierAccountInfo' => '\Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplySupplierAccountInfoParam',
        'supplierQualInfo'    => '\Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplySupplierQualInfoParam',
        'notifyUrl'           => 'string',
        'appKey'              => 'string',
        'reasonType'          => 'string',
        'reason'              => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerFormats = [
        'requestNo'           => null,
        'initiateMerchantNo'  => null,
        'merchantNo'          => null,
        'supplierAccountInfo' => null,
        'supplierQualInfo'    => null,
        'notifyUrl'           => null,
        'appKey'              => null,
        'reasonType'          => null,
        'reason'              => null,
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
        'requestNo'           => 'requestNo',
        'initiateMerchantNo'  => 'initiateMerchantNo',
        'merchantNo'          => 'merchantNo',
        'supplierAccountInfo' => 'supplierAccountInfo',
        'supplierQualInfo'    => 'supplierQualInfo',
        'notifyUrl'           => 'notifyUrl',
        'appKey'              => 'appKey',
        'reasonType'          => 'reasonType',
        'reason'              => 'reason',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'requestNo'           => 'setRequestNo',
        'initiateMerchantNo'  => 'setInitiateMerchantNo',
        'merchantNo'          => 'setMerchantNo',
        'supplierAccountInfo' => 'setSupplierAccountInfo',
        'supplierQualInfo'    => 'setSupplierQualInfo',
        'notifyUrl'           => 'setNotifyUrl',
        'appKey'              => 'setAppKey',
        'reasonType'          => 'setReasonType',
        'reason'              => 'setReason',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'requestNo'           => 'getRequestNo',
        'initiateMerchantNo'  => 'getInitiateMerchantNo',
        'merchantNo'          => 'getMerchantNo',
        'supplierAccountInfo' => 'getSupplierAccountInfo',
        'supplierQualInfo'    => 'getSupplierQualInfo',
        'notifyUrl'           => 'getNotifyUrl',
        'appKey'              => 'getAppKey',
        'reasonType'          => 'getReasonType',
        'reason'              => 'getReason',
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
        $this->container['requestNo']           = isset($data['requestNo']) ? $data['requestNo'] : null;
        $this->container['initiateMerchantNo']  = isset($data['initiateMerchantNo']) ? $data['initiateMerchantNo'] : null;
        $this->container['merchantNo']          = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['supplierAccountInfo'] = isset($data['supplierAccountInfo']) ? $data['supplierAccountInfo'] : null;
        $this->container['supplierQualInfo']    = isset($data['supplierQualInfo']) ? $data['supplierQualInfo'] : null;
        $this->container['notifyUrl']           = isset($data['notifyUrl']) ? $data['notifyUrl'] : null;
        $this->container['appKey']              = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['reasonType']          = isset($data['reasonType']) ? $data['reasonType'] : null;
        $this->container['reason']              = isset($data['reason']) ? $data['reason'] : null;
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
     * Gets requestNo
     * @return string
     */
    public function getRequestNo()
    {
        return $this->container['requestNo'];
    }

    /**
     * Sets requestNo
     * @param  string  $requestNo  requestNo
     * @return $this
     */
    public function setRequestNo($requestNo)
    {
        $this->container['requestNo'] = $requestNo;

        return $this;
    }

    /**
     * Gets initiateMerchantNo
     * @return string
     */
    public function getInitiateMerchantNo()
    {
        return $this->container['initiateMerchantNo'];
    }

    /**
     * Sets initiateMerchantNo
     * @param  string  $initiateMerchantNo  initiateMerchantNo
     * @return $this
     */
    public function setInitiateMerchantNo($initiateMerchantNo)
    {
        $this->container['initiateMerchantNo'] = $initiateMerchantNo;

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
     * @param  string  $merchantNo  merchantNo
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets supplierAccountInfo
     * @return \Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplySupplierAccountInfoParam
     */
    public function getSupplierAccountInfo()
    {
        return $this->container['supplierAccountInfo'];
    }

    /**
     * Sets supplierAccountInfo
     * @param  \Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplySupplierAccountInfoParam  $supplierAccountInfo  supplierAccountInfo
     * @return $this
     */
    public function setSupplierAccountInfo($supplierAccountInfo)
    {
        $this->container['supplierAccountInfo'] = $supplierAccountInfo;

        return $this;
    }

    /**
     * Gets supplierQualInfo
     * @return \Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplySupplierQualInfoParam
     */
    public function getSupplierQualInfo()
    {
        return $this->container['supplierQualInfo'];
    }

    /**
     * Sets supplierQualInfo
     * @param  \Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplySupplierQualInfoParam  $supplierQualInfo  supplierQualInfo
     * @return $this
     */
    public function setSupplierQualInfo($supplierQualInfo)
    {
        $this->container['supplierQualInfo'] = $supplierQualInfo;

        return $this;
    }

    /**
     * Gets notifyUrl
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->container['notifyUrl'];
    }

    /**
     * Sets notifyUrl
     * @param  string  $notifyUrl  notifyUrl
     * @return $this
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->container['notifyUrl'] = $notifyUrl;

        return $this;
    }

    /**
     * Gets appKey
     * @return string
     */
    public function getAppKey()
    {
        return $this->container['appKey'];
    }

    /**
     * Sets appKey
     * @param  string  $appKey  appKey
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;

        return $this;
    }

    /**
     * Gets reasonType
     * @return string
     */
    public function getReasonType()
    {
        return $this->container['reasonType'];
    }

    /**
     * Sets reasonType
     * @param  string  $reasonType  reasonType
     * @return $this
     */
    public function setReasonType($reasonType)
    {
        $this->container['reasonType'] = $reasonType;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param  string  $reason  reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

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


