<?php
/**
 * GetDigits
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FreeClimb API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * GetDigits Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetDigits extends PerCLCommand 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetDigits';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_url' => 'string',
        'digit_timeout_ms' => 'int',
        'finish_on_key' => 'string',
        'flush_buffer' => 'bool',
        'initial_timeout_ms' => 'string',
        'max_digits' => 'int',
        'min_digits' => 'int',
        'prompts' => '\OpenAPI\Client\Model\PerCLCommand[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'action_url' => null,
        'digit_timeout_ms' => null,
        'finish_on_key' => null,
        'flush_buffer' => null,
        'initial_timeout_ms' => null,
        'max_digits' => null,
        'min_digits' => null,
        'prompts' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'action_url' => 'actionUrl',
        'digit_timeout_ms' => 'digitTimeoutMs',
        'finish_on_key' => 'finishOnKey',
        'flush_buffer' => 'flushBuffer',
        'initial_timeout_ms' => 'initialTimeoutMs',
        'max_digits' => 'maxDigits',
        'min_digits' => 'minDigits',
        'prompts' => 'prompts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_url' => 'setActionUrl',
        'digit_timeout_ms' => 'setDigitTimeoutMs',
        'finish_on_key' => 'setFinishOnKey',
        'flush_buffer' => 'setFlushBuffer',
        'initial_timeout_ms' => 'setInitialTimeoutMs',
        'max_digits' => 'setMaxDigits',
        'min_digits' => 'setMinDigits',
        'prompts' => 'setPrompts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_url' => 'getActionUrl',
        'digit_timeout_ms' => 'getDigitTimeoutMs',
        'finish_on_key' => 'getFinishOnKey',
        'flush_buffer' => 'getFlushBuffer',
        'initial_timeout_ms' => 'getInitialTimeoutMs',
        'max_digits' => 'getMaxDigits',
        'min_digits' => 'getMinDigits',
        'prompts' => 'getPrompts'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['action_url'] = isset($data['action_url']) ? $data['action_url'] : null;
        $this->container['digit_timeout_ms'] = isset($data['digit_timeout_ms']) ? $data['digit_timeout_ms'] : null;
        $this->container['finish_on_key'] = isset($data['finish_on_key']) ? $data['finish_on_key'] : null;
        $this->container['flush_buffer'] = isset($data['flush_buffer']) ? $data['flush_buffer'] : null;
        $this->container['initial_timeout_ms'] = isset($data['initial_timeout_ms']) ? $data['initial_timeout_ms'] : null;
        $this->container['max_digits'] = isset($data['max_digits']) ? $data['max_digits'] : null;
        $this->container['min_digits'] = isset($data['min_digits']) ? $data['min_digits'] : null;
        $this->container['prompts'] = isset($data['prompts']) ? $data['prompts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets action_url
     *
     * @return string|null
     */
    public function getActionUrl()
    {
        return $this->container['action_url'];
    }

    /**
     * Sets action_url
     *
     * @param string|null $action_url action_url
     *
     * @return $this
     */
    public function setActionUrl($action_url)
    {
        $this->container['action_url'] = $action_url;

        return $this;
    }

    /**
     * Gets digit_timeout_ms
     *
     * @return int|null
     */
    public function getDigitTimeoutMs()
    {
        return $this->container['digit_timeout_ms'];
    }

    /**
     * Sets digit_timeout_ms
     *
     * @param int|null $digit_timeout_ms digit_timeout_ms
     *
     * @return $this
     */
    public function setDigitTimeoutMs($digit_timeout_ms)
    {
        $this->container['digit_timeout_ms'] = $digit_timeout_ms;

        return $this;
    }

    /**
     * Gets finish_on_key
     *
     * @return string|null
     */
    public function getFinishOnKey()
    {
        return $this->container['finish_on_key'];
    }

    /**
     * Sets finish_on_key
     *
     * @param string|null $finish_on_key finish_on_key
     *
     * @return $this
     */
    public function setFinishOnKey($finish_on_key)
    {
        $this->container['finish_on_key'] = $finish_on_key;

        return $this;
    }

    /**
     * Gets flush_buffer
     *
     * @return bool|null
     */
    public function getFlushBuffer()
    {
        return $this->container['flush_buffer'];
    }

    /**
     * Sets flush_buffer
     *
     * @param bool|null $flush_buffer flush_buffer
     *
     * @return $this
     */
    public function setFlushBuffer($flush_buffer)
    {
        $this->container['flush_buffer'] = $flush_buffer;

        return $this;
    }

    /**
     * Gets initial_timeout_ms
     *
     * @return string|null
     */
    public function getInitialTimeoutMs()
    {
        return $this->container['initial_timeout_ms'];
    }

    /**
     * Sets initial_timeout_ms
     *
     * @param string|null $initial_timeout_ms initial_timeout_ms
     *
     * @return $this
     */
    public function setInitialTimeoutMs($initial_timeout_ms)
    {
        $this->container['initial_timeout_ms'] = $initial_timeout_ms;

        return $this;
    }

    /**
     * Gets max_digits
     *
     * @return int|null
     */
    public function getMaxDigits()
    {
        return $this->container['max_digits'];
    }

    /**
     * Sets max_digits
     *
     * @param int|null $max_digits max_digits
     *
     * @return $this
     */
    public function setMaxDigits($max_digits)
    {
        $this->container['max_digits'] = $max_digits;

        return $this;
    }

    /**
     * Gets min_digits
     *
     * @return int|null
     */
    public function getMinDigits()
    {
        return $this->container['min_digits'];
    }

    /**
     * Sets min_digits
     *
     * @param int|null $min_digits min_digits
     *
     * @return $this
     */
    public function setMinDigits($min_digits)
    {
        $this->container['min_digits'] = $min_digits;

        return $this;
    }

    /**
     * Gets prompts
     *
     * @return \OpenAPI\Client\Model\PerCLCommand[]|null
     */
    public function getPrompts()
    {
        return $this->container['prompts'];
    }

    /**
     * Sets prompts
     *
     * @param \OpenAPI\Client\Model\PerCLCommand[]|null $prompts prompts
     *
     * @return $this
     */
    public function setPrompts($prompts)
    {
        $this->container['prompts'] = $prompts;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

