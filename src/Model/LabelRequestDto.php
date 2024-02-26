<?php
/**
 * LabelRequestDto
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
 * LabelRequestDto Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LabelRequestDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LabelRequestDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_ids' => 'string[]',
        'page_size' => 'string',
        'cut_line' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_ids' => null,
        'page_size' => null,
        'cut_line' => null
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
        'shipment_ids' => 'shipmentIds',
        'page_size' => 'pageSize',
        'cut_line' => 'cutLine'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_ids' => 'setShipmentIds',
        'page_size' => 'setPageSize',
        'cut_line' => 'setCutLine'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_ids' => 'getShipmentIds',
        'page_size' => 'getPageSize',
        'cut_line' => 'getCutLine'
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

    const PAGE_SIZE_A4 = 'A4';
    const PAGE_SIZE_A6 = 'A6';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPageSizeAllowableValues()
    {
        return [
            self::PAGE_SIZE_A4,
            self::PAGE_SIZE_A6,
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
        $this->container['shipment_ids'] = $data['shipment_ids'] ?? null;
        $this->container['page_size'] = $data['page_size'] ?? null;
        $this->container['cut_line'] = $data['cut_line'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipment_ids'] === null) {
            $invalidProperties[] = "'shipment_ids' can't be null";
        }
        if ((count($this->container['shipment_ids']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'shipment_ids', number of items must be less than or equal to 2147483647.";
        }

        if ((count($this->container['shipment_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'shipment_ids', number of items must be greater than or equal to 1.";
        }

        $allowedValues = $this->getPageSizeAllowableValues();
        if (!is_null($this->container['page_size']) && !in_array($this->container['page_size'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'page_size', must be one of '%s'",
                $this->container['page_size'],
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
     * Gets shipment_ids
     *
     * @return string[]
     */
    public function getShipmentIds()
    {
        return $this->container['shipment_ids'];
    }

    /**
     * Sets shipment_ids
     *
     * @param string[] $shipment_ids shipment_ids
     *
     * @return self
     */
    public function setShipmentIds($shipment_ids)
    {

        if ((count($shipment_ids) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $shipment_ids when calling LabelRequestDto., number of items must be less than or equal to 2147483647.');
        }
        if ((count($shipment_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $shipment_ids when calling LabelRequestDto., number of items must be greater than or equal to 1.');
        }
        $this->container['shipment_ids'] = $shipment_ids;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return string|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param string|null $page_size Label page format. Only for PDF file.
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        $allowedValues = $this->getPageSizeAllowableValues();
        if (!is_null($page_size) && !in_array($page_size, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'page_size', must be one of '%s'",
                    $page_size,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets cut_line
     *
     * @return bool|null
     */
    public function getCutLine()
    {
        return $this->container['cut_line'];
    }

    /**
     * Sets cut_line
     *
     * @param bool|null $cut_line Put additional cut lines. Only for PDF file with A4 size.
     *
     * @return self
     */
    public function setCutLine($cut_line)
    {
        $this->container['cut_line'] = $cut_line;

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


