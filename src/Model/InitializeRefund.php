<?php
/**
 * InitializeRefund
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
 * InitializeRefund Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InitializeRefund implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InitializeRefund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment' => '\AllegroApi\Model\RefundPayment',
        'reason' => 'string',
        'line_items' => '\AllegroApi\Model\RefundLineItem[]',
        'delivery' => '\AllegroApi\Model\InitializeRefundDelivery',
        'overpaid' => '\AllegroApi\Model\InitializeRefundOverpaid',
        'surcharges' => '\AllegroApi\Model\PaymentsSurcharge[]',
        'additional_services' => '\AllegroApi\Model\InitializeRefundAdditionalServices',
        'seller_comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment' => null,
        'reason' => null,
        'line_items' => null,
        'delivery' => null,
        'overpaid' => null,
        'surcharges' => null,
        'additional_services' => null,
        'seller_comment' => null
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
        'payment' => 'payment',
        'reason' => 'reason',
        'line_items' => 'lineItems',
        'delivery' => 'delivery',
        'overpaid' => 'overpaid',
        'surcharges' => 'surcharges',
        'additional_services' => 'additionalServices',
        'seller_comment' => 'sellerComment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment' => 'setPayment',
        'reason' => 'setReason',
        'line_items' => 'setLineItems',
        'delivery' => 'setDelivery',
        'overpaid' => 'setOverpaid',
        'surcharges' => 'setSurcharges',
        'additional_services' => 'setAdditionalServices',
        'seller_comment' => 'setSellerComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment' => 'getPayment',
        'reason' => 'getReason',
        'line_items' => 'getLineItems',
        'delivery' => 'getDelivery',
        'overpaid' => 'getOverpaid',
        'surcharges' => 'getSurcharges',
        'additional_services' => 'getAdditionalServices',
        'seller_comment' => 'getSellerComment'
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

    const REASON_REFUND = 'REFUND';
    const REASON_COMPLAINT = 'COMPLAINT';
    const REASON_PRODUCT_NOT_AVAILABLE = 'PRODUCT_NOT_AVAILABLE';
    const REASON_PAID_VALUE_TOO_LOW = 'PAID_VALUE_TOO_LOW';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_REFUND,
            self::REASON_COMPLAINT,
            self::REASON_PRODUCT_NOT_AVAILABLE,
            self::REASON_PAID_VALUE_TOO_LOW,
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
        $this->container['payment'] = $data['payment'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['delivery'] = $data['delivery'] ?? null;
        $this->container['overpaid'] = $data['overpaid'] ?? null;
        $this->container['surcharges'] = $data['surcharges'] ?? null;
        $this->container['additional_services'] = $data['additional_services'] ?? null;
        $this->container['seller_comment'] = $data['seller_comment'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['payment'] === null) {
            $invalidProperties[] = "'payment' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reason', must be one of '%s'",
                $this->container['reason'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['seller_comment']) && (mb_strlen($this->container['seller_comment']) > 250)) {
            $invalidProperties[] = "invalid value for 'seller_comment', the character length must be smaller than or equal to 250.";
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
     * Gets payment
     *
     * @return \AllegroApi\Model\RefundPayment
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \AllegroApi\Model\RefundPayment $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason Reason for a payment refund.
     *
     * @return self
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reason', must be one of '%s'",
                    $reason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \AllegroApi\Model\RefundLineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \AllegroApi\Model\RefundLineItem[]|null $line_items List of order's line items which can be refunded.
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \AllegroApi\Model\InitializeRefundDelivery|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \AllegroApi\Model\InitializeRefundDelivery|null $delivery delivery
     *
     * @return self
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets overpaid
     *
     * @return \AllegroApi\Model\InitializeRefundOverpaid|null
     */
    public function getOverpaid()
    {
        return $this->container['overpaid'];
    }

    /**
     * Sets overpaid
     *
     * @param \AllegroApi\Model\InitializeRefundOverpaid|null $overpaid overpaid
     *
     * @return self
     */
    public function setOverpaid($overpaid)
    {
        $this->container['overpaid'] = $overpaid;

        return $this;
    }

    /**
     * Gets surcharges
     *
     * @return \AllegroApi\Model\PaymentsSurcharge[]|null
     */
    public function getSurcharges()
    {
        return $this->container['surcharges'];
    }

    /**
     * Sets surcharges
     *
     * @param \AllegroApi\Model\PaymentsSurcharge[]|null $surcharges List of surcharges for payment which can be refunded.
     *
     * @return self
     */
    public function setSurcharges($surcharges)
    {
        $this->container['surcharges'] = $surcharges;

        return $this;
    }

    /**
     * Gets additional_services
     *
     * @return \AllegroApi\Model\InitializeRefundAdditionalServices|null
     */
    public function getAdditionalServices()
    {
        return $this->container['additional_services'];
    }

    /**
     * Sets additional_services
     *
     * @param \AllegroApi\Model\InitializeRefundAdditionalServices|null $additional_services additional_services
     *
     * @return self
     */
    public function setAdditionalServices($additional_services)
    {
        $this->container['additional_services'] = $additional_services;

        return $this;
    }

    /**
     * Gets seller_comment
     *
     * @return string|null
     */
    public function getSellerComment()
    {
        return $this->container['seller_comment'];
    }

    /**
     * Sets seller_comment
     *
     * @param string|null $seller_comment Sellers optional justification for refund.
     *
     * @return self
     */
    public function setSellerComment($seller_comment)
    {
        if (!is_null($seller_comment) && (mb_strlen($seller_comment) > 250)) {
            throw new \InvalidArgumentException('invalid length for $seller_comment when calling InitializeRefund., must be smaller than or equal to 250.');
        }

        $this->container['seller_comment'] = $seller_comment;

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


