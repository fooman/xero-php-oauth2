<?php
/**
 * TrialBalanceMovement
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
 * TrialBalanceMovement Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrialBalanceMovement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TrialBalanceMovement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'debits' => 'double',
        'credits' => 'double',
        'movement' => '\XeroAPI\XeroPHP\Models\Finance\TrialBalanceEntry',
        'signed_movement' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'debits' => 'double',
        'credits' => 'double',
        'movement' => null,
        'signed_movement' => 'double'
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
        'debits' => 'debits',
        'credits' => 'credits',
        'movement' => 'movement',
        'signed_movement' => 'signedMovement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'debits' => 'setDebits',
        'credits' => 'setCredits',
        'movement' => 'setMovement',
        'signed_movement' => 'setSignedMovement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'debits' => 'getDebits',
        'credits' => 'getCredits',
        'movement' => 'getMovement',
        'signed_movement' => 'getSignedMovement'
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
        $this->container['debits'] = isset($data['debits']) ? $data['debits'] : null;
        $this->container['credits'] = isset($data['credits']) ? $data['credits'] : null;
        $this->container['movement'] = isset($data['movement']) ? $data['movement'] : null;
        $this->container['signed_movement'] = isset($data['signed_movement']) ? $data['signed_movement'] : null;
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
     * Gets debits
     *
     * @return double|null
     */
    public function getDebits()
    {
        return $this->container['debits'];
    }

    /**
     * Sets debits
     *
     * @param double|null $debits Debit amount
     *
     * @return $this
     */
    public function setDebits($debits)
    {

        $this->container['debits'] = $debits;

        return $this;
    }



    /**
     * Gets credits
     *
     * @return double|null
     */
    public function getCredits()
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     *
     * @param double|null $credits Credit amount
     *
     * @return $this
     */
    public function setCredits($credits)
    {

        $this->container['credits'] = $credits;

        return $this;
    }



    /**
     * Gets movement
     *
     * @return \XeroAPI\XeroPHP\Models\Finance\TrialBalanceEntry|null
     */
    public function getMovement()
    {
        return $this->container['movement'];
    }

    /**
     * Sets movement
     *
     * @param \XeroAPI\XeroPHP\Models\Finance\TrialBalanceEntry|null $movement movement
     *
     * @return $this
     */
    public function setMovement($movement)
    {

        $this->container['movement'] = $movement;

        return $this;
    }



    /**
     * Gets signed_movement
     *
     * @return double|null
     */
    public function getSignedMovement()
    {
        return $this->container['signed_movement'];
    }

    /**
     * Sets signed_movement
     *
     * @param double|null $signed_movement Value of movement. Expense and Asset accounts code debits as positive. Revenue, Liability, and Equity accounts code debits as negative
     *
     * @return $this
     */
    public function setSignedMovement($signed_movement)
    {

        $this->container['signed_movement'] = $signed_movement;

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


