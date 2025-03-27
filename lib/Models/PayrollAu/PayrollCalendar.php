<?php
/**
 * PayrollCalendar
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
 * PayrollCalendar Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayrollCalendar implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayrollCalendar';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'calendar_type' => '\XeroAPI\XeroPHP\Models\PayrollAu\CalendarType',
        'start_date' => 'string',
        'payment_date' => 'string',
        'payroll_calendar_id' => 'string',
        'updated_date_utc' => 'string',
        'reference_date' => 'string',
        'validation_errors' => '\XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'calendar_type' => null,
        'start_date' => null,
        'payment_date' => null,
        'payroll_calendar_id' => 'uuid',
        'updated_date_utc' => null,
        'reference_date' => null,
        'validation_errors' => null
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
        'calendar_type' => 'CalendarType',
        'start_date' => 'StartDate',
        'payment_date' => 'PaymentDate',
        'payroll_calendar_id' => 'PayrollCalendarID',
        'updated_date_utc' => 'UpdatedDateUTC',
        'reference_date' => 'ReferenceDate',
        'validation_errors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'calendar_type' => 'setCalendarType',
        'start_date' => 'setStartDate',
        'payment_date' => 'setPaymentDate',
        'payroll_calendar_id' => 'setPayrollCalendarId',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'reference_date' => 'setReferenceDate',
        'validation_errors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'calendar_type' => 'getCalendarType',
        'start_date' => 'getStartDate',
        'payment_date' => 'getPaymentDate',
        'payroll_calendar_id' => 'getPayrollCalendarId',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'reference_date' => 'getReferenceDate',
        'validation_errors' => 'getValidationErrors'
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
        $this->container['calendar_type'] = isset($data['calendar_type']) ? $data['calendar_type'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['payment_date'] = isset($data['payment_date']) ? $data['payment_date'] : null;
        $this->container['payroll_calendar_id'] = isset($data['payroll_calendar_id']) ? $data['payroll_calendar_id'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['reference_date'] = isset($data['reference_date']) ? $data['reference_date'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
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
     * @param string|null $name Name of the Payroll Calendar
     *
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets calendar_type
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\CalendarType|null
     */
    public function getCalendarType()
    {
        return $this->container['calendar_type'];
    }

    /**
     * Sets calendar_type
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\CalendarType|null $calendar_type calendar_type
     *
     * @return $this
     */
    public function setCalendarType($calendar_type)
    {

        $this->container['calendar_type'] = $calendar_type;

        return $this;
    }



    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }
    public function getStartDateAsDate()
    {
      if ($this->getStartDate() != null) {
        return StringUtil::convertStringToDate($this->getStartDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date The start date of the upcoming pay period. The end date will be calculated based upon this date, and the calendar type selected (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {

        $this->container['start_date'] = $start_date;

        return $this;
    }
    /**
     * Sets start_date
     *
     * @param \DateTime |null $start_date The start date of the upcoming pay period. The end date will be calculated based upon this date, and the calendar type selected (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setStartDateAsDate($start_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($start_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($start_date->format('Y-m-d')." UTC") * 1000;
        $start_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['start_date'] = $start_date;
      return $this;
    }



    /**
     * Gets payment_date
     *
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }
    public function getPaymentDateAsDate()
    {
      if ($this->getPaymentDate() != null) {
        return StringUtil::convertStringToDate($this->getPaymentDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets payment_date
     *
     * @param string|null $payment_date The date on which employees will be paid for the upcoming pay period (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPaymentDate($payment_date)
    {

        $this->container['payment_date'] = $payment_date;

        return $this;
    }
    /**
     * Sets payment_date
     *
     * @param \DateTime |null $payment_date The date on which employees will be paid for the upcoming pay period (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPaymentDateAsDate($payment_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($payment_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($payment_date->format('Y-m-d')." UTC") * 1000;
        $payment_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['payment_date'] = $payment_date;
      return $this;
    }



    /**
     * Gets payroll_calendar_id
     *
     * @return string|null
     */
    public function getPayrollCalendarId()
    {
        return $this->container['payroll_calendar_id'];
    }

    /**
     * Sets payroll_calendar_id
     *
     * @param string|null $payroll_calendar_id Xero identifier
     *
     * @return $this
     */
    public function setPayrollCalendarId($payroll_calendar_id)
    {

        $this->container['payroll_calendar_id'] = $payroll_calendar_id;

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
     * Gets reference_date
     *
     * @return string|null
     */
    public function getReferenceDate()
    {
        return $this->container['reference_date'];
    }
    public function getReferenceDateAsDate()
    {
      if ($this->getReferenceDate() != null) {
        return StringUtil::convertStringToDate($this->getReferenceDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets reference_date
     *
     * @param string|null $reference_date Reference Date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setReferenceDate($reference_date)
    {

        $this->container['reference_date'] = $reference_date;

        return $this;
    }
    /**
     * Sets reference_date
     *
     * @param \DateTime |null $reference_date Reference Date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setReferenceDateAsDate($reference_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($reference_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($reference_date->format('Y-m-d')." UTC") * 1000;
        $reference_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['reference_date'] = $reference_date;
      return $this;
    }



    /**
     * Gets validation_errors
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]|null $validation_errors Displays array of validation error messages from the API
     *
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {

        $this->container['validation_errors'] = $validation_errors;

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


