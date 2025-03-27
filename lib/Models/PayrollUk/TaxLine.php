<?php
/**
 * TaxLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll UK
 *
 * This is the Xero Payroll API for orgs in the UK region.
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

namespace XeroAPI\XeroPHP\Models\PayrollUk;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollUkObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;

/**
 * TaxLine Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaxLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tax_line_id' => 'string',
        'description' => 'string',
        'is_employer_tax' => 'bool',
        'amount' => 'double',
        'global_tax_type_id' => 'string',
        'manual_adjustment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'tax_line_id' => 'uuid',
        'description' => null,
        'is_employer_tax' => null,
        'amount' => 'double',
        'global_tax_type_id' => null,
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
        'tax_line_id' => 'taxLineID',
        'description' => 'description',
        'is_employer_tax' => 'isEmployerTax',
        'amount' => 'amount',
        'global_tax_type_id' => 'globalTaxTypeID',
        'manual_adjustment' => 'manualAdjustment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_line_id' => 'setTaxLineId',
        'description' => 'setDescription',
        'is_employer_tax' => 'setIsEmployerTax',
        'amount' => 'setAmount',
        'global_tax_type_id' => 'setGlobalTaxTypeId',
        'manual_adjustment' => 'setManualAdjustment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_line_id' => 'getTaxLineId',
        'description' => 'getDescription',
        'is_employer_tax' => 'getIsEmployerTax',
        'amount' => 'getAmount',
        'global_tax_type_id' => 'getGlobalTaxTypeId',
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
        $this->container['tax_line_id'] = isset($data['tax_line_id']) ? $data['tax_line_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['is_employer_tax'] = isset($data['is_employer_tax']) ? $data['is_employer_tax'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['global_tax_type_id'] = isset($data['global_tax_type_id']) ? $data['global_tax_type_id'] : null;
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
     * Gets tax_line_id
     *
     * @return string|null
     */
    public function getTaxLineId()
    {
        return $this->container['tax_line_id'];
    }

    /**
     * Sets tax_line_id
     *
     * @param string|null $tax_line_id Xero identifier for payroll tax line
     *
     * @return $this
     */
    public function setTaxLineId($tax_line_id)
    {

        $this->container['tax_line_id'] = $tax_line_id;

        return $this;
    }



    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Tax line description
     *
     * @return $this
     */
    public function setDescription($description)
    {

        $this->container['description'] = $description;

        return $this;
    }



    /**
     * Gets is_employer_tax
     *
     * @return bool|null
     */
    public function getIsEmployerTax()
    {
        return $this->container['is_employer_tax'];
    }

    /**
     * Sets is_employer_tax
     *
     * @param bool|null $is_employer_tax Identifies if the amount is paid for by the employee or employer. True if employer pays the tax
     *
     * @return $this
     */
    public function setIsEmployerTax($is_employer_tax)
    {

        $this->container['is_employer_tax'] = $is_employer_tax;

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
     * @param double|null $amount The amount of the tax line
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

        return $this;
    }



    /**
     * Gets global_tax_type_id
     *
     * @return string|null
     */
    public function getGlobalTaxTypeId()
    {
        return $this->container['global_tax_type_id'];
    }

    /**
     * Sets global_tax_type_id
     *
     * @param string|null $global_tax_type_id Tax type ID
     *
     * @return $this
     */
    public function setGlobalTaxTypeId($global_tax_type_id)
    {

        $this->container['global_tax_type_id'] = $global_tax_type_id;

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
     * @param bool|null $manual_adjustment Identifies if the tax line is a manual adjustment
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
            PayrollUkObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


