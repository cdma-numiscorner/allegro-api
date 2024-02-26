<?php
/**
 * ShipmentCreateRequestDto
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
 * ShipmentCreateRequestDto Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentCreateRequestDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentCreateRequestDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_method_id' => 'string',
        'credentials_id' => 'string',
        'sender' => '\AllegroApi\Model\SenderAddressDto',
        'receiver' => '\AllegroApi\Model\ReceiverAddressDto',
        'pickup' => '\AllegroApi\Model\PickupAddressDto',
        'reference_number' => 'string',
        'description' => 'string',
        'packages' => '\AllegroApi\Model\PackageRequestDto[]',
        'insurance' => '\AllegroApi\Model\InsuranceDto',
        'cash_on_delivery' => '\AllegroApi\Model\CashOnDeliveryDto',
        'label_format' => 'string',
        'additional_services' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery_method_id' => null,
        'credentials_id' => null,
        'sender' => null,
        'receiver' => null,
        'pickup' => null,
        'reference_number' => null,
        'description' => null,
        'packages' => null,
        'insurance' => null,
        'cash_on_delivery' => null,
        'label_format' => null,
        'additional_services' => null
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
        'delivery_method_id' => 'deliveryMethodId',
        'credentials_id' => 'credentialsId',
        'sender' => 'sender',
        'receiver' => 'receiver',
        'pickup' => 'pickup',
        'reference_number' => 'referenceNumber',
        'description' => 'description',
        'packages' => 'packages',
        'insurance' => 'insurance',
        'cash_on_delivery' => 'cashOnDelivery',
        'label_format' => 'labelFormat',
        'additional_services' => 'additionalServices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_method_id' => 'setDeliveryMethodId',
        'credentials_id' => 'setCredentialsId',
        'sender' => 'setSender',
        'receiver' => 'setReceiver',
        'pickup' => 'setPickup',
        'reference_number' => 'setReferenceNumber',
        'description' => 'setDescription',
        'packages' => 'setPackages',
        'insurance' => 'setInsurance',
        'cash_on_delivery' => 'setCashOnDelivery',
        'label_format' => 'setLabelFormat',
        'additional_services' => 'setAdditionalServices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_method_id' => 'getDeliveryMethodId',
        'credentials_id' => 'getCredentialsId',
        'sender' => 'getSender',
        'receiver' => 'getReceiver',
        'pickup' => 'getPickup',
        'reference_number' => 'getReferenceNumber',
        'description' => 'getDescription',
        'packages' => 'getPackages',
        'insurance' => 'getInsurance',
        'cash_on_delivery' => 'getCashOnDelivery',
        'label_format' => 'getLabelFormat',
        'additional_services' => 'getAdditionalServices'
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

    const LABEL_FORMAT_PDF = 'PDF';
    const LABEL_FORMAT_ZPL = 'ZPL';
    const LABEL_FORMAT_EPL = 'EPL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelFormatAllowableValues()
    {
        return [
            self::LABEL_FORMAT_PDF,
            self::LABEL_FORMAT_ZPL,
            self::LABEL_FORMAT_EPL,
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
        $this->container['delivery_method_id'] = $data['delivery_method_id'] ?? null;
        $this->container['credentials_id'] = $data['credentials_id'] ?? null;
        $this->container['sender'] = $data['sender'] ?? null;
        $this->container['receiver'] = $data['receiver'] ?? null;
        $this->container['pickup'] = $data['pickup'] ?? null;
        $this->container['reference_number'] = $data['reference_number'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['packages'] = $data['packages'] ?? null;
        $this->container['insurance'] = $data['insurance'] ?? null;
        $this->container['cash_on_delivery'] = $data['cash_on_delivery'] ?? null;
        $this->container['label_format'] = $data['label_format'] ?? null;
        $this->container['additional_services'] = $data['additional_services'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['delivery_method_id'] === null) {
            $invalidProperties[] = "'delivery_method_id' can't be null";
        }
        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ($this->container['receiver'] === null) {
            $invalidProperties[] = "'receiver' can't be null";
        }
        if ($this->container['packages'] === null) {
            $invalidProperties[] = "'packages' can't be null";
        }
        $allowedValues = $this->getLabelFormatAllowableValues();
        if (!is_null($this->container['label_format']) && !in_array($this->container['label_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'label_format', must be one of '%s'",
                $this->container['label_format'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['label_format']) && !preg_match("/PDF|ZPL|EPL/", $this->container['label_format'])) {
            $invalidProperties[] = "invalid value for 'label_format', must be conform to the pattern /PDF|ZPL|EPL/.";
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
     * Gets delivery_method_id
     *
     * @return string
     */
    public function getDeliveryMethodId()
    {
        return $this->container['delivery_method_id'];
    }

    /**
     * Sets delivery_method_id
     *
     * @param string $delivery_method_id Id of delivery method, chosen by buyer in order.
     *
     * @return self
     */
    public function setDeliveryMethodId($delivery_method_id)
    {
        $this->container['delivery_method_id'] = $delivery_method_id;

        return $this;
    }

    /**
     * Gets credentials_id
     *
     * @return string|null
     */
    public function getCredentialsId()
    {
        return $this->container['credentials_id'];
    }

    /**
     * Sets credentials_id
     *
     * @param string|null $credentials_id ID of merchant agreement, registered in WZA. Value should be read from /shipment-management/delivery-services. For Allegro Standard methods, this field should be null.
     *
     * @return self
     */
    public function setCredentialsId($credentials_id)
    {
        $this->container['credentials_id'] = $credentials_id;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \AllegroApi\Model\SenderAddressDto
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \AllegroApi\Model\SenderAddressDto $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets receiver
     *
     * @return \AllegroApi\Model\ReceiverAddressDto
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     *
     * @param \AllegroApi\Model\ReceiverAddressDto $receiver receiver
     *
     * @return self
     */
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;

        return $this;
    }

    /**
     * Gets pickup
     *
     * @return \AllegroApi\Model\PickupAddressDto|null
     */
    public function getPickup()
    {
        return $this->container['pickup'];
    }

    /**
     * Sets pickup
     *
     * @param \AllegroApi\Model\PickupAddressDto|null $pickup pickup
     *
     * @return self
     */
    public function setPickup($pickup)
    {
        $this->container['pickup'] = $pickup;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number Shipment identifier in own system. Example: `Ordering number`.
     *
     * @return self
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Shipment description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return \AllegroApi\Model\PackageRequestDto[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \AllegroApi\Model\PackageRequestDto[] $packages packages
     *
     * @return self
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return \AllegroApi\Model\InsuranceDto|null
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \AllegroApi\Model\InsuranceDto|null $insurance insurance
     *
     * @return self
     */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets cash_on_delivery
     *
     * @return \AllegroApi\Model\CashOnDeliveryDto|null
     */
    public function getCashOnDelivery()
    {
        return $this->container['cash_on_delivery'];
    }

    /**
     * Sets cash_on_delivery
     *
     * @param \AllegroApi\Model\CashOnDeliveryDto|null $cash_on_delivery cash_on_delivery
     *
     * @return self
     */
    public function setCashOnDelivery($cash_on_delivery)
    {
        $this->container['cash_on_delivery'] = $cash_on_delivery;

        return $this;
    }

    /**
     * Gets label_format
     *
     * @return string|null
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format
     *
     * @param string|null $label_format Label file format.
     *
     * @return self
     */
    public function setLabelFormat($label_format)
    {
        $allowedValues = $this->getLabelFormatAllowableValues();
        if (!is_null($label_format) && !in_array($label_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'label_format', must be one of '%s'",
                    $label_format,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($label_format) && (!preg_match("/PDF|ZPL|EPL/", $label_format))) {
            throw new \InvalidArgumentException("invalid value for $label_format when calling ShipmentCreateRequestDto., must conform to the pattern /PDF|ZPL|EPL/.");
        }

        $this->container['label_format'] = $label_format;

        return $this;
    }

    /**
     * Gets additional_services
     *
     * @return string[]|null
     */
    public function getAdditionalServices()
    {
        return $this->container['additional_services'];
    }

    /**
     * Sets additional_services
     *
     * @param string[]|null $additional_services List of additional services.
     *
     * @return self
     */
    public function setAdditionalServices($additional_services)
    {
        $this->container['additional_services'] = $additional_services;

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


