<?php
/**
 * AccountSsoIdProviderUpdateDTO
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
 * AccountSsoIdProviderUpdateDTO Class Doc Comment
 *
 * @category Class
 * @description New IdP info
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountSsoIdProviderUpdateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountSsoIdProviderUpdateDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'first_name_mapping' => 'string',
'last_name_mapping' => 'string',
'phone_mapping' => 'string',
'metadata_url' => 'string',
'metadata_xml' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'first_name_mapping' => null,
'last_name_mapping' => null,
'phone_mapping' => null,
'metadata_url' => null,
'metadata_xml' => null    ];

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
        'name' => 'name',
'first_name_mapping' => 'firstNameMapping',
'last_name_mapping' => 'lastNameMapping',
'phone_mapping' => 'phoneMapping',
'metadata_url' => 'metadataUrl',
'metadata_xml' => 'metadataXml'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'first_name_mapping' => 'setFirstNameMapping',
'last_name_mapping' => 'setLastNameMapping',
'phone_mapping' => 'setPhoneMapping',
'metadata_url' => 'setMetadataUrl',
'metadata_xml' => 'setMetadataXml'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'first_name_mapping' => 'getFirstNameMapping',
'last_name_mapping' => 'getLastNameMapping',
'phone_mapping' => 'getPhoneMapping',
'metadata_url' => 'getMetadataUrl',
'metadata_xml' => 'getMetadataXml'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['first_name_mapping'] = isset($data['first_name_mapping']) ? $data['first_name_mapping'] : null;
        $this->container['last_name_mapping'] = isset($data['last_name_mapping']) ? $data['last_name_mapping'] : null;
        $this->container['phone_mapping'] = isset($data['phone_mapping']) ? $data['phone_mapping'] : null;
        $this->container['metadata_url'] = isset($data['metadata_url']) ? $data['metadata_url'] : null;
        $this->container['metadata_xml'] = isset($data['metadata_xml']) ? $data['metadata_xml'] : null;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets first_name_mapping
     *
     * @return string
     */
    public function getFirstNameMapping()
    {
        return $this->container['first_name_mapping'];
    }

    /**
     * Sets first_name_mapping
     *
     * @param string $first_name_mapping first_name_mapping
     *
     * @return $this
     */
    public function setFirstNameMapping($first_name_mapping)
    {
        $this->container['first_name_mapping'] = $first_name_mapping;

        return $this;
    }

    /**
     * Gets last_name_mapping
     *
     * @return string
     */
    public function getLastNameMapping()
    {
        return $this->container['last_name_mapping'];
    }

    /**
     * Sets last_name_mapping
     *
     * @param string $last_name_mapping last_name_mapping
     *
     * @return $this
     */
    public function setLastNameMapping($last_name_mapping)
    {
        $this->container['last_name_mapping'] = $last_name_mapping;

        return $this;
    }

    /**
     * Gets phone_mapping
     *
     * @return string
     */
    public function getPhoneMapping()
    {
        return $this->container['phone_mapping'];
    }

    /**
     * Sets phone_mapping
     *
     * @param string $phone_mapping phone_mapping
     *
     * @return $this
     */
    public function setPhoneMapping($phone_mapping)
    {
        $this->container['phone_mapping'] = $phone_mapping;

        return $this;
    }

    /**
     * Gets metadata_url
     *
     * @return string
     */
    public function getMetadataUrl()
    {
        return $this->container['metadata_url'];
    }

    /**
     * Sets metadata_url
     *
     * @param string $metadata_url metadata_url
     *
     * @return $this
     */
    public function setMetadataUrl($metadata_url)
    {
        $this->container['metadata_url'] = $metadata_url;

        return $this;
    }

    /**
     * Gets metadata_xml
     *
     * @return string
     */
    public function getMetadataXml()
    {
        return $this->container['metadata_xml'];
    }

    /**
     * Sets metadata_xml
     *
     * @param string $metadata_xml metadata_xml
     *
     * @return $this
     */
    public function setMetadataXml($metadata_xml)
    {
        $this->container['metadata_xml'] = $metadata_xml;

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
