<?php
/**
 * UserRatingSummaryResponse
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
 * UserRatingSummaryResponse Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UserRatingSummaryResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserRatingSummaryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'average_rates' => '\AllegroApi\Model\AverageRates',
        'not_recommended' => '\AllegroApi\Model\UserRatingSummaryResponseNotRecommended',
        'recommended' => '\AllegroApi\Model\UserRatingSummaryResponseRecommended',
        'recommended_percentage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'average_rates' => null,
        'not_recommended' => null,
        'recommended' => null,
        'recommended_percentage' => null
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
        'average_rates' => 'averageRates',
        'not_recommended' => 'notRecommended',
        'recommended' => 'recommended',
        'recommended_percentage' => 'recommendedPercentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'average_rates' => 'setAverageRates',
        'not_recommended' => 'setNotRecommended',
        'recommended' => 'setRecommended',
        'recommended_percentage' => 'setRecommendedPercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'average_rates' => 'getAverageRates',
        'not_recommended' => 'getNotRecommended',
        'recommended' => 'getRecommended',
        'recommended_percentage' => 'getRecommendedPercentage'
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
        $this->container['average_rates'] = $data['average_rates'] ?? null;
        $this->container['not_recommended'] = $data['not_recommended'] ?? null;
        $this->container['recommended'] = $data['recommended'] ?? null;
        $this->container['recommended_percentage'] = $data['recommended_percentage'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['not_recommended'] === null) {
            $invalidProperties[] = "'not_recommended' can't be null";
        }
        if ($this->container['recommended'] === null) {
            $invalidProperties[] = "'recommended' can't be null";
        }
        if ($this->container['recommended_percentage'] === null) {
            $invalidProperties[] = "'recommended_percentage' can't be null";
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
     * Gets average_rates
     *
     * @return \AllegroApi\Model\AverageRates|null
     */
    public function getAverageRates()
    {
        return $this->container['average_rates'];
    }

    /**
     * Sets average_rates
     *
     * @param \AllegroApi\Model\AverageRates|null $average_rates average_rates
     *
     * @return self
     */
    public function setAverageRates($average_rates)
    {
        $this->container['average_rates'] = $average_rates;

        return $this;
    }

    /**
     * Gets not_recommended
     *
     * @return \AllegroApi\Model\UserRatingSummaryResponseNotRecommended
     */
    public function getNotRecommended()
    {
        return $this->container['not_recommended'];
    }

    /**
     * Sets not_recommended
     *
     * @param \AllegroApi\Model\UserRatingSummaryResponseNotRecommended $not_recommended not_recommended
     *
     * @return self
     */
    public function setNotRecommended($not_recommended)
    {
        $this->container['not_recommended'] = $not_recommended;

        return $this;
    }

    /**
     * Gets recommended
     *
     * @return \AllegroApi\Model\UserRatingSummaryResponseRecommended
     */
    public function getRecommended()
    {
        return $this->container['recommended'];
    }

    /**
     * Sets recommended
     *
     * @param \AllegroApi\Model\UserRatingSummaryResponseRecommended $recommended recommended
     *
     * @return self
     */
    public function setRecommended($recommended)
    {
        $this->container['recommended'] = $recommended;

        return $this;
    }

    /**
     * Gets recommended_percentage
     *
     * @return string
     */
    public function getRecommendedPercentage()
    {
        return $this->container['recommended_percentage'];
    }

    /**
     * Sets recommended_percentage
     *
     * @param string $recommended_percentage Percentage of unique buyers recommending the seller.
     *
     * @return self
     */
    public function setRecommendedPercentage($recommended_percentage)
    {
        $this->container['recommended_percentage'] = $recommended_percentage;

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


