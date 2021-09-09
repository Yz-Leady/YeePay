<?php
namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;

use ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * BankLimitQueryBankLimitInfoDTOResult Class Doc Comment
 * @author   Swagger Codegen team
 * @package  Yeepay\Yop\Sdk\
 * @category Class
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankLimitQueryBankLimitInfoDTOResult implements ModelInterface, ArrayAccess
{

    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'BankLimitQueryBankLimitInfoDTOResult';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bankId'         => 'string',
        'limitOfBill'    => 'int',
        'limitOfDay'     => 'int',
        'limitOfMonth'   => 'int',
        'timesOfDay'     => 'int',
        'timesOfMonth'   => 'int',
        'limitMinOfBill' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bankId'         => null,
        'limitOfBill'    => 'int64',
        'limitOfDay'     => 'int64',
        'limitOfMonth'   => 'int64',
        'timesOfDay'     => 'int64',
        'timesOfMonth'   => 'int64',
        'limitMinOfBill' => 'int64',
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
        'bankId'         => 'bankId',
        'limitOfBill'    => 'limitOfBill',
        'limitOfDay'     => 'limitOfDay',
        'limitOfMonth'   => 'limitOfMonth',
        'timesOfDay'     => 'timesOfDay',
        'timesOfMonth'   => 'timesOfMonth',
        'limitMinOfBill' => 'limitMinOfBill',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bankId'         => 'setBankId',
        'limitOfBill'    => 'setLimitOfBill',
        'limitOfDay'     => 'setLimitOfDay',
        'limitOfMonth'   => 'setLimitOfMonth',
        'timesOfDay'     => 'setTimesOfDay',
        'timesOfMonth'   => 'setTimesOfMonth',
        'limitMinOfBill' => 'setLimitMinOfBill',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bankId'         => 'getBankId',
        'limitOfBill'    => 'getLimitOfBill',
        'limitOfDay'     => 'getLimitOfDay',
        'limitOfMonth'   => 'getLimitOfMonth',
        'timesOfDay'     => 'getTimesOfDay',
        'timesOfMonth'   => 'getTimesOfMonth',
        'limitMinOfBill' => 'getLimitMinOfBill',
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
        $this->container['bankId']         = isset($data['bankId']) ? $data['bankId'] : null;
        $this->container['limitOfBill']    = isset($data['limitOfBill']) ? $data['limitOfBill'] : null;
        $this->container['limitOfDay']     = isset($data['limitOfDay']) ? $data['limitOfDay'] : null;
        $this->container['limitOfMonth']   = isset($data['limitOfMonth']) ? $data['limitOfMonth'] : null;
        $this->container['timesOfDay']     = isset($data['timesOfDay']) ? $data['timesOfDay'] : null;
        $this->container['timesOfMonth']   = isset($data['timesOfMonth']) ? $data['timesOfMonth'] : null;
        $this->container['limitMinOfBill'] = isset($data['limitMinOfBill']) ? $data['limitMinOfBill'] : null;
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
     * Gets bankId
     * @return string
     */
    public function getBankId()
    {
        return $this->container['bankId'];
    }

    /**
     * Sets bankId
     * @param  string  $bankId  银行编码
     * @return $this
     */
    public function setBankId($bankId)
    {
        $this->container['bankId'] = $bankId;

        return $this;
    }

    /**
     * Gets limitOfBill
     * @return int
     */
    public function getLimitOfBill()
    {
        return $this->container['limitOfBill'];
    }

    /**
     * Sets limitOfBill
     * @param  int  $limitOfBill  单笔限额
     * @return $this
     */
    public function setLimitOfBill($limitOfBill)
    {
        $this->container['limitOfBill'] = $limitOfBill;

        return $this;
    }

    /**
     * Gets limitOfDay
     * @return int
     */
    public function getLimitOfDay()
    {
        return $this->container['limitOfDay'];
    }

    /**
     * Sets limitOfDay
     * @param  int  $limitOfDay  单日限额
     * @return $this
     */
    public function setLimitOfDay($limitOfDay)
    {
        $this->container['limitOfDay'] = $limitOfDay;

        return $this;
    }

    /**
     * Gets limitOfMonth
     * @return int
     */
    public function getLimitOfMonth()
    {
        return $this->container['limitOfMonth'];
    }

    /**
     * Sets limitOfMonth
     * @param  int  $limitOfMonth  单月限额
     * @return $this
     */
    public function setLimitOfMonth($limitOfMonth)
    {
        $this->container['limitOfMonth'] = $limitOfMonth;

        return $this;
    }

    /**
     * Gets timesOfDay
     * @return int
     */
    public function getTimesOfDay()
    {
        return $this->container['timesOfDay'];
    }

    /**
     * Sets timesOfDay
     * @param  int  $timesOfDay  单日限次
     * @return $this
     */
    public function setTimesOfDay($timesOfDay)
    {
        $this->container['timesOfDay'] = $timesOfDay;

        return $this;
    }

    /**
     * Gets timesOfMonth
     * @return int
     */
    public function getTimesOfMonth()
    {
        return $this->container['timesOfMonth'];
    }

    /**
     * Sets timesOfMonth
     * @param  int  $timesOfMonth  单月限次
     * @return $this
     */
    public function setTimesOfMonth($timesOfMonth)
    {
        $this->container['timesOfMonth'] = $timesOfMonth;

        return $this;
    }

    /**
     * Gets limitMinOfBill
     * @return int
     */
    public function getLimitMinOfBill()
    {
        return $this->container['limitMinOfBill'];
    }

    /**
     * Sets limitMinOfBill
     * @param  int  $limitMinOfBill  单笔最小限额
     * @return $this
     */
    public function setLimitMinOfBill($limitMinOfBill)
    {
        $this->container['limitMinOfBill'] = $limitMinOfBill;

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


