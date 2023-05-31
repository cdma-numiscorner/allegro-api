# AllegroApi\CommissionRefundsApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelRefundApplication()**](CommissionRefundsApi.md#cancelRefundApplication) | **DELETE** /order/refund-claims/{claimId} | Cancel a refund application |
| [**createRefundApplication()**](CommissionRefundsApi.md#createRefundApplication) | **POST** /order/refund-claims | Create a refund application |
| [**getRefundApplication()**](CommissionRefundsApi.md#getRefundApplication) | **GET** /order/refund-claims/{claimId} | Get a refund application details |
| [**getRefundApplications()**](CommissionRefundsApi.md#getRefundApplications) | **GET** /order/refund-claims | Get a list of refund applications |


## `cancelRefundApplication()`

```php
cancelRefundApplication($claim_id)
```

Cancel a refund application

Use this resource to cancel a refund application. This cannot be undone. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-anulowac-wniosek-o-rabat-transakcyjny\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#how-to-cancel-sale-commission-refund\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CommissionRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | Refund application ID.

try {
    $apiInstance->cancelRefundApplication($claim_id);
} catch (Exception $e) {
    echo 'Exception when calling CommissionRefundsApi->cancelRefundApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **claim_id** | **string**| Refund application ID. | |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRefundApplication()`

```php
createRefundApplication($refund_claim_request): \AllegroApi\Model\RefundClaimResponse
```

Create a refund application

Use this resource to create a refund application. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-utworzyc-wniosek-o-rabat-transakcyjny\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#how-to-create-a-sale-commission-refund-application\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CommissionRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_claim_request = new \AllegroApi\Model\RefundClaimRequest(); // \AllegroApi\Model\RefundClaimRequest

try {
    $result = $apiInstance->createRefundApplication($refund_claim_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommissionRefundsApi->createRefundApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refund_claim_request** | [**\AllegroApi\Model\RefundClaimRequest**](../Model/RefundClaimRequest.md)|  | |

### Return type

[**\AllegroApi\Model\RefundClaimResponse**](../Model/RefundClaimResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRefundApplication()`

```php
getRefundApplication($claim_id): \AllegroApi\Model\RefundClaim
```

Get a refund application details

Use this resource to get refund application details. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-pojedynczy-wniosek-o-rabat-transakcyjny\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-single-sale-commission-refund\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CommissionRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | Refund application ID.

try {
    $result = $apiInstance->getRefundApplication($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommissionRefundsApi->getRefundApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **claim_id** | **string**| Refund application ID. | |

### Return type

[**\AllegroApi\Model\RefundClaim**](../Model/RefundClaim.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRefundApplications()`

```php
getRefundApplications($line_item_offer_id, $buyer_login, $status, $limit, $offset): \AllegroApi\Model\GetRefundApplications200Response
```

Get a list of refund applications

Use this resource to get a list of refund applications based on the provided query parameters. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-liste-utworzonych-wnioskow-o-rabat-transakcyjny\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-list-of-sale-commission-refunds\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CommissionRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_offer_id = 'line_item_offer_id_example'; // string | ID of the offer associated with the refund application.
$buyer_login = 'buyer_login_example'; // string | Login of the buyer that made the purchase associated with the refund application.
$status = 'status_example'; // string | Status of the refund application.
$limit = 25; // int | Maximum number of returned refund applications in response.
$offset = 0; // int | Index of the first returned refund application from all search results.

try {
    $result = $apiInstance->getRefundApplications($line_item_offer_id, $buyer_login, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommissionRefundsApi->getRefundApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_offer_id** | **string**| ID of the offer associated with the refund application. | [optional] |
| **buyer_login** | **string**| Login of the buyer that made the purchase associated with the refund application. | [optional] |
| **status** | **string**| Status of the refund application. | [optional] |
| **limit** | **int**| Maximum number of returned refund applications in response. | [optional] [default to 25] |
| **offset** | **int**| Index of the first returned refund application from all search results. | [optional] [default to 0] |

### Return type

[**\AllegroApi\Model\GetRefundApplications200Response**](../Model/GetRefundApplications200Response.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
