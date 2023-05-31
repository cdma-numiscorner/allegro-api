# AllegroApi\AdditionalServicesTranslationsApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAdditionalServiceGroupTranslation()**](AdditionalServicesTranslationsApi.md#deleteAdditionalServiceGroupTranslation) | **DELETE** /sale/offer-additional-services/groups/{groupId}/translations/{language} | Delete a translation for a specified group and language |
| [**getAdditionalServiceGroupTranslations()**](AdditionalServicesTranslationsApi.md#getAdditionalServiceGroupTranslations) | **GET** /sale/offer-additional-services/groups/{groupId}/translations | Get translations for specified group |
| [**updateAdditionalServiceGroupTranslation()**](AdditionalServicesTranslationsApi.md#updateAdditionalServiceGroupTranslation) | **PATCH** /sale/offer-additional-services/groups/{groupId}/translations/{language} | Create/Update translations for specified group and language |


## `deleteAdditionalServiceGroupTranslation()`

```php
deleteAdditionalServiceGroupTranslation($group_id, $language)
```

Delete a translation for a specified group and language

Use this resource to delete the translation for specified additional service group and language. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-uslug-dodatkowych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#additional-services-translations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdditionalServicesTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Additional service group ID.
$language = pl-PL; // string | IETF Language tag.

try {
    $apiInstance->deleteAdditionalServiceGroupTranslation($group_id, $language);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesTranslationsApi->deleteAdditionalServiceGroupTranslation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Additional service group ID. | |
| **language** | **string**| IETF Language tag. | |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdditionalServiceGroupTranslations()`

```php
getAdditionalServiceGroupTranslations($group_id, $language): \AllegroApi\Model\AdditionalServiceGroupTranslationResponse
```

Get translations for specified group

Use this resource to get translations for additional service group. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-uslug-dodatkowych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#additional-services-translations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdditionalServicesTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Additional Service Group ID.
$language = en-US; // string | IETF language tag. When provided, the response will contain translations in only that language (if exists).

try {
    $result = $apiInstance->getAdditionalServiceGroupTranslations($group_id, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesTranslationsApi->getAdditionalServiceGroupTranslations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Additional Service Group ID. | |
| **language** | **string**| IETF language tag. When provided, the response will contain translations in only that language (if exists). | [optional] |

### Return type

[**\AllegroApi\Model\AdditionalServiceGroupTranslationResponse**](../Model/AdditionalServiceGroupTranslationResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdditionalServiceGroupTranslation()`

```php
updateAdditionalServiceGroupTranslation($group_id, $language, $additional_services_group_translation_request): \AllegroApi\Model\AdditionalServiceGroupTranslationPatchResponse
```

Create/Update translations for specified group and language

Use this resource to create/update translation for additional service group and specified language. It is allowed to provide an incomplete list of services that belong to the group. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-uslug-dodatkowych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#additional-services-translations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdditionalServicesTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Additional Service Group ID.
$language = pl-PL; // string | IETF Language tag.
$additional_services_group_translation_request = new \AllegroApi\Model\AdditionalServicesGroupTranslationRequest(); // \AllegroApi\Model\AdditionalServicesGroupTranslationRequest | Additonal service group translation.

try {
    $result = $apiInstance->updateAdditionalServiceGroupTranslation($group_id, $language, $additional_services_group_translation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesTranslationsApi->updateAdditionalServiceGroupTranslation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Additional Service Group ID. | |
| **language** | **string**| IETF Language tag. | |
| **additional_services_group_translation_request** | [**\AllegroApi\Model\AdditionalServicesGroupTranslationRequest**](../Model/AdditionalServicesGroupTranslationRequest.md)| Additonal service group translation. | |

### Return type

[**\AllegroApi\Model\AdditionalServiceGroupTranslationPatchResponse**](../Model/AdditionalServiceGroupTranslationPatchResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
