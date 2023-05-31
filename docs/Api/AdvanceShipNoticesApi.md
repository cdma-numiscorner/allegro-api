# AllegroApi\AdvanceShipNoticesApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAdvanceShipNotice()**](AdvanceShipNoticesApi.md#createAdvanceShipNotice) | **POST** /fulfillment/advance-ship-notices | Create an Advance Ship Notice |
| [**createLabelsCommand()**](AdvanceShipNoticesApi.md#createLabelsCommand) | **PUT** /fulfillment/create-labels-commands/{command-id} | Create labels |
| [**deleteAdvanceShipNotice()**](AdvanceShipNoticesApi.md#deleteAdvanceShipNotice) | **DELETE** /fulfillment/advance-ship-notices/{id} | Delete Advance Ship Notice |
| [**getAdvanceShipNotice()**](AdvanceShipNoticesApi.md#getAdvanceShipNotice) | **GET** /fulfillment/advance-ship-notices/{id} | Get single Advance Ship Notice |
| [**getAdvanceShipNoticeLabels()**](AdvanceShipNoticesApi.md#getAdvanceShipNoticeLabels) | **GET** /fulfillment/advance-ship-notices/{id}/labels | Get labels for Advance Ship Notice |
| [**getAdvanceShipNoticeReceivingState()**](AdvanceShipNoticesApi.md#getAdvanceShipNoticeReceivingState) | **GET** /fulfillment/advance-ship-notices/{id}/receiving-state | Check current state and details of Advance Ship Notice receiving |
| [**getAdvanceShipNotices()**](AdvanceShipNoticesApi.md#getAdvanceShipNotices) | **GET** /fulfillment/advance-ship-notices | Get list of Advance Ship Notices |
| [**getLabelCommand()**](AdvanceShipNoticesApi.md#getLabelCommand) | **GET** /fulfillment/create-labels-commands/{command-id} | Get labels |
| [**getSubmitCommand()**](AdvanceShipNoticesApi.md#getSubmitCommand) | **GET** /fulfillment/submit-commands/{command-id} | Get submit status |
| [**submitCommand()**](AdvanceShipNoticesApi.md#submitCommand) | **PUT** /fulfillment/submit-commands/{command-id} | Submit the Advance Ship Notice |
| [**updateAdvanceShipNotice()**](AdvanceShipNoticesApi.md#updateAdvanceShipNotice) | **PUT** /fulfillment/advance-ship-notices/{id} | Update Advance Ship Notice |


## `createAdvanceShipNotice()`

```php
createAdvanceShipNotice($create_advance_ship_notice_request): \AllegroApi\Model\CreateAdvanceShipNoticeResponse
```

Create an Advance Ship Notice

Use this resource to create an Advance Ship Notice. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#utworz-draft-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#create-a-draft-of-the-advance-ship-notice\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_advance_ship_notice_request = new \AllegroApi\Model\CreateAdvanceShipNoticeRequest(); // \AllegroApi\Model\CreateAdvanceShipNoticeRequest

try {
    $result = $apiInstance->createAdvanceShipNotice($create_advance_ship_notice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->createAdvanceShipNotice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_advance_ship_notice_request** | [**\AllegroApi\Model\CreateAdvanceShipNoticeRequest**](../Model/CreateAdvanceShipNoticeRequest.md)|  | |

### Return type

[**\AllegroApi\Model\CreateAdvanceShipNoticeResponse**](../Model/CreateAdvanceShipNoticeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLabelsCommand()`

```php
createLabelsCommand($command_id, $create_labels_command_only_input): \AllegroApi\Model\CreateLabelsCommand
```

Create labels

Use this resource to create labels for the Advance Ship Notice. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#wygeneruj-oznaczenia-na-kartony\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#create-labels-for-boxes\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = '712fa46c-7d4a-4ba0-b094-b5d1d4f6155d'; // string | The identifier of the command.
$create_labels_command_only_input = new \AllegroApi\Model\CreateLabelsCommandOnlyInput(); // \AllegroApi\Model\CreateLabelsCommandOnlyInput

try {
    $result = $apiInstance->createLabelsCommand($command_id, $create_labels_command_only_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->createLabelsCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| The identifier of the command. | [default to &#39;712fa46c-7d4a-4ba0-b094-b5d1d4f6155d&#39;] |
| **create_labels_command_only_input** | [**\AllegroApi\Model\CreateLabelsCommandOnlyInput**](../Model/CreateLabelsCommandOnlyInput.md)|  | |

### Return type

[**\AllegroApi\Model\CreateLabelsCommand**](../Model/CreateLabelsCommand.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdvanceShipNotice()`

```php
deleteAdvanceShipNotice($id, $accept)
```

Delete Advance Ship Notice

Use this resource to delete an Advance Ship Notice. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-usunac-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-delete-advance-ship-notice\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = '0b488a23-bc99-470d-8842-0c585adf2479'; // string | An identifier of the Advance Ship Notice to delete.
$accept = 'accept_example'; // string

try {
    $apiInstance->deleteAdvanceShipNotice($id, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->deleteAdvanceShipNotice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| An identifier of the Advance Ship Notice to delete. | [default to &#39;0b488a23-bc99-470d-8842-0c585adf2479&#39;] |
| **accept** | **string**|  | |

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

## `getAdvanceShipNotice()`

```php
getAdvanceShipNotice($id): \AllegroApi\Model\AdvanceShipNoticeResponse
```

Get single Advance Ship Notice

Use this resource to get an Advance Ship Notice. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-przegladac-utworzone-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-get-created-advance-ship-notices\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = '84529ad2-2265-4e15-b76b-c17025d848f6'; // string | The identifier of returned Advance Ship Notice.

try {
    $result = $apiInstance->getAdvanceShipNotice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->getAdvanceShipNotice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The identifier of returned Advance Ship Notice. | [default to &#39;84529ad2-2265-4e15-b76b-c17025d848f6&#39;] |

### Return type

[**\AllegroApi\Model\AdvanceShipNoticeResponse**](../Model/AdvanceShipNoticeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvanceShipNoticeLabels()`

```php
getAdvanceShipNoticeLabels($id, $accept): \SplFileObject
```

Get labels for Advance Ship Notice

Use this resource to get labels for Advance Ship Notice after being created with \"create labels command\". Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#wygeneruj-oznaczenia-na-kartony\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#create-labels-for-boxes\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 84529ad2-2265-4e15-b76b-c17025d848f6; // string | An identifier of the Advance Ship Notice.
$accept = 'accept_example'; // string | Content-type of generated labels

try {
    $result = $apiInstance->getAdvanceShipNoticeLabels($id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->getAdvanceShipNoticeLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| An identifier of the Advance Ship Notice. | |
| **accept** | **string**| Content-type of generated labels | |

### Return type

**\SplFileObject**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `x-application/zpl`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvanceShipNoticeReceivingState()`

```php
getAdvanceShipNoticeReceivingState($id): \AllegroApi\Model\ReceivingState
```

Check current state and details of Advance Ship Notice receiving

Use this resource to check the state of Advance Ship Notice receiving in Fulfillment Center in real time. The response contains a receiving progress and information about particular items - their quantities and conditions. While the Advance Ship Notice is in UNPACKING state, report is updated dynamically, which might result in different responses even at short time intervals. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#sprawdz-postep-odbioru-awizo-przez-magazyn\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#check-current-state-and-details-of-advance-ship-notice-receiving\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = '712fa46c-7d4a-4ba0-b094-b5d1d4f6155d'; // string | An identifier of advance ship notice.

try {
    $result = $apiInstance->getAdvanceShipNoticeReceivingState($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->getAdvanceShipNoticeReceivingState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| An identifier of advance ship notice. | [default to &#39;712fa46c-7d4a-4ba0-b094-b5d1d4f6155d&#39;] |

### Return type

[**\AllegroApi\Model\ReceivingState**](../Model/ReceivingState.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvanceShipNotices()`

```php
getAdvanceShipNotices($offset, $limit, $status): \AllegroApi\Model\AdvanceShipNoticeList
```

Get list of Advance Ship Notices

Use this resource to get a list of Advance Ship Notices. The list is ordered by **createdAt** property. Default **offset** is 0, default **limit** is 50. A list can be filtered by statuses. Multiple status query parameters are allowed. In such cases, filters are joined with **OR** logical operator. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-przegladac-utworzone-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-get-created-advance-ship-notices\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | The offset of elements in the response.
$limit = 50; // int | Maximum number of elements in response.
$status = array(new \AllegroApi\Model\\AllegroApi\Model\AdvanceShipNoticeStatus()); // \AllegroApi\Model\AdvanceShipNoticeStatus[] | A status of the Advance Ship Notices in the response.

try {
    $result = $apiInstance->getAdvanceShipNotices($offset, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->getAdvanceShipNotices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of elements in response. | [optional] [default to 50] |
| **status** | [**\AllegroApi\Model\AdvanceShipNoticeStatus[]**](../Model/\AllegroApi\Model\AdvanceShipNoticeStatus.md)| A status of the Advance Ship Notices in the response. | [optional] |

### Return type

[**\AllegroApi\Model\AdvanceShipNoticeList**](../Model/AdvanceShipNoticeList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLabelCommand()`

```php
getLabelCommand($command_id): \AllegroApi\Model\CreateLabelsCommand
```

Get labels

Use this resource to check the status of the \"create labels command\" and get the URL to download labels. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#wygeneruj-oznaczenia-na-kartony\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#create-labels-for-boxes\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = '882202c8-15ab-4a83-aeef-29ea505bf0d0'; // string | An identifier of the command.

try {
    $result = $apiInstance->getLabelCommand($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->getLabelCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| An identifier of the command. | [default to &#39;882202c8-15ab-4a83-aeef-29ea505bf0d0&#39;] |

### Return type

[**\AllegroApi\Model\CreateLabelsCommand**](../Model/CreateLabelsCommand.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubmitCommand()`

```php
getSubmitCommand($command_id): \AllegroApi\Model\SubmitCommand
```

Get submit status

Use this resource to get submit status of the Advance Ship Notice. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#zakoncz-edycje-i-wyslij-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#finish-editing-and-submit-the-advance-ship-notice\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = '882202c8-15ab-4a83-aeef-29ea505bf0d0'; // string | An identifier of the command.

try {
    $result = $apiInstance->getSubmitCommand($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->getSubmitCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| An identifier of the command. | [default to &#39;882202c8-15ab-4a83-aeef-29ea505bf0d0&#39;] |

### Return type

[**\AllegroApi\Model\SubmitCommand**](../Model/SubmitCommand.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitCommand()`

```php
submitCommand($command_id, $submit_command): \AllegroApi\Model\SubmitCommand
```

Submit the Advance Ship Notice

Use this resource to submit the Advance Ship Notice. After that operation any update of the Advance Ship Notice will not be possible. If a status of the ASN is different from DRAFT, command will end with success. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#zakoncz-edycje-i-wyslij-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#finish-editing-and-submit-the-advance-ship-notice\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = '725432a9-ae9e-43de-b8c5-7430606a81a4'; // string | The identifier of the command.
$submit_command = new \AllegroApi\Model\SubmitCommand(); // \AllegroApi\Model\SubmitCommand

try {
    $result = $apiInstance->submitCommand($command_id, $submit_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->submitCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| The identifier of the command. | [default to &#39;725432a9-ae9e-43de-b8c5-7430606a81a4&#39;] |
| **submit_command** | [**\AllegroApi\Model\SubmitCommand**](../Model/SubmitCommand.md)|  | |

### Return type

[**\AllegroApi\Model\SubmitCommand**](../Model/SubmitCommand.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdvanceShipNotice()`

```php
updateAdvanceShipNotice($id, $if_match, $advance_ship_notice): \AllegroApi\Model\AdvanceShipNoticeResponse
```

Update Advance Ship Notice

Use this resource to update an Advance Ship Notice. Any content property update will clear labels property. Use Create labels command to create new labels for provided content. If a client wants to update read-only property, an error is returned (only in cases when sent value will be different than actual on the server). Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#uzupelnij-dane-o-awizo\" target=\"_blank\">PL</a> / <a href=\"../../one-fulfillment-by-allegro-4R9dXyMPlc9#complete-the-data-of-advance-ship-notice\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = '84529ad2-2265-4e15-b76b-c17025d848f6'; // string | An identifier of Advance Ship Notice.
$if_match = 123456; // string | A current version of Advance Ship Notice (e.g. from etag header obtained via get).
$advance_ship_notice = new \AllegroApi\Model\AdvanceShipNotice(); // \AllegroApi\Model\AdvanceShipNotice

try {
    $result = $apiInstance->updateAdvanceShipNotice($id, $if_match, $advance_ship_notice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->updateAdvanceShipNotice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| An identifier of Advance Ship Notice. | [default to &#39;84529ad2-2265-4e15-b76b-c17025d848f6&#39;] |
| **if_match** | **string**| A current version of Advance Ship Notice (e.g. from etag header obtained via get). | |
| **advance_ship_notice** | [**\AllegroApi\Model\AdvanceShipNotice**](../Model/AdvanceShipNotice.md)|  | |

### Return type

[**\AllegroApi\Model\AdvanceShipNoticeResponse**](../Model/AdvanceShipNoticeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
