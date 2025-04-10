<?php
/**
 * PaymentTermType
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
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;

/**
 * PaymentTermType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentTermType
{
    /**
     * Possible values of this enum
     */
    const DAYSAFTERBILLDATE = 'DAYSAFTERBILLDATE';
    const DAYSAFTERBILLMONTH = 'DAYSAFTERBILLMONTH';
    const OFCURRENTMONTH = 'OFCURRENTMONTH';
    const OFFOLLOWINGMONTH = 'OFFOLLOWINGMONTH';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAYSAFTERBILLDATE,
            self::DAYSAFTERBILLMONTH,
            self::OFCURRENTMONTH,
            self::OFFOLLOWINGMONTH,
        ];
    }
}


