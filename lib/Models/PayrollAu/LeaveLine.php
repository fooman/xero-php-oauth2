<?php
/**
 * LeaveLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU API
 *
 * This is the Xero Payroll API for orgs in Australia region.
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

namespace XeroAPI\XeroPHP\Models\PayrollAu;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;

/**
 * LeaveLine Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LeaveLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LeaveLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'leave_type_id' => 'string',
        'calculation_type' => '\XeroAPI\XeroPHP\Models\PayrollAu\LeaveLineCalculationType',
        'entitlement_final_pay_payout_type' => '\XeroAPI\XeroPHP\Models\PayrollAu\EntitlementFinalPayPayoutType',
        'employment_termination_payment_type' => '\XeroAPI\XeroPHP\Models\PayrollAu\EmploymentTerminationPaymentType',
        'include_superannuation_guarantee_contribution' => 'bool',
        'number_of_units' => 'double',
        'annual_number_of_units' => 'double',
        'full_time_number_of_units_per_period' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'leave_type_id' => 'uuid',
        'calculation_type' => null,
        'entitlement_final_pay_payout_type' => null,
        'employment_termination_payment_type' => null,
        'include_superannuation_guarantee_contribution' => null,
        'number_of_units' => 'double',
        'annual_number_of_units' => 'double',
        'full_time_number_of_units_per_period' => 'double'
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
        'leave_type_id' => 'LeaveTypeID',
        'calculation_type' => 'CalculationType',
        'entitlement_final_pay_payout_type' => 'EntitlementFinalPayPayoutType',
        'employment_termination_payment_type' => 'EmploymentTerminationPaymentType',
        'include_superannuation_guarantee_contribution' => 'IncludeSuperannuationGuaranteeContribution',
        'number_of_units' => 'NumberOfUnits',
        'annual_number_of_units' => 'AnnualNumberOfUnits',
        'full_time_number_of_units_per_period' => 'FullTimeNumberOfUnitsPerPeriod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leave_type_id' => 'setLeaveTypeId',
        'calculation_type' => 'setCalculationType',
        'entitlement_final_pay_payout_type' => 'setEntitlementFinalPayPayoutType',
        'employment_termination_payment_type' => 'setEmploymentTerminationPaymentType',
        'include_superannuation_guarantee_contribution' => 'setIncludeSuperannuationGuaranteeContribution',
        'number_of_units' => 'setNumberOfUnits',
        'annual_number_of_units' => 'setAnnualNumberOfUnits',
        'full_time_number_of_units_per_period' => 'setFullTimeNumberOfUnitsPerPeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leave_type_id' => 'getLeaveTypeId',
        'calculation_type' => 'getCalculationType',
        'entitlement_final_pay_payout_type' => 'getEntitlementFinalPayPayoutType',
        'employment_termination_payment_type' => 'getEmploymentTerminationPaymentType',
        'include_superannuation_guarantee_contribution' => 'getIncludeSuperannuationGuaranteeContribution',
        'number_of_units' => 'getNumberOfUnits',
        'annual_number_of_units' => 'getAnnualNumberOfUnits',
        'full_time_number_of_units_per_period' => 'getFullTimeNumberOfUnitsPerPeriod'
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
        $this->container['leave_type_id'] = isset($data['leave_type_id']) ? $data['leave_type_id'] : null;
        $this->container['calculation_type'] = isset($data['calculation_type']) ? $data['calculation_type'] : null;
        $this->container['entitlement_final_pay_payout_type'] = isset($data['entitlement_final_pay_payout_type']) ? $data['entitlement_final_pay_payout_type'] : null;
        $this->container['employment_termination_payment_type'] = isset($data['employment_termination_payment_type']) ? $data['employment_termination_payment_type'] : null;
        $this->container['include_superannuation_guarantee_contribution'] = isset($data['include_superannuation_guarantee_contribution']) ? $data['include_superannuation_guarantee_contribution'] : null;
        $this->container['number_of_units'] = isset($data['number_of_units']) ? $data['number_of_units'] : null;
        $this->container['annual_number_of_units'] = isset($data['annual_number_of_units']) ? $data['annual_number_of_units'] : null;
        $this->container['full_time_number_of_units_per_period'] = isset($data['full_time_number_of_units_per_period']) ? $data['full_time_number_of_units_per_period'] : null;
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
     * Gets leave_type_id
     *
     * @return string|null
     */
    public function getLeaveTypeId()
    {
        return $this->container['leave_type_id'];
    }

    /**
     * Sets leave_type_id
     *
     * @param string|null $leave_type_id Xero leave type identifier
     *
     * @return $this
     */
    public function setLeaveTypeId($leave_type_id)
    {

        $this->container['leave_type_id'] = $leave_type_id;

        return $this;
    }



    /**
     * Gets calculation_type
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\LeaveLineCalculationType|null
     */
    public function getCalculationType()
    {
        return $this->container['calculation_type'];
    }

    /**
     * Sets calculation_type
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\LeaveLineCalculationType|null $calculation_type calculation_type
     *
     * @return $this
     */
    public function setCalculationType($calculation_type)
    {

        $this->container['calculation_type'] = $calculation_type;

        return $this;
    }



    /**
     * Gets entitlement_final_pay_payout_type
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\EntitlementFinalPayPayoutType|null
     */
    public function getEntitlementFinalPayPayoutType()
    {
        return $this->container['entitlement_final_pay_payout_type'];
    }

    /**
     * Sets entitlement_final_pay_payout_type
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\EntitlementFinalPayPayoutType|null $entitlement_final_pay_payout_type entitlement_final_pay_payout_type
     *
     * @return $this
     */
    public function setEntitlementFinalPayPayoutType($entitlement_final_pay_payout_type)
    {

        $this->container['entitlement_final_pay_payout_type'] = $entitlement_final_pay_payout_type;

        return $this;
    }



    /**
     * Gets employment_termination_payment_type
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\EmploymentTerminationPaymentType|null
     */
    public function getEmploymentTerminationPaymentType()
    {
        return $this->container['employment_termination_payment_type'];
    }

    /**
     * Sets employment_termination_payment_type
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\EmploymentTerminationPaymentType|null $employment_termination_payment_type employment_termination_payment_type
     *
     * @return $this
     */
    public function setEmploymentTerminationPaymentType($employment_termination_payment_type)
    {

        $this->container['employment_termination_payment_type'] = $employment_termination_payment_type;

        return $this;
    }



    /**
     * Gets include_superannuation_guarantee_contribution
     *
     * @return bool|null
     */
    public function getIncludeSuperannuationGuaranteeContribution()
    {
        return $this->container['include_superannuation_guarantee_contribution'];
    }

    /**
     * Sets include_superannuation_guarantee_contribution
     *
     * @param bool|null $include_superannuation_guarantee_contribution amount of leave line
     *
     * @return $this
     */
    public function setIncludeSuperannuationGuaranteeContribution($include_superannuation_guarantee_contribution)
    {

        $this->container['include_superannuation_guarantee_contribution'] = $include_superannuation_guarantee_contribution;

        return $this;
    }



    /**
     * Gets number_of_units
     *
     * @return double|null
     */
    public function getNumberOfUnits()
    {
        return $this->container['number_of_units'];
    }

    /**
     * Sets number_of_units
     *
     * @param double|null $number_of_units Number of units for leave line.
     *
     * @return $this
     */
    public function setNumberOfUnits($number_of_units)
    {

        $this->container['number_of_units'] = $number_of_units;

        return $this;
    }



    /**
     * Gets annual_number_of_units
     *
     * @return double|null
     */
    public function getAnnualNumberOfUnits()
    {
        return $this->container['annual_number_of_units'];
    }

    /**
     * Sets annual_number_of_units
     *
     * @param double|null $annual_number_of_units Hours of leave accrued each year
     *
     * @return $this
     */
    public function setAnnualNumberOfUnits($annual_number_of_units)
    {

        $this->container['annual_number_of_units'] = $annual_number_of_units;

        return $this;
    }



    /**
     * Gets full_time_number_of_units_per_period
     *
     * @return double|null
     */
    public function getFullTimeNumberOfUnitsPerPeriod()
    {
        return $this->container['full_time_number_of_units_per_period'];
    }

    /**
     * Sets full_time_number_of_units_per_period
     *
     * @param double|null $full_time_number_of_units_per_period Normal ordinary earnings number of units for leave line.
     *
     * @return $this
     */
    public function setFullTimeNumberOfUnitsPerPeriod($full_time_number_of_units_per_period)
    {

        $this->container['full_time_number_of_units_per_period'] = $full_time_number_of_units_per_period;

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
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


