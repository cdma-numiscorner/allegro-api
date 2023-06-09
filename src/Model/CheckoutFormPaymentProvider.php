<?php
/**
 * CheckoutFormPaymentProvider
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
use \AllegroApi\ObjectSerializer;

/**
 * CheckoutFormPaymentProvider Class Doc Comment
 *
 * @category Class
 * @description Payment provider
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckoutFormPaymentProvider
{
    /**
     * Possible values of this enum
     */
    const P24 = 'P24';
    const PAYU = 'PAYU';
    const OFFLINE = 'OFFLINE';
    const EPT = 'EPT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::P24,
            self::PAYU,
            self::OFFLINE,
            self::EPT,
        ];
    }
}


