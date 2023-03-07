<?php
/**
 * AttachmentRestriction
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
 * AttachmentRestriction Class Doc Comment
 *
 * @category Class
 * @package  Docstudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AttachmentRestriction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AttachmentRestriction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_size' => 'int',
'total_max_size' => 'int',
'file_name_length' => 'int',
'document' => '\Docstudio\ClientModel\AttachmentFileAllowance',
'file' => '\Docstudio\ClientModel\AttachmentFileAllowance',
'image' => '\Docstudio\ClientModel\AttachmentFileAllowance',
'archive' => '\Docstudio\ClientModel\AttachmentFileAllowance'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_size' => 'int32',
'total_max_size' => 'int32',
'file_name_length' => 'int32',
'document' => null,
'file' => null,
'image' => null,
'archive' => null    ];

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
        'max_size' => 'maxSize',
'total_max_size' => 'totalMaxSize',
'file_name_length' => 'fileNameLength',
'document' => 'document',
'file' => 'file',
'image' => 'image',
'archive' => 'archive'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_size' => 'setMaxSize',
'total_max_size' => 'setTotalMaxSize',
'file_name_length' => 'setFileNameLength',
'document' => 'setDocument',
'file' => 'setFile',
'image' => 'setImage',
'archive' => 'setArchive'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_size' => 'getMaxSize',
'total_max_size' => 'getTotalMaxSize',
'file_name_length' => 'getFileNameLength',
'document' => 'getDocument',
'file' => 'getFile',
'image' => 'getImage',
'archive' => 'getArchive'    ];

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
        $this->container['max_size'] = isset($data['max_size']) ? $data['max_size'] : null;
        $this->container['total_max_size'] = isset($data['total_max_size']) ? $data['total_max_size'] : null;
        $this->container['file_name_length'] = isset($data['file_name_length']) ? $data['file_name_length'] : null;
        $this->container['document'] = isset($data['document']) ? $data['document'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['archive'] = isset($data['archive']) ? $data['archive'] : null;
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
     * Gets max_size
     *
     * @return int
     */
    public function getMaxSize()
    {
        return $this->container['max_size'];
    }

    /**
     * Sets max_size
     *
     * @param int $max_size max_size
     *
     * @return $this
     */
    public function setMaxSize($max_size)
    {
        $this->container['max_size'] = $max_size;

        return $this;
    }

    /**
     * Gets total_max_size
     *
     * @return int
     */
    public function getTotalMaxSize()
    {
        return $this->container['total_max_size'];
    }

    /**
     * Sets total_max_size
     *
     * @param int $total_max_size total_max_size
     *
     * @return $this
     */
    public function setTotalMaxSize($total_max_size)
    {
        $this->container['total_max_size'] = $total_max_size;

        return $this;
    }

    /**
     * Gets file_name_length
     *
     * @return int
     */
    public function getFileNameLength()
    {
        return $this->container['file_name_length'];
    }

    /**
     * Sets file_name_length
     *
     * @param int $file_name_length file_name_length
     *
     * @return $this
     */
    public function setFileNameLength($file_name_length)
    {
        $this->container['file_name_length'] = $file_name_length;

        return $this;
    }

    /**
     * Gets document
     *
     * @return \Docstudio\ClientModel\AttachmentFileAllowance
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param \Docstudio\ClientModel\AttachmentFileAllowance $document document
     *
     * @return $this
     */
    public function setDocument($document)
    {
        $this->container['document'] = $document;

        return $this;
    }

    /**
     * Gets file
     *
     * @return \Docstudio\ClientModel\AttachmentFileAllowance
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \Docstudio\ClientModel\AttachmentFileAllowance $file file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \Docstudio\ClientModel\AttachmentFileAllowance
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Docstudio\ClientModel\AttachmentFileAllowance $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets archive
     *
     * @return \Docstudio\ClientModel\AttachmentFileAllowance
     */
    public function getArchive()
    {
        return $this->container['archive'];
    }

    /**
     * Sets archive
     *
     * @param \Docstudio\ClientModel\AttachmentFileAllowance $archive archive
     *
     * @return $this
     */
    public function setArchive($archive)
    {
        $this->container['archive'] = $archive;

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
