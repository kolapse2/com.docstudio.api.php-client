<?php
/**
 * CommentThreadDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Docstudio\Client
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
use \Docstudio\ClientObjectSerializer;

/**
 * CommentThreadDTO Class Doc Comment
 *
 * @category Class
 * @package  Docstudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommentThreadDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommentThreadDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mailbox_uuid' => 'string',
'mailbox_name' => 'string',
'thread_uuid' => 'string',
'xpath' => 'string',
'messages' => '\Docstudio\ClientModel\CommentMessageDTO[]',
'access_type' => 'string',
'shared_to' => '\Docstudio\ClientModel\NameUuidDTO[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mailbox_uuid' => 'uuid',
'mailbox_name' => null,
'thread_uuid' => 'uuid',
'xpath' => null,
'messages' => null,
'access_type' => null,
'shared_to' => null    ];

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
        'mailbox_uuid' => 'mailboxUuid',
'mailbox_name' => 'mailboxName',
'thread_uuid' => 'threadUuid',
'xpath' => 'xpath',
'messages' => 'messages',
'access_type' => 'accessType',
'shared_to' => 'sharedTo'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mailbox_uuid' => 'setMailboxUuid',
'mailbox_name' => 'setMailboxName',
'thread_uuid' => 'setThreadUuid',
'xpath' => 'setXpath',
'messages' => 'setMessages',
'access_type' => 'setAccessType',
'shared_to' => 'setSharedTo'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mailbox_uuid' => 'getMailboxUuid',
'mailbox_name' => 'getMailboxName',
'thread_uuid' => 'getThreadUuid',
'xpath' => 'getXpath',
'messages' => 'getMessages',
'access_type' => 'getAccessType',
'shared_to' => 'getSharedTo'    ];

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

    const ACCESS_TYPE_MAILBOX = 'mailbox';
const ACCESS_TYPE_ACCOUNT = 'account';
const ACCESS_TYPE_PUB = 'pub';
const ACCESS_TYPE_OFFICIAL = 'official';
const ACCESS_TYPE_SHARED = 'shared';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessTypeAllowableValues()
    {
        return [
            self::ACCESS_TYPE_MAILBOX,
self::ACCESS_TYPE_ACCOUNT,
self::ACCESS_TYPE_PUB,
self::ACCESS_TYPE_OFFICIAL,
self::ACCESS_TYPE_SHARED,        ];
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
        $this->container['mailbox_uuid'] = isset($data['mailbox_uuid']) ? $data['mailbox_uuid'] : null;
        $this->container['mailbox_name'] = isset($data['mailbox_name']) ? $data['mailbox_name'] : null;
        $this->container['thread_uuid'] = isset($data['thread_uuid']) ? $data['thread_uuid'] : null;
        $this->container['xpath'] = isset($data['xpath']) ? $data['xpath'] : null;
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
        $this->container['access_type'] = isset($data['access_type']) ? $data['access_type'] : null;
        $this->container['shared_to'] = isset($data['shared_to']) ? $data['shared_to'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccessTypeAllowableValues();
        if (!is_null($this->container['access_type']) && !in_array($this->container['access_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'access_type', must be one of '%s'",
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
     * Gets mailbox_uuid
     *
     * @return string
     */
    public function getMailboxUuid()
    {
        return $this->container['mailbox_uuid'];
    }

    /**
     * Sets mailbox_uuid
     *
     * @param string $mailbox_uuid UUID of Mailbox created this comment
     *
     * @return $this
     */
    public function setMailboxUuid($mailbox_uuid)
    {
        $this->container['mailbox_uuid'] = $mailbox_uuid;

        return $this;
    }

    /**
     * Gets mailbox_name
     *
     * @return string
     */
    public function getMailboxName()
    {
        return $this->container['mailbox_name'];
    }

    /**
     * Sets mailbox_name
     *
     * @param string $mailbox_name Name of Mailbox created this comment
     *
     * @return $this
     */
    public function setMailboxName($mailbox_name)
    {
        $this->container['mailbox_name'] = $mailbox_name;

        return $this;
    }

    /**
     * Gets thread_uuid
     *
     * @return string
     */
    public function getThreadUuid()
    {
        return $this->container['thread_uuid'];
    }

    /**
     * Sets thread_uuid
     *
     * @param string $thread_uuid Thread UUID
     *
     * @return $this
     */
    public function setThreadUuid($thread_uuid)
    {
        $this->container['thread_uuid'] = $thread_uuid;

        return $this;
    }

    /**
     * Gets xpath
     *
     * @return string
     */
    public function getXpath()
    {
        return $this->container['xpath'];
    }

    /**
     * Sets xpath
     *
     * @param string $xpath xPath to find selected area
     *
     * @return $this
     */
    public function setXpath($xpath)
    {
        $this->container['xpath'] = $xpath;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \Docstudio\ClientModel\CommentMessageDTO[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \Docstudio\ClientModel\CommentMessageDTO[] $messages All messages in the thread
     *
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets access_type
     *
     * @return string
     */
    public function getAccessType()
    {
        return $this->container['access_type'];
    }

    /**
     * Sets access_type
     *
     * @param string $access_type Access level
     *
     * @return $this
     */
    public function setAccessType($access_type)
    {
        $allowedValues = $this->getAccessTypeAllowableValues();
        if (!is_null($access_type) && !in_array($access_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'access_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['access_type'] = $access_type;

        return $this;
    }

    /**
     * Gets shared_to
     *
     * @return \Docstudio\ClientModel\NameUuidDTO[]
     */
    public function getSharedTo()
    {
        return $this->container['shared_to'];
    }

    /**
     * Sets shared_to
     *
     * @param \Docstudio\ClientModel\NameUuidDTO[] $shared_to shared_to
     *
     * @return $this
     */
    public function setSharedTo($shared_to)
    {
        $this->container['shared_to'] = $shared_to;

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
