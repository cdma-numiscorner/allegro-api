# AllegroApi\MessageCenterApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeReadFlagOnThreadPUT()**](MessageCenterApi.md#changeReadFlagOnThreadPUT) | **PUT** /messaging/threads/{threadId}/read | Mark a particular thread as read
[**deleteMessageDELETE()**](MessageCenterApi.md#deleteMessageDELETE) | **DELETE** /messaging/messages/{messageId} | Delete single message
[**downloadAttachmentGET()**](MessageCenterApi.md#downloadAttachmentGET) | **GET** /messaging/message-attachments/{attachmentId} | Download attachment
[**getMessageGET()**](MessageCenterApi.md#getMessageGET) | **GET** /messaging/messages/{messageId} | Get single message
[**getThreadGET()**](MessageCenterApi.md#getThreadGET) | **GET** /messaging/threads/{threadId} | Get user thread
[**listMessagesGET()**](MessageCenterApi.md#listMessagesGET) | **GET** /messaging/threads/{threadId}/messages | List messages in thread
[**listThreadsGET()**](MessageCenterApi.md#listThreadsGET) | **GET** /messaging/threads | List user threads
[**newAttachmentDeclarationPOST()**](MessageCenterApi.md#newAttachmentDeclarationPOST) | **POST** /messaging/message-attachments | Add attachment declaration
[**newMessageInThreadPOST()**](MessageCenterApi.md#newMessageInThreadPOST) | **POST** /messaging/threads/{threadId}/messages | Write a new message in thread
[**newMessagePOST()**](MessageCenterApi.md#newMessagePOST) | **POST** /messaging/messages | Write a new message
[**uploadAttachmentPUT()**](MessageCenterApi.md#uploadAttachmentPUT) | **PUT** /messaging/message-attachments/{attachmentId} | Upload attachment binary data


## `changeReadFlagOnThreadPUT()`

```php
changeReadFlagOnThreadPUT($thread_id, $thread_read_flag): \AllegroApi\Model\Thread
```

Mark a particular thread as read

Use this resource to mark thread with provided identifier as read. Read more: <a href=\"../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#szczegolowe-informacje-o-wiadomosci\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#information-about-a-particular-message\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$thread_id = 'thread_id_example'; // string | Identifier of thread to be marked.
$thread_read_flag = new \AllegroApi\Model\ThreadReadFlag(); // \AllegroApi\Model\ThreadReadFlag | Updated read flag

try {
    $result = $apiInstance->changeReadFlagOnThreadPUT($thread_id, $thread_read_flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->changeReadFlagOnThreadPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_id** | **string**| Identifier of thread to be marked. |
 **thread_read_flag** | [**\AllegroApi\Model\ThreadReadFlag**](../Model/ThreadReadFlag.md)| Updated read flag |

### Return type

[**\AllegroApi\Model\Thread**](../Model/Thread.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMessageDELETE()`

```php
deleteMessageDELETE($message_id)
```

Delete single message

Use this resource to delete message with provided identifier. Read more: <a href=\"../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#usuniecie-wiadomosci\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#delete-a-message\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Identifier of the message to delete.

try {
    $apiInstance->deleteMessageDELETE($message_id);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->deleteMessageDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Identifier of the message to delete. |

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

## `downloadAttachmentGET()`

```php
downloadAttachmentGET($attachment_id): \SplFileObject
```

Download attachment

Use this resource to download attachment with provided identifier. Read more: <a href=\"../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#pobranie-zalacznika\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#attachment-related-to-the-message\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | Identifier of the attachment that will be downloaded.

try {
    $result = $apiInstance->downloadAttachmentGET($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->downloadAttachmentGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| Identifier of the attachment that will be downloaded. |

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

## `getMessageGET()`

```php
getMessageGET($message_id): \AllegroApi\Model\Message
```

Get single message

Use this resource to get message with provided identifier. Read more: <a href=\"../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#szczegolowe-informacje-o-wiadomosci\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#information-about-a-particular-message\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Identifier of message to be returned.

try {
    $result = $apiInstance->getMessageGET($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->getMessageGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Identifier of message to be returned. |

### Return type

[**\AllegroApi\Model\Message**](../Model/Message.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getThreadGET()`

```php
getThreadGET($thread_id): \AllegroApi\Model\Thread
```

Get user thread

Use this resource to get thread with provided identifier. Read more: <a href=\"../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#szczegolowe-informacje-o-danym-watku\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#information-about-a-particular-thread\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$thread_id = 'thread_id_example'; // string | Identifier of thread to get.

try {
    $result = $apiInstance->getThreadGET($thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->getThreadGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_id** | **string**| Identifier of thread to get. |

### Return type

[**\AllegroApi\Model\Thread**](../Model/Thread.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMessagesGET()`

```php
listMessagesGET($thread_id, $limit, $offset, $before, $after): \AllegroApi\Model\MessagesList
```

List messages in thread

Use this resource to list messages in thread with provided identifier. Read more: <a href=\"../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#lista-wiadomosci-dla-wybranego-watku\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#list-of-the-messages-for-the-particular-thread\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$thread_id = 'thread_id_example'; // string | Identifier of thread to get messages from.
$limit = 20; // int | The maximum number of messages returned in the response.
$offset = 0; // int | Index of the first returned message from all results.
$before = 2020-11-13T12:45:20.818Z; // \DateTime | Message creation date before filter parameter (exclusive) - cannot be used with offset.
$after = 2020-11-13T12:45:20.818Z; // \DateTime | Message creation date after filter parameter (exclusive).

try {
    $result = $apiInstance->listMessagesGET($thread_id, $limit, $offset, $before, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->listMessagesGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_id** | **string**| Identifier of thread to get messages from. |
 **limit** | **int**| The maximum number of messages returned in the response. | [optional] [default to 20]
 **offset** | **int**| Index of the first returned message from all results. | [optional] [default to 0]
 **before** | **\DateTime**| Message creation date before filter parameter (exclusive) - cannot be used with offset. | [optional]
 **after** | **\DateTime**| Message creation date after filter parameter (exclusive). | [optional]

### Return type

[**\AllegroApi\Model\MessagesList**](../Model/MessagesList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listThreadsGET()`

```php
listThreadsGET($limit, $offset): \AllegroApi\Model\ThreadsList
```

List user threads

Use this resource to get the list of user threads sorted by last message date, starting from newest. Read more: <a href=\"../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#lista-watkow-na-koncie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#list-of-threads\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // int | The maximum number of threads returned in the response.
$offset = 0; // int | Index of the first returned thread from all results.

try {
    $result = $apiInstance->listThreadsGET($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->listThreadsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The maximum number of threads returned in the response. | [optional] [default to 20]
 **offset** | **int**| Index of the first returned thread from all results. | [optional] [default to 0]

### Return type

[**\AllegroApi\Model\ThreadsList**](../Model/ThreadsList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newAttachmentDeclarationPOST()`

```php
newAttachmentDeclarationPOST($new_attachment_declaration): \AllegroApi\Model\MessageAttachmentId
```

Add attachment declaration

Use this resource to add attachment declaration before uploading. Read more: <a href=\"../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#deklaracja-zalacznika\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#attachment-declaration\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_attachment_declaration = new \AllegroApi\Model\NewAttachmentDeclaration(); // \AllegroApi\Model\NewAttachmentDeclaration

try {
    $result = $apiInstance->newAttachmentDeclarationPOST($new_attachment_declaration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->newAttachmentDeclarationPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_attachment_declaration** | [**\AllegroApi\Model\NewAttachmentDeclaration**](../Model/NewAttachmentDeclaration.md)|  |

### Return type

[**\AllegroApi\Model\MessageAttachmentId**](../Model/MessageAttachmentId.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newMessageInThreadPOST()`

```php
newMessageInThreadPOST($thread_id, $new_message_in_thread): \AllegroApi\Model\Message
```

Write a new message in thread

Use this resource to write new message in existing thread. This resource is rate limited to 1 request per second for a user. Read more: <a href=\"../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#nowa-wiadomosc\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#add-a-new-message\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$thread_id = 'thread_id_example'; // string | Identifier of thread to write message to.
$new_message_in_thread = new \AllegroApi\Model\NewMessageInThread(); // \AllegroApi\Model\NewMessageInThread

try {
    $result = $apiInstance->newMessageInThreadPOST($thread_id, $new_message_in_thread);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->newMessageInThreadPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_id** | **string**| Identifier of thread to write message to. |
 **new_message_in_thread** | [**\AllegroApi\Model\NewMessageInThread**](../Model/NewMessageInThread.md)|  |

### Return type

[**\AllegroApi\Model\Message**](../Model/Message.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newMessagePOST()`

```php
newMessagePOST($new_message): \AllegroApi\Model\Message
```

Write a new message

Use this resource to write new message to recipient. Read more: <a href=\"../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#nowa-wiadomosc\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#add-a-new-message\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_message = new \AllegroApi\Model\NewMessage(); // \AllegroApi\Model\NewMessage | Object representing new message.

try {
    $result = $apiInstance->newMessagePOST($new_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->newMessagePOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_message** | [**\AllegroApi\Model\NewMessage**](../Model/NewMessage.md)| Object representing new message. |

### Return type

[**\AllegroApi\Model\Message**](../Model/Message.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadAttachmentPUT()`

```php
uploadAttachmentPUT($attachment_id, $body): \AllegroApi\Model\MessageAttachmentId
```

Upload attachment binary data

Use this resource to upload attachment using identifier that was declared. Read more: <a href=\"../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#dodanie-zalacznika\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#add-an-attachment\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | The identifier of attachment that will be uploaded.
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->uploadAttachmentPUT($attachment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->uploadAttachmentPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| The identifier of attachment that will be uploaded. |
 **body** | **\SplFileObject****\SplFileObject**|  |

### Return type

[**\AllegroApi\Model\MessageAttachmentId**](../Model/MessageAttachmentId.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `image/png`, `image/gif`, `image/bmp`, `image/tiff`, `image/jpeg`, `application/pdf`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
