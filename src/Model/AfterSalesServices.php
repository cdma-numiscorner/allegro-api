<?php
/**
 * AfterSalesServices
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
 * AfterSalesServices Class Doc Comment
 *
 * @category Class
 * @description The definitions of the different after sales services assigned to the offer.
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AfterSalesServices implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AfterSalesServices';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'implied_warranty' => '\AllegroApi\Model\ImpliedWarranty',
        'return_policy' => '\AllegroApi\Model\ReturnPolicy',
        'warranty' => '\AllegroApi\Model\Warranty'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'implied_warranty' => null,
        'return_policy' => null,
        'warranty' => null
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
        'implied_warranty' => 'impliedWarranty',
        'return_policy' => 'returnPolicy',
        'warranty' => 'warranty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'implied_warranty' => 'setImpliedWarranty',
        'return_policy' => 'setReturnPolicy',
        'warranty' => 'setWarranty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'implied_warranty' => 'getImpliedWarranty',
        'return_policy' => 'getReturnPolicy',
        'warranty' => 'getWarranty'
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
        $this->container['implied_warranty'] = $data['implied_warranty'] ?? null;
        $this->container['return_policy'] = $data['return_policy'] ?? null;
        $this->container['warranty'] = $data['warranty'] ?? null;
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
     * Gets implied_warranty
     *
     * @return \AllegroApi\Model\ImpliedWarranty|null
     */
    public function getImpliedWarranty()
    {
        return $this->container['implied_warranty'];
    }

    /**
     * Sets implied_warranty
     *
     * @param \AllegroApi\Model\ImpliedWarranty|null $implied_warranty implied_warranty
     *
     * @return self
     */
    public function setImpliedWarranty($implied_warranty)
    {
        $this->container['implied_warranty'] = $implied_warranty;

        return $this;
    }

    /**
     * Gets return_policy
     *
     * @return \AllegroApi\Model\ReturnPolicy|null
     */
    public function getReturnPolicy()
    {
        return $this->container['return_policy'];
    }

    /**
     * Sets return_policy
     *
     * @param \AllegroApi\Model\ReturnPolicy|null $return_policy return_policy
     *
     * @return self
     */
    public function setReturnPolicy($return_policy)
    {
        $this->container['return_policy'] = $return_policy;

        return $this;
    }

    /**
     * Gets warranty
     *
     * @return \AllegroApi\Model\Warranty|null
     */
    public function getWarranty()
    {
        return $this->container['warranty'];
    }

    /**
     * Sets warranty
     *
     * @param \AllegroApi\Model\Warranty|null $warranty warranty
     *
     * @return self
     */
    public function setWarranty($warranty)
    {
        $this->container['warranty'] = $warranty;

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


