<?php
/**
 * EnvGetDTO
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
 * EnvGetDTO Class Doc Comment
 *
 * @category Class
 * @description Envelope
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnvGetDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EnvGetDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uuid' => 'string',
'data' => 'string',
'received_at' => '\DateTime',
'labels' => 'string[]',
'total' => 'int',
'completed' => 'int',
'chain_uuid' => 'string',
'chained_by_me' => 'bool',
'approval_flow_uuid' => 'string',
'status' => 'string',
'sender' => '\Swagger\Client\Model\EnvelopeSenderDTO'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uuid' => 'uuid',
'data' => null,
'received_at' => 'date-time',
'labels' => 'uuid',
'total' => 'int32',
'completed' => 'int32',
'chain_uuid' => 'uuid',
'chained_by_me' => null,
'approval_flow_uuid' => 'uuid',
'status' => null,
'sender' => null    ];

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
'data' => 'data',
'received_at' => 'receivedAt',
'labels' => 'labels',
'total' => 'total',
'completed' => 'completed',
'chain_uuid' => 'chainUuid',
'chained_by_me' => 'chainedByMe',
'approval_flow_uuid' => 'approvalFlowUuid',
'status' => 'status',
'sender' => 'sender'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
'data' => 'setData',
'received_at' => 'setReceivedAt',
'labels' => 'setLabels',
'total' => 'setTotal',
'completed' => 'setCompleted',
'chain_uuid' => 'setChainUuid',
'chained_by_me' => 'setChainedByMe',
'approval_flow_uuid' => 'setApprovalFlowUuid',
'status' => 'setStatus',
'sender' => 'setSender'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
'data' => 'getData',
'received_at' => 'getReceivedAt',
'labels' => 'getLabels',
'total' => 'getTotal',
'completed' => 'getCompleted',
'chain_uuid' => 'getChainUuid',
'chained_by_me' => 'getChainedByMe',
'approval_flow_uuid' => 'getApprovalFlowUuid',
'status' => 'getStatus',
'sender' => 'getSender'    ];

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

    const STATUS_DRAFT = 'DRAFT';
const STATUS_SENT = 'SENT';
const STATUS_WAITING = 'WAITING';
const STATUS_COMPLETED = 'COMPLETED';
const STATUS_CANCELLED = 'CANCELLED';
const STATUS_EXPIRED = 'EXPIRED';
const STATUS_ON_APPROVAL = 'ON_APPROVAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
self::STATUS_SENT,
self::STATUS_WAITING,
self::STATUS_COMPLETED,
self::STATUS_CANCELLED,
self::STATUS_EXPIRED,
self::STATUS_ON_APPROVAL,        ];
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['received_at'] = isset($data['received_at']) ? $data['received_at'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['chain_uuid'] = isset($data['chain_uuid']) ? $data['chain_uuid'] : null;
        $this->container['chained_by_me'] = isset($data['chained_by_me']) ? $data['chained_by_me'] : null;
        $this->container['approval_flow_uuid'] = isset($data['approval_flow_uuid']) ? $data['approval_flow_uuid'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
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
     * @param string $uuid UUID of envelope
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets data
     *
     * @return string
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string $data Envelope XML
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets received_at
     *
     * @return \DateTime
     */
    public function getReceivedAt()
    {
        return $this->container['received_at'];
    }

    /**
     * Sets received_at
     *
     * @param \DateTime $received_at Date of receiving the envelope by the mailbox
     *
     * @return $this
     */
    public function setReceivedAt($received_at)
    {
        $this->container['received_at'] = $received_at;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param string[] $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total Total number of participants
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return int
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param int $completed Number of participants who completed their processing
     *
     * @return $this
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets chain_uuid
     *
     * @return string
     */
    public function getChainUuid()
    {
        return $this->container['chain_uuid'];
    }

    /**
     * Sets chain_uuid
     *
     * @param string $chain_uuid Envelope chain UUID
     *
     * @return $this
     */
    public function setChainUuid($chain_uuid)
    {
        $this->container['chain_uuid'] = $chain_uuid;

        return $this;
    }

    /**
     * Gets chained_by_me
     *
     * @return bool
     */
    public function getChainedByMe()
    {
        return $this->container['chained_by_me'];
    }

    /**
     * Sets chained_by_me
     *
     * @param bool $chained_by_me Envelope chained by requested user
     *
     * @return $this
     */
    public function setChainedByMe($chained_by_me)
    {
        $this->container['chained_by_me'] = $chained_by_me;

        return $this;
    }

    /**
     * Gets approval_flow_uuid
     *
     * @return string
     */
    public function getApprovalFlowUuid()
    {
        return $this->container['approval_flow_uuid'];
    }

    /**
     * Sets approval_flow_uuid
     *
     * @param string $approval_flow_uuid Approval flow UUID
     *
     * @return $this
     */
    public function setApprovalFlowUuid($approval_flow_uuid)
    {
        $this->container['approval_flow_uuid'] = $approval_flow_uuid;

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
     * @param string $status Calculated status for mailbox
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
     * Gets sender
     *
     * @return \Swagger\Client\Model\EnvelopeSenderDTO
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Swagger\Client\Model\EnvelopeSenderDTO $sender sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

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
