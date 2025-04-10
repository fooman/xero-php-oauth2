<?php
/**
 * LeaveType
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
 * LeaveType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LeaveType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LeaveType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'type_of_units' => 'string',
        'leave_type_id' => 'string',
        'normal_entitlement' => 'double',
        'leave_loading_rate' => 'double',
        'updated_date_utc' => 'string',
        'is_paid_leave' => 'bool',
        'show_on_payslip' => 'bool',
        'current_record' => 'bool',
        'leave_category_code' => '\XeroAPI\XeroPHP\Models\PayrollAu\LeaveCategoryCode',
        'sgc_exempt' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'type_of_units' => null,
        'leave_type_id' => 'uuid',
        'normal_entitlement' => 'double',
        'leave_loading_rate' => 'double',
        'updated_date_utc' => null,
        'is_paid_leave' => null,
        'show_on_payslip' => null,
        'current_record' => null,
        'leave_category_code' => null,
        'sgc_exempt' => null
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
        'name' => 'Name',
        'type_of_units' => 'TypeOfUnits',
        'leave_type_id' => 'LeaveTypeID',
        'normal_entitlement' => 'NormalEntitlement',
        'leave_loading_rate' => 'LeaveLoadingRate',
        'updated_date_utc' => 'UpdatedDateUTC',
        'is_paid_leave' => 'IsPaidLeave',
        'show_on_payslip' => 'ShowOnPayslip',
        'current_record' => 'CurrentRecord',
        'leave_category_code' => 'LeaveCategoryCode',
        'sgc_exempt' => 'SGCExempt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'type_of_units' => 'setTypeOfUnits',
        'leave_type_id' => 'setLeaveTypeId',
        'normal_entitlement' => 'setNormalEntitlement',
        'leave_loading_rate' => 'setLeaveLoadingRate',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'is_paid_leave' => 'setIsPaidLeave',
        'show_on_payslip' => 'setShowOnPayslip',
        'current_record' => 'setCurrentRecord',
        'leave_category_code' => 'setLeaveCategoryCode',
        'sgc_exempt' => 'setSgcExempt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'type_of_units' => 'getTypeOfUnits',
        'leave_type_id' => 'getLeaveTypeId',
        'normal_entitlement' => 'getNormalEntitlement',
        'leave_loading_rate' => 'getLeaveLoadingRate',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'is_paid_leave' => 'getIsPaidLeave',
        'show_on_payslip' => 'getShowOnPayslip',
        'current_record' => 'getCurrentRecord',
        'leave_category_code' => 'getLeaveCategoryCode',
        'sgc_exempt' => 'getSgcExempt'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type_of_units'] = isset($data['type_of_units']) ? $data['type_of_units'] : null;
        $this->container['leave_type_id'] = isset($data['leave_type_id']) ? $data['leave_type_id'] : null;
        $this->container['normal_entitlement'] = isset($data['normal_entitlement']) ? $data['normal_entitlement'] : null;
        $this->container['leave_loading_rate'] = isset($data['leave_loading_rate']) ? $data['leave_loading_rate'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['is_paid_leave'] = isset($data['is_paid_leave']) ? $data['is_paid_leave'] : null;
        $this->container['show_on_payslip'] = isset($data['show_on_payslip']) ? $data['show_on_payslip'] : null;
        $this->container['current_record'] = isset($data['current_record']) ? $data['current_record'] : null;
        $this->container['leave_category_code'] = isset($data['leave_category_code']) ? $data['leave_category_code'] : null;
        $this->container['sgc_exempt'] = isset($data['sgc_exempt']) ? $data['sgc_exempt'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the earnings rate (max length = 100)
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling LeaveType., must be smaller than or equal to 100.');
        }


        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets type_of_units
     *
     * @return string|null
     */
    public function getTypeOfUnits()
    {
        return $this->container['type_of_units'];
    }

    /**
     * Sets type_of_units
     *
     * @param string|null $type_of_units The type of units by which leave entitlements are normally tracked. These are typically the same as the type of units used for the employee’s ordinary earnings rate
     *
     * @return $this
     */
    public function setTypeOfUnits($type_of_units)
    {

        $this->container['type_of_units'] = $type_of_units;

        return $this;
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
     * @param string|null $leave_type_id Xero identifier
     *
     * @return $this
     */
    public function setLeaveTypeId($leave_type_id)
    {

        $this->container['leave_type_id'] = $leave_type_id;

        return $this;
    }



    /**
     * Gets normal_entitlement
     *
     * @return double|null
     */
    public function getNormalEntitlement()
    {
        return $this->container['normal_entitlement'];
    }

    /**
     * Sets normal_entitlement
     *
     * @param double|null $normal_entitlement The number of units the employee is entitled to each year
     *
     * @return $this
     */
    public function setNormalEntitlement($normal_entitlement)
    {

        $this->container['normal_entitlement'] = $normal_entitlement;

        return $this;
    }



    /**
     * Gets leave_loading_rate
     *
     * @return double|null
     */
    public function getLeaveLoadingRate()
    {
        return $this->container['leave_loading_rate'];
    }

    /**
     * Sets leave_loading_rate
     *
     * @param double|null $leave_loading_rate Enter an amount here if your organisation pays an additional percentage on top of ordinary earnings when your employees take leave (typically 17.5%)
     *
     * @return $this
     */
    public function setLeaveLoadingRate($leave_loading_rate)
    {

        $this->container['leave_loading_rate'] = $leave_loading_rate;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return string|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }
    public function getUpdatedDateUtcAsDate()
    {
      if ($this->getUpdatedDateUtc() != null) {
        return StringUtil::convertStringToDateTime($this->getUpdatedDateUtc());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets updated_date_utc
     *
     * @param string|null $updated_date_utc Last modified timestamp
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets is_paid_leave
     *
     * @return bool|null
     */
    public function getIsPaidLeave()
    {
        return $this->container['is_paid_leave'];
    }

    /**
     * Sets is_paid_leave
     *
     * @param bool|null $is_paid_leave Set this to indicate that an employee will be paid when taking this type of leave
     *
     * @return $this
     */
    public function setIsPaidLeave($is_paid_leave)
    {

        $this->container['is_paid_leave'] = $is_paid_leave;

        return $this;
    }



    /**
     * Gets show_on_payslip
     *
     * @return bool|null
     */
    public function getShowOnPayslip()
    {
        return $this->container['show_on_payslip'];
    }

    /**
     * Sets show_on_payslip
     *
     * @param bool|null $show_on_payslip Set this if you want a balance for this leave type to be shown on your employee’s payslips
     *
     * @return $this
     */
    public function setShowOnPayslip($show_on_payslip)
    {

        $this->container['show_on_payslip'] = $show_on_payslip;

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
     * @param bool|null $current_record Is the current record
     *
     * @return $this
     */
    public function setCurrentRecord($current_record)
    {

        $this->container['current_record'] = $current_record;

        return $this;
    }



    /**
     * Gets leave_category_code
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\LeaveCategoryCode|null
     */
    public function getLeaveCategoryCode()
    {
        return $this->container['leave_category_code'];
    }

    /**
     * Sets leave_category_code
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\LeaveCategoryCode|null $leave_category_code leave_category_code
     *
     * @return $this
     */
    public function setLeaveCategoryCode($leave_category_code)
    {

        $this->container['leave_category_code'] = $leave_category_code;

        return $this;
    }



    /**
     * Gets sgc_exempt
     *
     * @return bool|null
     */
    public function getSgcExempt()
    {
        return $this->container['sgc_exempt'];
    }

    /**
     * Sets sgc_exempt
     *
     * @param bool|null $sgc_exempt Set this to indicate that the leave type is exempt from superannuation guarantee contribution
     *
     * @return $this
     */
    public function setSgcExempt($sgc_exempt)
    {

        $this->container['sgc_exempt'] = $sgc_exempt;

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


