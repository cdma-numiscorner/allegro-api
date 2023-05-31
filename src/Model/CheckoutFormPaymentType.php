<?php
/**
 * CheckoutFormPaymentType
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
 * CheckoutFormPaymentType Class Doc Comment
 *
 * @category Class
 * @description Payment type
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckoutFormPaymentType
{
    /**
     * Possible values of this enum
     */
    public const CASH_ON_DELIVERY = 'CASH_ON_DELIVERY';

    public const WIRE_TRANSFER = 'WIRE_TRANSFER';

    public const ONLINE = 'ONLINE';

    public const SPLIT_PAYMENT = 'SPLIT_PAYMENT';

    public const EXTENDED_TERM = 'EXTENDED_TERM';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CASH_ON_DELIVERY,
            self::WIRE_TRANSFER,
            self::ONLINE,
            self::SPLIT_PAYMENT,
            self::EXTENDED_TERM
        ];
    }
}


