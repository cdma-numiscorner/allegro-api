# AllegroApi\ClassifiedsApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignClassifiedPackagesUsingPUT()**](ClassifiedsApi.md#assignClassifiedPackagesUsingPUT) | **PUT** /sale/offer-classifieds-packages/{offerId} | Assign packages to a classified
[**classifiedOffersStatsGET()**](ClassifiedsApi.md#classifiedOffersStatsGET) | **GET** /sale/classified-offers-stats | Get the advertisements daily statistics
[**classifiedSellerOfferStatsGET()**](ClassifiedsApi.md#classifiedSellerOfferStatsGET) | **GET** /sale/classified-seller-stats | Get the seller&#39;s advertisements daily statistics
[**getClassifiedPackageConfigurationUsingGET()**](ClassifiedsApi.md#getClassifiedPackageConfigurationUsingGET) | **GET** /sale/classifieds-packages/{packageId} | Get the configuration of a package
[**getClassifiedPackageConfigurationsForCategoryUsingGET()**](ClassifiedsApi.md#getClassifiedPackageConfigurationsForCategoryUsingGET) | **GET** /sale/classifieds-packages | Get configurations of packages
[**getClassifiedPackagesUsingGET()**](ClassifiedsApi.md#getClassifiedPackagesUsingGET) | **GET** /sale/offer-classifieds-packages/{offerId} | Get classified packages assigned to an offer


## `assignClassifiedPackagesUsingPUT()`

```php
assignClassifiedPackagesUsingPUT($offer_id, $classified_packages)
```

Assign packages to a classified

Use this resource to assign classified packages to an offer. Read more: <a href=\"../../tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#dodatkowe-opcje-promowania\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#additional-promo-options\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer ID.
$classified_packages = new \AllegroApi\Model\ClassifiedPackages(); // \AllegroApi\Model\ClassifiedPackages | Packages that should be assigned to the classified.

try {
    $apiInstance->assignClassifiedPackagesUsingPUT($offer_id, $classified_packages);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->assignClassifiedPackagesUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| The offer ID. |
 **classified_packages** | [**\AllegroApi\Model\ClassifiedPackages**](../Model/ClassifiedPackages.md)| Packages that should be assigned to the classified. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `classifiedOffersStatsGET()`

```php
classifiedOffersStatsGET($offer_id, $date_gte, $date_lte): \AllegroApi\Model\OfferStatsResponseDto
```

Get the advertisements daily statistics

This endpoint returns daily statistics collected for a list of advertisements in a given date range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = array('offer_id_example'); // string[] | List of offer Ids, maximum 50 values.
$date_gte = 2020-11-13T12:45:20.818Z; // \DateTime | The minimum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time and greater than date.lte. The difference between date.gte and date.lte should be less than 3 months.
$date_lte = 2020-11-13T12:45:20.818Z; // \DateTime | The maximum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time. The difference between date.gte and date.lte should be less than 3 months.

try {
    $result = $apiInstance->classifiedOffersStatsGET($offer_id, $date_gte, $date_lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->classifiedOffersStatsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | [**string[]**](../Model/string.md)| List of offer Ids, maximum 50 values. |
 **date_gte** | **\DateTime**| The minimum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time and greater than date.lte. The difference between date.gte and date.lte should be less than 3 months. | [optional]
 **date_lte** | **\DateTime**| The maximum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time. The difference between date.gte and date.lte should be less than 3 months. | [optional]

### Return type

[**\AllegroApi\Model\OfferStatsResponseDto**](../Model/OfferStatsResponseDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `classifiedSellerOfferStatsGET()`

```php
classifiedSellerOfferStatsGET($date_gte, $date_lte): \AllegroApi\Model\SellerOfferStatsResponseDto
```

Get the seller's advertisements daily statistics

This endpoint returns daily statistics collected for a list of advertisements in a given date range for logged user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_gte = 2020-11-13T12:45:20.818Z; // \DateTime | The minimum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time and greater than date.lte. The difference between date.gte and date.lte should be less than 3 months.
$date_lte = 2020-11-13T12:45:20.818Z; // \DateTime | The maximum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time. The difference between date.gte and date.lte should be less than 3 months.

try {
    $result = $apiInstance->classifiedSellerOfferStatsGET($date_gte, $date_lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->classifiedSellerOfferStatsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_gte** | **\DateTime**| The minimum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time and greater than date.lte. The difference between date.gte and date.lte should be less than 3 months. | [optional]
 **date_lte** | **\DateTime**| The maximum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time. The difference between date.gte and date.lte should be less than 3 months. | [optional]

### Return type

[**\AllegroApi\Model\SellerOfferStatsResponseDto**](../Model/SellerOfferStatsResponseDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClassifiedPackageConfigurationUsingGET()`

```php
getClassifiedPackageConfigurationUsingGET($package_id): \AllegroApi\Model\ClassifiedPackageConfig
```

Get the configuration of a package

Use this resource to retrieve the configuration of a classifieds package. Read more: <a href=\"../../tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#lista-pakietow-i-opcji-dodatkowych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#list-of-promo-options\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string | The classifieds package ID.

try {
    $result = $apiInstance->getClassifiedPackageConfigurationUsingGET($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->getClassifiedPackageConfigurationUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| The classifieds package ID. |

### Return type

[**\AllegroApi\Model\ClassifiedPackageConfig**](../Model/ClassifiedPackageConfig.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClassifiedPackageConfigurationsForCategoryUsingGET()`

```php
getClassifiedPackageConfigurationsForCategoryUsingGET($category_id): \AllegroApi\Model\ClassifiedPackageConfigs
```

Get configurations of packages

Use this resource to retrieve configurations of classifieds packages for a category. Read more: <a href=\"../../tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#lista-pakietow-i-opcji-dodatkowych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#list-of-promo-options\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 'category_id_example'; // string | The category ID.

try {
    $result = $apiInstance->getClassifiedPackageConfigurationsForCategoryUsingGET($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->getClassifiedPackageConfigurationsForCategoryUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The category ID. |

### Return type

[**\AllegroApi\Model\ClassifiedPackageConfigs**](../Model/ClassifiedPackageConfigs.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClassifiedPackagesUsingGET()`

```php
getClassifiedPackagesUsingGET($offer_id): \AllegroApi\Model\ClassifiedResponse
```

Get classified packages assigned to an offer

Use this resource to retrieve classified packages currently assigned to an offer. Read more: <a href=\"../../tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#dodatkowe-opcje-promowania\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#additional-promo-options\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer ID.

try {
    $result = $apiInstance->getClassifiedPackagesUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->getClassifiedPackagesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer ID. |

### Return type

[**\AllegroApi\Model\ClassifiedResponse**](../Model/ClassifiedResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
