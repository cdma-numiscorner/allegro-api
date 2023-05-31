# AllegroApi\FulfillmentProductsApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAvailableProducts()**](FulfillmentProductsApi.md#getAvailableProducts) | **GET** /fulfillment/available-products | Get list of available products |


## `getAvailableProducts()`

```php
getAvailableProducts($offset, $limit): \AllegroApi\Model\AvailableProductsList
```

Get list of available products

Use this resource to get a list of products that can be added to Advance Ship Notice. The list contains products for which the seller has created offers and is ordered by product's name. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#sprawdz-dostepne-produkty-do-awizacji\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#check-available-products-for-asn\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\FulfillmentProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | The offset of elements in the response.
$limit = 50; // int | Maximum number of elements in response.

try {
    $result = $apiInstance->getAvailableProducts($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProductsApi->getAvailableProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of elements in response. | [optional] [default to 50] |

### Return type

[**\AllegroApi\Model\AvailableProductsList**](../Model/AvailableProductsList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
