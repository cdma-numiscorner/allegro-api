# AllegroApi\OfferTagsApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignTagToOfferPOST()**](OfferTagsApi.md#assignTagToOfferPOST) | **POST** /sale/offers/{offerId}/tags | Assign tags to an offer |
| [**createTagPOST1()**](OfferTagsApi.md#createTagPOST1) | **POST** /sale/offer-tags | Create a tag |
| [**deleteTagUsingDELETE()**](OfferTagsApi.md#deleteTagUsingDELETE) | **DELETE** /sale/offer-tags/{tagId} | Delete a tag |
| [**listAssignedOfferTagsGET()**](OfferTagsApi.md#listAssignedOfferTagsGET) | **GET** /sale/offers/{offerId}/tags | Get tags assigned to an offer |
| [**listSellerTagsGET1()**](OfferTagsApi.md#listSellerTagsGET1) | **GET** /sale/offer-tags | Get the user&#39;s tags |
| [**updateTagPUT()**](OfferTagsApi.md#updateTagPUT) | **PUT** /sale/offer-tags/{tagId} | Modify a tag |


## `assignTagToOfferPOST()`

```php
assignTagToOfferPOST($offer_id, $tag_ids_request)
```

Assign tags to an offer

Use this resource to assign a tag to offer. Read more: <a href=\"../../news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier.
$tag_ids_request = new \AllegroApi\Model\TagIdsRequest(); // \AllegroApi\Model\TagIdsRequest | request

try {
    $apiInstance->assignTagToOfferPOST($offer_id, $tag_ids_request);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->assignTagToOfferPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| Offer identifier. | |
| **tag_ids_request** | [**\AllegroApi\Model\TagIdsRequest**](../Model/TagIdsRequest.md)| request | |

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

## `createTagPOST1()`

```php
createTagPOST1($tag_request): \AllegroApi\Model\TagId
```

Create a tag

Use this resource to create a new tag. Read more: <a href=\"../../news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_request = new \AllegroApi\Model\TagRequest(); // \AllegroApi\Model\TagRequest | request

try {
    $result = $apiInstance->createTagPOST1($tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->createTagPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_request** | [**\AllegroApi\Model\TagRequest**](../Model/TagRequest.md)| request | |

### Return type

[**\AllegroApi\Model\TagId**](../Model/TagId.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTagUsingDELETE()`

```php
deleteTagUsingDELETE($tag_id)
```

Delete a tag

Use this resource to delete the tag. Read more: <a href=\"../../news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 'tag_id_example'; // string | Tag identifier.

try {
    $apiInstance->deleteTagUsingDELETE($tag_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->deleteTagUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| Tag identifier. | |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssignedOfferTagsGET()`

```php
listAssignedOfferTagsGET($offer_id): \AllegroApi\Model\TagListResponse
```

Get tags assigned to an offer

Use this resource to get a list of tags assigned to offer. Read more: <a href=\"../../news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier.

try {
    $result = $apiInstance->listAssignedOfferTagsGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->listAssignedOfferTagsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| Offer identifier. | |

### Return type

[**\AllegroApi\Model\TagListResponse**](../Model/TagListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSellerTagsGET1()`

```php
listSellerTagsGET1($limit, $offset): \AllegroApi\Model\TagListResponse
```

Get the user's tags

Use this resource to get a list of tags defined by the specified user (Defaults: limit = 100, offset = 0). Read more: <a href=\"../../news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->listSellerTagsGET1($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->listSellerTagsGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| The limit of elements in the response. | [optional] [default to 1000] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |

### Return type

[**\AllegroApi\Model\TagListResponse**](../Model/TagListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTagPUT()`

```php
updateTagPUT($tag_id, $tag_request)
```

Modify a tag

Use this resource to update a tag. Read more: <a href=\"../../news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL\" target=\"_blank\">EN</a>. This resource is rate limited to 1 million changes per hour.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 'tag_id_example'; // string | Tag identifier.
$tag_request = new \AllegroApi\Model\TagRequest(); // \AllegroApi\Model\TagRequest | request

try {
    $apiInstance->updateTagPUT($tag_id, $tag_request);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->updateTagPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| Tag identifier. | |
| **tag_request** | [**\AllegroApi\Model\TagRequest**](../Model/TagRequest.md)| request | |

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
