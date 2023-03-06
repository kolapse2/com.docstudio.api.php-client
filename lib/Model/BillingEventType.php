<?php
/**
 * BillingEventType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocStudio Api Documentation
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: R74.25
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Docstudio\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * BillingEventType Class Doc Comment
 *
 * @category Class
 * @description Billing event
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingEventType
{
    /**
     * Possible values of this enum
     */
    const NEW_CORP_USER = 'new-corp-user';
const NEW_ACCOUNT_INVITE = 'new-account-invite';
const INCOME_ENVELOPE = 'income-envelope';
const SENT_ENVELOPE = 'sent-envelope';
const ARCHIVE_ENVELOPE = 'archive-envelope';
const UNARCHIVE_ENVELOPE = 'unarchive-envelope';
const ACCOUNT_MAILBOX = 'account-mailbox';
const DIG_SIGN_ENVELOPE = 'dig-sign-envelope';
const ACCOUNT_DOMAIN = 'account-domain';
const INTEGRATION_RULE = 'integration-rule';
const ENVELOPE_SCENARIO = 'envelope-scenario';
const CLOUD_SIGNATURE = 'cloud-signature';
const ENVELOPE_APPROVAL = 'envelope-approval';
const PASSWORD_POLICY = 'password-policy';
const CALLBACK_SENT = 'callback-sent';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NEW_CORP_USER,
self::NEW_ACCOUNT_INVITE,
self::INCOME_ENVELOPE,
self::SENT_ENVELOPE,
self::ARCHIVE_ENVELOPE,
self::UNARCHIVE_ENVELOPE,
self::ACCOUNT_MAILBOX,
self::DIG_SIGN_ENVELOPE,
self::ACCOUNT_DOMAIN,
self::INTEGRATION_RULE,
self::ENVELOPE_SCENARIO,
self::CLOUD_SIGNATURE,
self::ENVELOPE_APPROVAL,
self::PASSWORD_POLICY,
self::CALLBACK_SENT,        ];
    }
}
