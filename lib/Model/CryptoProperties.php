<?php
/**
 * CryptoProperties
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
 * CryptoProperties Class Doc Comment
 *
 * @category Class
 * @description Signature Providers and Region
 * @package  Docstudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CryptoProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CryptoProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'signature_providers' => 'string[]',
'region' => 'string',
'smart_id_client_prefix' => 'string',
'signature_container' => 'string',
'stamp_supported' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'signature_providers' => null,
'region' => null,
'smart_id_client_prefix' => null,
'signature_container' => null,
'stamp_supported' => null    ];

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
        'signature_providers' => 'signatureProviders',
'region' => 'region',
'smart_id_client_prefix' => 'smartIdClientPrefix',
'signature_container' => 'signatureContainer',
'stamp_supported' => 'stampSupported'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signature_providers' => 'setSignatureProviders',
'region' => 'setRegion',
'smart_id_client_prefix' => 'setSmartIdClientPrefix',
'signature_container' => 'setSignatureContainer',
'stamp_supported' => 'setStampSupported'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signature_providers' => 'getSignatureProviders',
'region' => 'getRegion',
'smart_id_client_prefix' => 'getSmartIdClientPrefix',
'signature_container' => 'getSignatureContainer',
'stamp_supported' => 'getStampSupported'    ];

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

    const SIGNATURE_CONTAINER_P7_S = 'P7S';
const SIGNATURE_CONTAINER_ASICE = 'ASICE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignatureContainerAllowableValues()
    {
        return [
            self::SIGNATURE_CONTAINER_P7_S,
self::SIGNATURE_CONTAINER_ASICE,        ];
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
        $this->container['signature_providers'] = isset($data['signature_providers']) ? $data['signature_providers'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['smart_id_client_prefix'] = isset($data['smart_id_client_prefix']) ? $data['smart_id_client_prefix'] : null;
        $this->container['signature_container'] = isset($data['signature_container']) ? $data['signature_container'] : null;
        $this->container['stamp_supported'] = isset($data['stamp_supported']) ? $data['stamp_supported'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSignatureContainerAllowableValues();
        if (!is_null($this->container['signature_container']) && !in_array($this->container['signature_container'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'signature_container', must be one of '%s'",
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
     * Gets signature_providers
     *
     * @return string[]
     */
    public function getSignatureProviders()
    {
        return $this->container['signature_providers'];
    }

    /**
     * Sets signature_providers
     *
     * @param string[] $signature_providers signature_providers
     *
     * @return $this
     */
    public function setSignatureProviders($signature_providers)
    {
        $this->container['signature_providers'] = $signature_providers;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets smart_id_client_prefix
     *
     * @return string
     */
    public function getSmartIdClientPrefix()
    {
        return $this->container['smart_id_client_prefix'];
    }

    /**
     * Sets smart_id_client_prefix
     *
     * @param string $smart_id_client_prefix smart_id_client_prefix
     *
     * @return $this
     */
    public function setSmartIdClientPrefix($smart_id_client_prefix)
    {
        $this->container['smart_id_client_prefix'] = $smart_id_client_prefix;

        return $this;
    }

    /**
     * Gets signature_container
     *
     * @return string
     */
    public function getSignatureContainer()
    {
        return $this->container['signature_container'];
    }

    /**
     * Sets signature_container
     *
     * @param string $signature_container signature_container
     *
     * @return $this
     */
    public function setSignatureContainer($signature_container)
    {
        $allowedValues = $this->getSignatureContainerAllowableValues();
        if (!is_null($signature_container) && !in_array($signature_container, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'signature_container', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['signature_container'] = $signature_container;

        return $this;
    }

    /**
     * Gets stamp_supported
     *
     * @return bool
     */
    public function getStampSupported()
    {
        return $this->container['stamp_supported'];
    }

    /**
     * Sets stamp_supported
     *
     * @param bool $stamp_supported stamp_supported
     *
     * @return $this
     */
    public function setStampSupported($stamp_supported)
    {
        $this->container['stamp_supported'] = $stamp_supported;

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
