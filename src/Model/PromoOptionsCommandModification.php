<?php
/**
 * PromoOptionsCommandModification
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
 * PromoOptionsCommandModification Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PromoOptionsCommandModification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromoOptionsCommandModification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'base_package' => 'PromoOptionsCommandModificationPackage',
        'extra_packages' => '\AllegroApi\Model\PromoOptionsCommandModificationPackage[]',
        'modification_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'base_package' => null,
        'extra_packages' => null,
        'modification_time' => null
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
        'base_package' => 'basePackage',
        'extra_packages' => 'extraPackages',
        'modification_time' => 'modificationTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_package' => 'setBasePackage',
        'extra_packages' => 'setExtraPackages',
        'modification_time' => 'setModificationTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_package' => 'getBasePackage',
        'extra_packages' => 'getExtraPackages',
        'modification_time' => 'getModificationTime'
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

    const MODIFICATION_TIME_NOW = 'NOW';
    const MODIFICATION_TIME_END_OF_CYCLE = 'END_OF_CYCLE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModificationTimeAllowableValues()
    {
        return [
            self::MODIFICATION_TIME_NOW,
            self::MODIFICATION_TIME_END_OF_CYCLE,
        ];
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
        $this->container['base_package'] = $data['base_package'] ?? null;
        $this->container['extra_packages'] = $data['extra_packages'] ?? null;
        $this->container['modification_time'] = $data['modification_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getModificationTimeAllowableValues();
        if (!is_null($this->container['modification_time']) && !in_array($this->container['modification_time'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'modification_time', must be one of '%s'",
                $this->container['modification_time'],
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
     * Gets base_package
     *
     * @return PromoOptionsCommandModificationPackage|null
     */
    public function getBasePackage()
    {
        return $this->container['base_package'];
    }

    /**
     * Sets base_package
     *
     * @param PromoOptionsCommandModificationPackage|null $base_package The base package. Available packages can be determined using <a href=\"#operation/getAvailableOfferPromotionPackages\">GET /sale/offer-promotion-packages</a>.
     *
     * @return self
     */
    public function setBasePackage($base_package)
    {
        $this->container['base_package'] = $base_package;

        return $this;
    }

    /**
     * Gets extra_packages
     *
     * @return \AllegroApi\Model\PromoOptionsCommandModificationPackage[]|null
     */
    public function getExtraPackages()
    {
        return $this->container['extra_packages'];
    }

    /**
     * Sets extra_packages
     *
     * @param \AllegroApi\Model\PromoOptionsCommandModificationPackage[]|null $extra_packages Extra packages to be set on offer. Omitting this parameter will preserve the packages already present.
     *
     * @return self
     */
    public function setExtraPackages($extra_packages)
    {
        $this->container['extra_packages'] = $extra_packages;

        return $this;
    }

    /**
     * Gets modification_time
     *
     * @return string|null
     */
    public function getModificationTime()
    {
        return $this->container['modification_time'];
    }

    /**
     * Sets modification_time
     *
     * @param string|null $modification_time Time at which the modification will be applied.
     *
     * @return self
     */
    public function setModificationTime($modification_time)
    {
        $allowedValues = $this->getModificationTimeAllowableValues();
        if (!is_null($modification_time) && !in_array($modification_time, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'modification_time', must be one of '%s'",
                    $modification_time,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['modification_time'] = $modification_time;

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


