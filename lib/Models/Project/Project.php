<?php
/**
 * Project
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Projects API
 *
 * This is the Xero Projects API
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

namespace XeroAPI\XeroPHP\Models\Project;

use \ArrayAccess;
use \XeroAPI\XeroPHP\ProjectObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;

/**
 * Project Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Project implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Project';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'project_id' => 'string',
        'contact_id' => 'string',
        'name' => 'string',
        'currency_code' => '\XeroAPI\XeroPHP\Models\Project\CurrencyCode',
        'minutes_logged' => 'int',
        'total_task_amount' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'total_expense_amount' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'estimate_amount' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'minutes_to_be_invoiced' => 'int',
        'task_amount_to_be_invoiced' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'task_amount_invoiced' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'expense_amount_to_be_invoiced' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'expense_amount_invoiced' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'project_amount_invoiced' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'deposit' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'deposit_applied' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'credit_note_amount' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'deadline_utc' => '\DateTime',
        'total_invoiced' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'total_to_be_invoiced' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'estimate' => '\XeroAPI\XeroPHP\Models\Project\Amount',
        'status' => '\XeroAPI\XeroPHP\Models\Project\ProjectStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'project_id' => 'uuid',
        'contact_id' => 'uuid',
        'name' => null,
        'currency_code' => null,
        'minutes_logged' => null,
        'total_task_amount' => null,
        'total_expense_amount' => null,
        'estimate_amount' => null,
        'minutes_to_be_invoiced' => null,
        'task_amount_to_be_invoiced' => null,
        'task_amount_invoiced' => null,
        'expense_amount_to_be_invoiced' => null,
        'expense_amount_invoiced' => null,
        'project_amount_invoiced' => null,
        'deposit' => null,
        'deposit_applied' => null,
        'credit_note_amount' => null,
        'deadline_utc' => 'date-time',
        'total_invoiced' => null,
        'total_to_be_invoiced' => null,
        'estimate' => null,
        'status' => null
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
        'project_id' => 'projectId',
        'contact_id' => 'contactId',
        'name' => 'name',
        'currency_code' => 'currencyCode',
        'minutes_logged' => 'minutesLogged',
        'total_task_amount' => 'totalTaskAmount',
        'total_expense_amount' => 'totalExpenseAmount',
        'estimate_amount' => 'estimateAmount',
        'minutes_to_be_invoiced' => 'minutesToBeInvoiced',
        'task_amount_to_be_invoiced' => 'taskAmountToBeInvoiced',
        'task_amount_invoiced' => 'taskAmountInvoiced',
        'expense_amount_to_be_invoiced' => 'expenseAmountToBeInvoiced',
        'expense_amount_invoiced' => 'expenseAmountInvoiced',
        'project_amount_invoiced' => 'projectAmountInvoiced',
        'deposit' => 'deposit',
        'deposit_applied' => 'depositApplied',
        'credit_note_amount' => 'creditNoteAmount',
        'deadline_utc' => 'deadlineUtc',
        'total_invoiced' => 'totalInvoiced',
        'total_to_be_invoiced' => 'totalToBeInvoiced',
        'estimate' => 'estimate',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'project_id' => 'setProjectId',
        'contact_id' => 'setContactId',
        'name' => 'setName',
        'currency_code' => 'setCurrencyCode',
        'minutes_logged' => 'setMinutesLogged',
        'total_task_amount' => 'setTotalTaskAmount',
        'total_expense_amount' => 'setTotalExpenseAmount',
        'estimate_amount' => 'setEstimateAmount',
        'minutes_to_be_invoiced' => 'setMinutesToBeInvoiced',
        'task_amount_to_be_invoiced' => 'setTaskAmountToBeInvoiced',
        'task_amount_invoiced' => 'setTaskAmountInvoiced',
        'expense_amount_to_be_invoiced' => 'setExpenseAmountToBeInvoiced',
        'expense_amount_invoiced' => 'setExpenseAmountInvoiced',
        'project_amount_invoiced' => 'setProjectAmountInvoiced',
        'deposit' => 'setDeposit',
        'deposit_applied' => 'setDepositApplied',
        'credit_note_amount' => 'setCreditNoteAmount',
        'deadline_utc' => 'setDeadlineUtc',
        'total_invoiced' => 'setTotalInvoiced',
        'total_to_be_invoiced' => 'setTotalToBeInvoiced',
        'estimate' => 'setEstimate',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'project_id' => 'getProjectId',
        'contact_id' => 'getContactId',
        'name' => 'getName',
        'currency_code' => 'getCurrencyCode',
        'minutes_logged' => 'getMinutesLogged',
        'total_task_amount' => 'getTotalTaskAmount',
        'total_expense_amount' => 'getTotalExpenseAmount',
        'estimate_amount' => 'getEstimateAmount',
        'minutes_to_be_invoiced' => 'getMinutesToBeInvoiced',
        'task_amount_to_be_invoiced' => 'getTaskAmountToBeInvoiced',
        'task_amount_invoiced' => 'getTaskAmountInvoiced',
        'expense_amount_to_be_invoiced' => 'getExpenseAmountToBeInvoiced',
        'expense_amount_invoiced' => 'getExpenseAmountInvoiced',
        'project_amount_invoiced' => 'getProjectAmountInvoiced',
        'deposit' => 'getDeposit',
        'deposit_applied' => 'getDepositApplied',
        'credit_note_amount' => 'getCreditNoteAmount',
        'deadline_utc' => 'getDeadlineUtc',
        'total_invoiced' => 'getTotalInvoiced',
        'total_to_be_invoiced' => 'getTotalToBeInvoiced',
        'estimate' => 'getEstimate',
        'status' => 'getStatus'
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
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['minutes_logged'] = isset($data['minutes_logged']) ? $data['minutes_logged'] : null;
        $this->container['total_task_amount'] = isset($data['total_task_amount']) ? $data['total_task_amount'] : null;
        $this->container['total_expense_amount'] = isset($data['total_expense_amount']) ? $data['total_expense_amount'] : null;
        $this->container['estimate_amount'] = isset($data['estimate_amount']) ? $data['estimate_amount'] : null;
        $this->container['minutes_to_be_invoiced'] = isset($data['minutes_to_be_invoiced']) ? $data['minutes_to_be_invoiced'] : null;
        $this->container['task_amount_to_be_invoiced'] = isset($data['task_amount_to_be_invoiced']) ? $data['task_amount_to_be_invoiced'] : null;
        $this->container['task_amount_invoiced'] = isset($data['task_amount_invoiced']) ? $data['task_amount_invoiced'] : null;
        $this->container['expense_amount_to_be_invoiced'] = isset($data['expense_amount_to_be_invoiced']) ? $data['expense_amount_to_be_invoiced'] : null;
        $this->container['expense_amount_invoiced'] = isset($data['expense_amount_invoiced']) ? $data['expense_amount_invoiced'] : null;
        $this->container['project_amount_invoiced'] = isset($data['project_amount_invoiced']) ? $data['project_amount_invoiced'] : null;
        $this->container['deposit'] = isset($data['deposit']) ? $data['deposit'] : null;
        $this->container['deposit_applied'] = isset($data['deposit_applied']) ? $data['deposit_applied'] : null;
        $this->container['credit_note_amount'] = isset($data['credit_note_amount']) ? $data['credit_note_amount'] : null;
        $this->container['deadline_utc'] = isset($data['deadline_utc']) ? $data['deadline_utc'] : null;
        $this->container['total_invoiced'] = isset($data['total_invoiced']) ? $data['total_invoiced'] : null;
        $this->container['total_to_be_invoiced'] = isset($data['total_to_be_invoiced']) ? $data['total_to_be_invoiced'] : null;
        $this->container['estimate'] = isset($data['estimate']) ? $data['estimate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets project_id
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string|null $project_id Identifier of the project.
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {

        $this->container['project_id'] = $project_id;

        return $this;
    }



    /**
     * Gets contact_id
     *
     * @return string|null
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param string|null $contact_id Identifier of the contact this project was created for.
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {

        $this->container['contact_id'] = $contact_id;

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
     * @param string $name Name of the project.
     *
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {

        $this->container['currency_code'] = $currency_code;

        return $this;
    }



    /**
     * Gets minutes_logged
     *
     * @return int|null
     */
    public function getMinutesLogged()
    {
        return $this->container['minutes_logged'];
    }

    /**
     * Sets minutes_logged
     *
     * @param int|null $minutes_logged A total of minutes logged against all tasks on the Project.
     *
     * @return $this
     */
    public function setMinutesLogged($minutes_logged)
    {

        $this->container['minutes_logged'] = $minutes_logged;

        return $this;
    }



    /**
     * Gets total_task_amount
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getTotalTaskAmount()
    {
        return $this->container['total_task_amount'];
    }

    /**
     * Sets total_task_amount
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $total_task_amount total_task_amount
     *
     * @return $this
     */
    public function setTotalTaskAmount($total_task_amount)
    {

        $this->container['total_task_amount'] = $total_task_amount;

        return $this;
    }



    /**
     * Gets total_expense_amount
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getTotalExpenseAmount()
    {
        return $this->container['total_expense_amount'];
    }

    /**
     * Sets total_expense_amount
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $total_expense_amount total_expense_amount
     *
     * @return $this
     */
    public function setTotalExpenseAmount($total_expense_amount)
    {

        $this->container['total_expense_amount'] = $total_expense_amount;

        return $this;
    }



    /**
     * Gets estimate_amount
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getEstimateAmount()
    {
        return $this->container['estimate_amount'];
    }

    /**
     * Sets estimate_amount
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $estimate_amount estimate_amount
     *
     * @return $this
     */
    public function setEstimateAmount($estimate_amount)
    {

        $this->container['estimate_amount'] = $estimate_amount;

        return $this;
    }



    /**
     * Gets minutes_to_be_invoiced
     *
     * @return int|null
     */
    public function getMinutesToBeInvoiced()
    {
        return $this->container['minutes_to_be_invoiced'];
    }

    /**
     * Sets minutes_to_be_invoiced
     *
     * @param int|null $minutes_to_be_invoiced Minutes which have not been invoiced across all chargeable tasks in the project.
     *
     * @return $this
     */
    public function setMinutesToBeInvoiced($minutes_to_be_invoiced)
    {

        $this->container['minutes_to_be_invoiced'] = $minutes_to_be_invoiced;

        return $this;
    }



    /**
     * Gets task_amount_to_be_invoiced
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getTaskAmountToBeInvoiced()
    {
        return $this->container['task_amount_to_be_invoiced'];
    }

    /**
     * Sets task_amount_to_be_invoiced
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $task_amount_to_be_invoiced task_amount_to_be_invoiced
     *
     * @return $this
     */
    public function setTaskAmountToBeInvoiced($task_amount_to_be_invoiced)
    {

        $this->container['task_amount_to_be_invoiced'] = $task_amount_to_be_invoiced;

        return $this;
    }



    /**
     * Gets task_amount_invoiced
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getTaskAmountInvoiced()
    {
        return $this->container['task_amount_invoiced'];
    }

    /**
     * Sets task_amount_invoiced
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $task_amount_invoiced task_amount_invoiced
     *
     * @return $this
     */
    public function setTaskAmountInvoiced($task_amount_invoiced)
    {

        $this->container['task_amount_invoiced'] = $task_amount_invoiced;

        return $this;
    }



    /**
     * Gets expense_amount_to_be_invoiced
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getExpenseAmountToBeInvoiced()
    {
        return $this->container['expense_amount_to_be_invoiced'];
    }

    /**
     * Sets expense_amount_to_be_invoiced
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $expense_amount_to_be_invoiced expense_amount_to_be_invoiced
     *
     * @return $this
     */
    public function setExpenseAmountToBeInvoiced($expense_amount_to_be_invoiced)
    {

        $this->container['expense_amount_to_be_invoiced'] = $expense_amount_to_be_invoiced;

        return $this;
    }



    /**
     * Gets expense_amount_invoiced
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getExpenseAmountInvoiced()
    {
        return $this->container['expense_amount_invoiced'];
    }

    /**
     * Sets expense_amount_invoiced
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $expense_amount_invoiced expense_amount_invoiced
     *
     * @return $this
     */
    public function setExpenseAmountInvoiced($expense_amount_invoiced)
    {

        $this->container['expense_amount_invoiced'] = $expense_amount_invoiced;

        return $this;
    }



    /**
     * Gets project_amount_invoiced
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getProjectAmountInvoiced()
    {
        return $this->container['project_amount_invoiced'];
    }

    /**
     * Sets project_amount_invoiced
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $project_amount_invoiced project_amount_invoiced
     *
     * @return $this
     */
    public function setProjectAmountInvoiced($project_amount_invoiced)
    {

        $this->container['project_amount_invoiced'] = $project_amount_invoiced;

        return $this;
    }



    /**
     * Gets deposit
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getDeposit()
    {
        return $this->container['deposit'];
    }

    /**
     * Sets deposit
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $deposit deposit
     *
     * @return $this
     */
    public function setDeposit($deposit)
    {

        $this->container['deposit'] = $deposit;

        return $this;
    }



    /**
     * Gets deposit_applied
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getDepositApplied()
    {
        return $this->container['deposit_applied'];
    }

    /**
     * Sets deposit_applied
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $deposit_applied deposit_applied
     *
     * @return $this
     */
    public function setDepositApplied($deposit_applied)
    {

        $this->container['deposit_applied'] = $deposit_applied;

        return $this;
    }



    /**
     * Gets credit_note_amount
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getCreditNoteAmount()
    {
        return $this->container['credit_note_amount'];
    }

    /**
     * Sets credit_note_amount
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $credit_note_amount credit_note_amount
     *
     * @return $this
     */
    public function setCreditNoteAmount($credit_note_amount)
    {

        $this->container['credit_note_amount'] = $credit_note_amount;

        return $this;
    }



    /**
     * Gets deadline_utc
     *
     * @return \DateTime|null
     */
    public function getDeadlineUtc()
    {
        return $this->container['deadline_utc'];
    }

    /**
     * Sets deadline_utc
     *
     * @param \DateTime|null $deadline_utc Deadline for the project. UTC Date Time in ISO-8601 format.
     *
     * @return $this
     */
    public function setDeadlineUtc($deadline_utc)
    {

        $this->container['deadline_utc'] = $deadline_utc;

        return $this;
    }



    /**
     * Gets total_invoiced
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getTotalInvoiced()
    {
        return $this->container['total_invoiced'];
    }

    /**
     * Sets total_invoiced
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $total_invoiced total_invoiced
     *
     * @return $this
     */
    public function setTotalInvoiced($total_invoiced)
    {

        $this->container['total_invoiced'] = $total_invoiced;

        return $this;
    }



    /**
     * Gets total_to_be_invoiced
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getTotalToBeInvoiced()
    {
        return $this->container['total_to_be_invoiced'];
    }

    /**
     * Sets total_to_be_invoiced
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $total_to_be_invoiced total_to_be_invoiced
     *
     * @return $this
     */
    public function setTotalToBeInvoiced($total_to_be_invoiced)
    {

        $this->container['total_to_be_invoiced'] = $total_to_be_invoiced;

        return $this;
    }



    /**
     * Gets estimate
     *
     * @return \XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getEstimate()
    {
        return $this->container['estimate'];
    }

    /**
     * Sets estimate
     *
     * @param \XeroAPI\XeroPHP\Models\Project\Amount|null $estimate estimate
     *
     * @return $this
     */
    public function setEstimate($estimate)
    {

        $this->container['estimate'] = $estimate;

        return $this;
    }



    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {

        $this->container['status'] = $status;

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
            ProjectObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


