<?php
/**
 * ObjectType
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Files API
 *
 * These endpoints are specific to Xero Files API
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

namespace XeroAPI\XeroPHP\Models\File;
use \XeroAPI\XeroPHP\FileObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;

/**
 * ObjectType Class Doc Comment
 *
 * @category Class
 * @description The Object Type
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'Unknown';
    const ACCPAY = 'Accpay';
    const ACC_PAY_CREDIT = 'AccPayCredit';
    const ACC_PAY_PAYMENT = 'AccPayPayment';
    const ACC_REC = 'AccRec';
    const ACC_REC_CREDIT = 'AccRecCredit';
    const ACC_REC_PAYMENT = 'AccRecPayment';
    const ADJUSTMENT = 'Adjustment';
    const AP_CREDIT_PAYMENT = 'ApCreditPayment';
    const AP_OVER_PAYMENT = 'ApOverPayment';
    const AP_OVER_PAYMENT_PAYMENT = 'ApOverPaymentPayment';
    const AP_OVER_PAYMENT_SOURCE_PAYMENT = 'ApOverPaymentSourcePayment';
    const AP_PREPAYMENT = 'ApPrepayment';
    const AP_PREPAYMENT_PAYMENT = 'ApPrepaymentPayment';
    const AP_PREPAYMENT_SOURCE_PAYMENT = 'ApPrepaymentSourcePayment';
    const AR_CREDIT_PAYMENT = 'ArCreditPayment';
    const AR_OVER_PAYMENT = 'ArOverPayment';
    const AR_OVERPAYMENT_PAYMENT = 'ArOverpaymentPayment';
    const AR_OVERPAYMENT_SOURCE_PAYMENT = 'ArOverpaymentSourcePayment';
    const AR_PREPAYMENT = 'ArPrepayment';
    const AR_PREPAYMENT_PAYMENT = 'ArPrepaymentPayment';
    const AR_PREPAYMENT_SOURCE_PAYMENT = 'ArPrepaymentSourcePayment';
    const CASH_PAID = 'CashPaid';
    const CASH_REC = 'CashRec';
    const EXP_PAYMENT = 'ExpPayment';
    const MAN_JOURNAL = 'ManJournal';
    const PURCHASE_ORDER = 'PurchaseOrder';
    const RECEIPT = 'Receipt';
    const TRANSFER = 'Transfer';
    const ACCOUNT = 'Account';
    const CONTACT = 'Contact';
    const BUSINESS = 'Business';
    const EMPLOYEE = 'Employee';
    const PERSON = 'Person';
    const USER = 'User';
    const ORG = 'Org';
    const FIXED_ASSET = 'FixedAsset';
    const PAY_RUN = 'PayRun';
    const PRICE_LIST_ITEM = 'PriceListItem';
    const BANK = 'Bank';
    const CURRENT = 'Current';
    const EQUITY = 'Equity';
    const EXPENSE = 'Expense';
    const FIXED = 'Fixed';
    const LIABILITY = 'Liability';
    const PREPAYMENT = 'Prepayment';
    const REVENUE = 'Revenue';
    const SALES = 'Sales';
    const OVERHEADS = 'Overheads';
    const DEPRECIATN = 'Depreciatn';
    const OTHER_INCOME = 'OtherIncome';
    const DIRECT_COSTS = 'DirectCosts';
    const CURRLIAB = 'Currliab';
    const TERMLIAB = 'Termliab';
    const NON_CURRENT = 'NonCurrent';
    const SALES_QUOTE = 'SalesQuote';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::ACCPAY,
            self::ACC_PAY_CREDIT,
            self::ACC_PAY_PAYMENT,
            self::ACC_REC,
            self::ACC_REC_CREDIT,
            self::ACC_REC_PAYMENT,
            self::ADJUSTMENT,
            self::AP_CREDIT_PAYMENT,
            self::AP_OVER_PAYMENT,
            self::AP_OVER_PAYMENT_PAYMENT,
            self::AP_OVER_PAYMENT_SOURCE_PAYMENT,
            self::AP_PREPAYMENT,
            self::AP_PREPAYMENT_PAYMENT,
            self::AP_PREPAYMENT_SOURCE_PAYMENT,
            self::AR_CREDIT_PAYMENT,
            self::AR_OVER_PAYMENT,
            self::AR_OVERPAYMENT_PAYMENT,
            self::AR_OVERPAYMENT_SOURCE_PAYMENT,
            self::AR_PREPAYMENT,
            self::AR_PREPAYMENT_PAYMENT,
            self::AR_PREPAYMENT_SOURCE_PAYMENT,
            self::CASH_PAID,
            self::CASH_REC,
            self::EXP_PAYMENT,
            self::MAN_JOURNAL,
            self::PURCHASE_ORDER,
            self::RECEIPT,
            self::TRANSFER,
            self::ACCOUNT,
            self::CONTACT,
            self::BUSINESS,
            self::EMPLOYEE,
            self::PERSON,
            self::USER,
            self::ORG,
            self::FIXED_ASSET,
            self::PAY_RUN,
            self::PRICE_LIST_ITEM,
            self::BANK,
            self::CURRENT,
            self::EQUITY,
            self::EXPENSE,
            self::FIXED,
            self::LIABILITY,
            self::PREPAYMENT,
            self::REVENUE,
            self::SALES,
            self::OVERHEADS,
            self::DEPRECIATN,
            self::OTHER_INCOME,
            self::DIRECT_COSTS,
            self::CURRLIAB,
            self::TERMLIAB,
            self::NON_CURRENT,
            self::SALES_QUOTE,
        ];
    }
}


