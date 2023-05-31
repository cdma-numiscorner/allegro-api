# AllegroApi\SelectionInsightsApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSaleSelectionInsights()**](SelectionInsightsApi.md#getSaleSelectionInsights) | **GET** /sale/selection-insights | [BETA] Get selection insights. |


## `getSaleSelectionInsights()`

```php
getSaleSelectionInsights($availability, $category_id, $phrase, $brand, $gtin, $manufacturer_code, $hide_unnamed, $offset, $limit): \AllegroApi\Model\GetSelectionInsightsResponse
```

[BETA] Get selection insights.

Get products from selection insights.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\SelectionInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$availability = array('availability_example'); // string[] | Availability badges to filter results.
$category_id = array('category_id_example'); // string[] | Category ids to filter results.
$phrase = array('phrase_example'); // string[] | The search phrase. The phrase is searched in name, brands, model, gtin, manufacturer code.
$brand = array('brand_example'); // string[] | Brand names to filter results.
$gtin = array('gtin_example'); // string[] | Gtins to filter results.
$manufacturer_code = array('manufacturer_code_example'); // string[] | Manufacturer codes to filter results.
$hide_unnamed = false; // bool | Boolean value to hide unnamed products.
$offset = 0; // int | The offset of elements in the response.
$limit = 100; // int | The limit of elements in the response.

try {
    $result = $apiInstance->getSaleSelectionInsights($availability, $category_id, $phrase, $brand, $gtin, $manufacturer_code, $hide_unnamed, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelectionInsightsApi->getSaleSelectionInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **availability** | [**string[]**](../Model/string.md)| Availability badges to filter results. | [optional] |
| **category_id** | [**string[]**](../Model/string.md)| Category ids to filter results. | [optional] |
| **phrase** | [**string[]**](../Model/string.md)| The search phrase. The phrase is searched in name, brands, model, gtin, manufacturer code. | [optional] |
| **brand** | [**string[]**](../Model/string.md)| Brand names to filter results. | [optional] |
| **gtin** | [**string[]**](../Model/string.md)| Gtins to filter results. | [optional] |
| **manufacturer_code** | [**string[]**](../Model/string.md)| Manufacturer codes to filter results. | [optional] |
| **hide_unnamed** | **bool**| Boolean value to hide unnamed products. | [optional] [default to false] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |
| **limit** | **int**| The limit of elements in the response. | [optional] [default to 100] |

### Return type

[**\AllegroApi\Model\GetSelectionInsightsResponse**](../Model/GetSelectionInsightsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.beta.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
