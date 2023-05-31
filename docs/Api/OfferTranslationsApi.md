# AllegroApi\OfferTranslationsApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteManualTranslationUsingDELETE()**](OfferTranslationsApi.md#deleteManualTranslationUsingDELETE) | **DELETE** /sale/offers/{offerId}/translations/{language} | Delete offer translation |
| [**getOfferTranslationUsingGET()**](OfferTranslationsApi.md#getOfferTranslationUsingGET) | **GET** /sale/offers/{offerId}/translations | Get offer translations |
| [**updateOfferTranslationUsingPATCH()**](OfferTranslationsApi.md#updateOfferTranslationUsingPATCH) | **PATCH** /sale/offers/{offerId}/translations/{language} | Update offer translation |


## `deleteManualTranslationUsingDELETE()`

```php
deleteManualTranslationUsingDELETE($language, $offer_id, $element)
```

Delete offer translation

Delete single element or entire manual translation. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-ofert\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#offer-translations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = en-US; // string | Language of the translation to delete.
$offer_id = 'offer_id_example'; // string | Offer identifier.
$element = 'element_example'; // string | Offer element for which translation should be deleted. If not provided, translations for all elements will be deleted.

try {
    $apiInstance->deleteManualTranslationUsingDELETE($language, $offer_id, $element);
} catch (Exception $e) {
    echo 'Exception when calling OfferTranslationsApi->deleteManualTranslationUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| Language of the translation to delete. | |
| **offer_id** | **string**| Offer identifier. | |
| **element** | **string**| Offer element for which translation should be deleted. If not provided, translations for all elements will be deleted. | [optional] |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferTranslationUsingGET()`

```php
getOfferTranslationUsingGET($offer_id, $language): \AllegroApi\Model\OfferTranslations
```

Get offer translations

Get offer translation for given language or all present. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-ofert\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#offer-translations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier.
$language = en-US; // string | Language for translation to retrieve. If not provided, all translations as well as base content for offer will be returned.

try {
    $result = $apiInstance->getOfferTranslationUsingGET($offer_id, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferTranslationsApi->getOfferTranslationUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| Offer identifier. | |
| **language** | **string**| Language for translation to retrieve. If not provided, all translations as well as base content for offer will be returned. | [optional] |

### Return type

[**\AllegroApi\Model\OfferTranslations**](../Model/OfferTranslations.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferTranslationUsingPATCH()`

```php
updateOfferTranslationUsingPATCH($language, $offer_id, $manual_translation_update_request)
```

Update offer translation

Update manual translation for offer. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-ofert\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#offer-translations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = en-US; // string | Language of the provided translation.
$offer_id = 'offer_id_example'; // string | Offer identifier.
$manual_translation_update_request = new \AllegroApi\Model\ManualTranslationUpdateRequest(); // \AllegroApi\Model\ManualTranslationUpdateRequest | Request with manual translation for offer, must contain at least one translated offer element (title or description).

try {
    $apiInstance->updateOfferTranslationUsingPATCH($language, $offer_id, $manual_translation_update_request);
} catch (Exception $e) {
    echo 'Exception when calling OfferTranslationsApi->updateOfferTranslationUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| Language of the provided translation. | |
| **offer_id** | **string**| Offer identifier. | |
| **manual_translation_update_request** | [**\AllegroApi\Model\ManualTranslationUpdateRequest**](../Model/ManualTranslationUpdateRequest.md)| Request with manual translation for offer, must contain at least one translated offer element (title or description). | |

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
