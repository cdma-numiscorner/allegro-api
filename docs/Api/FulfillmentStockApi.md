# AllegroApi\FulfillmentStockApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFulfillmentStock()**](FulfillmentStockApi.md#getFulfillmentStock) | **GET** /fulfillment/stock | Get available stock |


## `getFulfillmentStock()`

```php
getFulfillmentStock($offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to): \AllegroApi\Model\StockProductList
```

Get available stock

Use this resource to get a list of the products belonging to the seller, which are in Allegro Warehouse. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-pobrac-aktualne-stany-magazynowe\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#get-available-stock\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\FulfillmentStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | The offset of elements in the response. Ignored for text/csv content type.
$limit = 50; // int | Maximum number of elements in response. Ignored for text/csv content type.
$phrase = 'phrase_example'; // string | Filtering search results by product name.
$sort = 'name'; // string | Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \"sort\" parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)   * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then CHARGED ordered by amountGross ascending.   * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE.
$product_id = 'product_id_example'; // string | Filtering search results by fulfillment product identifier. Ignored for text/csv content type.
$product_availability = array('product_availability_example'); // string[] | Filtering search results by availability
$product_status = 'product_status_example'; // string | Filtering search results by status
$storage_fee = 'storage_fee_example'; // string | Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated
$asn_status = 'asn_status_example'; // string | Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don't have related ASN with products on it are returned.
$out_of_stock_in_from = 56; // int | Filter by products with outOfStockIn greater than or equal
$out_of_stock_in_to = 56; // int | Filter by products with outOfStockIn less than or equal

try {
    $result = $apiInstance->getFulfillmentStock($offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentStockApi->getFulfillmentStock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| The offset of elements in the response. Ignored for text/csv content type. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of elements in response. Ignored for text/csv content type. | [optional] [default to 50] |
| **phrase** | **string**| Filtering search results by product name. | [optional] |
| **sort** | **string**| Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)   * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then CHARGED ordered by amountGross ascending.   * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE. | [optional] [default to &#39;name&#39;] |
| **product_id** | **string**| Filtering search results by fulfillment product identifier. Ignored for text/csv content type. | [optional] |
| **product_availability** | [**string[]**](../Model/string.md)| Filtering search results by availability | [optional] |
| **product_status** | **string**| Filtering search results by status | [optional] |
| **storage_fee** | **string**| Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated | [optional] |
| **asn_status** | **string**| Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. | [optional] |
| **out_of_stock_in_from** | **int**| Filter by products with outOfStockIn greater than or equal | [optional] |
| **out_of_stock_in_to** | **int**| Filter by products with outOfStockIn less than or equal | [optional] |

### Return type

[**\AllegroApi\Model\StockProductList**](../Model/StockProductList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `text/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
