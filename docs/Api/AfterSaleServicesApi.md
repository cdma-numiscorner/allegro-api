# AllegroApi\AfterSaleServicesApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAfterSalesServiceConditionsAttachmentUsingPOST()**](AfterSaleServicesApi.md#createAfterSalesServiceConditionsAttachmentUsingPOST) | **POST** /after-sales-service-conditions/attachments | Create a warranty attachment metadata |
| [**createAfterSalesServiceImpliedWarrantyUsingPOST()**](AfterSaleServicesApi.md#createAfterSalesServiceImpliedWarrantyUsingPOST) | **POST** /after-sales-service-conditions/implied-warranties | Create new user&#39;s implied warranty |
| [**createAfterSalesServiceReturnPolicyUsingPOST()**](AfterSaleServicesApi.md#createAfterSalesServiceReturnPolicyUsingPOST) | **POST** /after-sales-service-conditions/return-policies | Create new user&#39;s return policy |
| [**createAfterSalesServiceWarrantyUsingPOST()**](AfterSaleServicesApi.md#createAfterSalesServiceWarrantyUsingPOST) | **POST** /after-sales-service-conditions/warranties | Create new user&#39;s warranty |
| [**getAfterSalesServiceImpliedWarrantyUsingGET()**](AfterSaleServicesApi.md#getAfterSalesServiceImpliedWarrantyUsingGET) | **GET** /after-sales-service-conditions/implied-warranties/{impliedWarrantyId} | Get the user&#39;s implied warranty |
| [**getAfterSalesServiceReturnPolicyUsingGET()**](AfterSaleServicesApi.md#getAfterSalesServiceReturnPolicyUsingGET) | **GET** /after-sales-service-conditions/return-policies/{returnPolicyId} | Get the user&#39;s return policy |
| [**getAfterSalesServiceWarrantyUsingGET()**](AfterSaleServicesApi.md#getAfterSalesServiceWarrantyUsingGET) | **GET** /after-sales-service-conditions/warranties/{warrantyId} | Get the user&#39;s warranty |
| [**getPublicSellerListingUsingGET()**](AfterSaleServicesApi.md#getPublicSellerListingUsingGET) | **GET** /after-sales-service-conditions/implied-warranties | Get the user&#39;s implied warranties |
| [**getPublicSellerListingUsingGET1()**](AfterSaleServicesApi.md#getPublicSellerListingUsingGET1) | **GET** /after-sales-service-conditions/return-policies | Get the user&#39;s return policies |
| [**getPublicSellerListingUsingGET2()**](AfterSaleServicesApi.md#getPublicSellerListingUsingGET2) | **GET** /after-sales-service-conditions/warranties | Get the user&#39;s warranties |
| [**updateAfterSalesServiceImpliedWarrantyUsingPUT()**](AfterSaleServicesApi.md#updateAfterSalesServiceImpliedWarrantyUsingPUT) | **PUT** /after-sales-service-conditions/implied-warranties/{impliedWarrantyId} | Change the user&#39;s implied warranty |
| [**updateAfterSalesServiceReturnPolicyUsingPUT()**](AfterSaleServicesApi.md#updateAfterSalesServiceReturnPolicyUsingPUT) | **PUT** /after-sales-service-conditions/return-policies/{returnPolicyId} | Change the user&#39;s return policy |
| [**updateAfterSalesServiceWarrantyUsingPUT()**](AfterSaleServicesApi.md#updateAfterSalesServiceWarrantyUsingPUT) | **PUT** /after-sales-service-conditions/warranties/{warrantyId} | Change the user&#39;s warranty |
| [**uploadAfterSalesServiceConditionsAttachmentUsingPUT()**](AfterSaleServicesApi.md#uploadAfterSalesServiceConditionsAttachmentUsingPUT) | **PUT** /after-sales-service-conditions/attachments/{attachmentId} | Upload an warranty attachment |


## `createAfterSalesServiceConditionsAttachmentUsingPOST()`

```php
createAfterSalesServiceConditionsAttachmentUsingPOST($create_after_sales_service_conditions_attachment_using_post_request): \AllegroApi\Model\AfterSalesServicesAttachment
```

Create a warranty attachment metadata

You can attach PDF files to warranties. Uploading attachments flow:   1. Create an attachment object to receive an upload URL (*POST /after-sales-service-conditions/attachments*),   2. Use the upload URL to submit the PDF file (*PUT /after-sales-service-conditions/attachments/{attachmentId}*),   3. Create (or update) warranty with attachment (*POST /after-sales-service-conditions/warranties*).    Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-zalacznik-do-informacji-o-gwarancjach\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-attachment-to-warranty-information\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_after_sales_service_conditions_attachment_using_post_request = new \AllegroApi\Model\CreateAfterSalesServiceConditionsAttachmentUsingPOSTRequest(); // \AllegroApi\Model\CreateAfterSalesServiceConditionsAttachmentUsingPOSTRequest | After sale services attachment

try {
    $result = $apiInstance->createAfterSalesServiceConditionsAttachmentUsingPOST($create_after_sales_service_conditions_attachment_using_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->createAfterSalesServiceConditionsAttachmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_after_sales_service_conditions_attachment_using_post_request** | [**\AllegroApi\Model\CreateAfterSalesServiceConditionsAttachmentUsingPOSTRequest**](../Model/CreateAfterSalesServiceConditionsAttachmentUsingPOSTRequest.md)| After sale services attachment | |

### Return type

[**\AllegroApi\Model\AfterSalesServicesAttachment**](../Model/AfterSalesServicesAttachment.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAfterSalesServiceImpliedWarrantyUsingPOST()`

```php
createAfterSalesServiceImpliedWarrantyUsingPOST($implied_warranty_request): \AllegroApi\Model\ImpliedWarrantyResponse
```

Create new user's implied warranty

Use this resource to create an implied warranty definition. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-informacje-o-warunkach-reklamacji\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-implied-warranty-information\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$implied_warranty_request = new \AllegroApi\Model\ImpliedWarrantyRequest(); // \AllegroApi\Model\ImpliedWarrantyRequest | Implied warranty

try {
    $result = $apiInstance->createAfterSalesServiceImpliedWarrantyUsingPOST($implied_warranty_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->createAfterSalesServiceImpliedWarrantyUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **implied_warranty_request** | [**\AllegroApi\Model\ImpliedWarrantyRequest**](../Model/ImpliedWarrantyRequest.md)| Implied warranty | |

### Return type

[**\AllegroApi\Model\ImpliedWarrantyResponse**](../Model/ImpliedWarrantyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAfterSalesServiceReturnPolicyUsingPOST()`

```php
createAfterSalesServiceReturnPolicyUsingPOST($return_policy_request): \AllegroApi\Model\ReturnPolicyResponse
```

Create new user's return policy

Use this resource to create a return policy definition. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-informacje-o-warunkach-zwrotow\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-return-policy-information\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_policy_request = new \AllegroApi\Model\ReturnPolicyRequest(); // \AllegroApi\Model\ReturnPolicyRequest | Return Policy

try {
    $result = $apiInstance->createAfterSalesServiceReturnPolicyUsingPOST($return_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->createAfterSalesServiceReturnPolicyUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **return_policy_request** | [**\AllegroApi\Model\ReturnPolicyRequest**](../Model/ReturnPolicyRequest.md)| Return Policy | |

### Return type

[**\AllegroApi\Model\ReturnPolicyResponse**](../Model/ReturnPolicyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAfterSalesServiceWarrantyUsingPOST()`

```php
createAfterSalesServiceWarrantyUsingPOST($warranty_request): \AllegroApi\Model\WarrantyResponse
```

Create new user's warranty

Use this resource to create a warranty definition. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-informacje-o-gwarancjach\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-warranty-information\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warranty_request = new \AllegroApi\Model\WarrantyRequest(); // \AllegroApi\Model\WarrantyRequest | Warranty

try {
    $result = $apiInstance->createAfterSalesServiceWarrantyUsingPOST($warranty_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->createAfterSalesServiceWarrantyUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warranty_request** | [**\AllegroApi\Model\WarrantyRequest**](../Model/WarrantyRequest.md)| Warranty | |

### Return type

[**\AllegroApi\Model\WarrantyResponse**](../Model/WarrantyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAfterSalesServiceImpliedWarrantyUsingGET()`

```php
getAfterSalesServiceImpliedWarrantyUsingGET($implied_warranty_id): \AllegroApi\Model\ImpliedWarrantyResponse
```

Get the user's implied warranty

Use this resource to get an implied warranty details. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-reklamacji-przypisane-do-konta\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-implied-warranties-assigned-to-the-account\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$implied_warranty_id = 'implied_warranty_id_example'; // string | The ID of the implied warranty.

try {
    $result = $apiInstance->getAfterSalesServiceImpliedWarrantyUsingGET($implied_warranty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getAfterSalesServiceImpliedWarrantyUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **implied_warranty_id** | **string**| The ID of the implied warranty. | |

### Return type

[**\AllegroApi\Model\ImpliedWarrantyResponse**](../Model/ImpliedWarrantyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAfterSalesServiceReturnPolicyUsingGET()`

```php
getAfterSalesServiceReturnPolicyUsingGET($return_policy_id): \AllegroApi\Model\ReturnPolicyResponse
```

Get the user's return policy

Use this resource to get a return policy details. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-zwrotow-przypisane-do-konta\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-return-policies-assigned-to-the-account\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_policy_id = 'return_policy_id_example'; // string | The ID of the return policy.

try {
    $result = $apiInstance->getAfterSalesServiceReturnPolicyUsingGET($return_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getAfterSalesServiceReturnPolicyUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **return_policy_id** | **string**| The ID of the return policy. | |

### Return type

[**\AllegroApi\Model\ReturnPolicyResponse**](../Model/ReturnPolicyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAfterSalesServiceWarrantyUsingGET()`

```php
getAfterSalesServiceWarrantyUsingGET($warranty_id): \AllegroApi\Model\WarrantyResponse
```

Get the user's warranty

Use this resource to get a warranty details. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-informacje-o-gwarancjach-przypisanych-do-konta\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-warranties-assigned-to-the-account\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warranty_id = 'warranty_id_example'; // string | The ID of the warranty.

try {
    $result = $apiInstance->getAfterSalesServiceWarrantyUsingGET($warranty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getAfterSalesServiceWarrantyUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warranty_id** | **string**| The ID of the warranty. | |

### Return type

[**\AllegroApi\Model\WarrantyResponse**](../Model/WarrantyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicSellerListingUsingGET()`

```php
getPublicSellerListingUsingGET($limit, $offset): \AllegroApi\Model\ImpliedWarrantiesListImpliedWarrantyBasic
```

Get the user's implied warranties

Use this resource to get seller implied warranties listing. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-reklamacji-przypisane-do-konta\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-implied-warranties-assigned-to-the-account\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 60; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getPublicSellerListingUsingGET($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getPublicSellerListingUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| The limit of elements in the response. | [optional] [default to 60] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |

### Return type

[**\AllegroApi\Model\ImpliedWarrantiesListImpliedWarrantyBasic**](../Model/ImpliedWarrantiesListImpliedWarrantyBasic.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicSellerListingUsingGET1()`

```php
getPublicSellerListingUsingGET1($limit, $offset): \AllegroApi\Model\ReturnPoliciesListReturnPolicyBasic
```

Get the user's return policies

Use this resource to get seller return policies listing. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-zwrotow-przypisane-do-konta\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-return-policies-assigned-to-the-account\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 60; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getPublicSellerListingUsingGET1($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getPublicSellerListingUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| The limit of elements in the response. | [optional] [default to 60] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |

### Return type

[**\AllegroApi\Model\ReturnPoliciesListReturnPolicyBasic**](../Model/ReturnPoliciesListReturnPolicyBasic.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicSellerListingUsingGET2()`

```php
getPublicSellerListingUsingGET2($limit, $offset): \AllegroApi\Model\WarrantiesListWarrantyBasic
```

Get the user's warranties

Use this resource to get seller warranties listing. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-informacje-o-gwarancjach-przypisanych-do-konta\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-warranties-assigned-to-the-account\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 60; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getPublicSellerListingUsingGET2($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getPublicSellerListingUsingGET2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| The limit of elements in the response. | [optional] [default to 60] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |

### Return type

[**\AllegroApi\Model\WarrantiesListWarrantyBasic**](../Model/WarrantiesListWarrantyBasic.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAfterSalesServiceImpliedWarrantyUsingPUT()`

```php
updateAfterSalesServiceImpliedWarrantyUsingPUT($implied_warranty_id, $implied_warranty_request): \AllegroApi\Model\ImpliedWarrantyResponse
```

Change the user's implied warranty

Use this resource to modify the implied warranty details. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-informacje-o-warunkach-reklamacji\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-implied-warranty-information\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$implied_warranty_id = 'implied_warranty_id_example'; // string | The ID of the implied warranty.
$implied_warranty_request = new \AllegroApi\Model\ImpliedWarrantyRequest(); // \AllegroApi\Model\ImpliedWarrantyRequest | Implied warranty

try {
    $result = $apiInstance->updateAfterSalesServiceImpliedWarrantyUsingPUT($implied_warranty_id, $implied_warranty_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->updateAfterSalesServiceImpliedWarrantyUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **implied_warranty_id** | **string**| The ID of the implied warranty. | |
| **implied_warranty_request** | [**\AllegroApi\Model\ImpliedWarrantyRequest**](../Model/ImpliedWarrantyRequest.md)| Implied warranty | |

### Return type

[**\AllegroApi\Model\ImpliedWarrantyResponse**](../Model/ImpliedWarrantyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAfterSalesServiceReturnPolicyUsingPUT()`

```php
updateAfterSalesServiceReturnPolicyUsingPUT($return_policy_id, $return_policy_request): \AllegroApi\Model\ReturnPolicyResponse
```

Change the user's return policy

Use this resource to modify the return policy details. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-informacje-o-warunkach-zwrotu\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-return-policy-information\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_policy_id = 'return_policy_id_example'; // string | The ID of the return policy.
$return_policy_request = new \AllegroApi\Model\ReturnPolicyRequest(); // \AllegroApi\Model\ReturnPolicyRequest | Return Policy

try {
    $result = $apiInstance->updateAfterSalesServiceReturnPolicyUsingPUT($return_policy_id, $return_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->updateAfterSalesServiceReturnPolicyUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **return_policy_id** | **string**| The ID of the return policy. | |
| **return_policy_request** | [**\AllegroApi\Model\ReturnPolicyRequest**](../Model/ReturnPolicyRequest.md)| Return Policy | |

### Return type

[**\AllegroApi\Model\ReturnPolicyResponse**](../Model/ReturnPolicyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAfterSalesServiceWarrantyUsingPUT()`

```php
updateAfterSalesServiceWarrantyUsingPUT($warranty_id, $warranty_request): \AllegroApi\Model\WarrantyResponse
```

Change the user's warranty

Use this resource to modify the warranty details. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-informacje-o-gwarancjach\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-warranty-information\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warranty_id = 'warranty_id_example'; // string | The ID of the warranty.
$warranty_request = new \AllegroApi\Model\WarrantyRequest(); // \AllegroApi\Model\WarrantyRequest | Warranty

try {
    $result = $apiInstance->updateAfterSalesServiceWarrantyUsingPUT($warranty_id, $warranty_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->updateAfterSalesServiceWarrantyUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warranty_id** | **string**| The ID of the warranty. | |
| **warranty_request** | [**\AllegroApi\Model\WarrantyRequest**](../Model/WarrantyRequest.md)| Warranty | |

### Return type

[**\AllegroApi\Model\WarrantyResponse**](../Model/WarrantyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadAfterSalesServiceConditionsAttachmentUsingPUT()`

```php
uploadAfterSalesServiceConditionsAttachmentUsingPUT($attachment_id, $body): \AllegroApi\Model\AfterSalesServicesAttachment
```
### URI(s):
- https://upload.{environment} 
    - Variables:
      - environment:  No description provided
        - Allowed values:
          - allegro.pl
          - allegro.pl.allegrosandbox.pl
        - Default value: allegro.pl

Upload an warranty attachment

Upload an after sale services attachment. This operation should be used after creating an offer attachment with *POST /sale/offer-attachments* **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /after-sales-service-conditions/attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-zalacznik-do-informacji-o-gwarancjach\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-attachment-to-warranty-information\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | The ID of the attachment.
$body = "/path/to/file.txt"; // \SplFileObject

$hostIndex = 0;
$variables = [
    'environment' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->uploadAfterSalesServiceConditionsAttachmentUsingPUT($attachment_id, $body, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->uploadAfterSalesServiceConditionsAttachmentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment_id** | **string**| The ID of the attachment. | |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\AllegroApi\Model\AfterSalesServicesAttachment**](../Model/AfterSalesServicesAttachment.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/pdf`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
