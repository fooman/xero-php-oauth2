<?php
/**
 * SuperannuationLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll NZ
 *
 * This is the Xero Payroll API for orgs in the NZ region.
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

namespace XeroAPI\XeroPHP\Models\PayrollNz;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollNzObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;

/**
 * SuperannuationLine Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SuperannuationLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SuperannuationLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'superannuation_type_id' => 'string',
        'display_name' => 'string',
        'amount' => 'double',
        'fixed_amount' => 'double',
        'percentage' => 'double',
        'manual_adjustment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'superannuation_type_id' => 'uuid',
        'display_name' => null,
        'amount' => 'double',
        'fixed_amount' => 'double',
        'percentage' => 'double',
        'manual_adjustment' => null
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
        'superannuation_type_id' => 'superannuationTypeID',
        'display_name' => 'displayName',
        'amount' => 'amount',
        'fixed_amount' => 'fixedAmount',
        'percentage' => 'percentage',
        'manual_adjustment' => 'manualAdjustment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'superannuation_type_id' => 'setSuperannuationTypeId',
        'display_name' => 'setDisplayName',
        'amount' => 'setAmount',
        'fixed_amount' => 'setFixedAmount',
        'percentage' => 'setPercentage',
        'manual_adjustment' => 'setManualAdjustment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'superannuation_type_id' => 'getSuperannuationTypeId',
        'display_name' => 'getDisplayName',
        'amount' => 'getAmount',
        'fixed_amount' => 'getFixedAmount',
        'percentage' => 'getPercentage',
        'manual_adjustment' => 'getManualAdjustment'
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
        $this->container['superannuation_type_id'] = isset($data['superannuation_type_id']) ? $data['superannuation_type_id'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['fixed_amount'] = isset($data['fixed_amount']) ? $data['fixed_amount'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['manual_adjustment'] = isset($data['manual_adjustment']) ? $data['manual_adjustment'] : null;
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
     * Gets superannuation_type_id
     *
     * @return string|null
     */
    public function getSuperannuationTypeId()
    {
        return $this->container['superannuation_type_id'];
    }

    /**
     * Sets superannuation_type_id
     *
     * @param string|null $superannuation_type_id Xero identifier for payroll superannuation type
     *
     * @return $this
     */
    public function setSuperannuationTypeId($superannuation_type_id)
    {

        $this->container['superannuation_type_id'] = $superannuation_type_id;

        return $this;
    }



    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name Benefit display name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {

        $this->container['display_name'] = $display_name;

        return $this;
    }



    /**
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount The amount of the superannuation line
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

        return $this;
    }



    /**
     * Gets fixed_amount
     *
     * @return double|null
     */
    public function getFixedAmount()
    {
        return $this->container['fixed_amount'];
    }

    /**
     * Sets fixed_amount
     *
     * @param double|null $fixed_amount Superannuation fixed amount
     *
     * @return $this
     */
    public function setFixedAmount($fixed_amount)
    {

        $this->container['fixed_amount'] = $fixed_amount;

        return $this;
    }



    /**
     * Gets percentage
     *
     * @return double|null
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param double|null $percentage Superannuation rate percentage
     *
     * @return $this
     */
    public function setPercentage($percentage)
    {

        $this->container['percentage'] = $percentage;

        return $this;
    }



    /**
     * Gets manual_adjustment
     *
     * @return bool|null
     */
    public function getManualAdjustment()
    {
        return $this->container['manual_adjustment'];
    }

    /**
     * Sets manual_adjustment
     *
     * @param bool|null $manual_adjustment manual adjustment made
     *
     * @return $this
     */
    public function setManualAdjustment($manual_adjustment)
    {

        $this->container['manual_adjustment'] = $manual_adjustment;

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
            PayrollNzObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


