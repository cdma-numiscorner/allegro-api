# AllegroApi\OfferManagementApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changePublicationStatusUsingPUT()**](OfferManagementApi.md#changePublicationStatusUsingPUT) | **PUT** /sale/offer-publication-commands/{commandId} | Batch offer publish / unpublish |
| [**createChangePriceCommandUsingPUT()**](OfferManagementApi.md#createChangePriceCommandUsingPUT) | **PUT** /offers/{offerId}/change-price-commands/{commandId} | Modify the Buy Now price in an offer |
| [**createOfferUsingPOST()**](OfferManagementApi.md#createOfferUsingPOST) | **POST** /sale/offers | Create a draft offer |
| [**createProductOffers()**](OfferManagementApi.md#createProductOffers) | **POST** /sale/product-offers | Create offer based on product |
| [**deleteOfferUsingDELETE()**](OfferManagementApi.md#deleteOfferUsingDELETE) | **DELETE** /sale/offers/{offerId} | Delete a draft offer |
| [**editProductOffers()**](OfferManagementApi.md#editProductOffers) | **PATCH** /sale/product-offers/{offerId} | Edit an offer |
| [**getAvailableOfferPromotionPackages()**](OfferManagementApi.md#getAvailableOfferPromotionPackages) | **GET** /sale/offer-promotion-packages | Get all available offer promotion packages |
| [**getOfferPromoOptionsUsingGET()**](OfferManagementApi.md#getOfferPromoOptionsUsingGET) | **GET** /sale/offers/{offerId}/promo-options | Get offer promotion packages |
| [**getOffersUnfilledParametersUsingGET1()**](OfferManagementApi.md#getOffersUnfilledParametersUsingGET1) | **GET** /sale/offers/unfilled-parameters | Get offers with missing parameters |
| [**getProductOffer()**](OfferManagementApi.md#getProductOffer) | **GET** /sale/product-offers/{offerId} | Get all data of the particular product-offer |
| [**getProductOfferProcessingStatus()**](OfferManagementApi.md#getProductOfferProcessingStatus) | **GET** /sale/product-offers/{offerId}/operations/{operationId} | Check the processing status of a POST or PATCH request |
| [**getPromoModificationCommandDetailedResultUsingGET()**](OfferManagementApi.md#getPromoModificationCommandDetailedResultUsingGET) | **GET** /sale/offers/promo-options-commands/{commandId}/tasks | Modification command detailed result |
| [**getPromoModificationCommandResultUsingGET()**](OfferManagementApi.md#getPromoModificationCommandResultUsingGET) | **GET** /sale/offers/promo-options-commands/{commandId} | Modification command summary |
| [**getPromoOptionsForSellerOffersUsingGET()**](OfferManagementApi.md#getPromoOptionsForSellerOffersUsingGET) | **GET** /sale/offers/promo-options | Get promo options for seller&#39;s offers |
| [**getPublicationReportUsingGET()**](OfferManagementApi.md#getPublicationReportUsingGET) | **GET** /sale/offer-publication-commands/{commandId} | Publish command summary |
| [**getPublicationTasksUsingGET()**](OfferManagementApi.md#getPublicationTasksUsingGET) | **GET** /sale/offer-publication-commands/{commandId}/tasks | Publish command detailed report |
| [**modifyOfferPromoOptionsUsingPOST()**](OfferManagementApi.md#modifyOfferPromoOptionsUsingPOST) | **POST** /sale/offers/{offerId}/promo-options-modification | Modify offer promotion packages |
| [**promoModificationCommandUsingPUT()**](OfferManagementApi.md#promoModificationCommandUsingPUT) | **PUT** /sale/offers/promo-options-commands/{commandId} | Batch offer promotion package modification |
| [**updateOfferUsingPUT()**](OfferManagementApi.md#updateOfferUsingPUT) | **PUT** /sale/offers/{offerId} | Complete a draft offer or edit an offer |


## `changePublicationStatusUsingPUT()`

```php
changePublicationStatusUsingPUT($command_id, $publication_change_command_dto): \AllegroApi\Model\GeneralReport
```

Batch offer publish / unpublish

Use this resource to modify multiple offers publication at once. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#publikacja-oferty\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-publication\" target=\"_blank\">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.
$publication_change_command_dto = new \AllegroApi\Model\PublicationChangeCommandDto(); // \AllegroApi\Model\PublicationChangeCommandDto | publicationChangeCommandDto

try {
    $result = $apiInstance->changePublicationStatusUsingPUT($command_id, $publication_change_command_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->changePublicationStatusUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |
| **publication_change_command_dto** | [**\AllegroApi\Model\PublicationChangeCommandDto**](../Model/PublicationChangeCommandDto.md)| publicationChangeCommandDto | |

### Return type

[**\AllegroApi\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createChangePriceCommandUsingPUT()`

```php
createChangePriceCommandUsingPUT($offer_id, $command_id, $change_price_without_output): \AllegroApi\Model\ChangePrice
```

Modify the Buy Now price in an offer

Use this resource to change the Buy Now price in a single offer. Read more: <a href=\"../../news/mozliwosc-zmiany-ceny-kup-teraz-2YzrKRrr3Sl\" target=\"_blank\">PL</a> / <a href=\"../../news/possibility-to-change-the-buy-it-now-price-q018mq8D2hW\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer identifier.
$command_id = 'command_id_example'; // string | The unique command id generated by you.
$change_price_without_output = new \AllegroApi\Model\ChangePriceWithoutOutput(); // \AllegroApi\Model\ChangePriceWithoutOutput

try {
    $result = $apiInstance->createChangePriceCommandUsingPUT($offer_id, $command_id, $change_price_without_output);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->createChangePriceCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| The offer identifier. | |
| **command_id** | **string**| The unique command id generated by you. | |
| **change_price_without_output** | [**\AllegroApi\Model\ChangePriceWithoutOutput**](../Model/ChangePriceWithoutOutput.md)|  | |

### Return type

[**\AllegroApi\Model\ChangePrice**](../Model/ChangePrice.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOfferUsingPOST()`

```php
createOfferUsingPOST($create_offer_using_post_request): \AllegroApi\Model\OfferResponse
```

Create a draft offer

Create an offer draft. This endpoint is deprecated: <a href=\"../../news/na-poczatku-2024-roku-wylaczymy-zasoby-sale-offers-sluzace-do-tworzenia-i-edycji-ofert-BvqK3XOaEcW\" target=\"_blank\">PL</a> / <a href=\"../../news/at-the-beginning-of-2024-we-will-disable-the-sale-offers-resources-for-creating-and-editing-offers-k1dG88KlxHv\" target=\"_blank\">EN</a>. Use <a href=\"../../documentation#operation/createProductOffers\">POST /sale/product-offers</a> instead. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-wystawic-oferte-z-produktem-za-pomoca-zasobu-sale-product-offers\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-list-an-offer-with-a-product-via-sale-product-offers-resource\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_offer_using_post_request = new \AllegroApi\Model\CreateOfferUsingPOSTRequest(); // \AllegroApi\Model\CreateOfferUsingPOSTRequest | offer

try {
    $result = $apiInstance->createOfferUsingPOST($create_offer_using_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->createOfferUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_offer_using_post_request** | [**\AllegroApi\Model\CreateOfferUsingPOSTRequest**](../Model/CreateOfferUsingPOSTRequest.md)| offer | |

### Return type

[**\AllegroApi\Model\OfferResponse**](../Model/OfferResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductOffers()`

```php
createProductOffers($sale_product_offer_request_v1): \AllegroApi\Model\SaleProductOfferResponseV1
```

Create offer based on product

Use this resource to create offer based on product. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-wystawic-oferte-z-produktem-za-pomoca-zasobu-sale-product-offers\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-list-an-offer-with-a-product-via-sale-product-offers-resource\" target=\"_blank\">EN</a>. Note that requests may be limited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_product_offer_request_v1 = new \AllegroApi\Model\SaleProductOfferRequestV1(); // \AllegroApi\Model\SaleProductOfferRequestV1

try {
    $result = $apiInstance->createProductOffers($sale_product_offer_request_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->createProductOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sale_product_offer_request_v1** | [**\AllegroApi\Model\SaleProductOfferRequestV1**](../Model/SaleProductOfferRequestV1.md)|  | |

### Return type

[**\AllegroApi\Model\SaleProductOfferResponseV1**](../Model/SaleProductOfferResponseV1.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOfferUsingDELETE()`

```php
deleteOfferUsingDELETE($offer_id)
```

Delete a draft offer

Use this resource to delete a draft offer. Read more: <a href=\"../../news/nowy-zasob-do-usuwania-draftow-ofert-aMDnGka2RuL\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resource-draft-delete-yPy9lq6myh0\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier.

try {
    $apiInstance->deleteOfferUsingDELETE($offer_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->deleteOfferUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| Offer identifier. | |

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

## `editProductOffers()`

```php
editProductOffers($offer_id, $sale_product_offer_patch_request_v1): \AllegroApi\Model\SaleProductOfferResponseV1
```

Edit an offer

Use this resource to edit offer. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-pojedynczej-oferty\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-single-offer\" target=\"_blank\">EN</a>. Note that requests may be limited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer identifier.
$sale_product_offer_patch_request_v1 = new \AllegroApi\Model\SaleProductOfferPatchRequestV1(); // \AllegroApi\Model\SaleProductOfferPatchRequestV1

try {
    $result = $apiInstance->editProductOffers($offer_id, $sale_product_offer_patch_request_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->editProductOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| The offer identifier. | |
| **sale_product_offer_patch_request_v1** | [**\AllegroApi\Model\SaleProductOfferPatchRequestV1**](../Model/SaleProductOfferPatchRequestV1.md)|  | |

### Return type

[**\AllegroApi\Model\SaleProductOfferResponseV1**](../Model/SaleProductOfferResponseV1.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvailableOfferPromotionPackages()`

```php
getAvailableOfferPromotionPackages(): \AllegroApi\Model\AvailablePromotionPackages
```

Get all available offer promotion packages

Use this resource to retrieve all available offer promotion packages. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-dostepne-opcje-promowania\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-available-promo-options\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableOfferPromotionPackages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getAvailableOfferPromotionPackages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\AvailablePromotionPackages**](../Model/AvailablePromotionPackages.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user), [bearer-token-for-application](../../README.md#bearer-token-for-application)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferPromoOptionsUsingGET()`

```php
getOfferPromoOptionsUsingGET($offer_id): \AllegroApi\Model\OfferPromoOptions
```

Get offer promotion packages

Use this resource to get promotion packages assigned to an offer. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-opcje-promowania-przypisane-do-oferty\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-promo-options-assigned-to-an-offer\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 9991337999; // string | Offer identifier.

try {
    $result = $apiInstance->getOfferPromoOptionsUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getOfferPromoOptionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| Offer identifier. | |

### Return type

[**\AllegroApi\Model\OfferPromoOptions**](../Model/OfferPromoOptions.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffersUnfilledParametersUsingGET1()`

```php
getOffersUnfilledParametersUsingGET1($offer_id, $parameter_type, $offset, $limit): \AllegroApi\Model\UnfilledParametersResponse
```

Get offers with missing parameters

Use this resource to get information about required parameters or parameters scheduled to become required that are not filled in offers. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-nieuzupelnione-parametry-w-ofertach\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-unfilled-parameters-in-offers\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = array('offer_id_example'); // string[] | List of offer ids. If empty all offers with unfilled parameters will be returned.
$parameter_type = 'parameter_type_example'; // string | Filter by parameter type.
$offset = 0; // int | The offset of elements in the response.
$limit = 100; // int | The limit of elements in the response.

try {
    $result = $apiInstance->getOffersUnfilledParametersUsingGET1($offer_id, $parameter_type, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getOffersUnfilledParametersUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | [**string[]**](../Model/string.md)| List of offer ids. If empty all offers with unfilled parameters will be returned. | [optional] |
| **parameter_type** | **string**| Filter by parameter type. | [optional] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |
| **limit** | **int**| The limit of elements in the response. | [optional] [default to 100] |

### Return type

[**\AllegroApi\Model\UnfilledParametersResponse**](../Model/UnfilledParametersResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductOffer()`

```php
getProductOffer($offer_id): \AllegroApi\Model\SaleProductOfferResponseV1
```

Get all data of the particular product-offer

Use this resource to retrieve all data of the particular product-offer. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#publikacja-oferty-w-asynchronicznym-api\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-publication-in-asynchronous-api\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier.

try {
    $result = $apiInstance->getProductOffer($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getProductOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| Offer identifier. | |

### Return type

[**\AllegroApi\Model\SaleProductOfferResponseV1**](../Model/SaleProductOfferResponseV1.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductOfferProcessingStatus()`

```php
getProductOfferProcessingStatus($offer_id, $operation_id): \AllegroApi\Model\SaleProductOfferStatusResponse
```

Check the processing status of a POST or PATCH request

The URI for the resource given by Location header of POST /sale/product-offers and PATCH /sale/product-offers/{offerId}. Use this resource to check processing status of a POST or PATCH request. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#publikacja-oferty-w-asynchronicznym-api\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-publication-in-asynchronous-api\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier.
$operation_id = 'operation_id_example'; // string | Operation identifier provided in location header of POST or PATCH request.

try {
    $result = $apiInstance->getProductOfferProcessingStatus($offer_id, $operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getProductOfferProcessingStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| Offer identifier. | |
| **operation_id** | **string**| Operation identifier provided in location header of POST or PATCH request. | |

### Return type

[**\AllegroApi\Model\SaleProductOfferStatusResponse**](../Model/SaleProductOfferStatusResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromoModificationCommandDetailedResultUsingGET()`

```php
getPromoModificationCommandDetailedResultUsingGET($command_id, $limit, $offset): \AllegroApi\Model\PromoModificationReport
```

Modification command detailed result

Use this resource to retrieve the result of an offer modification command. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-szczegolowy-raport-zadania\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-a-detailed-report-of-your-task\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.
$limit = 100; // int | The limit of returned items.
$offset = 0; // int | The offset of returned items.

try {
    $result = $apiInstance->getPromoModificationCommandDetailedResultUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPromoModificationCommandDetailedResultUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |
| **limit** | **int**| The limit of returned items. | [optional] [default to 100] |
| **offset** | **int**| The offset of returned items. | [optional] [default to 0] |

### Return type

[**\AllegroApi\Model\PromoModificationReport**](../Model/PromoModificationReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromoModificationCommandResultUsingGET()`

```php
getPromoModificationCommandResultUsingGET($command_id): \AllegroApi\Model\GeneralReport
```

Modification command summary

Use this resource to find out how many offers were edited within one {commandId}. You will receive a summary with a number of successfully edited offers and errors. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-lub-edytowac-opcje-promowania-na-wielu-ofertach\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-or-change-promo-options-in-multiple-offers\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.

try {
    $result = $apiInstance->getPromoModificationCommandResultUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPromoModificationCommandResultUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |

### Return type

[**\AllegroApi\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromoOptionsForSellerOffersUsingGET()`

```php
getPromoOptionsForSellerOffersUsingGET($limit, $offset): \AllegroApi\Model\OfferPromoOptionsForSeller
```

Get promo options for seller's offers

Use this resource to retrieve promo options for seller offers. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-opcje-promowania-dla-wielu-ofert\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-available-promo-options-for-multiple-offers\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 5000; // int | Limit of promo options per page.
$offset = 0; // int | Distance between the beginning of the document and the point from which promo options are returned.

try {
    $result = $apiInstance->getPromoOptionsForSellerOffersUsingGET($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPromoOptionsForSellerOffersUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limit of promo options per page. | [optional] [default to 5000] |
| **offset** | **int**| Distance between the beginning of the document and the point from which promo options are returned. | [optional] [default to 0] |

### Return type

[**\AllegroApi\Model\OfferPromoOptionsForSeller**](../Model/OfferPromoOptionsForSeller.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicationReportUsingGET()`

```php
getPublicationReportUsingGET($command_id): \AllegroApi\Model\GeneralReport
```

Publish command summary

Use this resource to retrieve information about the offer listing statuses. You will receive a summary with a number of correctly listed offers and errors. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#zestawienie-zadan\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#task-list\" target=\"_blank\">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.

try {
    $result = $apiInstance->getPublicationReportUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPublicationReportUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |

### Return type

[**\AllegroApi\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicationTasksUsingGET()`

```php
getPublicationTasksUsingGET($command_id, $limit, $offset): \AllegroApi\Model\TaskReport
```

Publish command detailed report

Use this resource to retrieve information about the offer statuses on the site (Defaults: limit = 100, offset = 0). Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#informacje-o-publikacji\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#information-about-publication\" target=\"_blank\">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.
$limit = 100; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getPublicationTasksUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPublicationTasksUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |
| **limit** | **int**| The limit of elements in the response. | [optional] [default to 100] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |

### Return type

[**\AllegroApi\Model\TaskReport**](../Model/TaskReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyOfferPromoOptionsUsingPOST()`

```php
modifyOfferPromoOptionsUsingPOST($offer_id, $promo_options_modifications): \AllegroApi\Model\OfferPromoOptions
```

Modify offer promotion packages

Use this resource to modify offer promotion packages. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-lub-zmienic-opcje-promowania-w-pojedynczej-ofercie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-or-change-promo-options-in-a-single-offer\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 9991337999; // string | Offer identifier.
$promo_options_modifications = new \AllegroApi\Model\PromoOptionsModifications(); // \AllegroApi\Model\PromoOptionsModifications | request

try {
    $result = $apiInstance->modifyOfferPromoOptionsUsingPOST($offer_id, $promo_options_modifications);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->modifyOfferPromoOptionsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| Offer identifier. | |
| **promo_options_modifications** | [**\AllegroApi\Model\PromoOptionsModifications**](../Model/PromoOptionsModifications.md)| request | |

### Return type

[**\AllegroApi\Model\OfferPromoOptions**](../Model/OfferPromoOptions.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `promoModificationCommandUsingPUT()`

```php
promoModificationCommandUsingPUT($command_id, $promo_options_command): \AllegroApi\Model\GeneralReport
```

Batch offer promotion package modification

Use this resource to modify promotion packages on multiple offers at once. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-lub-edytowac-opcje-promowania-na-wielu-ofertach\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-or-change-promo-options-in-multiple-offers\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = aca8103b-14eb-4855-b9b3-de5bef06bd30; // string | Command identifier. Must be a UUID.
$promo_options_command = new \AllegroApi\Model\PromoOptionsCommand(); // \AllegroApi\Model\PromoOptionsCommand | Promo packages modification command request.

try {
    $result = $apiInstance->promoModificationCommandUsingPUT($command_id, $promo_options_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->promoModificationCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. Must be a UUID. | |
| **promo_options_command** | [**\AllegroApi\Model\PromoOptionsCommand**](../Model/PromoOptionsCommand.md)| Promo packages modification command request. | |

### Return type

[**\AllegroApi\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferUsingPUT()`

```php
updateOfferUsingPUT($offer_id, $create_offer_using_post_request): \AllegroApi\Model\OfferResponse
```

Complete a draft offer or edit an offer

Complete a draft offer or edit ongoing offers. This endpoint is deprecated: <a href=\"../../news/na-poczatku-2024-roku-wylaczymy-zasoby-sale-offers-sluzace-do-tworzenia-i-edycji-ofert-BvqK3XOaEcW\" target=\"_blank\">PL</a> / <a href=\"../../news/at-the-beginning-of-2024-we-will-disable-the-sale-offers-resources-for-creating-and-editing-offers-k1dG88KlxHv\" target=\"_blank\">EN</a>. Use <a href=\"../../documentation#operation/editProductOffers\">PATCH /sale/product-offers/{offerId}</a> instead. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-pojedynczej-oferty\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-single-offer\" target=\"_blank\">EN</a>. This resource is rate limited to 10 requests per second.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier.
$create_offer_using_post_request = new \AllegroApi\Model\CreateOfferUsingPOSTRequest(); // \AllegroApi\Model\CreateOfferUsingPOSTRequest | offer

try {
    $result = $apiInstance->updateOfferUsingPUT($offer_id, $create_offer_using_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->updateOfferUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| Offer identifier. | |
| **create_offer_using_post_request** | [**\AllegroApi\Model\CreateOfferUsingPOSTRequest**](../Model/CreateOfferUsingPOSTRequest.md)| offer | |

### Return type

[**\AllegroApi\Model\OfferResponse**](../Model/OfferResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
