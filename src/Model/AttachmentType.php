<?php
/**
 * AttachmentType
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
 * AttachmentType Class Doc Comment
 *
 * @category Class
 * @description offer attachment type
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AttachmentType
{
    /**
     * Possible values of this enum
     */
    const MANUAL = 'MANUAL';
    const SPECIAL_OFFER_RULES = 'SPECIAL_OFFER_RULES';
    const COMPETITION_RULES = 'COMPETITION_RULES';
    const BOOK_EXCERPT = 'BOOK_EXCERPT';
    const USER_MANUAL = 'USER_MANUAL';
    const INSTALLATION_INSTRUCTIONS = 'INSTALLATION_INSTRUCTIONS';
    const GAME_INSTRUCTIONS = 'GAME_INSTRUCTIONS';
    const ENERGY_LABEL = 'ENERGY_LABEL';
    const PRODUCT_INFORMATION_SHEET = 'PRODUCT_INFORMATION_SHEET';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MANUAL,
            self::SPECIAL_OFFER_RULES,
            self::COMPETITION_RULES,
            self::BOOK_EXCERPT,
            self::USER_MANUAL,
            self::INSTALLATION_INSTRUCTIONS,
            self::GAME_INSTRUCTIONS,
            self::ENERGY_LABEL,
            self::PRODUCT_INFORMATION_SHEET,
        ];
    }
}


