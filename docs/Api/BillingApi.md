# AllegroApi\BillingApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBillingEntries()**](BillingApi.md#getBillingEntries) | **GET** /billing/billing-entries | Get a list of billing entries |
| [**getBillingTypes()**](BillingApi.md#getBillingTypes) | **GET** /billing/billing-types | Get a list of billing types |


## `getBillingEntries()`

```php
getBillingEntries($marketplace_id, $occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $order_id, $limit, $offset): \AllegroApi\Model\BillingEntries
```

Get a list of billing entries

The billing entries are sorted in a descending order (newest first) by date on which they occurred. Read more: <a href=\"../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#historia-operacji-billingowych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-check-the-fees-3An6Wame3Um#billing-operations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = allegro-pl; // string | The marketplace ID where operation was made. By default the marketplace ID where the user is registered.
$occurred_at_gte = 2019-05-08T09:45:32.818Z; // \DateTime | Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later.
$occurred_at_lte = 2019-05-08T09:45:32.818Z; // \DateTime | Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier.
$type_id = type.id=LIS&type.id=SUC; // string[] | List of billing types by which billing entries are filtered.
$offer_id = 12345; // string | Offer ID by which billing entries are filtered.
$order_id = 29738e61-7f6a-11e8-ac45-09db60ede9d6; // string | Order UUID by which billing entries are filtered.
$limit = 10; // int | Number of returned operations.
$offset = 10; // int | Index of the first returned payment operation from all search results.

try {
    $result = $apiInstance->getBillingEntries($marketplace_id, $occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $order_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplace_id** | **string**| The marketplace ID where operation was made. By default the marketplace ID where the user is registered. | [optional] |
| **occurred_at_gte** | **\DateTime**| Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. | [optional] |
| **occurred_at_lte** | **\DateTime**| Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. | [optional] |
| **type_id** | [**string[]**](../Model/string.md)| List of billing types by which billing entries are filtered. | [optional] |
| **offer_id** | **string**| Offer ID by which billing entries are filtered. | [optional] |
| **order_id** | **string**| Order UUID by which billing entries are filtered. | [optional] |
| **limit** | **int**| Number of returned operations. | [optional] [default to 100] |
| **offset** | **int**| Index of the first returned payment operation from all search results. | [optional] [default to 0] |

### Return type

[**\AllegroApi\Model\BillingEntries**](../Model/BillingEntries.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillingTypes()`

```php
getBillingTypes($accept_language): \AllegroApi\Model\BillingType[]
```

Get a list of billing types

List of all billing types. Type names are localized according to \"Accept-Language\" header. Read more: <a href=\"../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#historia-operacji-billingowych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-check-the-fees-3An6Wame3Um#billing-operations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = pl-PL; // string | Expected language of name translations.

try {
    $result = $apiInstance->getBillingTypes($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| Expected language of name translations. | [optional] |

### Return type

[**\AllegroApi\Model\BillingType[]**](../Model/BillingType.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user), [bearer-token-for-application](../../README.md#bearer-token-for-application)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
