# AllegroApi\CategoriesAndParametersApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**categorySuggestionUsingGET()**](CategoriesAndParametersApi.md#categorySuggestionUsingGET) | **GET** /sale/matching-categories | Get categories suggestions |
| [**getCategoriesUsingGET()**](CategoriesAndParametersApi.md#getCategoriesUsingGET) | **GET** /sale/categories | Get IDs of Allegro categories |
| [**getCategoryEventsUsingGET1()**](CategoriesAndParametersApi.md#getCategoryEventsUsingGET1) | **GET** /sale/category-events | Get changes in categories |
| [**getCategoryParametersScheduledChangesUsingGET1()**](CategoriesAndParametersApi.md#getCategoryParametersScheduledChangesUsingGET1) | **GET** /sale/category-parameters-scheduled-changes | Get planned changes in category parameters |
| [**getCategoryUsingGET1()**](CategoriesAndParametersApi.md#getCategoryUsingGET1) | **GET** /sale/categories/{categoryId} | Get a category by ID |
| [**getFlatParametersUsingGET2()**](CategoriesAndParametersApi.md#getFlatParametersUsingGET2) | **GET** /sale/categories/{categoryId}/parameters | Get parameters supported by a category |


## `categorySuggestionUsingGET()`

```php
categorySuggestionUsingGET($name): \AllegroApi\Model\CategorySuggestionResponse
```

Get categories suggestions

Use this resource to receive suggested categories for given phrase. Read more: <a href=\"../../news/udostepnilismy-nowy-zasob-dzieki-ktoremu-sprawdzisz-sugerowane-kategorie-dla-podanej-frazy-4RAl9jwX1FW\" target=\"_blank\">PL</a> / <a href=\"../../news/we-have-introduced-a-new-resource-that-allows-you-to-retrieve-the-suggested-categories-for-the-given-phrase-v8Wdy1EOyF0\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CategoriesAndParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = bmw x3; // string | Product name for which you want to get suggested categories.

try {
    $result = $apiInstance->categorySuggestionUsingGET($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesAndParametersApi->categorySuggestionUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Product name for which you want to get suggested categories. | |

### Return type

[**\AllegroApi\Model\CategorySuggestionResponse**](../Model/CategorySuggestionResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoriesUsingGET()`

```php
getCategoriesUsingGET($parent_id): \AllegroApi\Model\CategoriesDto
```

Get IDs of Allegro categories

Use this resource to traverse the Allegro categories tree. It returns the list of the given category's children or a list of the main Allegro categories. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#uzupelnij-kategorie-i-parametry\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#provide-category-and-parameters\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CategoriesAndParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = '954b95b6-43cf-4104-8354-dea4d9b10ddf'; // string | The ID of the category which children should be returned. If omitted, the list of main Allegro categories will be returned.

try {
    $result = $apiInstance->getCategoriesUsingGET($parent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesAndParametersApi->getCategoriesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent_id** | **string**| The ID of the category which children should be returned. If omitted, the list of main Allegro categories will be returned. | [optional] [default to &#39;954b95b6-43cf-4104-8354-dea4d9b10ddf&#39;] |

### Return type

[**\AllegroApi\Model\CategoriesDto**](../Model/CategoriesDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user), [bearer-token-for-application](../../README.md#bearer-token-for-application)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryEventsUsingGET1()`

```php
getCategoryEventsUsingGET1($from, $limit, $type): \AllegroApi\Model\CategoryEventsResponse
```

Get changes in categories

Use this resource to get information about changes in categories. It returns changes that occurred in the last 3 months. At present we support the following changes:   - CATEGORY_CREATED - new category was created.   - CATEGORY_RENAMED - category name has been changed.   - CATEGORY_MOVED - category has been moved to a different place in category tree, category parent id field is changed.   - CATEGORY_DELETED - category is no longer available, category from redirectCategory field should be used instead.    Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#dziennik-zmian-w-kategoriach\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#event-journal-in-categories\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CategoriesAndParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = MTEzMjQzODU3NA; // string | The ID of the last seen event. Changes that occurred after the given event will be returned.
$limit = 100; // int | The number of events that will be returned in the response.
$type = array('type_example'); // string[] | The types of events that will be returned in the response. All types of events are returned by default.

try {
    $result = $apiInstance->getCategoryEventsUsingGET1($from, $limit, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesAndParametersApi->getCategoryEventsUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| The ID of the last seen event. Changes that occurred after the given event will be returned. | [optional] |
| **limit** | **int**| The number of events that will be returned in the response. | [optional] [default to 100] |
| **type** | [**string[]**](../Model/string.md)| The types of events that will be returned in the response. All types of events are returned by default. | [optional] |

### Return type

[**\AllegroApi\Model\CategoryEventsResponse**](../Model/CategoryEventsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user), [bearer-token-for-application](../../README.md#bearer-token-for-application)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryParametersScheduledChangesUsingGET1()`

```php
getCategoryParametersScheduledChangesUsingGET1($scheduled_for_gte, $scheduled_for_lte, $scheduled_at_gte, $scheduled_at_lte, $type, $offset, $limit): \AllegroApi\Model\CategoryParametersScheduledChangesResponse
```

Get planned changes in category parameters

Use this resource to get information about planned changes in category parameters. Please note that in some cases, the returned events may finally not happen in the future. At present we support the following changes: - REQUIREMENT_CHANGE - the parameter will be required in the category. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-przyszle-zmiany-w-parametrach\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-future-changes-in-parameters\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CategoriesAndParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduled_for_gte = 2020-11-13T12:45:20.818Z; // \DateTime | The minimum date and time from which the change will be effective from in ISO 8601 format. Should be greater than the current date time and less than 3 months from the current date.
$scheduled_for_lte = 2020-11-13T12:45:20.818Z; // \DateTime | The maximum date and time from which the change will be effective from in ISO 8601 format. Should be greater than the current date time and less than 3 months from the current date.
$scheduled_at_gte = 2020-11-13T12:45:20.818Z; // \DateTime | The minimum date and time at which the change was scheduled in ISO 8601 format.
$scheduled_at_lte = 2020-11-13T12:45:20.818Z; // \DateTime | The maximum date and time at which the change was scheduled in ISO 8601 format.
$type = array('type_example'); // string[] | The types of changes that will be returned in the response. All types of changes are returned by default.
$offset = 0; // int | The offset of elements in the response.
$limit = 100; // int | The limit of elements in the response.

try {
    $result = $apiInstance->getCategoryParametersScheduledChangesUsingGET1($scheduled_for_gte, $scheduled_for_lte, $scheduled_at_gte, $scheduled_at_lte, $type, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesAndParametersApi->getCategoryParametersScheduledChangesUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scheduled_for_gte** | **\DateTime**| The minimum date and time from which the change will be effective from in ISO 8601 format. Should be greater than the current date time and less than 3 months from the current date. | [optional] |
| **scheduled_for_lte** | **\DateTime**| The maximum date and time from which the change will be effective from in ISO 8601 format. Should be greater than the current date time and less than 3 months from the current date. | [optional] |
| **scheduled_at_gte** | **\DateTime**| The minimum date and time at which the change was scheduled in ISO 8601 format. | [optional] |
| **scheduled_at_lte** | **\DateTime**| The maximum date and time at which the change was scheduled in ISO 8601 format. | [optional] |
| **type** | [**string[]**](../Model/string.md)| The types of changes that will be returned in the response. All types of changes are returned by default. | [optional] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |
| **limit** | **int**| The limit of elements in the response. | [optional] [default to 100] |

### Return type

[**\AllegroApi\Model\CategoryParametersScheduledChangesResponse**](../Model/CategoryParametersScheduledChangesResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user), [bearer-token-for-application](../../README.md#bearer-token-for-application)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryUsingGET1()`

```php
getCategoryUsingGET1($category_id): \AllegroApi\Model\CategoryDto
```

Get a category by ID

Use this resource to get the details of a specific category. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-utworzyc-nowy-produkt\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-create-a-product\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CategoriesAndParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 6061; // string | The category ID.

try {
    $result = $apiInstance->getCategoryUsingGET1($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesAndParametersApi->getCategoryUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| The category ID. | |

### Return type

[**\AllegroApi\Model\CategoryDto**](../Model/CategoryDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user), [bearer-token-for-application](../../README.md#bearer-token-for-application)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlatParametersUsingGET2()`

```php
getFlatParametersUsingGET2($category_id): \AllegroApi\Model\CategoryParameterList
```

Get parameters supported by a category

Use this resource to get the list of parameters that are supported by the given category. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#parametry-ofertowe\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-parameters\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CategoriesAndParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 709; // string | The category ID.

try {
    $result = $apiInstance->getFlatParametersUsingGET2($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesAndParametersApi->getFlatParametersUsingGET2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| The category ID. | |

### Return type

[**\AllegroApi\Model\CategoryParameterList**](../Model/CategoryParameterList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user), [bearer-token-for-application](../../README.md#bearer-token-for-application)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
