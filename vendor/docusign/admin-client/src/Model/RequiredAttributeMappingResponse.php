<?php
/**
 * RequiredAttributeMappingResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\Admin
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign Admin API
 *
 * An API for an organization administrator to manage organizations, accounts and users
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\Admin\Model;

use \ArrayAccess;
use DocuSign\Admin\ObjectSerializer;

/**
 * RequiredAttributeMappingResponse Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Admin
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RequiredAttributeMappingResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RequiredAttributeMappingResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'required_attribute_id' => '?int',
        'required_attribute_name' => '?string',
        'required_attribute_friendly_name' => '?string',
        'substitute_attribute_name' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'required_attribute_id' => 'int32',
        'required_attribute_name' => null,
        'required_attribute_friendly_name' => null,
        'substitute_attribute_name' => null
    ];

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
        'required_attribute_id' => 'required_attribute_id',
        'required_attribute_name' => 'required_attribute_name',
        'required_attribute_friendly_name' => 'required_attribute_friendly_name',
        'substitute_attribute_name' => 'substitute_attribute_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'required_attribute_id' => 'setRequiredAttributeId',
        'required_attribute_name' => 'setRequiredAttributeName',
        'required_attribute_friendly_name' => 'setRequiredAttributeFriendlyName',
        'substitute_attribute_name' => 'setSubstituteAttributeName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'required_attribute_id' => 'getRequiredAttributeId',
        'required_attribute_name' => 'getRequiredAttributeName',
        'required_attribute_friendly_name' => 'getRequiredAttributeFriendlyName',
        'substitute_attribute_name' => 'getSubstituteAttributeName'
    ];

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
        $this->container['required_attribute_id'] = isset($data['required_attribute_id']) ? $data['required_attribute_id'] : null;
        $this->container['required_attribute_name'] = isset($data['required_attribute_name']) ? $data['required_attribute_name'] : null;
        $this->container['required_attribute_friendly_name'] = isset($data['required_attribute_friendly_name']) ? $data['required_attribute_friendly_name'] : null;
        $this->container['substitute_attribute_name'] = isset($data['substitute_attribute_name']) ? $data['substitute_attribute_name'] : null;
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
     * Gets required_attribute_id
     *
     * @return ?int
     */
    public function getRequiredAttributeId()
    {
        return $this->container['required_attribute_id'];
    }

    /**
     * Sets required_attribute_id
     *
     * @param ?int $required_attribute_id required_attribute_id
     *
     * @return $this
     */
    public function setRequiredAttributeId($required_attribute_id)
    {
        $this->container['required_attribute_id'] = $required_attribute_id;

        return $this;
    }

    /**
     * Gets required_attribute_name
     *
     * @return ?string
     */
    public function getRequiredAttributeName()
    {
        return $this->container['required_attribute_name'];
    }

    /**
     * Sets required_attribute_name
     *
     * @param ?string $required_attribute_name required_attribute_name
     *
     * @return $this
     */
    public function setRequiredAttributeName($required_attribute_name)
    {
        $this->container['required_attribute_name'] = $required_attribute_name;

        return $this;
    }

    /**
     * Gets required_attribute_friendly_name
     *
     * @return ?string
     */
    public function getRequiredAttributeFriendlyName()
    {
        return $this->container['required_attribute_friendly_name'];
    }

    /**
     * Sets required_attribute_friendly_name
     *
     * @param ?string $required_attribute_friendly_name required_attribute_friendly_name
     *
     * @return $this
     */
    public function setRequiredAttributeFriendlyName($required_attribute_friendly_name)
    {
        $this->container['required_attribute_friendly_name'] = $required_attribute_friendly_name;

        return $this;
    }

    /**
     * Gets substitute_attribute_name
     *
     * @return ?string
     */
    public function getSubstituteAttributeName()
    {
        return $this->container['substitute_attribute_name'];
    }

    /**
     * Sets substitute_attribute_name
     *
     * @param ?string $substitute_attribute_name substitute_attribute_name
     *
     * @return $this
     */
    public function setSubstituteAttributeName($substitute_attribute_name)
    {
        $this->container['substitute_attribute_name'] = $substitute_attribute_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
