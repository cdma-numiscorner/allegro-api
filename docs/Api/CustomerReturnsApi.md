# AllegroApi\CustomerReturnsApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomerReturnById()**](CustomerReturnsApi.md#getCustomerReturnById) | **GET** /order/customer-returns/{customerReturnId} | [BETA] Get customer return by id |
| [**getCustomerReturns()**](CustomerReturnsApi.md#getCustomerReturns) | **GET** /order/customer-returns | [BETA] Get customer returns by provided query parameters |
| [**rejectCustomerReturnRefund()**](CustomerReturnsApi.md#rejectCustomerReturnRefund) | **POST** /order/customer-returns/{customerReturnId}/rejection | [BETA] Reject customer return refund |


## `getCustomerReturnById()`

```php
getCustomerReturnById($customer_return_id): \AllegroApi\Model\CustomerReturn
```

[BETA] Get customer return by id

Use this resource to get customer returns by its identifier. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-szczegolowe-informacje-o-zwrocie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-detailed-information-about-customer-return\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CustomerReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return_id = 'customer_return_id_example'; // string | Id of the customer return.

try {
    $result = $apiInstance->getCustomerReturnById($customer_return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->getCustomerReturnById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return_id** | **string**| Id of the customer return. | |

### Return type

[**\AllegroApi\Model\CustomerReturn**](../Model/CustomerReturn.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.beta.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerReturns()`

```php
getCustomerReturns($customer_return_id, $order_id, $items_offer_id, $items_name, $parcels_waybill, $parcels_carrier_id, $parcels_sender_phone_number, $reference_number, $from, $created_at_gte, $created_at_lte, $marketplace_id, $limit, $offset): \AllegroApi\Model\CustomerReturnResponse
```

[BETA] Get customer returns by provided query parameters

Use this resource to get all customer returns filtered by query parameters. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-liste-zwrotow\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-customer-returns-list\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CustomerReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return_id = 'customer_return_id_example'; // string | One or more customer return id's.
$order_id = 'order_id_example'; // string | One or more order id's.
$items_offer_id = 'items_offer_id_example'; // string | One or more returned item offer id's.
$items_name = 'items_name_example'; // string | One or more item names.
$parcels_waybill = 'parcels_waybill_example'; // string | One or more waybill id's.
$parcels_carrier_id = 'parcels_carrier_id_example'; // string | One or more carrier id's.
$parcels_sender_phone_number = 'parcels_sender_phone_number_example'; // string | One or more phone numbers.
$reference_number = 'reference_number_example'; // string | One or more reference numbers.
$from = 'from_example'; // string | The ID of the last seen customer return. Customer returns created after the given customer return will be returned.
$created_at_gte = 'created_at_gte_example'; // string | Date of the return in ISO 8601 format to search by greater or equal.
$created_at_lte = 'created_at_lte_example'; // string | Date of the return in ISO 8601 format to search by lower or equal.
$marketplace_id = 'marketplace_id_example'; // string | The marketplace ID where operation was made. When the parameter is omitted, searches for operations with all marketplaces.
$limit = 100; // int | Limit of customer returns per page.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getCustomerReturns($customer_return_id, $order_id, $items_offer_id, $items_name, $parcels_waybill, $parcels_carrier_id, $parcels_sender_phone_number, $reference_number, $from, $created_at_gte, $created_at_lte, $marketplace_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->getCustomerReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return_id** | **string**| One or more customer return id&#39;s. | [optional] |
| **order_id** | **string**| One or more order id&#39;s. | [optional] |
| **items_offer_id** | **string**| One or more returned item offer id&#39;s. | [optional] |
| **items_name** | **string**| One or more item names. | [optional] |
| **parcels_waybill** | **string**| One or more waybill id&#39;s. | [optional] |
| **parcels_carrier_id** | **string**| One or more carrier id&#39;s. | [optional] |
| **parcels_sender_phone_number** | **string**| One or more phone numbers. | [optional] |
| **reference_number** | **string**| One or more reference numbers. | [optional] |
| **from** | **string**| The ID of the last seen customer return. Customer returns created after the given customer return will be returned. | [optional] |
| **created_at_gte** | **string**| Date of the return in ISO 8601 format to search by greater or equal. | [optional] |
| **created_at_lte** | **string**| Date of the return in ISO 8601 format to search by lower or equal. | [optional] |
| **marketplace_id** | **string**| The marketplace ID where operation was made. When the parameter is omitted, searches for operations with all marketplaces. | [optional] |
| **limit** | **int**| Limit of customer returns per page. | [optional] [default to 100] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |

### Return type

[**\AllegroApi\Model\CustomerReturnResponse**](../Model/CustomerReturnResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.beta.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectCustomerReturnRefund()`

```php
rejectCustomerReturnRefund($customer_return_id, $customer_return_refund_rejection_request): \AllegroApi\Model\CustomerReturn
```

[BETA] Reject customer return refund

Use this resource to reject customer return refund with provided reason. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-odmowic-zwrotu-wplaty\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#how-to-reject-customer-return-refund\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CustomerReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return_id = 'customer_return_id_example'; // string | Id of the customer return.
$customer_return_refund_rejection_request = new \AllegroApi\Model\CustomerReturnRefundRejectionRequest(); // \AllegroApi\Model\CustomerReturnRefundRejectionRequest

try {
    $result = $apiInstance->rejectCustomerReturnRefund($customer_return_id, $customer_return_refund_rejection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->rejectCustomerReturnRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return_id** | **string**| Id of the customer return. | |
| **customer_return_refund_rejection_request** | [**\AllegroApi\Model\CustomerReturnRefundRejectionRequest**](../Model/CustomerReturnRefundRejectionRequest.md)|  | |

### Return type

[**\AllegroApi\Model\CustomerReturn**](../Model/CustomerReturn.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.beta.v1+json`
- **Accept**: `application/vnd.allegro.beta.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
