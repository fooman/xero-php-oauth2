<?php
/**
 * GetManualJournalsResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;

/**
 * GetManualJournalsResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetManualJournalsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetManualJournalsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'status' => 'string',
        'provider_name' => 'string',
        'date_time_utc' => 'string',
        'page_info' => '\XeroAPI\XeroPHP\Models\Accounting\PageInfo',
        'manual_journals' => '\XeroAPI\XeroPHP\Models\Accounting\ManualJournal[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'provider_name' => null,
        'date_time_utc' => null,
        'page_info' => null,
        'manual_journals' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'Id',
        'status' => 'Status',
        'provider_name' => 'ProviderName',
        'date_time_utc' => 'DateTimeUTC',
        'page_info' => 'PageInfo',
        'manual_journals' => 'ManualJournals'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'provider_name' => 'setProviderName',
        'date_time_utc' => 'setDateTimeUtc',
        'page_info' => 'setPageInfo',
        'manual_journals' => 'setManualJournals'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'provider_name' => 'getProviderName',
        'date_time_utc' => 'getDateTimeUtc',
        'page_info' => 'getPageInfo',
        'manual_journals' => 'getManualJournals'
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
        return self::$openAPIModelName;
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
    public function __construct(?array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['provider_name'] = isset($data['provider_name']) ? $data['provider_name'] : null;
        $this->container['date_time_utc'] = isset($data['date_time_utc']) ? $data['date_time_utc'] : null;
        $this->container['page_info'] = isset($data['page_info']) ? $data['page_info'] : null;
        $this->container['manual_journals'] = isset($data['manual_journals']) ? $data['manual_journals'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['manual_journals']) && (count($this->container['manual_journals']) < 1)) {
            $invalidProperties[] = "invalid value for 'manual_journals', number of items must be greater than or equal to 1.";
        }

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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {

        $this->container['id'] = $id;

        return $this;
    }



    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {

        $this->container['status'] = $status;

        return $this;
    }



    /**
     * Gets provider_name
     *
     * @return string|null
     */
    public function getProviderName()
    {
        return $this->container['provider_name'];
    }

    /**
     * Sets provider_name
     *
     * @param string|null $provider_name provider_name
     *
     * @return $this
     */
    public function setProviderName($provider_name)
    {

        $this->container['provider_name'] = $provider_name;

        return $this;
    }



    /**
     * Gets date_time_utc
     *
     * @return string|null
     */
    public function getDateTimeUtc()
    {
        return $this->container['date_time_utc'];
    }

    /**
     * Sets date_time_utc
     *
     * @param string|null $date_time_utc date_time_utc
     *
     * @return $this
     */
    public function setDateTimeUtc($date_time_utc)
    {

        $this->container['date_time_utc'] = $date_time_utc;

        return $this;
    }



    /**
     * Gets page_info
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\PageInfo|null
     */
    public function getPageInfo()
    {
        return $this->container['page_info'];
    }

    /**
     * Sets page_info
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\PageInfo|null $page_info page_info
     *
     * @return $this
     */
    public function setPageInfo($page_info)
    {

        $this->container['page_info'] = $page_info;

        return $this;
    }



    /**
     * Gets manual_journals
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ManualJournal[]|null
     */
    public function getManualJournals()
    {
        return $this->container['manual_journals'];
    }

    /**
     * Sets manual_journals
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ManualJournal[]|null $manual_journals manual_journals
     *
     * @return $this
     */
    public function setManualJournals($manual_journals)
    {


        if (!is_null($manual_journals) && (count($manual_journals) < 1)) {
            throw new \InvalidArgumentException('invalid length for $manual_journals when calling GetManualJournalsResponse., number of items must be greater than or equal to 1.');
        }

        $this->container['manual_journals'] = $manual_journals;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


