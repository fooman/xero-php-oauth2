<?php
/**
 * ContactTotalOther
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Finance API
 *
 * The Finance API is a collection of endpoints which customers can use in the course of a loan application, which may assist lenders to gain the confidence they need to provide capital.
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

namespace XeroAPI\XeroPHP\Models\Finance;

use \ArrayAccess;
use \XeroAPI\XeroPHP\FinanceObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;

/**
 * ContactTotalOther Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContactTotalOther implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactTotalOther';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_outstanding_aged' => 'double',
        'total_voided' => 'double',
        'total_credited' => 'double',
        'transaction_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'total_outstanding_aged' => 'double',
        'total_voided' => 'double',
        'total_credited' => 'double',
        'transaction_count' => 'int32'
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
        'total_outstanding_aged' => 'totalOutstandingAged',
        'total_voided' => 'totalVoided',
        'total_credited' => 'totalCredited',
        'transaction_count' => 'transactionCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_outstanding_aged' => 'setTotalOutstandingAged',
        'total_voided' => 'setTotalVoided',
        'total_credited' => 'setTotalCredited',
        'transaction_count' => 'setTransactionCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_outstanding_aged' => 'getTotalOutstandingAged',
        'total_voided' => 'getTotalVoided',
        'total_credited' => 'getTotalCredited',
        'transaction_count' => 'getTransactionCount'
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
        $this->container['total_outstanding_aged'] = isset($data['total_outstanding_aged']) ? $data['total_outstanding_aged'] : null;
        $this->container['total_voided'] = isset($data['total_voided']) ? $data['total_voided'] : null;
        $this->container['total_credited'] = isset($data['total_credited']) ? $data['total_credited'] : null;
        $this->container['transaction_count'] = isset($data['transaction_count']) ? $data['transaction_count'] : null;
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
     * Gets total_outstanding_aged
     *
     * @return double|null
     */
    public function getTotalOutstandingAged()
    {
        return $this->container['total_outstanding_aged'];
    }

    /**
     * Sets total_outstanding_aged
     *
     * @param double|null $total_outstanding_aged Total outstanding invoice value for the contact within the period where the invoices are more than 90 days old
     *
     * @return $this
     */
    public function setTotalOutstandingAged($total_outstanding_aged)
    {

        $this->container['total_outstanding_aged'] = $total_outstanding_aged;

        return $this;
    }



    /**
     * Gets total_voided
     *
     * @return double|null
     */
    public function getTotalVoided()
    {
        return $this->container['total_voided'];
    }

    /**
     * Sets total_voided
     *
     * @param double|null $total_voided Total voided value for the contact.
     *
     * @return $this
     */
    public function setTotalVoided($total_voided)
    {

        $this->container['total_voided'] = $total_voided;

        return $this;
    }



    /**
     * Gets total_credited
     *
     * @return double|null
     */
    public function getTotalCredited()
    {
        return $this->container['total_credited'];
    }

    /**
     * Sets total_credited
     *
     * @param double|null $total_credited Total credited value for the contact.
     *
     * @return $this
     */
    public function setTotalCredited($total_credited)
    {

        $this->container['total_credited'] = $total_credited;

        return $this;
    }



    /**
     * Gets transaction_count
     *
     * @return int|null
     */
    public function getTransactionCount()
    {
        return $this->container['transaction_count'];
    }

    /**
     * Sets transaction_count
     *
     * @param int|null $transaction_count Number of transactions for the contact.
     *
     * @return $this
     */
    public function setTransactionCount($transaction_count)
    {

        $this->container['transaction_count'] = $transaction_count;

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
            FinanceObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


