<?php
/**
 * OpeningBalances
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
 * OpeningBalances Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OpeningBalances implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OpeningBalances';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'opening_balance_date' => 'string',
        'tax' => 'string',
        'earnings_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]',
        'deduction_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\DeductionLine[]',
        'super_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\SuperLine[]',
        'reimbursement_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementLine[]',
        'leave_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\LeaveLine[]',
        'paid_leave_earnings_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\PaidLeaveEarningsLine[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'opening_balance_date' => null,
        'tax' => null,
        'earnings_lines' => null,
        'deduction_lines' => null,
        'super_lines' => null,
        'reimbursement_lines' => null,
        'leave_lines' => null,
        'paid_leave_earnings_lines' => null
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
        'opening_balance_date' => 'OpeningBalanceDate',
        'tax' => 'Tax',
        'earnings_lines' => 'EarningsLines',
        'deduction_lines' => 'DeductionLines',
        'super_lines' => 'SuperLines',
        'reimbursement_lines' => 'ReimbursementLines',
        'leave_lines' => 'LeaveLines',
        'paid_leave_earnings_lines' => 'PaidLeaveEarningsLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opening_balance_date' => 'setOpeningBalanceDate',
        'tax' => 'setTax',
        'earnings_lines' => 'setEarningsLines',
        'deduction_lines' => 'setDeductionLines',
        'super_lines' => 'setSuperLines',
        'reimbursement_lines' => 'setReimbursementLines',
        'leave_lines' => 'setLeaveLines',
        'paid_leave_earnings_lines' => 'setPaidLeaveEarningsLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opening_balance_date' => 'getOpeningBalanceDate',
        'tax' => 'getTax',
        'earnings_lines' => 'getEarningsLines',
        'deduction_lines' => 'getDeductionLines',
        'super_lines' => 'getSuperLines',
        'reimbursement_lines' => 'getReimbursementLines',
        'leave_lines' => 'getLeaveLines',
        'paid_leave_earnings_lines' => 'getPaidLeaveEarningsLines'
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
        $this->container['opening_balance_date'] = isset($data['opening_balance_date']) ? $data['opening_balance_date'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['earnings_lines'] = isset($data['earnings_lines']) ? $data['earnings_lines'] : null;
        $this->container['deduction_lines'] = isset($data['deduction_lines']) ? $data['deduction_lines'] : null;
        $this->container['super_lines'] = isset($data['super_lines']) ? $data['super_lines'] : null;
        $this->container['reimbursement_lines'] = isset($data['reimbursement_lines']) ? $data['reimbursement_lines'] : null;
        $this->container['leave_lines'] = isset($data['leave_lines']) ? $data['leave_lines'] : null;
        $this->container['paid_leave_earnings_lines'] = isset($data['paid_leave_earnings_lines']) ? $data['paid_leave_earnings_lines'] : null;
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
     * Gets opening_balance_date
     *
     * @return string|null
     */
    public function getOpeningBalanceDate()
    {
        return $this->container['opening_balance_date'];
    }
    public function getOpeningBalanceDateAsDate()
    {
      if ($this->getOpeningBalanceDate() != null) {
        return StringUtil::convertStringToDate($this->getOpeningBalanceDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets opening_balance_date
     *
     * @param string|null $opening_balance_date Opening Balance Date. (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setOpeningBalanceDate($opening_balance_date)
    {

        $this->container['opening_balance_date'] = $opening_balance_date;

        return $this;
    }
    /**
     * Sets opening_balance_date
     *
     * @param \DateTime |null $opening_balance_date Opening Balance Date. (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setOpeningBalanceDateAsDate($opening_balance_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($opening_balance_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($opening_balance_date->format('Y-m-d')." UTC") * 1000;
        $opening_balance_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['opening_balance_date'] = $opening_balance_date;
      return $this;
    }



    /**
     * Gets tax
     *
     * @return string|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param string|null $tax Opening Balance tax
     *
     * @return $this
     */
    public function setTax($tax)
    {

        $this->container['tax'] = $tax;

        return $this;
    }



    /**
     * Gets earnings_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]|null
     */
    public function getEarningsLines()
    {
        return $this->container['earnings_lines'];
    }

    /**
     * Sets earnings_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]|null $earnings_lines earnings_lines
     *
     * @return $this
     */
    public function setEarningsLines($earnings_lines)
    {

        $this->container['earnings_lines'] = $earnings_lines;

        return $this;
    }



    /**
     * Gets deduction_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\DeductionLine[]|null
     */
    public function getDeductionLines()
    {
        return $this->container['deduction_lines'];
    }

    /**
     * Sets deduction_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\DeductionLine[]|null $deduction_lines deduction_lines
     *
     * @return $this
     */
    public function setDeductionLines($deduction_lines)
    {

        $this->container['deduction_lines'] = $deduction_lines;

        return $this;
    }



    /**
     * Gets super_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\SuperLine[]|null
     */
    public function getSuperLines()
    {
        return $this->container['super_lines'];
    }

    /**
     * Sets super_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\SuperLine[]|null $super_lines super_lines
     *
     * @return $this
     */
    public function setSuperLines($super_lines)
    {

        $this->container['super_lines'] = $super_lines;

        return $this;
    }



    /**
     * Gets reimbursement_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementLine[]|null
     */
    public function getReimbursementLines()
    {
        return $this->container['reimbursement_lines'];
    }

    /**
     * Sets reimbursement_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementLine[]|null $reimbursement_lines reimbursement_lines
     *
     * @return $this
     */
    public function setReimbursementLines($reimbursement_lines)
    {

        $this->container['reimbursement_lines'] = $reimbursement_lines;

        return $this;
    }



    /**
     * Gets leave_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\LeaveLine[]|null
     */
    public function getLeaveLines()
    {
        return $this->container['leave_lines'];
    }

    /**
     * Sets leave_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\LeaveLine[]|null $leave_lines leave_lines
     *
     * @return $this
     */
    public function setLeaveLines($leave_lines)
    {

        $this->container['leave_lines'] = $leave_lines;

        return $this;
    }



    /**
     * Gets paid_leave_earnings_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\PaidLeaveEarningsLine[]|null
     */
    public function getPaidLeaveEarningsLines()
    {
        return $this->container['paid_leave_earnings_lines'];
    }

    /**
     * Sets paid_leave_earnings_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\PaidLeaveEarningsLine[]|null $paid_leave_earnings_lines paid_leave_earnings_lines
     *
     * @return $this
     */
    public function setPaidLeaveEarningsLines($paid_leave_earnings_lines)
    {

        $this->container['paid_leave_earnings_lines'] = $paid_leave_earnings_lines;

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


