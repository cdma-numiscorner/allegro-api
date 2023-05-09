# AllegroApi\FulfillmentParcelsApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFulfillmentOrderParcels()**](FulfillmentParcelsApi.md#getFulfillmentOrderParcels) | **GET** /fulfillment/orders/{orderId}/parcels | Get list of shipped parcels


## `getFulfillmentOrderParcels()`

```php
getFulfillmentOrderParcels($order_id): \AllegroApi\Model\FulfillmentOrder
```

Get list of shipped parcels

Use this resource to get list of parcels and included items for a given order. Items include detailed information such as expiration dates and serial numbers. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-obslugiwac-zamowienia\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-handle-orders\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\FulfillmentParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | The Allegro's platform order identifier.

try {
    $result = $apiInstance->getFulfillmentOrderParcels($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentParcelsApi->getFulfillmentOrderParcels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | [**string**](../Model/.md)| The Allegro&#39;s platform order identifier. |

### Return type

[**\AllegroApi\Model\FulfillmentOrder**](../Model/FulfillmentOrder.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
