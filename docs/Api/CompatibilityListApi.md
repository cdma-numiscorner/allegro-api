# AllegroApi\CompatibilityListApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCategoriesThatSupportCompatibilityList()**](CompatibilityListApi.md#getCategoriesThatSupportCompatibilityList) | **GET** /sale/compatibility-list/supported-categories | Get list of categories where compatibility list is supported |
| [**getCompatibilityListSuggestion()**](CompatibilityListApi.md#getCompatibilityListSuggestion) | **GET** /sale/compatibility-list-suggestions | Get suggested compatibility list. |
| [**getCompatibleProducts()**](CompatibilityListApi.md#getCompatibleProducts) | **GET** /sale/compatible-products | Get list of compatible products |
| [**getCompatibleProductsGroups()**](CompatibilityListApi.md#getCompatibleProductsGroups) | **GET** /sale/compatible-products/groups | Get list of compatible product groups |


## `getCategoriesThatSupportCompatibilityList()`

```php
getCategoriesThatSupportCompatibilityList(): \AllegroApi\Model\CompatibilityListSupportedCategoriesDto
```

Get list of categories where compatibility list is supported

Compatibility list is available in particular categories, this resource allows to get the list of these categories with additional details. Read more: <a href=\"../../tutorials/jak-zarzadzac-sekcja-pasuje-do-E7Zj6gAEGil#jak-sprawdzic-czy-w-danej-kategorii-moge-dodac-sekcje-pasuje-do-do-oferty\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-compatibility-section-v8WbL1wV0Hz#which-categories-support-compatibility-section\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CompatibilityListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCategoriesThatSupportCompatibilityList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompatibilityListApi->getCategoriesThatSupportCompatibilityList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\CompatibilityListSupportedCategoriesDto**](../Model/CompatibilityListSupportedCategoriesDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompatibilityListSuggestion()`

```php
getCompatibilityListSuggestion($offer_id, $product_id, $language): \AllegroApi\Model\CompatibilityList
```

Get suggested compatibility list.

Resource allows to fetch compatibility list suggestion for given offer or product. Read more: <a href=\"../../tutorials/jak-zarzadzac-sekcja-pasuje-do-E7Zj6gAEGil#jak-wyszukac-sugerowana-sekcje-compatibilitylist\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-compatibility-section-v8WbL1wV0Hz#how-to-search-for-the-suggested-compatibility-section\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CompatibilityListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer id on the basis of which we will return the suggested compatibility list.
$product_id = 'product_id_example'; // string | Product id on the basis of which we will return the suggested compatibility list.
$language = pl-PL; // string | Locale on the basis of which we will return the suggested compatibility list. For product-based suggestions if missing pl-PL will be used. For offer-based suggestions if missing offer language will be used.

try {
    $result = $apiInstance->getCompatibilityListSuggestion($offer_id, $product_id, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompatibilityListApi->getCompatibilityListSuggestion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| Offer id on the basis of which we will return the suggested compatibility list. | [optional] |
| **product_id** | **string**| Product id on the basis of which we will return the suggested compatibility list. | [optional] |
| **language** | **string**| Locale on the basis of which we will return the suggested compatibility list. For product-based suggestions if missing pl-PL will be used. For offer-based suggestions if missing offer language will be used. | [optional] |

### Return type

[**\AllegroApi\Model\CompatibilityList**](../Model/CompatibilityList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompatibleProducts()`

```php
getCompatibleProducts($type, $if_modified_since, $group_id, $tecdoc_k_typ_nr, $tecdoc_n_typ_nr, $phrase, $limit, $offset): \AllegroApi\Model\CompatibleProductsListDto
```

Get list of compatible products

Resource allows to fetch compatible products of given type. Read more: <a href=\"../../tutorials/jak-zarzadzac-sekcja-pasuje-do-E7Zj6gAEGil#jak-zarzadzac-sekcja-pasuje-do-zintegrowana-z-baza-pojazdow\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-compatibility-section-v8WbL1wV0Hz#managing-the-compatibility-section-compatibilitylist-integrated-vehicle-database\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CompatibilityListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = CAR; // string | Type of compatible products. You can find available types in the response for the GET <a href=\"/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get\">supported-categories</a> resource. You can use value provided in `itemsType`, for categories where `inputType=ID`.
$if_modified_since = Sat, 01 Dec 2018 10:00:00 GMT; // string | Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Header is ignored if `phrase` parameter is used.
$group_id = 'group_id_example'; // string | Group identifier from `/sale/compatible-products/groups` resource. Parameter is required when parameter `tecdoc.kTypNr` or `tecdoc.nTypNr` or `phrase` is not specified.
$tecdoc_k_typ_nr = 'tecdoc_k_typ_nr_example'; // string | Identifier of passenger vehicle (kTypNr) from TecDoc database. When used, `group.id` parameter is ignored.
$tecdoc_n_typ_nr = 'tecdoc_n_typ_nr_example'; // string | Identifier of commercial vehicle (nTypNr) from TecDoc database. When used, `group.id` parameter is ignored.
$phrase = 'phrase_example'; // string | Query for compatible products. When used, parameters: `group.id`, `limit`, `offset` and header `If-Modified-Since` are ignored.
$limit = 200; // int | The limit of returned items. If `phrase` parameter is present, parameter is ignored and maximum value is set to `200`.
$offset = 0; // int | The offset of returned items. If `phrase` parameter is present, parameter is ignored.

try {
    $result = $apiInstance->getCompatibleProducts($type, $if_modified_since, $group_id, $tecdoc_k_typ_nr, $tecdoc_n_typ_nr, $phrase, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompatibilityListApi->getCompatibleProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Type of compatible products. You can find available types in the response for the GET &lt;a href&#x3D;\&quot;/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get\&quot;&gt;supported-categories&lt;/a&gt; resource. You can use value provided in &#x60;itemsType&#x60;, for categories where &#x60;inputType&#x3D;ID&#x60;. | |
| **if_modified_since** | **string**| Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Header is ignored if &#x60;phrase&#x60; parameter is used. | [optional] |
| **group_id** | **string**| Group identifier from &#x60;/sale/compatible-products/groups&#x60; resource. Parameter is required when parameter &#x60;tecdoc.kTypNr&#x60; or &#x60;tecdoc.nTypNr&#x60; or &#x60;phrase&#x60; is not specified. | [optional] |
| **tecdoc_k_typ_nr** | **string**| Identifier of passenger vehicle (kTypNr) from TecDoc database. When used, &#x60;group.id&#x60; parameter is ignored. | [optional] |
| **tecdoc_n_typ_nr** | **string**| Identifier of commercial vehicle (nTypNr) from TecDoc database. When used, &#x60;group.id&#x60; parameter is ignored. | [optional] |
| **phrase** | **string**| Query for compatible products. When used, parameters: &#x60;group.id&#x60;, &#x60;limit&#x60;, &#x60;offset&#x60; and header &#x60;If-Modified-Since&#x60; are ignored. | [optional] |
| **limit** | **int**| The limit of returned items. If &#x60;phrase&#x60; parameter is present, parameter is ignored and maximum value is set to &#x60;200&#x60;. | [optional] [default to 200] |
| **offset** | **int**| The offset of returned items. If &#x60;phrase&#x60; parameter is present, parameter is ignored. | [optional] [default to 0] |

### Return type

[**\AllegroApi\Model\CompatibleProductsListDto**](../Model/CompatibleProductsListDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompatibleProductsGroups()`

```php
getCompatibleProductsGroups($type, $if_modified_since, $limit, $offset): \AllegroApi\Model\CompatibleProductsGroupsDto
```

Get list of compatible product groups

Compatible products are organized in groups, this resource allows to browse these groups. Read more: <a href=\"../../tutorials/jak-zarzadzac-sekcja-pasuje-do-E7Zj6gAEGil#jak-zarzadzac-sekcja-pasuje-do-zintegrowana-z-baza-pojazdow\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-compatibility-section-v8WbL1wV0Hz#managing-the-compatibility-section-compatibilitylist-integrated-vehicle-database\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CompatibilityListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = CAR; // string | Type of compatible products. You can find available types in the response for the GET <a href=\"/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get\">supported-categories</a> resource. You can use value provided in `itemsType`, for categories where `inputType=ID`.
$if_modified_since = Sat, 01 Dec 2018 10:00:00 GMT; // string | Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format.
$limit = 200; // int | The limit of returned items.
$offset = 0; // int | The offset of returned items.

try {
    $result = $apiInstance->getCompatibleProductsGroups($type, $if_modified_since, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompatibilityListApi->getCompatibleProductsGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Type of compatible products. You can find available types in the response for the GET &lt;a href&#x3D;\&quot;/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get\&quot;&gt;supported-categories&lt;/a&gt; resource. You can use value provided in &#x60;itemsType&#x60;, for categories where &#x60;inputType&#x3D;ID&#x60;. | |
| **if_modified_since** | **string**| Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. | [optional] |
| **limit** | **int**| The limit of returned items. | [optional] [default to 200] |
| **offset** | **int**| The offset of returned items. | [optional] [default to 0] |

### Return type

[**\AllegroApi\Model\CompatibleProductsGroupsDto**](../Model/CompatibleProductsGroupsDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
