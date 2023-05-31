# AllegroApi\ProductsApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFlatProductParametersUsingGET()**](ProductsApi.md#getFlatProductParametersUsingGET) | **GET** /sale/categories/{categoryId}/product-parameters | Get product parameters available in given category |
| [**getProductChangeProposal()**](ProductsApi.md#getProductChangeProposal) | **GET** /sale/products/change-proposals/{changeProposalId} | Get all data of the particular product changes proposal |
| [**getSaleProduct()**](ProductsApi.md#getSaleProduct) | **GET** /sale/products/{productId} | Get all data of the particular product |
| [**getSaleProducts()**](ProductsApi.md#getSaleProducts) | **GET** /sale/products | Get search products results |
| [**productChangeProposal()**](ProductsApi.md#productChangeProposal) | **POST** /sale/products/{productId}/change-proposals | Propose changes in product |
| [**proposeSaleProduct()**](ProductsApi.md#proposeSaleProduct) | **POST** /sale/product-proposals | Propose a product |


## `getFlatProductParametersUsingGET()`

```php
getFlatProductParametersUsingGET($category_id): \AllegroApi\Model\CategoryProductParameterList
```

Get product parameters available in given category

Use this resource to get the list of product parameters available in given category. You can use these parameters to create a new product. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-utworzyc-nowy-produkt\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-create-a-product\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 709; // string | The category ID.

try {
    $result = $apiInstance->getFlatProductParametersUsingGET($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getFlatProductParametersUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| The category ID. | |

### Return type

[**\AllegroApi\Model\CategoryProductParameterList**](../Model/CategoryProductParameterList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user), [bearer-token-for-application](../../README.md#bearer-token-for-application)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductChangeProposal()`

```php
getProductChangeProposal($change_proposal_id): \AllegroApi\Model\ProductChangeProposalDto
```

Get all data of the particular product changes proposal

Use this resource to retrieve all data of the particular product changes proposal. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-zglosic-blad-w-produkcie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-report-incorrect-data-in-a-product\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_proposal_id = 'change_proposal_id_example'; // string | The product changes proposal identifier.

try {
    $result = $apiInstance->getProductChangeProposal($change_proposal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductChangeProposal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_proposal_id** | **string**| The product changes proposal identifier. | |

### Return type

[**\AllegroApi\Model\ProductChangeProposalDto**](../Model/ProductChangeProposalDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSaleProduct()`

```php
getSaleProduct($product_id, $category_id, $include_drafts, $language): \AllegroApi\Model\SaleProductDto
```

Get all data of the particular product

Use this resource to retrieve all data of the particular product. Read more: <a href=\"../../tutorials/wystawianie-oferty-z-produktem-new-E7ggykoBEf0#jak-pobrac-pelne-dane-o-produkcie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-retrieve-product-data\" target=\"_blank\">EN</a>. This resource is limited with <a href=\"../../tutorials/basic-information-VL6YelvVKTn#limiting-the-number-of-queries-limits\" target=\"_blank\">Leaky Bucket</a> mechanism.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | The product identifier.
$category_id = 'category_id_example'; // string | The similar category identifier. You can choose a category from 'similar categories' to filter the list of parameters available in the category context.
$include_drafts = True; // bool | Return also if product is in draft state.
$language = en-US; // string | The language version of product. You can indicate the language for the returned product data. At present we support: \"pl-PL\", \"cs-CZ\", \"en-US\" and \"uk-UA\".

try {
    $result = $apiInstance->getSaleProduct($product_id, $category_id, $include_drafts, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getSaleProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| The product identifier. | |
| **category_id** | **string**| The similar category identifier. You can choose a category from &#39;similar categories&#39; to filter the list of parameters available in the category context. | [optional] |
| **include_drafts** | **bool**| Return also if product is in draft state. | [optional] |
| **language** | **string**| The language version of product. You can indicate the language for the returned product data. At present we support: \&quot;pl-PL\&quot;, \&quot;cs-CZ\&quot;, \&quot;en-US\&quot; and \&quot;uk-UA\&quot;. | [optional] |

### Return type

[**\AllegroApi\Model\SaleProductDto**](../Model/SaleProductDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSaleProducts()`

```php
getSaleProducts($ean, $phrase, $mode, $language, $category_id, $dynamic_filters, $page_id, $search_features, $include_drafts): \AllegroApi\Model\GetSaleProductsResponse
```

Get search products results

Use this resource to get a list of products according to provided parameters. At least ean or phrase parameter is required. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-znalezc-produkt\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-find-a-product\" target=\"_blank\">EN</a>. This resource is limited with <a href=\"../../tutorials/basic-information-VL6YelvVKTn#limiting-the-number-of-queries-limits\" target=\"_blank\">Leaky Bucket</a> mechanism.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = 'ean_example'; // string | The EAN values can include EAN, ISBN, and UPC identifier types. Parameter is depracated and will be removed in the future. Please use combination of phrase and mode (`GTIN`) parameters instead.
$phrase = 'phrase_example'; // string | Search phrase.
$mode = 'mode_example'; // string | Search mode. If not specified, we are searching by GTIN, MPN, product's name, parameters, etc.  - `GTIN` - restricts the search filtering to GTINs (Global Trade Item Number), e.g. EAN, ISBN, UPC.  - `MPN` - restricts the search filtering to MPNs (Manufacturer Part Number).
$language = en-US; // string | Language indicates the language for searching products. Allows to specify the language of the given phrase. At present we support: \"pl-PL\" and \"cs-CZ\".
$category_id = 'category_id_example'; // string | The category identifier to filter results. This can only be used when searching by phrase.
$dynamic_filters = array('key' => 'dynamic_filters_example'); // array<string,string> | You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id=value. When the filter definition looks like:   ````   {     \"id\": \"127448\",     \"name\": \"Kolor\",     \"type\": \"SINGLE\",     \"values\": [       {         \"name\": \"biały\",         \"value\": \"2\"       },       {         \"name\": \"czarny\",         \"value\": \"1\" }     ]   }   ```` You can use 'Kolor' filter to query results, i.e.:   * `127448=2` for \"biały\"   * `127448=1` for \"czarny\".
$page_id = 'page_id_example'; // string | A \"cursor\" to the next set of results.
$search_features = 'search_features_example'; // string | Enables additional search options: - *SIMILAR_CATEGORIES* - searching in the indicated category (category.id) and in 'similar categories' (works only if category.id is a leaf category).
$include_drafts = True; // bool | Include products in draft state.

try {
    $result = $apiInstance->getSaleProducts($ean, $phrase, $mode, $language, $category_id, $dynamic_filters, $page_id, $search_features, $include_drafts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getSaleProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ean** | **string**| The EAN values can include EAN, ISBN, and UPC identifier types. Parameter is depracated and will be removed in the future. Please use combination of phrase and mode (&#x60;GTIN&#x60;) parameters instead. | [optional] |
| **phrase** | **string**| Search phrase. | [optional] |
| **mode** | **string**| Search mode. If not specified, we are searching by GTIN, MPN, product&#39;s name, parameters, etc.  - &#x60;GTIN&#x60; - restricts the search filtering to GTINs (Global Trade Item Number), e.g. EAN, ISBN, UPC.  - &#x60;MPN&#x60; - restricts the search filtering to MPNs (Manufacturer Part Number). | [optional] |
| **language** | **string**| Language indicates the language for searching products. Allows to specify the language of the given phrase. At present we support: \&quot;pl-PL\&quot; and \&quot;cs-CZ\&quot;. | [optional] |
| **category_id** | **string**| The category identifier to filter results. This can only be used when searching by phrase. | [optional] |
| **dynamic_filters** | [**array<string,string>**](../Model/string.md)| You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id&#x3D;value. When the filter definition looks like:   &#x60;&#x60;&#x60;&#x60;   {     \&quot;id\&quot;: \&quot;127448\&quot;,     \&quot;name\&quot;: \&quot;Kolor\&quot;,     \&quot;type\&quot;: \&quot;SINGLE\&quot;,     \&quot;values\&quot;: [       {         \&quot;name\&quot;: \&quot;biały\&quot;,         \&quot;value\&quot;: \&quot;2\&quot;       },       {         \&quot;name\&quot;: \&quot;czarny\&quot;,         \&quot;value\&quot;: \&quot;1\&quot; }     ]   }   &#x60;&#x60;&#x60;&#x60; You can use &#39;Kolor&#39; filter to query results, i.e.:   * &#x60;127448&#x3D;2&#x60; for \&quot;biały\&quot;   * &#x60;127448&#x3D;1&#x60; for \&quot;czarny\&quot;. | [optional] |
| **page_id** | **string**| A \&quot;cursor\&quot; to the next set of results. | [optional] |
| **search_features** | **string**| Enables additional search options: - *SIMILAR_CATEGORIES* - searching in the indicated category (category.id) and in &#39;similar categories&#39; (works only if category.id is a leaf category). | [optional] |
| **include_drafts** | **bool**| Include products in draft state. | [optional] |

### Return type

[**\AllegroApi\Model\GetSaleProductsResponse**](../Model/GetSaleProductsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productChangeProposal()`

```php
productChangeProposal($product_id, $product_change_proposal_request): \AllegroApi\Model\ProductChangeProposalDto
```

Propose changes in product

Use this resource to propose changes in product. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-zglosic-blad-w-produkcie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-report-incorrect-data-in-a-product\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | The product identifier.
$product_change_proposal_request = new \AllegroApi\Model\ProductChangeProposalRequest(); // \AllegroApi\Model\ProductChangeProposalRequest

try {
    $result = $apiInstance->productChangeProposal($product_id, $product_change_proposal_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productChangeProposal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| The product identifier. | |
| **product_change_proposal_request** | [**\AllegroApi\Model\ProductChangeProposalRequest**](../Model/ProductChangeProposalRequest.md)|  | |

### Return type

[**\AllegroApi\Model\ProductChangeProposalDto**](../Model/ProductChangeProposalDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proposeSaleProduct()`

```php
proposeSaleProduct($product_proposals_request): \AllegroApi\Model\ProductProposalsResponse
```

Propose a product

Use this resource to propose a product. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-utworzyc-nowy-produkt\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-create-a-product\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_proposals_request = new \AllegroApi\Model\ProductProposalsRequest(); // \AllegroApi\Model\ProductProposalsRequest

try {
    $result = $apiInstance->proposeSaleProduct($product_proposals_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->proposeSaleProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_proposals_request** | [**\AllegroApi\Model\ProductProposalsRequest**](../Model/ProductProposalsRequest.md)|  | |

### Return type

[**\AllegroApi\Model\ProductProposalsResponse**](../Model/ProductProposalsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
