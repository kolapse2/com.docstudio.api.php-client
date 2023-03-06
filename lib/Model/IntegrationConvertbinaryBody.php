<?php
/**
 * IntegrationConvertbinaryBody
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
 * IntegrationConvertbinaryBody Class Doc Comment
 *
 * @category Class
 * @description file content
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntegrationConvertbinaryBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'integration_convertbinary_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'short' => 'int',
'char' => 'string',
'int' => 'int',
'long' => 'int',
'float' => 'float',
'double' => 'double',
'direct' => 'bool',
'read_only' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'short' => 'int32',
'char' => null,
'int' => 'int32',
'long' => 'int64',
'float' => 'float',
'double' => 'double',
'direct' => null,
'read_only' => null    ];

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
        'short' => 'short',
'char' => 'char',
'int' => 'int',
'long' => 'long',
'float' => 'float',
'double' => 'double',
'direct' => 'direct',
'read_only' => 'readOnly'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'short' => 'setShort',
'char' => 'setChar',
'int' => 'setInt',
'long' => 'setLong',
'float' => 'setFloat',
'double' => 'setDouble',
'direct' => 'setDirect',
'read_only' => 'setReadOnly'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'short' => 'getShort',
'char' => 'getChar',
'int' => 'getInt',
'long' => 'getLong',
'float' => 'getFloat',
'double' => 'getDouble',
'direct' => 'getDirect',
'read_only' => 'getReadOnly'    ];

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
        $this->container['short'] = isset($data['short']) ? $data['short'] : null;
        $this->container['char'] = isset($data['char']) ? $data['char'] : null;
        $this->container['int'] = isset($data['int']) ? $data['int'] : null;
        $this->container['long'] = isset($data['long']) ? $data['long'] : null;
        $this->container['float'] = isset($data['float']) ? $data['float'] : null;
        $this->container['double'] = isset($data['double']) ? $data['double'] : null;
        $this->container['direct'] = isset($data['direct']) ? $data['direct'] : null;
        $this->container['read_only'] = isset($data['read_only']) ? $data['read_only'] : null;
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
     * Gets short
     *
     * @return int
     */
    public function getShort()
    {
        return $this->container['short'];
    }

    /**
     * Sets short
     *
     * @param int $short short
     *
     * @return $this
     */
    public function setShort($short)
    {
        $this->container['short'] = $short;

        return $this;
    }

    /**
     * Gets char
     *
     * @return string
     */
    public function getChar()
    {
        return $this->container['char'];
    }

    /**
     * Sets char
     *
     * @param string $char char
     *
     * @return $this
     */
    public function setChar($char)
    {
        $this->container['char'] = $char;

        return $this;
    }

    /**
     * Gets int
     *
     * @return int
     */
    public function getInt()
    {
        return $this->container['int'];
    }

    /**
     * Sets int
     *
     * @param int $int int
     *
     * @return $this
     */
    public function setInt($int)
    {
        $this->container['int'] = $int;

        return $this;
    }

    /**
     * Gets long
     *
     * @return int
     */
    public function getLong()
    {
        return $this->container['long'];
    }

    /**
     * Sets long
     *
     * @param int $long long
     *
     * @return $this
     */
    public function setLong($long)
    {
        $this->container['long'] = $long;

        return $this;
    }

    /**
     * Gets float
     *
     * @return float
     */
    public function getFloat()
    {
        return $this->container['float'];
    }

    /**
     * Sets float
     *
     * @param float $float float
     *
     * @return $this
     */
    public function setFloat($float)
    {
        $this->container['float'] = $float;

        return $this;
    }

    /**
     * Gets double
     *
     * @return double
     */
    public function getDouble()
    {
        return $this->container['double'];
    }

    /**
     * Sets double
     *
     * @param double $double double
     *
     * @return $this
     */
    public function setDouble($double)
    {
        $this->container['double'] = $double;

        return $this;
    }

    /**
     * Gets direct
     *
     * @return bool
     */
    public function getDirect()
    {
        return $this->container['direct'];
    }

    /**
     * Sets direct
     *
     * @param bool $direct direct
     *
     * @return $this
     */
    public function setDirect($direct)
    {
        $this->container['direct'] = $direct;

        return $this;
    }

    /**
     * Gets read_only
     *
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->container['read_only'];
    }

    /**
     * Sets read_only
     *
     * @param bool $read_only read_only
     *
     * @return $this
     */
    public function setReadOnly($read_only)
    {
        $this->container['read_only'] = $read_only;

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
