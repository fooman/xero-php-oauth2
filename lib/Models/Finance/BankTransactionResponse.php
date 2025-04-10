<?php
/**
 * BankTransactionResponse
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
 * BankTransactionResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BankTransactionResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankTransactionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bank_transaction_id' => 'string',
        'batch_payment_id' => 'string',
        'contact' => '\XeroAPI\XeroPHP\Models\Finance\ContactResponse',
        'date' => '\DateTime',
        'amount' => 'double',
        'line_items' => '\XeroAPI\XeroPHP\Models\Finance\LineItemResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bank_transaction_id' => 'uuid',
        'batch_payment_id' => 'uuid',
        'contact' => null,
        'date' => 'date',
        'amount' => 'double',
        'line_items' => null
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
        'bank_transaction_id' => 'bankTransactionId',
        'batch_payment_id' => 'batchPaymentId',
        'contact' => 'contact',
        'date' => 'date',
        'amount' => 'amount',
        'line_items' => 'lineItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_transaction_id' => 'setBankTransactionId',
        'batch_payment_id' => 'setBatchPaymentId',
        'contact' => 'setContact',
        'date' => 'setDate',
        'amount' => 'setAmount',
        'line_items' => 'setLineItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_transaction_id' => 'getBankTransactionId',
        'batch_payment_id' => 'getBatchPaymentId',
        'contact' => 'getContact',
        'date' => 'getDate',
        'amount' => 'getAmount',
        'line_items' => 'getLineItems'
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
        $this->container['bank_transaction_id'] = isset($data['bank_transaction_id']) ? $data['bank_transaction_id'] : null;
        $this->container['batch_payment_id'] = isset($data['batch_payment_id']) ? $data['batch_payment_id'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
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
     * Gets bank_transaction_id
     *
     * @return string|null
     */
    public function getBankTransactionId()
    {
        return $this->container['bank_transaction_id'];
    }

    /**
     * Sets bank_transaction_id
     *
     * @param string|null $bank_transaction_id Xero Identifier of transaction
     *
     * @return $this
     */
    public function setBankTransactionId($bank_transaction_id)
    {

        $this->container['bank_transaction_id'] = $bank_transaction_id;

        return $this;
    }



    /**
     * Gets batch_payment_id
     *
     * @return string|null
     */
    public function getBatchPaymentId()
    {
        return $this->container['batch_payment_id'];
    }

    /**
     * Sets batch_payment_id
     *
     * @param string|null $batch_payment_id Xero Identifier of batch payment. Present if the transaction is part of a batch.
     *
     * @return $this
     */
    public function setBatchPaymentId($batch_payment_id)
    {

        $this->container['batch_payment_id'] = $batch_payment_id;

        return $this;
    }



    /**
     * Gets contact
     *
     * @return \XeroAPI\XeroPHP\Models\Finance\ContactResponse|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \XeroAPI\XeroPHP\Models\Finance\ContactResponse|null $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {

        $this->container['contact'] = $contact;

        return $this;
    }



    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Date of transaction - YYYY-MM-DD
     *
     * @return $this
     */
    public function setDate($date)
    {

        $this->container['date'] = $date;

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
     * @param double|null $amount Amount of transaction
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

        return $this;
    }



    /**
     * Gets line_items
     *
     * @return \XeroAPI\XeroPHP\Models\Finance\LineItemResponse[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \XeroAPI\XeroPHP\Models\Finance\LineItemResponse[]|null $line_items The LineItems element can contain any number of individual LineItem sub-elements. Not included in summary mode
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {

        $this->container['line_items'] = $line_items;

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


