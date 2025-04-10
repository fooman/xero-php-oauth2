<?php
/**
 * PaidLeaveEarningsLine
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
 * PaidLeaveEarningsLine Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaidLeaveEarningsLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaidLeaveEarningsLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'leave_type_id' => 'string',
        'amount' => 'double',
        'sgc_applied_leave_loading_amount' => 'double',
        'sgc_exempted_leave_loading_amount' => 'double',
        'reset_stp_categorisation' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'leave_type_id' => 'uuid',
        'amount' => 'double',
        'sgc_applied_leave_loading_amount' => 'double',
        'sgc_exempted_leave_loading_amount' => 'double',
        'reset_stp_categorisation' => null
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
        'amount' => 'Amount',
        'sgc_applied_leave_loading_amount' => 'SGCAppliedLeaveLoadingAmount',
        'sgc_exempted_leave_loading_amount' => 'SGCExemptedLeaveLoadingAmount',
        'reset_stp_categorisation' => 'ResetSTPCategorisation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leave_type_id' => 'setLeaveTypeId',
        'amount' => 'setAmount',
        'sgc_applied_leave_loading_amount' => 'setSgcAppliedLeaveLoadingAmount',
        'sgc_exempted_leave_loading_amount' => 'setSgcExemptedLeaveLoadingAmount',
        'reset_stp_categorisation' => 'setResetStpCategorisation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leave_type_id' => 'getLeaveTypeId',
        'amount' => 'getAmount',
        'sgc_applied_leave_loading_amount' => 'getSgcAppliedLeaveLoadingAmount',
        'sgc_exempted_leave_loading_amount' => 'getSgcExemptedLeaveLoadingAmount',
        'reset_stp_categorisation' => 'getResetStpCategorisation'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['sgc_applied_leave_loading_amount'] = isset($data['sgc_applied_leave_loading_amount']) ? $data['sgc_applied_leave_loading_amount'] : null;
        $this->container['sgc_exempted_leave_loading_amount'] = isset($data['sgc_exempted_leave_loading_amount']) ? $data['sgc_exempted_leave_loading_amount'] : null;
        $this->container['reset_stp_categorisation'] = isset($data['reset_stp_categorisation']) ? $data['reset_stp_categorisation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['leave_type_id'] === null) {
            $invalidProperties[] = "'leave_type_id' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
     * Gets leave_type_id
     *
     * @return string
     */
    public function getLeaveTypeId()
    {
        return $this->container['leave_type_id'];
    }

    /**
     * Sets leave_type_id
     *
     * @param string $leave_type_id Xero leave type identifier
     *
     * @return $this
     */
    public function setLeaveTypeId($leave_type_id)
    {

        $this->container['leave_type_id'] = $leave_type_id;

        return $this;
    }



    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Paid leave amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

        return $this;
    }



    /**
     * Gets sgc_applied_leave_loading_amount
     *
     * @return double|null
     */
    public function getSgcAppliedLeaveLoadingAmount()
    {
        return $this->container['sgc_applied_leave_loading_amount'];
    }

    /**
     * Sets sgc_applied_leave_loading_amount
     *
     * @param double|null $sgc_applied_leave_loading_amount The amount of leave loading applied for the leave type that is subject to Superannuation Guarantee Contributions. *Only applicable for Leave Types with Annual Leave Categories
     *
     * @return $this
     */
    public function setSgcAppliedLeaveLoadingAmount($sgc_applied_leave_loading_amount)
    {

        $this->container['sgc_applied_leave_loading_amount'] = $sgc_applied_leave_loading_amount;

        return $this;
    }



    /**
     * Gets sgc_exempted_leave_loading_amount
     *
     * @return double|null
     */
    public function getSgcExemptedLeaveLoadingAmount()
    {
        return $this->container['sgc_exempted_leave_loading_amount'];
    }

    /**
     * Sets sgc_exempted_leave_loading_amount
     *
     * @param double|null $sgc_exempted_leave_loading_amount The amount of leave loading applied for the leave type that is exempt from Superannuation Guarantee Contributions. *Only applicable for Leave Types with Annual Leave Categories
     *
     * @return $this
     */
    public function setSgcExemptedLeaveLoadingAmount($sgc_exempted_leave_loading_amount)
    {

        $this->container['sgc_exempted_leave_loading_amount'] = $sgc_exempted_leave_loading_amount;

        return $this;
    }



    /**
     * Gets reset_stp_categorisation
     *
     * @return bool|null
     */
    public function getResetStpCategorisation()
    {
        return $this->container['reset_stp_categorisation'];
    }

    /**
     * Sets reset_stp_categorisation
     *
     * @param bool|null $reset_stp_categorisation Reset the STP categorisations for the leave type. *Only applicable for Leave Types with Annual Leave Categories
     *
     * @return $this
     */
    public function setResetStpCategorisation($reset_stp_categorisation)
    {

        $this->container['reset_stp_categorisation'] = $reset_stp_categorisation;

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


