<?php
/**
 * ReportWithRow
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * ReportWithRow Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportWithRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportWithRow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'report_id' => 'string',
        'report_name' => 'string',
        'report_title' => 'string',
        'report_type' => 'string',
        'report_titles' => 'string[]',
        'report_date' => 'string',
        'rows' => '\XeroAPI\XeroPHP\Models\Accounting\ReportRows[]',
        'updated_date_utc' => 'string',
        'fields' => '\XeroAPI\XeroPHP\Models\Accounting\ReportFields[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'report_id' => null,
        'report_name' => null,
        'report_title' => null,
        'report_type' => null,
        'report_titles' => null,
        'report_date' => null,
        'rows' => null,
        'updated_date_utc' => null,
        'fields' => null
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
        'report_id' => 'ReportID',
        'report_name' => 'ReportName',
        'report_title' => 'ReportTitle',
        'report_type' => 'ReportType',
        'report_titles' => 'ReportTitles',
        'report_date' => 'ReportDate',
        'rows' => 'Rows',
        'updated_date_utc' => 'UpdatedDateUTC',
        'fields' => 'Fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'report_id' => 'setReportId',
        'report_name' => 'setReportName',
        'report_title' => 'setReportTitle',
        'report_type' => 'setReportType',
        'report_titles' => 'setReportTitles',
        'report_date' => 'setReportDate',
        'rows' => 'setRows',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'fields' => 'setFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'report_id' => 'getReportId',
        'report_name' => 'getReportName',
        'report_title' => 'getReportTitle',
        'report_type' => 'getReportType',
        'report_titles' => 'getReportTitles',
        'report_date' => 'getReportDate',
        'rows' => 'getRows',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'fields' => 'getFields'
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
    public function __construct(array $data = null)
    {
        $this->container['report_id'] = isset($data['report_id']) ? $data['report_id'] : null;
        $this->container['report_name'] = isset($data['report_name']) ? $data['report_name'] : null;
        $this->container['report_title'] = isset($data['report_title']) ? $data['report_title'] : null;
        $this->container['report_type'] = isset($data['report_type']) ? $data['report_type'] : null;
        $this->container['report_titles'] = isset($data['report_titles']) ? $data['report_titles'] : null;
        $this->container['report_date'] = isset($data['report_date']) ? $data['report_date'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
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
     * Gets report_id
     *
     * @return string|null
     */
    public function getReportId()
    {
        return $this->container['report_id'];
    }

    /**
     * Sets report_id
     *
     * @param string|null $report_id ID of the Report
     *
     * @return $this
     */
    public function setReportId($report_id)
    {

        $this->container['report_id'] = $report_id;

        return $this;
    }



    /**
     * Gets report_name
     *
     * @return string|null
     */
    public function getReportName()
    {
        return $this->container['report_name'];
    }

    /**
     * Sets report_name
     *
     * @param string|null $report_name Name of the report
     *
     * @return $this
     */
    public function setReportName($report_name)
    {

        $this->container['report_name'] = $report_name;

        return $this;
    }



    /**
     * Gets report_title
     *
     * @return string|null
     */
    public function getReportTitle()
    {
        return $this->container['report_title'];
    }

    /**
     * Sets report_title
     *
     * @param string|null $report_title Title of the report
     *
     * @return $this
     */
    public function setReportTitle($report_title)
    {

        $this->container['report_title'] = $report_title;

        return $this;
    }



    /**
     * Gets report_type
     *
     * @return string|null
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type
     *
     * @param string|null $report_type The type of report (BalanceSheet,ProfitLoss, etc)
     *
     * @return $this
     */
    public function setReportType($report_type)
    {

        $this->container['report_type'] = $report_type;

        return $this;
    }



    /**
     * Gets report_titles
     *
     * @return string[]|null
     */
    public function getReportTitles()
    {
        return $this->container['report_titles'];
    }

    /**
     * Sets report_titles
     *
     * @param string[]|null $report_titles Report titles array (3 to 4 strings with the report name, orgnisation name and time frame of report)
     *
     * @return $this
     */
    public function setReportTitles($report_titles)
    {

        $this->container['report_titles'] = $report_titles;

        return $this;
    }



    /**
     * Gets report_date
     *
     * @return string|null
     */
    public function getReportDate()
    {
        return $this->container['report_date'];
    }

    /**
     * Sets report_date
     *
     * @param string|null $report_date Date of report
     *
     * @return $this
     */
    public function setReportDate($report_date)
    {

        $this->container['report_date'] = $report_date;

        return $this;
    }



    /**
     * Gets rows
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ReportRows[]|null
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ReportRows[]|null $rows rows
     *
     * @return $this
     */
    public function setRows($rows)
    {

        $this->container['rows'] = $rows;

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
     * @param string|null $updated_date_utc Updated Date
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets fields
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ReportFields[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ReportFields[]|null $fields fields
     *
     * @return $this
     */
    public function setFields($fields)
    {

        $this->container['fields'] = $fields;

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
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


