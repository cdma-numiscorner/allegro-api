<?php
/**
 * ClassifiedStatEventType
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
 * ClassifiedStatEventType Class Doc Comment
 *
 * @category Class
 * @description Classified statistical event type.
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ClassifiedStatEventType
{
    /**
     * Possible values of this enum
     */
    const SHOWED_PHONE_NUMBER = 'SHOWED_PHONE_NUMBER';
    const ASKED_QUESTION = 'ASKED_QUESTION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHOWED_PHONE_NUMBER,
            self::ASKED_QUESTION,
        ];
    }
}


