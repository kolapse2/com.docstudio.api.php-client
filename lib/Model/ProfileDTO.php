<?php
/**
 * ProfileDTO
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

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ProfileDTO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProfileDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProfileDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uuid' => 'string',
'email' => 'string',
'first_name' => 'string',
'last_name' => 'string',
'status' => 'string',
'date_locale' => 'string',
'locale' => 'string',
'timezone' => 'string',
'corporate_user' => 'bool',
'sso_enabled' => 'bool',
'auto_deposit_mailbox_uuid' => 'string',
'phone' => 'string',
'display_exact_date' => 'bool',
'signature' => 'string',
'accounts' => '\Swagger\Client\Model\User2AccountWithMailboxesDTO[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uuid' => 'uuid',
'email' => null,
'first_name' => null,
'last_name' => null,
'status' => null,
'date_locale' => null,
'locale' => null,
'timezone' => null,
'corporate_user' => null,
'sso_enabled' => null,
'auto_deposit_mailbox_uuid' => 'uuid',
'phone' => null,
'display_exact_date' => null,
'signature' => null,
'accounts' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uuid' => 'uuid',
'email' => 'email',
'first_name' => 'firstName',
'last_name' => 'lastName',
'status' => 'status',
'date_locale' => 'dateLocale',
'locale' => 'locale',
'timezone' => 'timezone',
'corporate_user' => 'corporateUser',
'sso_enabled' => 'ssoEnabled',
'auto_deposit_mailbox_uuid' => 'autoDepositMailboxUuid',
'phone' => 'phone',
'display_exact_date' => 'displayExactDate',
'signature' => 'signature',
'accounts' => 'accounts'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
'email' => 'setEmail',
'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'status' => 'setStatus',
'date_locale' => 'setDateLocale',
'locale' => 'setLocale',
'timezone' => 'setTimezone',
'corporate_user' => 'setCorporateUser',
'sso_enabled' => 'setSsoEnabled',
'auto_deposit_mailbox_uuid' => 'setAutoDepositMailboxUuid',
'phone' => 'setPhone',
'display_exact_date' => 'setDisplayExactDate',
'signature' => 'setSignature',
'accounts' => 'setAccounts'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
'email' => 'getEmail',
'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'status' => 'getStatus',
'date_locale' => 'getDateLocale',
'locale' => 'getLocale',
'timezone' => 'getTimezone',
'corporate_user' => 'getCorporateUser',
'sso_enabled' => 'getSsoEnabled',
'auto_deposit_mailbox_uuid' => 'getAutoDepositMailboxUuid',
'phone' => 'getPhone',
'display_exact_date' => 'getDisplayExactDate',
'signature' => 'getSignature',
'accounts' => 'getAccounts'    ];

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
        return self::$swaggerModelName;
    }

    const STATUS_PENDING_INVITE = 'PENDING_INVITE';
const STATUS_ACTIVE = 'ACTIVE';
const STATUS_BLOCKED = 'BLOCKED';
const STATUS_PENDING_PASSWORD = 'PENDING_PASSWORD';
const STATUS_DELETED = 'DELETED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING_INVITE,
self::STATUS_ACTIVE,
self::STATUS_BLOCKED,
self::STATUS_PENDING_PASSWORD,
self::STATUS_DELETED,        ];
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['date_locale'] = isset($data['date_locale']) ? $data['date_locale'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['corporate_user'] = isset($data['corporate_user']) ? $data['corporate_user'] : null;
        $this->container['sso_enabled'] = isset($data['sso_enabled']) ? $data['sso_enabled'] : null;
        $this->container['auto_deposit_mailbox_uuid'] = isset($data['auto_deposit_mailbox_uuid']) ? $data['auto_deposit_mailbox_uuid'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['display_exact_date'] = isset($data['display_exact_date']) ? $data['display_exact_date'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['accounts'] = isset($data['accounts']) ? $data['accounts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid User uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email User email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name User first name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name User last name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status User status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets date_locale
     *
     * @return string
     */
    public function getDateLocale()
    {
        return $this->container['date_locale'];
    }

    /**
     * Sets date_locale
     *
     * @param string $date_locale User locale for dates
     *
     * @return $this
     */
    public function setDateLocale($date_locale)
    {
        $this->container['date_locale'] = $date_locale;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale User locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone User timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets corporate_user
     *
     * @return bool
     */
    public function getCorporateUser()
    {
        return $this->container['corporate_user'];
    }

    /**
     * Sets corporate_user
     *
     * @param bool $corporate_user Is corporate user
     *
     * @return $this
     */
    public function setCorporateUser($corporate_user)
    {
        $this->container['corporate_user'] = $corporate_user;

        return $this;
    }

    /**
     * Gets sso_enabled
     *
     * @return bool
     */
    public function getSsoEnabled()
    {
        return $this->container['sso_enabled'];
    }

    /**
     * Sets sso_enabled
     *
     * @param bool $sso_enabled Is SSO enabled for user
     *
     * @return $this
     */
    public function setSsoEnabled($sso_enabled)
    {
        $this->container['sso_enabled'] = $sso_enabled;

        return $this;
    }

    /**
     * Gets auto_deposit_mailbox_uuid
     *
     * @return string
     */
    public function getAutoDepositMailboxUuid()
    {
        return $this->container['auto_deposit_mailbox_uuid'];
    }

    /**
     * Sets auto_deposit_mailbox_uuid
     *
     * @param string $auto_deposit_mailbox_uuid Auto Deposit Mailbox UUID
     *
     * @return $this
     */
    public function setAutoDepositMailboxUuid($auto_deposit_mailbox_uuid)
    {
        $this->container['auto_deposit_mailbox_uuid'] = $auto_deposit_mailbox_uuid;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone User phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets display_exact_date
     *
     * @return bool
     */
    public function getDisplayExactDate()
    {
        return $this->container['display_exact_date'];
    }

    /**
     * Sets display_exact_date
     *
     * @param bool $display_exact_date Display exact date instead of relative
     *
     * @return $this
     */
    public function setDisplayExactDate($display_exact_date)
    {
        $this->container['display_exact_date'] = $display_exact_date;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string $signature Saved eInk signature
     *
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets accounts
     *
     * @return \Swagger\Client\Model\User2AccountWithMailboxesDTO[]
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param \Swagger\Client\Model\User2AccountWithMailboxesDTO[] $accounts User accounts belongs to
     *
     * @return $this
     */
    public function setAccounts($accounts)
    {
        $this->container['accounts'] = $accounts;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}