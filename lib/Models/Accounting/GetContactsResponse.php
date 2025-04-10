<?php
/**
 * GetContactsResponse
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
 * GetContactsResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetContactsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetContactsResponse';

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
        'contacts' => '\XeroAPI\XeroPHP\Models\Accounting\Contact[]'
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
        'contacts' => null
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
        'contacts' => 'Contacts'
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
        'contacts' => 'setContacts'
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
        'contacts' => 'getContacts'
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
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['contacts']) && (count($this->container['contacts']) < 1)) {
            $invalidProperties[] = "invalid value for 'contacts', number of items must be greater than or equal to 1.";
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
     * Gets contacts
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\Contact[]|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\Contact[]|null $contacts contacts
     *
     * @return $this
     */
    public function setContacts($contacts)
    {


        if (!is_null($contacts) && (count($contacts) < 1)) {
            throw new \InvalidArgumentException('invalid length for $contacts when calling GetContactsResponse., number of items must be greater than or equal to 1.');
        }

        $this->container['contacts'] = $contacts;

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


