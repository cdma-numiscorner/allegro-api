# AllegroApi\OfferRatingApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**offerRatingGET()**](OfferRatingApi.md#offerRatingGET) | **GET** /sale/offers/{offerId}/rating | Get offer rating


## `offerRatingGET()`

```php
offerRatingGET($offer_id): \AllegroApi\Model\OfferRating
```

Get offer rating

Use this resource to get offer rating. Read more: <a href=\"../../news/nowy-zasob-do-pobrania-oceny-produktu-q018mmPe0H7\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resource-to-retrieve-product-rating-q018mmPrWUX\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferRatingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 9991337999; // string | Offer identifier.

try {
    $result = $apiInstance->offerRatingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferRatingApi->offerRatingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |

### Return type

[**\AllegroApi\Model\OfferRating**](../Model/OfferRating.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
