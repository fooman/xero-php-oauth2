<?php
/**
 * AssetStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Assets API
 *
 * The Assets API exposes fixed asset related functions of the Xero Accounting application and can be used for a variety of purposes such as creating assets, retrieving asset valuations etc.
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

namespace XeroAPI\XeroPHP\Models\Asset;
use \XeroAPI\XeroPHP\AssetObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;

/**
 * AssetStatus Class Doc Comment
 *
 * @category Class
 * @description See Asset Status Codes.
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AssetStatus
{
    /**
     * Possible values of this enum
     */
    const DRAFT = 'Draft';
    const REGISTERED = 'Registered';
    const DISPOSED = 'Disposed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DRAFT,
            self::REGISTERED,
            self::DISPOSED,
        ];
    }
}


