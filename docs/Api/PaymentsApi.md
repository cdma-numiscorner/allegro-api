# AllegroApi\PaymentsApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentsOperationHistory()**](PaymentsApi.md#getPaymentsOperationHistory) | **GET** /payments/payment-operations | Payment operations history
[**getRefundedPayments()**](PaymentsApi.md#getRefundedPayments) | **GET** /payments/refunds | Get a list of refunded payments
[**initiateRefund()**](PaymentsApi.md#initiateRefund) | **POST** /payments/refunds | Initiate a refund of a payment


## `getPaymentsOperationHistory()`

```php
getPaymentsOperationHistory($wallet_type, $wallet_payment_operator, $payment_id, $participant_login, $occurred_at_gte, $occurred_at_lte, $group, $marketplace_id, $currency, $limit, $offset): \AllegroApi\Model\PaymentOperations
```

Payment operations history

Use this endpoint to get the list of the seller payment operations. Read more: <a href=\"../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#historia-operacji-platniczych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-check-the-fees-3An6Wame3Um#payment-operations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_type = 'AVAILABLE'; // string | Type of the wallet: * AVAILABLE - operations available for payout. * WAITING - operations temporarily suspended for payout.
$wallet_payment_operator = 'wallet_payment_operator_example'; // string | Payment operator: * PAYU - operations processed by PAYU operator. * P24 - operations processed by PRZELEWY24 operator.
$payment_id = 'payment_id_example'; // string | The payment ID.
$participant_login = 'participant_login_example'; // string | Login of the participant. In case of REFUND_INCREASE operation this is the login of the seller, in other cases, of the buyer.
$occurred_at_gte = 2019-05-08T09:45:20.818Z; // \DateTime | The minimum date and time of operation occurrence in ISO 8601 format.
$occurred_at_lte = 2019-05-08T09:45:20.818Z; // \DateTime | The maximum date and time of operation occurrence in ISO 8601 format.
$group = array('group_example'); // string[] | Group of operation types: * INCOME - CONTRIBUTION, SURCHARGE, CORRECTION, DEDUCTION_INCREASE, COMPENSATION. * OUTCOME - PAYOUT, PAYOUT_CANCEL, DEDUCTION_CHARGE. * REFUND - REFUND_CHARGE, REFUND_CANCEL, REFUND_INCREASE, CORRECTION. * BLOCKADES - BLOCKADE, BLOCKADE_RELEASE.
$marketplace_id = allegro-pl; // string | The marketplace ID where operation was made. When the parameter is omitted, searches for operations with all marketplaces. Note, that there are operations not assigned to any marketplace.
$currency = PLN; // string | Currency of the operations.
$limit = 50; // int | Number of returned operations.
$offset = 0; // int | Index of the first returned payment operation from all search results.

try {
    $result = $apiInstance->getPaymentsOperationHistory($wallet_type, $wallet_payment_operator, $payment_id, $participant_login, $occurred_at_gte, $occurred_at_lte, $group, $marketplace_id, $currency, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentsOperationHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_type** | **string**| Type of the wallet: * AVAILABLE - operations available for payout. * WAITING - operations temporarily suspended for payout. | [optional] [default to &#39;AVAILABLE&#39;]
 **wallet_payment_operator** | **string**| Payment operator: * PAYU - operations processed by PAYU operator. * P24 - operations processed by PRZELEWY24 operator. | [optional]
 **payment_id** | [**string**](../Model/.md)| The payment ID. | [optional]
 **participant_login** | **string**| Login of the participant. In case of REFUND_INCREASE operation this is the login of the seller, in other cases, of the buyer. | [optional]
 **occurred_at_gte** | **\DateTime**| The minimum date and time of operation occurrence in ISO 8601 format. | [optional]
 **occurred_at_lte** | **\DateTime**| The maximum date and time of operation occurrence in ISO 8601 format. | [optional]
 **group** | [**string[]**](../Model/string.md)| Group of operation types: * INCOME - CONTRIBUTION, SURCHARGE, CORRECTION, DEDUCTION_INCREASE, COMPENSATION. * OUTCOME - PAYOUT, PAYOUT_CANCEL, DEDUCTION_CHARGE. * REFUND - REFUND_CHARGE, REFUND_CANCEL, REFUND_INCREASE, CORRECTION. * BLOCKADES - BLOCKADE, BLOCKADE_RELEASE. | [optional]
 **marketplace_id** | **string**| The marketplace ID where operation was made. When the parameter is omitted, searches for operations with all marketplaces. Note, that there are operations not assigned to any marketplace. | [optional]
 **currency** | **string**| Currency of the operations. | [optional]
 **limit** | **int**| Number of returned operations. | [optional] [default to 50]
 **offset** | **int**| Index of the first returned payment operation from all search results. | [optional] [default to 0]

### Return type

[**\AllegroApi\Model\PaymentOperations**](../Model/PaymentOperations.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRefundedPayments()`

```php
getRefundedPayments($limit, $offset, $id, $payment_id, $occurred_at_gte, $occurred_at_lte, $status): object
```

Get a list of refunded payments

Get a list of refunded payments. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-liste-zwrotow-platnosci\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-a-list-of-refunded-payment\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Number of returned operations.
$offset = 0; // int | Index of the first returned payment operation from all search results.
$id = 'id_example'; // string | ID of the refund.
$payment_id = 'payment_id_example'; // string | ID of the payment.
$occurred_at_gte = 2019-05-08T09:45:43.818Z; // \DateTime | Minimum date and time when the refund occurred provided in ISO 8601 format.
$occurred_at_lte = 2019-05-08T09:45:32.818Z; // \DateTime | Maximum date and time when the refund occurred provided in ISO 8601 format.
$status = array('status_example'); // string[] | Current status of payment refund.

try {
    $result = $apiInstance->getRefundedPayments($limit, $offset, $id, $payment_id, $occurred_at_gte, $occurred_at_lte, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getRefundedPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of returned operations. | [optional] [default to 50]
 **offset** | **int**| Index of the first returned payment operation from all search results. | [optional] [default to 0]
 **id** | [**string**](../Model/.md)| ID of the refund. | [optional]
 **payment_id** | [**string**](../Model/.md)| ID of the payment. | [optional]
 **occurred_at_gte** | **\DateTime**| Minimum date and time when the refund occurred provided in ISO 8601 format. | [optional]
 **occurred_at_lte** | **\DateTime**| Maximum date and time when the refund occurred provided in ISO 8601 format. | [optional]
 **status** | [**string[]**](../Model/string.md)| Current status of payment refund. | [optional]

### Return type

**object**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiateRefund()`

```php
initiateRefund($initialize_refund): \AllegroApi\Model\RefundDetails
```

Initiate a refund of a payment

Use this endpoint to initiate a refund of a payment. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-wykonac-zwrot-platnosci\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#how-to-refund-a-payment\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$initialize_refund = new \AllegroApi\Model\InitializeRefund(); // \AllegroApi\Model\InitializeRefund

try {
    $result = $apiInstance->initiateRefund($initialize_refund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->initiateRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **initialize_refund** | [**\AllegroApi\Model\InitializeRefund**](../Model/InitializeRefund.md)|  | [optional]

### Return type

[**\AllegroApi\Model\RefundDetails**](../Model/RefundDetails.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
