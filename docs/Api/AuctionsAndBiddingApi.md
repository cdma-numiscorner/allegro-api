# AllegroApi\AuctionsAndBiddingApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBid()**](AuctionsAndBiddingApi.md#getBid) | **GET** /bidding/offers/{offerId}/bid | Get current user&#39;s bid information
[**placeBid()**](AuctionsAndBiddingApi.md#placeBid) | **PUT** /bidding/offers/{offerId}/bid | Place a bid in an auction


## `getBid()`

```php
getBid($offer_id): \AllegroApi\Model\MyBidResponse
```

Get current user's bid information

Get current user's bid information. Read more: <a href=\"../../news/nowe-zasoby-zloz-oferte-kupna-w-licytacji-q018m02vDT1\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-place-a-bid-in-an-auction-rjWwEj1e7sG\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AuctionsAndBiddingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer ID.

try {
    $result = $apiInstance->getBid($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsAndBiddingApi->getBid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| The offer ID. |

### Return type

[**\AllegroApi\Model\MyBidResponse**](../Model/MyBidResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeBid()`

```php
placeBid($offer_id, $bid_request): \AllegroApi\Model\MyBidResponse
```

Place a bid in an auction

Place a bid in an auction. Read more: <a href=\"../../news/nowe-zasoby-zloz-oferte-kupna-w-licytacji-q018m02vDT1\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-place-a-bid-in-an-auction-rjWwEj1e7sG\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AuctionsAndBiddingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer ID.
$bid_request = new \AllegroApi\Model\BidRequest(); // \AllegroApi\Model\BidRequest

try {
    $result = $apiInstance->placeBid($offer_id, $bid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsAndBiddingApi->placeBid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| The offer ID. |
 **bid_request** | [**\AllegroApi\Model\BidRequest**](../Model/BidRequest.md)|  | [optional]

### Return type

[**\AllegroApi\Model\MyBidResponse**](../Model/MyBidResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
