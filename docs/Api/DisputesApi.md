# AllegroApi\DisputesApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMessageToDisputeUsingPOST()**](DisputesApi.md#addMessageToDisputeUsingPOST) | **POST** /sale/disputes/{disputeId}/messages | Add a message to a dispute
[**createAnAttachmentUsingPOST()**](DisputesApi.md#createAnAttachmentUsingPOST) | **POST** /sale/dispute-attachments | Create an attachment declaration
[**getAttachmentUsingGET()**](DisputesApi.md#getAttachmentUsingGET) | **GET** /sale/dispute-attachments/{attachmentId} | Get an attachment
[**getDisputeUsingGET()**](DisputesApi.md#getDisputeUsingGET) | **GET** /sale/disputes/{disputeId} | Get a single dispute
[**getListOfDisputesUsingGET()**](DisputesApi.md#getListOfDisputesUsingGET) | **GET** /sale/disputes | Get the user&#39;s disputes
[**getMessagesFromDisputeUsingGET()**](DisputesApi.md#getMessagesFromDisputeUsingGET) | **GET** /sale/disputes/{disputeId}/messages | Get the messages within a dispute
[**uploadDisputeAttachmentUsingPUT()**](DisputesApi.md#uploadDisputeAttachmentUsingPUT) | **PUT** /sale/dispute-attachments/{attachmentId} | Upload a dispute message attachment


## `addMessageToDisputeUsingPOST()`

```php
addMessageToDisputeUsingPOST($dispute_id, $message_request): \AllegroApi\Model\DisputeMessage
```

Add a message to a dispute

Use this resource to post a message in certain dispute. At least one of fields: 'text', 'attachment' has to be present. Read more: <a href=\"../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#nowa-wiadomosc-w-dyskusji\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#add-a-new-message-in-the-discussion\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dispute_id = 'dispute_id_example'; // string | Dispute identifier.
$message_request = new \AllegroApi\Model\MessageRequest(); // \AllegroApi\Model\MessageRequest | Message request

try {
    $result = $apiInstance->addMessageToDisputeUsingPOST($dispute_id, $message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->addMessageToDisputeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**string**](../Model/.md)| Dispute identifier. |
 **message_request** | [**\AllegroApi\Model\MessageRequest**](../Model/MessageRequest.md)| Message request |

### Return type

[**\AllegroApi\Model\DisputeMessage**](../Model/DisputeMessage.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAnAttachmentUsingPOST()`

```php
createAnAttachmentUsingPOST($attachment_declaration): \AllegroApi\Model\DisputeAttachmentId
```

Create an attachment declaration

Use this resource to post an attachment declaration. Read more: <a href=\"../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#deklaracja-zalacznika\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#attachment-declaration\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_declaration = new \AllegroApi\Model\AttachmentDeclaration(); // \AllegroApi\Model\AttachmentDeclaration | A detailed declaration of a file to be uploaded

try {
    $result = $apiInstance->createAnAttachmentUsingPOST($attachment_declaration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->createAnAttachmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_declaration** | [**\AllegroApi\Model\AttachmentDeclaration**](../Model/AttachmentDeclaration.md)| A detailed declaration of a file to be uploaded |

### Return type

[**\AllegroApi\Model\DisputeAttachmentId**](../Model/DisputeAttachmentId.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentUsingGET()`

```php
getAttachmentUsingGET($attachment_id): \SplFileObject
```

Get an attachment

Use this resource to get an attachment. Read more: <a href=\"../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#pobranie-zalacznika\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#attachment-related-to-the-discussion\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | Attachment identifier.

try {
    $result = $apiInstance->getAttachmentUsingGET($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->getAttachmentUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | [**string**](../Model/.md)| Attachment identifier. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDisputeUsingGET()`

```php
getDisputeUsingGET($dispute_id): \AllegroApi\Model\Dispute
```

Get a single dispute

Use this resource to get a single dispute. Read more: <a href=\"../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#szczegolowe-informacje-o-dyskusji\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#information-about-a-particular-discussion\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dispute_id = 'dispute_id_example'; // string | Dispute identifier.

try {
    $result = $apiInstance->getDisputeUsingGET($dispute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->getDisputeUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**string**](../Model/.md)| Dispute identifier. |

### Return type

[**\AllegroApi\Model\Dispute**](../Model/Dispute.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfDisputesUsingGET()`

```php
getListOfDisputesUsingGET($checkout_form_id, $limit, $offset): \AllegroApi\Model\DisputeListResponse
```

Get the user's disputes

Use this resource to get the list of your disputes. Read more: <a href=\"../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#dyskusje-na-koncie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#all-discussions\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_form_id = 29738e61-7f6a-11e8-ac45-09db60ede9d6; // string | Checkout form identifier.
$limit = 10; // int | The maximum number of disputes in a response.
$offset = 0; // int | Index of first returned dispute.

try {
    $result = $apiInstance->getListOfDisputesUsingGET($checkout_form_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->getListOfDisputesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_form_id** | [**string**](../Model/.md)| Checkout form identifier. | [optional]
 **limit** | **int**| The maximum number of disputes in a response. | [optional] [default to 10]
 **offset** | **int**| Index of first returned dispute. | [optional] [default to 0]

### Return type

[**\AllegroApi\Model\DisputeListResponse**](../Model/DisputeListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessagesFromDisputeUsingGET()`

```php
getMessagesFromDisputeUsingGET($dispute_id, $limit, $offset): \AllegroApi\Model\DisputeMessageList
```

Get the messages within a dispute

Use this resource to get the list of messages within dispute. Read more: <a href=\"../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#wiadomosci-z-dyskusji\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#all-messages-within-a-discussion\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dispute_id = 'dispute_id_example'; // string | Dispute identifier.
$limit = 10; // int | The maximum number of messages within dispute returned in a response.
$offset = 0; // int | Index of first returned message within dispute.

try {
    $result = $apiInstance->getMessagesFromDisputeUsingGET($dispute_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->getMessagesFromDisputeUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**string**](../Model/.md)| Dispute identifier. |
 **limit** | **int**| The maximum number of messages within dispute returned in a response. | [optional] [default to 10]
 **offset** | **int**| Index of first returned message within dispute. | [optional] [default to 0]

### Return type

[**\AllegroApi\Model\DisputeMessageList**](../Model/DisputeMessageList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadDisputeAttachmentUsingPUT()`

```php
uploadDisputeAttachmentUsingPUT($attachment_id, $body)
```

Upload a dispute message attachment

Upload a dispute message attachment. This operation should be used after creating an attachment declaration with *POST /sale/dispute-attachments* **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /sale/dispute-attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href=\"../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#dodanie-zalacznika\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#adding-an-attachment\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | Attachment identifier.
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->uploadDisputeAttachmentUsingPUT($attachment_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->uploadDisputeAttachmentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | [**string**](../Model/.md)| Attachment identifier. |
 **body** | **\SplFileObject****\SplFileObject**|  |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `image/png`, `image/gif`, `image/bmp`, `image/tiff`, `image/jpeg`, `application/pdf`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
