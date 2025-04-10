<?php
/**
 * EmployeeLeaveType
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
 * EmployeeLeaveType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmployeeLeaveType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeLeaveType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'leave_type_id' => 'string',
        'schedule_of_accrual' => 'string',
        'hours_accrued_annually' => 'double',
        'maximum_to_accrue' => 'double',
        'opening_balance' => 'double',
        'rate_accrued_hourly' => 'double',
        'schedule_of_accrual_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'leave_type_id' => 'uuid',
        'schedule_of_accrual' => null,
        'hours_accrued_annually' => 'double',
        'maximum_to_accrue' => 'double',
        'opening_balance' => 'double',
        'rate_accrued_hourly' => 'double',
        'schedule_of_accrual_date' => 'date'
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
        'leave_type_id' => 'leaveTypeID',
        'schedule_of_accrual' => 'scheduleOfAccrual',
        'hours_accrued_annually' => 'hoursAccruedAnnually',
        'maximum_to_accrue' => 'maximumToAccrue',
        'opening_balance' => 'openingBalance',
        'rate_accrued_hourly' => 'rateAccruedHourly',
        'schedule_of_accrual_date' => 'scheduleOfAccrualDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leave_type_id' => 'setLeaveTypeId',
        'schedule_of_accrual' => 'setScheduleOfAccrual',
        'hours_accrued_annually' => 'setHoursAccruedAnnually',
        'maximum_to_accrue' => 'setMaximumToAccrue',
        'opening_balance' => 'setOpeningBalance',
        'rate_accrued_hourly' => 'setRateAccruedHourly',
        'schedule_of_accrual_date' => 'setScheduleOfAccrualDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leave_type_id' => 'getLeaveTypeId',
        'schedule_of_accrual' => 'getScheduleOfAccrual',
        'hours_accrued_annually' => 'getHoursAccruedAnnually',
        'maximum_to_accrue' => 'getMaximumToAccrue',
        'opening_balance' => 'getOpeningBalance',
        'rate_accrued_hourly' => 'getRateAccruedHourly',
        'schedule_of_accrual_date' => 'getScheduleOfAccrualDate'
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

    const SCHEDULE_OF_ACCRUAL_BEGINNING_OF_CALENDAR_YEAR = 'BeginningOfCalendarYear';
    const SCHEDULE_OF_ACCRUAL_ON_ANNIVERSARY_DATE = 'OnAnniversaryDate';
    const SCHEDULE_OF_ACCRUAL_EACH_PAY_PERIOD = 'EachPayPeriod';
    const SCHEDULE_OF_ACCRUAL_ON_HOUR_WORKED = 'OnHourWorked';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScheduleOfAccrualAllowableValues()
    {
        return [
            self::SCHEDULE_OF_ACCRUAL_BEGINNING_OF_CALENDAR_YEAR,
            self::SCHEDULE_OF_ACCRUAL_ON_ANNIVERSARY_DATE,
            self::SCHEDULE_OF_ACCRUAL_EACH_PAY_PERIOD,
            self::SCHEDULE_OF_ACCRUAL_ON_HOUR_WORKED,
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
        $this->container['leave_type_id'] = isset($data['leave_type_id']) ? $data['leave_type_id'] : null;
        $this->container['schedule_of_accrual'] = isset($data['schedule_of_accrual']) ? $data['schedule_of_accrual'] : null;
        $this->container['hours_accrued_annually'] = isset($data['hours_accrued_annually']) ? $data['hours_accrued_annually'] : null;
        $this->container['maximum_to_accrue'] = isset($data['maximum_to_accrue']) ? $data['maximum_to_accrue'] : null;
        $this->container['opening_balance'] = isset($data['opening_balance']) ? $data['opening_balance'] : null;
        $this->container['rate_accrued_hourly'] = isset($data['rate_accrued_hourly']) ? $data['rate_accrued_hourly'] : null;
        $this->container['schedule_of_accrual_date'] = isset($data['schedule_of_accrual_date']) ? $data['schedule_of_accrual_date'] : null;
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
        if ($this->container['schedule_of_accrual'] === null) {
            $invalidProperties[] = "'schedule_of_accrual' can't be null";
        }
        $allowedValues = $this->getScheduleOfAccrualAllowableValues();
        if (!is_null($this->container['schedule_of_accrual']) && !in_array($this->container['schedule_of_accrual'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'schedule_of_accrual', must be one of '%s'",
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
     * @param string $leave_type_id The Xero identifier for leave type
     *
     * @return $this
     */
    public function setLeaveTypeId($leave_type_id)
    {

        $this->container['leave_type_id'] = $leave_type_id;

        return $this;
    }



    /**
     * Gets schedule_of_accrual
     *
     * @return string
     */
    public function getScheduleOfAccrual()
    {
        return $this->container['schedule_of_accrual'];
    }

    /**
     * Sets schedule_of_accrual
     *
     * @param string $schedule_of_accrual The schedule of accrual
     *
     * @return $this
     */
    public function setScheduleOfAccrual($schedule_of_accrual)
    {
        $allowedValues = $this->getScheduleOfAccrualAllowableValues();
        if (!in_array($schedule_of_accrual, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'schedule_of_accrual', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['schedule_of_accrual'] = $schedule_of_accrual;

        return $this;
    }



    /**
     * Gets hours_accrued_annually
     *
     * @return double|null
     */
    public function getHoursAccruedAnnually()
    {
        return $this->container['hours_accrued_annually'];
    }

    /**
     * Sets hours_accrued_annually
     *
     * @param double|null $hours_accrued_annually The number of hours accrued for the leave annually. This is 0 when the scheduleOfAccrual chosen is \"OnHourWorked\"
     *
     * @return $this
     */
    public function setHoursAccruedAnnually($hours_accrued_annually)
    {

        $this->container['hours_accrued_annually'] = $hours_accrued_annually;

        return $this;
    }



    /**
     * Gets maximum_to_accrue
     *
     * @return double|null
     */
    public function getMaximumToAccrue()
    {
        return $this->container['maximum_to_accrue'];
    }

    /**
     * Sets maximum_to_accrue
     *
     * @param double|null $maximum_to_accrue The maximum number of hours that can be accrued for the leave
     *
     * @return $this
     */
    public function setMaximumToAccrue($maximum_to_accrue)
    {

        $this->container['maximum_to_accrue'] = $maximum_to_accrue;

        return $this;
    }



    /**
     * Gets opening_balance
     *
     * @return double|null
     */
    public function getOpeningBalance()
    {
        return $this->container['opening_balance'];
    }

    /**
     * Sets opening_balance
     *
     * @param double|null $opening_balance The initial number of hours assigned when the leave was added to the employee
     *
     * @return $this
     */
    public function setOpeningBalance($opening_balance)
    {

        $this->container['opening_balance'] = $opening_balance;

        return $this;
    }



    /**
     * Gets rate_accrued_hourly
     *
     * @return double|null
     */
    public function getRateAccruedHourly()
    {
        return $this->container['rate_accrued_hourly'];
    }

    /**
     * Sets rate_accrued_hourly
     *
     * @param double|null $rate_accrued_hourly The number of hours added to the leave balance for every hour worked by the employee. This is normally 0, unless the scheduleOfAccrual chosen is \"OnHourWorked\"
     *
     * @return $this
     */
    public function setRateAccruedHourly($rate_accrued_hourly)
    {

        $this->container['rate_accrued_hourly'] = $rate_accrued_hourly;

        return $this;
    }



    /**
     * Gets schedule_of_accrual_date
     *
     * @return \DateTime|null
     */
    public function getScheduleOfAccrualDate()
    {
        return $this->container['schedule_of_accrual_date'];
    }

    /**
     * Sets schedule_of_accrual_date
     *
     * @param \DateTime|null $schedule_of_accrual_date The date when an employee becomes entitled to their accrual. Only applicable when scheduleOfAccrual is \"OnAnniversaryDate\"
     *
     * @return $this
     */
    public function setScheduleOfAccrualDate($schedule_of_accrual_date)
    {

        $this->container['schedule_of_accrual_date'] = $schedule_of_accrual_date;

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


