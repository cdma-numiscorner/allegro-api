# AllegroApi\SizeTablesApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTableUsingPOST()**](SizeTablesApi.md#createTableUsingPOST) | **POST** /sale/size-tables | Create a size table |
| [**getTableUsingGET()**](SizeTablesApi.md#getTableUsingGET) | **GET** /sale/size-tables/{tableId} | Get a size table |
| [**getTablesTemplatesUsingGET()**](SizeTablesApi.md#getTablesTemplatesUsingGET) | **GET** /sale/size-tables-templates | Get the size tables templates |
| [**getTablesUsingGET()**](SizeTablesApi.md#getTablesUsingGET) | **GET** /sale/size-tables | Get the user&#39;s size tables |
| [**modifyTableUsingPUT()**](SizeTablesApi.md#modifyTableUsingPUT) | **PUT** /sale/size-tables/{tableId} | Update a size table |


## `createTableUsingPOST()`

```php
createTableUsingPOST($size_table_post_request): \AllegroApi\Model\PublicTableDto
```

Create a size table

Use this resource to create size table. Read more: <a href=\"../../news/tabele-rozmiarow-zmieniamy-istniejacy-zasob-i-dodajemy-nowe-zasoby-do-ich-obslugi-k1nyd21A4fP\" target=\"_blank\">PL</a> / <a href=\"../../news/size-tables-we-change-the-existing-resource-and-add-new-resources-to-handle-them-jn91bynlbC9\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$size_table_post_request = new \AllegroApi\Model\SizeTablePostRequest(); // \AllegroApi\Model\SizeTablePostRequest | Size table details

try {
    $result = $apiInstance->createTableUsingPOST($size_table_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->createTableUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **size_table_post_request** | [**\AllegroApi\Model\SizeTablePostRequest**](../Model/SizeTablePostRequest.md)| Size table details | |

### Return type

[**\AllegroApi\Model\PublicTableDto**](../Model/PublicTableDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTableUsingGET()`

```php
getTableUsingGET($table_id): \AllegroApi\Model\PublicTableDto
```

Get a size table

Use this resource to get selected size table. Read more: <a href=\"../../news/tabele-rozmiarow-w-rest-api-LRV05q2dGtV\" target=\"_blank\">PL</a> / <a href=\"../../news/size-tables-in-rest-api-D7KP4DE1BH3\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table_id = 'table_id_example'; // string | Table identifier.

try {
    $result = $apiInstance->getTableUsingGET($table_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->getTableUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table_id** | **string**| Table identifier. | |

### Return type

[**\AllegroApi\Model\PublicTableDto**](../Model/PublicTableDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTablesTemplatesUsingGET()`

```php
getTablesTemplatesUsingGET(): \AllegroApi\Model\SizeTableTemplatesResponse
```

Get the size tables templates

Use this resource to get all size tables templates. Read more: <a href=\"../../news/tabele-rozmiarow-zmieniamy-istniejacy-zasob-i-dodajemy-nowe-zasoby-do-ich-obslugi-k1nyd21A4fP\" target=\"_blank\">PL</a> / <a href=\"../../news/size-tables-we-change-the-existing-resource-and-add-new-resources-to-handle-them-jn91bynlbC9\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTablesTemplatesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->getTablesTemplatesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\SizeTableTemplatesResponse**](../Model/SizeTableTemplatesResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTablesUsingGET()`

```php
getTablesUsingGET(): \AllegroApi\Model\PublicTablesDto
```

Get the user's size tables

Use this resource to get all size tables assigned to a seller account. Read more: <a href=\"../../news/tabele-rozmiarow-w-rest-api-LRV05q2dGtV\" target=\"_blank\">PL</a> / <a href=\"../../news/size-tables-in-rest-api-D7KP4DE1BH3\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTablesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->getTablesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\PublicTablesDto**](../Model/PublicTablesDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyTableUsingPUT()`

```php
modifyTableUsingPUT($table_id, $size_table_put_request): \AllegroApi\Model\PublicTableDto
```

Update a size table

Use this resource to update selected size table. Read more: <a href=\"../../news/tabele-rozmiarow-zmieniamy-istniejacy-zasob-i-dodajemy-nowe-zasoby-do-ich-obslugi-k1nyd21A4fP\" target=\"_blank\">PL</a> / <a href=\"../../news/size-tables-we-change-the-existing-resource-and-add-new-resources-to-handle-them-jn91bynlbC9\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table_id = 'table_id_example'; // string | Table identifier.
$size_table_put_request = new \AllegroApi\Model\SizeTablePutRequest(); // \AllegroApi\Model\SizeTablePutRequest | Size table details

try {
    $result = $apiInstance->modifyTableUsingPUT($table_id, $size_table_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->modifyTableUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table_id** | **string**| Table identifier. | |
| **size_table_put_request** | [**\AllegroApi\Model\SizeTablePutRequest**](../Model/SizeTablePutRequest.md)| Size table details | |

### Return type

[**\AllegroApi\Model\PublicTableDto**](../Model/PublicTableDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
