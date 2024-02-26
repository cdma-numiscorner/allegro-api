<?php
/**
 * CategoryParameterOptions
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;

use \ArrayAccess;
use \AllegroApi\ObjectSerializer;

/**
 * CategoryParameterOptions Class Doc Comment
 *
 * @category Class
 * @description A list of the different options which can be used with this parameter.
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CategoryParameterOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategoryParameterOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'variants_allowed' => 'bool',
        'variants_equal' => 'bool',
        'ambiguous_value_id' => 'string',
        'depends_on_parameter_id' => 'string',
        'describes_product' => 'bool',
        'custom_values_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'variants_allowed' => null,
        'variants_equal' => null,
        'ambiguous_value_id' => null,
        'depends_on_parameter_id' => null,
        'describes_product' => null,
        'custom_values_enabled' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'variants_allowed' => 'variantsAllowed',
        'variants_equal' => 'variantsEqual',
        'ambiguous_value_id' => 'ambiguousValueId',
        'depends_on_parameter_id' => 'dependsOnParameterId',
        'describes_product' => 'describesProduct',
        'custom_values_enabled' => 'customValuesEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'variants_allowed' => 'setVariantsAllowed',
        'variants_equal' => 'setVariantsEqual',
        'ambiguous_value_id' => 'setAmbiguousValueId',
        'depends_on_parameter_id' => 'setDependsOnParameterId',
        'describes_product' => 'setDescribesProduct',
        'custom_values_enabled' => 'setCustomValuesEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'variants_allowed' => 'getVariantsAllowed',
        'variants_equal' => 'getVariantsEqual',
        'ambiguous_value_id' => 'getAmbiguousValueId',
        'depends_on_parameter_id' => 'getDependsOnParameterId',
        'describes_product' => 'getDescribesProduct',
        'custom_values_enabled' => 'getCustomValuesEnabled'
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
        return self::$openAPIModelName;
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
        $this->container['variants_allowed'] = $data['variants_allowed'] ?? null;
        $this->container['variants_equal'] = $data['variants_equal'] ?? null;
        $this->container['ambiguous_value_id'] = $data['ambiguous_value_id'] ?? null;
        $this->container['depends_on_parameter_id'] = $data['depends_on_parameter_id'] ?? null;
        $this->container['describes_product'] = $data['describes_product'] ?? null;
        $this->container['custom_values_enabled'] = $data['custom_values_enabled'] ?? null;
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
     * Gets variants_allowed
     *
     * @return bool|null
     */
    public function getVariantsAllowed()
    {
        return $this->container['variants_allowed'];
    }

    /**
     * Sets variants_allowed
     *
     * @param bool|null $variants_allowed Parameters with this option enabled can be used for offer variants creation.
     *
     * @return self
     */
    public function setVariantsAllowed($variants_allowed)
    {
        $this->container['variants_allowed'] = $variants_allowed;

        return $this;
    }

    /**
     * Gets variants_equal
     *
     * @return bool|null
     */
    public function getVariantsEqual()
    {
        return $this->container['variants_equal'];
    }

    /**
     * Sets variants_equal
     *
     * @param bool|null $variants_equal All offer variants must have the same values in parameters with this option enabled.
     *
     * @return self
     */
    public function setVariantsEqual($variants_equal)
    {
        $this->container['variants_equal'] = $variants_equal;

        return $this;
    }

    /**
     * Gets ambiguous_value_id
     *
     * @return string|null
     */
    public function getAmbiguousValueId()
    {
        return $this->container['ambiguous_value_id'];
    }

    /**
     * Sets ambiguous_value_id
     *
     * @param string|null $ambiguous_value_id Indicates what value in the dictionary is defined as an ambiguous one. Only parameters with dictionaries might have this option defined.
     *
     * @return self
     */
    public function setAmbiguousValueId($ambiguous_value_id)
    {
        $this->container['ambiguous_value_id'] = $ambiguous_value_id;

        return $this;
    }

    /**
     * Gets depends_on_parameter_id
     *
     * @return string|null
     */
    public function getDependsOnParameterId()
    {
        return $this->container['depends_on_parameter_id'];
    }

    /**
     * Sets depends_on_parameter_id
     *
     * @param string|null $depends_on_parameter_id Indicates whether this parameter's allowed values depend on another parameter's values. This field is set only for dictionary parameters which have at least one dictionary value with dependent values (see also `dictionary[].dependsOnValueIds`). Otherwise this field is null.
     *
     * @return self
     */
    public function setDependsOnParameterId($depends_on_parameter_id)
    {
        $this->container['depends_on_parameter_id'] = $depends_on_parameter_id;

        return $this;
    }

    /**
     * Gets describes_product
     *
     * @return bool|null
     */
    public function getDescribesProduct()
    {
        return $this->container['describes_product'];
    }

    /**
     * Sets describes_product
     *
     * @param bool|null $describes_product Indicates if parameter is used to define products.
     *
     * @return self
     */
    public function setDescribesProduct($describes_product)
    {
        $this->container['describes_product'] = $describes_product;

        return $this;
    }

    /**
     * Gets custom_values_enabled
     *
     * @return bool|null
     */
    public function getCustomValuesEnabled()
    {
        return $this->container['custom_values_enabled'];
    }

    /**
     * Sets custom_values_enabled
     *
     * @param bool|null $custom_values_enabled Indicates if a custom value can be added to a parameter with an ambiguous value.
     *
     * @return self
     */
    public function setCustomValuesEnabled($custom_values_enabled)
    {
        $this->container['custom_values_enabled'] = $custom_values_enabled;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


