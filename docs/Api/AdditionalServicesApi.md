# AllegroApi\AdditionalServicesApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAdditionalServicesGroupUsingPOST()**](AdditionalServicesApi.md#createAdditionalServicesGroupUsingPOST) | **POST** /sale/offer-additional-services/groups | Create additional services group
[**getAdditionalServicesGroupUsingGET()**](AdditionalServicesApi.md#getAdditionalServicesGroupUsingGET) | **GET** /sale/offer-additional-services/groups/{groupId} | Get the details of an additional services group
[**getListOfAdditionalServicesDefinitionsCategoriesUsingGET()**](AdditionalServicesApi.md#getListOfAdditionalServicesDefinitionsCategoriesUsingGET) | **GET** /sale/offer-additional-services/categories | Get the additional services definitions by categories
[**getListOfAdditionalServicesGroupsUsingGET()**](AdditionalServicesApi.md#getListOfAdditionalServicesGroupsUsingGET) | **GET** /sale/offer-additional-services/groups | Get the user&#39;s additional services groups
[**modifyAdditionalServicesGroupUsingPUT()**](AdditionalServicesApi.md#modifyAdditionalServicesGroupUsingPUT) | **PUT** /sale/offer-additional-services/groups/{groupId} | Modify an additional services group


## `createAdditionalServicesGroupUsingPOST()`

```php
createAdditionalServicesGroupUsingPOST($additional_services_group_request): \AllegroApi\Model\AdditionalServicesGroupResponse
```

Create additional services group

Use this resource to create a group of additional services. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-nowa-grupe-uslug-dodatkowych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-a-new-additional-service-group\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_services_group_request = new \AllegroApi\Model\AdditionalServicesGroupRequest(); // \AllegroApi\Model\AdditionalServicesGroupRequest | Additional service group body

try {
    $result = $apiInstance->createAdditionalServicesGroupUsingPOST($additional_services_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->createAdditionalServicesGroupUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additional_services_group_request** | [**\AllegroApi\Model\AdditionalServicesGroupRequest**](../Model/AdditionalServicesGroupRequest.md)| Additional service group body |

### Return type

[**\AllegroApi\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdditionalServicesGroupUsingGET()`

```php
getAdditionalServicesGroupUsingGET($group_id): \AllegroApi\Model\AdditionalServicesGroupResponse
```

Get the details of an additional services group

Use this resource to get additional services group for a given ID. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-wybrana-grupe-uslug-dodatkowych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-a-group-of-additional-services-for-a-given-id\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Additional Service Group ID.

try {
    $result = $apiInstance->getAdditionalServicesGroupUsingGET($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->getAdditionalServicesGroupUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Additional Service Group ID. |

### Return type

[**\AllegroApi\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfAdditionalServicesDefinitionsCategoriesUsingGET()`

```php
getListOfAdditionalServicesDefinitionsCategoriesUsingGET(): \AllegroApi\Model\CategoriesResponse
```

Get the additional services definitions by categories

Use this resource to get additional services definitions, grouped by additional services categories, available on given marketplace. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-zarzadzac-uslugami-dodatkowymi\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-manage-additional-services\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getListOfAdditionalServicesDefinitionsCategoriesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->getListOfAdditionalServicesDefinitionsCategoriesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\CategoriesResponse**](../Model/CategoriesResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfAdditionalServicesGroupsUsingGET()`

```php
getListOfAdditionalServicesGroupsUsingGET($offset, $limit): \AllegroApi\Model\AdditionalServicesGroups
```

Get the user's additional services groups

Use this resource to retrieve a list of groups with additional services available to a given user which you may assign to offers. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-liste-grup-uslug-dodatkowych-na-koncie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-a-list-of-additional-services-groups-for-the-account\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | The offset of elements in the response.
$limit = 100; // int | The limit of elements in the response.

try {
    $result = $apiInstance->getListOfAdditionalServicesGroupsUsingGET($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->getListOfAdditionalServicesGroupsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 100]

### Return type

[**\AllegroApi\Model\AdditionalServicesGroups**](../Model/AdditionalServicesGroups.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyAdditionalServicesGroupUsingPUT()`

```php
modifyAdditionalServicesGroupUsingPUT($group_id, $additional_services_group_request): \AllegroApi\Model\AdditionalServicesGroupResponse
```

Modify an additional services group

Use this resource to modify existing additional service group. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-zaktualizowac-grupe-uslug-dodatkowych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-additional-service-group\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Additional service group ID.
$additional_services_group_request = new \AllegroApi\Model\AdditionalServicesGroupRequest(); // \AllegroApi\Model\AdditionalServicesGroupRequest | Additional service group body

try {
    $result = $apiInstance->modifyAdditionalServicesGroupUsingPUT($group_id, $additional_services_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->modifyAdditionalServicesGroupUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Additional service group ID. |
 **additional_services_group_request** | [**\AllegroApi\Model\AdditionalServicesGroupRequest**](../Model/AdditionalServicesGroupRequest.md)| Additional service group body |

### Return type

[**\AllegroApi\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
