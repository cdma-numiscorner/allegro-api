# AllegroApi\PricingApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**calculateFeePreviewUsingPOST()**](PricingApi.md#calculateFeePreviewUsingPOST) | **POST** /pricing/offer-fee-preview | Calculate fee and commission for an offer |
| [**offerQuotesPublicUsingGET()**](PricingApi.md#offerQuotesPublicUsingGET) | **GET** /pricing/offer-quotes | Get the user&#39;s current offer quotes |


## `calculateFeePreviewUsingPOST()`

```php
calculateFeePreviewUsingPOST($public_offer_preview_request): \AllegroApi\Model\FeePreviewResponse
```

Calculate fee and commission for an offer

Provides information about fee and commission for an offer. Read more: <a href=\"../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#kalkulator-oplat\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-check-the-fees-3An6Wame3Um#fee-calculator\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_offer_preview_request = new \AllegroApi\Model\PublicOfferPreviewRequest(); // \AllegroApi\Model\PublicOfferPreviewRequest

try {
    $result = $apiInstance->calculateFeePreviewUsingPOST($public_offer_preview_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingApi->calculateFeePreviewUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_offer_preview_request** | [**\AllegroApi\Model\PublicOfferPreviewRequest**](../Model/PublicOfferPreviewRequest.md)|  | |

### Return type

[**\AllegroApi\Model\FeePreviewResponse**](../Model/FeePreviewResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `offerQuotesPublicUsingGET()`

```php
offerQuotesPublicUsingGET($offer_id): \AllegroApi\Model\OfferQuotesDto
```

Get the user's current offer quotes

This endpoint returns current offer quotes (listing and promo fees) cycles for authenticated user and list of offers. Read more: <a href=\"../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#data-naliczenia-kolejnej-oplaty\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-check-the-fees-3An6Wame3Um#check-when-a-fee-is-charged\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = array('offer_id_example'); // string[] | List of offer Ids, maximum 20 values.

try {
    $result = $apiInstance->offerQuotesPublicUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingApi->offerQuotesPublicUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | [**string[]**](../Model/string.md)| List of offer Ids, maximum 20 values. | |

### Return type

[**\AllegroApi\Model\OfferQuotesDto**](../Model/OfferQuotesDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
