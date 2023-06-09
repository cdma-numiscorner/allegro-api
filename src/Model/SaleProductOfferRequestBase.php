<?php
/**
 * SaleProductOfferRequestBase
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
 * SaleProductOfferRequestBase Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SaleProductOfferRequestBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SaleProductOfferRequestBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category' => 'OfferCategoryRequest',
        'parameters' => '\AllegroApi\Model\ParameterProductOfferRequest[]',
        'publication' => '\AllegroApi\Model\SaleProductOfferRequestBaseAllOfPublication',
        'delivery' => 'DeliveryProductOfferRequest',
        'after_sales_services' => '\AllegroApi\Model\AfterSalesServicesProductOfferRequest',
        'size_table' => '\AllegroApi\Model\SizeTable',
        'discounts' => '\AllegroApi\Model\DiscountsProductOfferRequest',
        'name' => 'string',
        'payments' => '\AllegroApi\Model\Payments',
        'selling_mode' => '\AllegroApi\Model\SellingMode',
        'location' => '\AllegroApi\Model\Location',
        'images' => 'string[]',
        'description' => '\AllegroApi\Model\StandardizedDescription',
        'external' => '\AllegroApi\Model\ExternalId',
        'tax' => '\AllegroApi\Model\ExtendedTax',
        'tax_settings' => '\AllegroApi\Model\OfferTaxSettings',
        'message_to_seller_settings' => '\AllegroApi\Model\MessageToSellerSettings',
        'additional_marketplaces' => 'map[string,\AllegroApi\Model\OfferAdditionalMarketplace]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'category' => null,
        'parameters' => null,
        'publication' => null,
        'delivery' => null,
        'after_sales_services' => null,
        'size_table' => null,
        'discounts' => null,
        'name' => null,
        'payments' => null,
        'selling_mode' => null,
        'location' => null,
        'images' => null,
        'description' => null,
        'external' => null,
        'tax' => null,
        'tax_settings' => null,
        'message_to_seller_settings' => null,
        'additional_marketplaces' => null
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
        'category' => 'category',
        'parameters' => 'parameters',
        'publication' => 'publication',
        'delivery' => 'delivery',
        'after_sales_services' => 'afterSalesServices',
        'size_table' => 'sizeTable',
        'discounts' => 'discounts',
        'name' => 'name',
        'payments' => 'payments',
        'selling_mode' => 'sellingMode',
        'location' => 'location',
        'images' => 'images',
        'description' => 'description',
        'external' => 'external',
        'tax' => 'tax',
        'tax_settings' => 'taxSettings',
        'message_to_seller_settings' => 'messageToSellerSettings',
        'additional_marketplaces' => 'additionalMarketplaces'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'parameters' => 'setParameters',
        'publication' => 'setPublication',
        'delivery' => 'setDelivery',
        'after_sales_services' => 'setAfterSalesServices',
        'size_table' => 'setSizeTable',
        'discounts' => 'setDiscounts',
        'name' => 'setName',
        'payments' => 'setPayments',
        'selling_mode' => 'setSellingMode',
        'location' => 'setLocation',
        'images' => 'setImages',
        'description' => 'setDescription',
        'external' => 'setExternal',
        'tax' => 'setTax',
        'tax_settings' => 'setTaxSettings',
        'message_to_seller_settings' => 'setMessageToSellerSettings',
        'additional_marketplaces' => 'setAdditionalMarketplaces'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'parameters' => 'getParameters',
        'publication' => 'getPublication',
        'delivery' => 'getDelivery',
        'after_sales_services' => 'getAfterSalesServices',
        'size_table' => 'getSizeTable',
        'discounts' => 'getDiscounts',
        'name' => 'getName',
        'payments' => 'getPayments',
        'selling_mode' => 'getSellingMode',
        'location' => 'getLocation',
        'images' => 'getImages',
        'description' => 'getDescription',
        'external' => 'getExternal',
        'tax' => 'getTax',
        'tax_settings' => 'getTaxSettings',
        'message_to_seller_settings' => 'getMessageToSellerSettings',
        'additional_marketplaces' => 'getAdditionalMarketplaces'
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
        $this->container['category'] = $data['category'] ?? null;
        $this->container['parameters'] = $data['parameters'] ?? null;
        $this->container['publication'] = $data['publication'] ?? null;
        $this->container['delivery'] = $data['delivery'] ?? null;
        $this->container['after_sales_services'] = $data['after_sales_services'] ?? null;
        $this->container['size_table'] = $data['size_table'] ?? null;
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['payments'] = $data['payments'] ?? null;
        $this->container['selling_mode'] = $data['selling_mode'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['external'] = $data['external'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['tax_settings'] = $data['tax_settings'] ?? null;
        $this->container['message_to_seller_settings'] = $data['message_to_seller_settings'] ?? null;
        $this->container['additional_marketplaces'] = $data['additional_marketplaces'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
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
     * Gets category
     *
     * @return OfferCategoryRequest|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param OfferCategoryRequest|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \AllegroApi\Model\ParameterProductOfferRequest[]|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \AllegroApi\Model\ParameterProductOfferRequest[]|null $parameters parameters
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets publication
     *
     * @return \AllegroApi\Model\SaleProductOfferRequestBaseAllOfPublication|null
     */
    public function getPublication()
    {
        return $this->container['publication'];
    }

    /**
     * Sets publication
     *
     * @param \AllegroApi\Model\SaleProductOfferRequestBaseAllOfPublication|null $publication publication
     *
     * @return self
     */
    public function setPublication($publication)
    {
        $this->container['publication'] = $publication;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return DeliveryProductOfferRequest|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param DeliveryProductOfferRequest|null $delivery delivery
     *
     * @return self
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets after_sales_services
     *
     * @return \AllegroApi\Model\AfterSalesServicesProductOfferRequest|null
     */
    public function getAfterSalesServices()
    {
        return $this->container['after_sales_services'];
    }

    /**
     * Sets after_sales_services
     *
     * @param \AllegroApi\Model\AfterSalesServicesProductOfferRequest|null $after_sales_services after_sales_services
     *
     * @return self
     */
    public function setAfterSalesServices($after_sales_services)
    {
        $this->container['after_sales_services'] = $after_sales_services;

        return $this;
    }

    /**
     * Gets size_table
     *
     * @return \AllegroApi\Model\SizeTable|null
     */
    public function getSizeTable()
    {
        return $this->container['size_table'];
    }

    /**
     * Sets size_table
     *
     * @param \AllegroApi\Model\SizeTable|null $size_table size_table
     *
     * @return self
     */
    public function setSizeTable($size_table)
    {
        $this->container['size_table'] = $size_table;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \AllegroApi\Model\DiscountsProductOfferRequest|null
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \AllegroApi\Model\DiscountsProductOfferRequest|null $discounts discounts
     *
     * @return self
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name (title) of an offer. Length cannot be more than 50 characters. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\" target=\"_blank\">PL</a>  / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\" target=\"_blank\">EN</a> .
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling SaleProductOfferRequestBase., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \AllegroApi\Model\Payments|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \AllegroApi\Model\Payments|null $payments payments
     *
     * @return self
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets selling_mode
     *
     * @return \AllegroApi\Model\SellingMode|null
     */
    public function getSellingMode()
    {
        return $this->container['selling_mode'];
    }

    /**
     * Sets selling_mode
     *
     * @param \AllegroApi\Model\SellingMode|null $selling_mode selling_mode
     *
     * @return self
     */
    public function setSellingMode($selling_mode)
    {
        $this->container['selling_mode'] = $selling_mode;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \AllegroApi\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \AllegroApi\Model\Location|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets images
     *
     * @return string[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param string[]|null $images images
     *
     * @return self
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \AllegroApi\Model\StandardizedDescription|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \AllegroApi\Model\StandardizedDescription|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets external
     *
     * @return \AllegroApi\Model\ExternalId|null
     */
    public function getExternal()
    {
        return $this->container['external'];
    }

    /**
     * Sets external
     *
     * @param \AllegroApi\Model\ExternalId|null $external external
     *
     * @return self
     */
    public function setExternal($external)
    {
        $this->container['external'] = $external;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \AllegroApi\Model\ExtendedTax|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \AllegroApi\Model\ExtendedTax|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets tax_settings
     *
     * @return \AllegroApi\Model\OfferTaxSettings|null
     */
    public function getTaxSettings()
    {
        return $this->container['tax_settings'];
    }

    /**
     * Sets tax_settings
     *
     * @param \AllegroApi\Model\OfferTaxSettings|null $tax_settings tax_settings
     *
     * @return self
     */
    public function setTaxSettings($tax_settings)
    {
        $this->container['tax_settings'] = $tax_settings;

        return $this;
    }

    /**
     * Gets message_to_seller_settings
     *
     * @return \AllegroApi\Model\MessageToSellerSettings|null
     */
    public function getMessageToSellerSettings()
    {
        return $this->container['message_to_seller_settings'];
    }

    /**
     * Sets message_to_seller_settings
     *
     * @param \AllegroApi\Model\MessageToSellerSettings|null $message_to_seller_settings message_to_seller_settings
     *
     * @return self
     */
    public function setMessageToSellerSettings($message_to_seller_settings)
    {
        $this->container['message_to_seller_settings'] = $message_to_seller_settings;

        return $this;
    }

    /**
     * Gets additional_marketplaces
     *
     * @return map[string,\AllegroApi\Model\OfferAdditionalMarketplace]|null
     */
    public function getAdditionalMarketplaces()
    {
        return $this->container['additional_marketplaces'];
    }

    /**
     * Sets additional_marketplaces
     *
     * @param map[string,\AllegroApi\Model\OfferAdditionalMarketplace]|null $additional_marketplaces Settings for each additional marketplace.
     *
     * @return self
     */
    public function setAdditionalMarketplaces($additional_marketplaces)
    {
        $this->container['additional_marketplaces'] = $additional_marketplaces;

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


