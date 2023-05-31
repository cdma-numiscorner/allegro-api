<?php
/**
 * CheckoutFormFulfillmentStatus
 *
 * PHP version 7.4
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
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;
use \AllegroApi\ObjectSerializer;

/**
 * CheckoutFormFulfillmentStatus Class Doc Comment
 *
 * @category Class
 * @description Order seller status.
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckoutFormFulfillmentStatus
{
    /**
     * Possible values of this enum
     */
    public const _NEW = 'NEW';

    public const PROCESSING = 'PROCESSING';

    public const READY_FOR_SHIPMENT = 'READY_FOR_SHIPMENT';

    public const READY_FOR_PICKUP = 'READY_FOR_PICKUP';

    public const SENT = 'SENT';

    public const PICKED_UP = 'PICKED_UP';

    public const CANCELLED = 'CANCELLED';

    public const SUSPENDED = 'SUSPENDED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::PROCESSING,
            self::READY_FOR_SHIPMENT,
            self::READY_FOR_PICKUP,
            self::SENT,
            self::PICKED_UP,
            self::CANCELLED,
            self::SUSPENDED
        ];
    }
}


