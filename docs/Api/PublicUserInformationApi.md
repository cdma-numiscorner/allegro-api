# AllegroApi\PublicUserInformationApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserSummaryUsingGET()**](PublicUserInformationApi.md#getUserSummaryUsingGET) | **GET** /users/{userId}/ratings-summary | Get any user&#39;s ratings summary |


## `getUserSummaryUsingGET()`

```php
getUserSummaryUsingGET($user_id): \AllegroApi\Model\UserRatingSummaryResponse
```

Get any user's ratings summary

Use this resource to receive feedback statistics. Read more: <a href=\"../../news/nowe-zasoby-ktorymi-pobierzesz-informacje-o-ocenach-ZM9L1WPBbUb\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-to-download-sales-feedback-d2VYERBMRiz\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PublicUserInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 41846511; // string | The ID of the user.

try {
    $result = $apiInstance->getUserSummaryUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicUserInformationApi->getUserSummaryUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The ID of the user. | |

### Return type

[**\AllegroApi\Model\UserRatingSummaryResponse**](../Model/UserRatingSummaryResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
