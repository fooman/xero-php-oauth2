<?php
/**
 * StatementLinesResponse
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
 * StatementLinesResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatementLinesResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StatementLinesResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unreconciled_amount_pos' => 'double',
        'unreconciled_amount_neg' => 'double',
        'unreconciled_lines' => 'int',
        'avg_days_unreconciled_pos' => 'double',
        'avg_days_unreconciled_neg' => 'double',
        'earliest_unreconciled_transaction' => '\DateTime',
        'latest_unreconciled_transaction' => '\DateTime',
        'deleted_amount' => 'double',
        'total_amount' => 'double',
        'data_source' => '\XeroAPI\XeroPHP\Models\Finance\DataSourceResponse',
        'earliest_reconciled_transaction' => '\DateTime',
        'latest_reconciled_transaction' => '\DateTime',
        'reconciled_amount_pos' => 'double',
        'reconciled_amount_neg' => 'double',
        'reconciled_lines' => 'int',
        'total_amount_pos' => 'double',
        'total_amount_neg' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'unreconciled_amount_pos' => 'double',
        'unreconciled_amount_neg' => 'double',
        'unreconciled_lines' => 'int32',
        'avg_days_unreconciled_pos' => 'double',
        'avg_days_unreconciled_neg' => 'double',
        'earliest_unreconciled_transaction' => 'date',
        'latest_unreconciled_transaction' => 'date',
        'deleted_amount' => 'double',
        'total_amount' => 'double',
        'data_source' => null,
        'earliest_reconciled_transaction' => 'date',
        'latest_reconciled_transaction' => 'date',
        'reconciled_amount_pos' => 'double',
        'reconciled_amount_neg' => 'double',
        'reconciled_lines' => 'int32',
        'total_amount_pos' => 'double',
        'total_amount_neg' => 'double'
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
        'unreconciled_amount_pos' => 'unreconciledAmountPos',
        'unreconciled_amount_neg' => 'unreconciledAmountNeg',
        'unreconciled_lines' => 'unreconciledLines',
        'avg_days_unreconciled_pos' => 'avgDaysUnreconciledPos',
        'avg_days_unreconciled_neg' => 'avgDaysUnreconciledNeg',
        'earliest_unreconciled_transaction' => 'earliestUnreconciledTransaction',
        'latest_unreconciled_transaction' => 'latestUnreconciledTransaction',
        'deleted_amount' => 'deletedAmount',
        'total_amount' => 'totalAmount',
        'data_source' => 'dataSource',
        'earliest_reconciled_transaction' => 'earliestReconciledTransaction',
        'latest_reconciled_transaction' => 'latestReconciledTransaction',
        'reconciled_amount_pos' => 'reconciledAmountPos',
        'reconciled_amount_neg' => 'reconciledAmountNeg',
        'reconciled_lines' => 'reconciledLines',
        'total_amount_pos' => 'totalAmountPos',
        'total_amount_neg' => 'totalAmountNeg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unreconciled_amount_pos' => 'setUnreconciledAmountPos',
        'unreconciled_amount_neg' => 'setUnreconciledAmountNeg',
        'unreconciled_lines' => 'setUnreconciledLines',
        'avg_days_unreconciled_pos' => 'setAvgDaysUnreconciledPos',
        'avg_days_unreconciled_neg' => 'setAvgDaysUnreconciledNeg',
        'earliest_unreconciled_transaction' => 'setEarliestUnreconciledTransaction',
        'latest_unreconciled_transaction' => 'setLatestUnreconciledTransaction',
        'deleted_amount' => 'setDeletedAmount',
        'total_amount' => 'setTotalAmount',
        'data_source' => 'setDataSource',
        'earliest_reconciled_transaction' => 'setEarliestReconciledTransaction',
        'latest_reconciled_transaction' => 'setLatestReconciledTransaction',
        'reconciled_amount_pos' => 'setReconciledAmountPos',
        'reconciled_amount_neg' => 'setReconciledAmountNeg',
        'reconciled_lines' => 'setReconciledLines',
        'total_amount_pos' => 'setTotalAmountPos',
        'total_amount_neg' => 'setTotalAmountNeg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unreconciled_amount_pos' => 'getUnreconciledAmountPos',
        'unreconciled_amount_neg' => 'getUnreconciledAmountNeg',
        'unreconciled_lines' => 'getUnreconciledLines',
        'avg_days_unreconciled_pos' => 'getAvgDaysUnreconciledPos',
        'avg_days_unreconciled_neg' => 'getAvgDaysUnreconciledNeg',
        'earliest_unreconciled_transaction' => 'getEarliestUnreconciledTransaction',
        'latest_unreconciled_transaction' => 'getLatestUnreconciledTransaction',
        'deleted_amount' => 'getDeletedAmount',
        'total_amount' => 'getTotalAmount',
        'data_source' => 'getDataSource',
        'earliest_reconciled_transaction' => 'getEarliestReconciledTransaction',
        'latest_reconciled_transaction' => 'getLatestReconciledTransaction',
        'reconciled_amount_pos' => 'getReconciledAmountPos',
        'reconciled_amount_neg' => 'getReconciledAmountNeg',
        'reconciled_lines' => 'getReconciledLines',
        'total_amount_pos' => 'getTotalAmountPos',
        'total_amount_neg' => 'getTotalAmountNeg'
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
        $this->container['unreconciled_amount_pos'] = isset($data['unreconciled_amount_pos']) ? $data['unreconciled_amount_pos'] : null;
        $this->container['unreconciled_amount_neg'] = isset($data['unreconciled_amount_neg']) ? $data['unreconciled_amount_neg'] : null;
        $this->container['unreconciled_lines'] = isset($data['unreconciled_lines']) ? $data['unreconciled_lines'] : null;
        $this->container['avg_days_unreconciled_pos'] = isset($data['avg_days_unreconciled_pos']) ? $data['avg_days_unreconciled_pos'] : null;
        $this->container['avg_days_unreconciled_neg'] = isset($data['avg_days_unreconciled_neg']) ? $data['avg_days_unreconciled_neg'] : null;
        $this->container['earliest_unreconciled_transaction'] = isset($data['earliest_unreconciled_transaction']) ? $data['earliest_unreconciled_transaction'] : null;
        $this->container['latest_unreconciled_transaction'] = isset($data['latest_unreconciled_transaction']) ? $data['latest_unreconciled_transaction'] : null;
        $this->container['deleted_amount'] = isset($data['deleted_amount']) ? $data['deleted_amount'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['earliest_reconciled_transaction'] = isset($data['earliest_reconciled_transaction']) ? $data['earliest_reconciled_transaction'] : null;
        $this->container['latest_reconciled_transaction'] = isset($data['latest_reconciled_transaction']) ? $data['latest_reconciled_transaction'] : null;
        $this->container['reconciled_amount_pos'] = isset($data['reconciled_amount_pos']) ? $data['reconciled_amount_pos'] : null;
        $this->container['reconciled_amount_neg'] = isset($data['reconciled_amount_neg']) ? $data['reconciled_amount_neg'] : null;
        $this->container['reconciled_lines'] = isset($data['reconciled_lines']) ? $data['reconciled_lines'] : null;
        $this->container['total_amount_pos'] = isset($data['total_amount_pos']) ? $data['total_amount_pos'] : null;
        $this->container['total_amount_neg'] = isset($data['total_amount_neg']) ? $data['total_amount_neg'] : null;
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
     * Gets unreconciled_amount_pos
     *
     * @return double|null
     */
    public function getUnreconciledAmountPos()
    {
        return $this->container['unreconciled_amount_pos'];
    }

    /**
     * Sets unreconciled_amount_pos
     *
     * @param double|null $unreconciled_amount_pos Sum of the amounts of all statement lines where both the reconciled flag is set to FALSE, and the amount is positive.
     *
     * @return $this
     */
    public function setUnreconciledAmountPos($unreconciled_amount_pos)
    {

        $this->container['unreconciled_amount_pos'] = $unreconciled_amount_pos;

        return $this;
    }



    /**
     * Gets unreconciled_amount_neg
     *
     * @return double|null
     */
    public function getUnreconciledAmountNeg()
    {
        return $this->container['unreconciled_amount_neg'];
    }

    /**
     * Sets unreconciled_amount_neg
     *
     * @param double|null $unreconciled_amount_neg Sum of the amounts of all statement lines where both the reconciled flag is set to FALSE, and the amount is negative.
     *
     * @return $this
     */
    public function setUnreconciledAmountNeg($unreconciled_amount_neg)
    {

        $this->container['unreconciled_amount_neg'] = $unreconciled_amount_neg;

        return $this;
    }



    /**
     * Gets unreconciled_lines
     *
     * @return int|null
     */
    public function getUnreconciledLines()
    {
        return $this->container['unreconciled_lines'];
    }

    /**
     * Sets unreconciled_lines
     *
     * @param int|null $unreconciled_lines Count of all statement lines where the reconciled flag is set to FALSE.
     *
     * @return $this
     */
    public function setUnreconciledLines($unreconciled_lines)
    {

        $this->container['unreconciled_lines'] = $unreconciled_lines;

        return $this;
    }



    /**
     * Gets avg_days_unreconciled_pos
     *
     * @return double|null
     */
    public function getAvgDaysUnreconciledPos()
    {
        return $this->container['avg_days_unreconciled_pos'];
    }

    /**
     * Sets avg_days_unreconciled_pos
     *
     * @param double|null $avg_days_unreconciled_pos Sum-product of age of statement line in days multiplied by transaction amount, divided by the sum of transaction amount - in for those statement lines in which the reconciled flag is set to FALSE, and the amount is positive. Provides an indication of the age of unreconciled transactions.
     *
     * @return $this
     */
    public function setAvgDaysUnreconciledPos($avg_days_unreconciled_pos)
    {

        $this->container['avg_days_unreconciled_pos'] = $avg_days_unreconciled_pos;

        return $this;
    }



    /**
     * Gets avg_days_unreconciled_neg
     *
     * @return double|null
     */
    public function getAvgDaysUnreconciledNeg()
    {
        return $this->container['avg_days_unreconciled_neg'];
    }

    /**
     * Sets avg_days_unreconciled_neg
     *
     * @param double|null $avg_days_unreconciled_neg Sum-product of age of statement line in days multiplied by transaction amount, divided by the sum of transaction amount - in for those statement lines in which the reconciled flag is set to FALSE, and the amount is negative. Provides an indication of the age of unreconciled transactions.
     *
     * @return $this
     */
    public function setAvgDaysUnreconciledNeg($avg_days_unreconciled_neg)
    {

        $this->container['avg_days_unreconciled_neg'] = $avg_days_unreconciled_neg;

        return $this;
    }



    /**
     * Gets earliest_unreconciled_transaction
     *
     * @return \DateTime|null
     */
    public function getEarliestUnreconciledTransaction()
    {
        return $this->container['earliest_unreconciled_transaction'];
    }

    /**
     * Sets earliest_unreconciled_transaction
     *
     * @param \DateTime|null $earliest_unreconciled_transaction UTC Date which is the earliest transaction date of a statement line for which the reconciled flag is set to FALSE.  This date is represented in ISO 8601 format.
     *
     * @return $this
     */
    public function setEarliestUnreconciledTransaction($earliest_unreconciled_transaction)
    {

        $this->container['earliest_unreconciled_transaction'] = $earliest_unreconciled_transaction;

        return $this;
    }



    /**
     * Gets latest_unreconciled_transaction
     *
     * @return \DateTime|null
     */
    public function getLatestUnreconciledTransaction()
    {
        return $this->container['latest_unreconciled_transaction'];
    }

    /**
     * Sets latest_unreconciled_transaction
     *
     * @param \DateTime|null $latest_unreconciled_transaction UTC Date which is the latest transaction date of a statement line for which the reconciled flag is set to FALSE.  This date is represented in ISO 8601 format.
     *
     * @return $this
     */
    public function setLatestUnreconciledTransaction($latest_unreconciled_transaction)
    {

        $this->container['latest_unreconciled_transaction'] = $latest_unreconciled_transaction;

        return $this;
    }



    /**
     * Gets deleted_amount
     *
     * @return double|null
     */
    public function getDeletedAmount()
    {
        return $this->container['deleted_amount'];
    }

    /**
     * Sets deleted_amount
     *
     * @param double|null $deleted_amount Sum of the amounts of all deleted statement lines.  Transactions may be deleted due to duplication or otherwise.
     *
     * @return $this
     */
    public function setDeletedAmount($deleted_amount)
    {

        $this->container['deleted_amount'] = $deleted_amount;

        return $this;
    }



    /**
     * Gets total_amount
     *
     * @return double|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double|null $total_amount Sum of the amounts of all statement lines.  This is used as a metric of comparison to the unreconciled figures above.
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {

        $this->container['total_amount'] = $total_amount;

        return $this;
    }



    /**
     * Gets data_source
     *
     * @return \XeroAPI\XeroPHP\Models\Finance\DataSourceResponse|null
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source
     *
     * @param \XeroAPI\XeroPHP\Models\Finance\DataSourceResponse|null $data_source data_source
     *
     * @return $this
     */
    public function setDataSource($data_source)
    {

        $this->container['data_source'] = $data_source;

        return $this;
    }



    /**
     * Gets earliest_reconciled_transaction
     *
     * @return \DateTime|null
     */
    public function getEarliestReconciledTransaction()
    {
        return $this->container['earliest_reconciled_transaction'];
    }

    /**
     * Sets earliest_reconciled_transaction
     *
     * @param \DateTime|null $earliest_reconciled_transaction UTC Date which is the earliest transaction date of a statement line for which the reconciled flag is set to TRUE.  This date is represented in ISO 8601 format.
     *
     * @return $this
     */
    public function setEarliestReconciledTransaction($earliest_reconciled_transaction)
    {

        $this->container['earliest_reconciled_transaction'] = $earliest_reconciled_transaction;

        return $this;
    }



    /**
     * Gets latest_reconciled_transaction
     *
     * @return \DateTime|null
     */
    public function getLatestReconciledTransaction()
    {
        return $this->container['latest_reconciled_transaction'];
    }

    /**
     * Sets latest_reconciled_transaction
     *
     * @param \DateTime|null $latest_reconciled_transaction UTC Date which is the latest transaction date of a statement line for which the reconciled flag is set to TRUE.  This date is represented in ISO 8601 format.
     *
     * @return $this
     */
    public function setLatestReconciledTransaction($latest_reconciled_transaction)
    {

        $this->container['latest_reconciled_transaction'] = $latest_reconciled_transaction;

        return $this;
    }



    /**
     * Gets reconciled_amount_pos
     *
     * @return double|null
     */
    public function getReconciledAmountPos()
    {
        return $this->container['reconciled_amount_pos'];
    }

    /**
     * Sets reconciled_amount_pos
     *
     * @param double|null $reconciled_amount_pos Sum of the amounts of all statement lines where both the reconciled flag is set to TRUE, and the amount is positive.
     *
     * @return $this
     */
    public function setReconciledAmountPos($reconciled_amount_pos)
    {

        $this->container['reconciled_amount_pos'] = $reconciled_amount_pos;

        return $this;
    }



    /**
     * Gets reconciled_amount_neg
     *
     * @return double|null
     */
    public function getReconciledAmountNeg()
    {
        return $this->container['reconciled_amount_neg'];
    }

    /**
     * Sets reconciled_amount_neg
     *
     * @param double|null $reconciled_amount_neg Sum of the amounts of all statement lines where both the reconciled flag is set to TRUE, and the amount is negative.
     *
     * @return $this
     */
    public function setReconciledAmountNeg($reconciled_amount_neg)
    {

        $this->container['reconciled_amount_neg'] = $reconciled_amount_neg;

        return $this;
    }



    /**
     * Gets reconciled_lines
     *
     * @return int|null
     */
    public function getReconciledLines()
    {
        return $this->container['reconciled_lines'];
    }

    /**
     * Sets reconciled_lines
     *
     * @param int|null $reconciled_lines Count of all statement lines where the reconciled flag is set to TRUE
     *
     * @return $this
     */
    public function setReconciledLines($reconciled_lines)
    {

        $this->container['reconciled_lines'] = $reconciled_lines;

        return $this;
    }



    /**
     * Gets total_amount_pos
     *
     * @return double|null
     */
    public function getTotalAmountPos()
    {
        return $this->container['total_amount_pos'];
    }

    /**
     * Sets total_amount_pos
     *
     * @param double|null $total_amount_pos Sum of the amounts of all statement lines where the amount is positive
     *
     * @return $this
     */
    public function setTotalAmountPos($total_amount_pos)
    {

        $this->container['total_amount_pos'] = $total_amount_pos;

        return $this;
    }



    /**
     * Gets total_amount_neg
     *
     * @return double|null
     */
    public function getTotalAmountNeg()
    {
        return $this->container['total_amount_neg'];
    }

    /**
     * Sets total_amount_neg
     *
     * @param double|null $total_amount_neg Sum of the amounts of all statement lines where the amount is negative.
     *
     * @return $this
     */
    public function setTotalAmountNeg($total_amount_neg)
    {

        $this->container['total_amount_neg'] = $total_amount_neg;

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


