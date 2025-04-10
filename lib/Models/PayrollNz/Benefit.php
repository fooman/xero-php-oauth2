<?php
/**
 * Benefit
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
 * Benefit Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Benefit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Benefit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'category' => 'string',
        'liability_account_id' => 'string',
        'expense_account_id' => 'string',
        'calculation_type_nz' => 'string',
        'standard_amount' => 'double',
        'percentage' => 'double',
        'company_max' => 'double',
        'current_record' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'name' => null,
        'category' => null,
        'liability_account_id' => 'uuid',
        'expense_account_id' => 'uuid',
        'calculation_type_nz' => null,
        'standard_amount' => 'double',
        'percentage' => 'double',
        'company_max' => 'double',
        'current_record' => null
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
        'id' => 'id',
        'name' => 'name',
        'category' => 'category',
        'liability_account_id' => 'liabilityAccountId',
        'expense_account_id' => 'expenseAccountId',
        'calculation_type_nz' => 'calculationTypeNZ',
        'standard_amount' => 'standardAmount',
        'percentage' => 'percentage',
        'company_max' => 'companyMax',
        'current_record' => 'currentRecord'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'category' => 'setCategory',
        'liability_account_id' => 'setLiabilityAccountId',
        'expense_account_id' => 'setExpenseAccountId',
        'calculation_type_nz' => 'setCalculationTypeNz',
        'standard_amount' => 'setStandardAmount',
        'percentage' => 'setPercentage',
        'company_max' => 'setCompanyMax',
        'current_record' => 'setCurrentRecord'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'category' => 'getCategory',
        'liability_account_id' => 'getLiabilityAccountId',
        'expense_account_id' => 'getExpenseAccountId',
        'calculation_type_nz' => 'getCalculationTypeNz',
        'standard_amount' => 'getStandardAmount',
        'percentage' => 'getPercentage',
        'company_max' => 'getCompanyMax',
        'current_record' => 'getCurrentRecord'
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

    const CATEGORY_KIWI_SAVER = 'KiwiSaver';
    const CATEGORY_COMPLYING_FUND = 'ComplyingFund';
    const CATEGORY_OTHER = 'Other';
    const CALCULATION_TYPE_NZ_FIXED_AMOUNT = 'FixedAmount';
    const CALCULATION_TYPE_NZ_PERCENTAGE_OF_TAXABLE_EARNINGS = 'PercentageOfTaxableEarnings';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_KIWI_SAVER,
            self::CATEGORY_COMPLYING_FUND,
            self::CATEGORY_OTHER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCalculationTypeNzAllowableValues()
    {
        return [
            self::CALCULATION_TYPE_NZ_FIXED_AMOUNT,
            self::CALCULATION_TYPE_NZ_PERCENTAGE_OF_TAXABLE_EARNINGS,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['liability_account_id'] = isset($data['liability_account_id']) ? $data['liability_account_id'] : null;
        $this->container['expense_account_id'] = isset($data['expense_account_id']) ? $data['expense_account_id'] : null;
        $this->container['calculation_type_nz'] = isset($data['calculation_type_nz']) ? $data['calculation_type_nz'] : null;
        $this->container['standard_amount'] = isset($data['standard_amount']) ? $data['standard_amount'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['company_max'] = isset($data['company_max']) ? $data['company_max'] : null;
        $this->container['current_record'] = isset($data['current_record']) ? $data['current_record'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['liability_account_id'] === null) {
            $invalidProperties[] = "'liability_account_id' can't be null";
        }
        if ($this->container['expense_account_id'] === null) {
            $invalidProperties[] = "'expense_account_id' can't be null";
        }
        $allowedValues = $this->getCalculationTypeNzAllowableValues();
        if (!is_null($this->container['calculation_type_nz']) && !in_array($this->container['calculation_type_nz'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'calculation_type_nz', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param string|null $id The Xero identifier for superannuation
     *
     * @return $this
     */
    public function setId($id)
    {

        $this->container['id'] = $id;

        return $this;
    }



    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the superannuations
     *
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category Superannuations Category type
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $allowedValues = $this->getCategoryAllowableValues();
        if (!in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['category'] = $category;

        return $this;
    }



    /**
     * Gets liability_account_id
     *
     * @return string
     */
    public function getLiabilityAccountId()
    {
        return $this->container['liability_account_id'];
    }

    /**
     * Sets liability_account_id
     *
     * @param string $liability_account_id Xero identifier for Liability Account
     *
     * @return $this
     */
    public function setLiabilityAccountId($liability_account_id)
    {

        $this->container['liability_account_id'] = $liability_account_id;

        return $this;
    }



    /**
     * Gets expense_account_id
     *
     * @return string
     */
    public function getExpenseAccountId()
    {
        return $this->container['expense_account_id'];
    }

    /**
     * Sets expense_account_id
     *
     * @param string $expense_account_id Xero identifier for Expense Account
     *
     * @return $this
     */
    public function setExpenseAccountId($expense_account_id)
    {

        $this->container['expense_account_id'] = $expense_account_id;

        return $this;
    }



    /**
     * Gets calculation_type_nz
     *
     * @return string|null
     */
    public function getCalculationTypeNz()
    {
        return $this->container['calculation_type_nz'];
    }

    /**
     * Sets calculation_type_nz
     *
     * @param string|null $calculation_type_nz Calculation Type of the superannuation either FixedAmount or PercentageOfTaxableEarnings
     *
     * @return $this
     */
    public function setCalculationTypeNz($calculation_type_nz)
    {
        $allowedValues = $this->getCalculationTypeNzAllowableValues();
        if (!is_null($calculation_type_nz) && !in_array($calculation_type_nz, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'calculation_type_nz', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['calculation_type_nz'] = $calculation_type_nz;

        return $this;
    }



    /**
     * Gets standard_amount
     *
     * @return double|null
     */
    public function getStandardAmount()
    {
        return $this->container['standard_amount'];
    }

    /**
     * Sets standard_amount
     *
     * @param double|null $standard_amount Standard amount of the superannuation
     *
     * @return $this
     */
    public function setStandardAmount($standard_amount)
    {

        $this->container['standard_amount'] = $standard_amount;

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
     * @param double|null $percentage Percentage of Taxable Earnings of the superannuation
     *
     * @return $this
     */
    public function setPercentage($percentage)
    {

        $this->container['percentage'] = $percentage;

        return $this;
    }



    /**
     * Gets company_max
     *
     * @return double|null
     */
    public function getCompanyMax()
    {
        return $this->container['company_max'];
    }

    /**
     * Sets company_max
     *
     * @param double|null $company_max Company Maximum amount of the superannuation
     *
     * @return $this
     */
    public function setCompanyMax($company_max)
    {

        $this->container['company_max'] = $company_max;

        return $this;
    }



    /**
     * Gets current_record
     *
     * @return bool|null
     */
    public function getCurrentRecord()
    {
        return $this->container['current_record'];
    }

    /**
     * Sets current_record
     *
     * @param bool|null $current_record Identifier of a record is active or not.
     *
     * @return $this
     */
    public function setCurrentRecord($current_record)
    {

        $this->container['current_record'] = $current_record;

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


