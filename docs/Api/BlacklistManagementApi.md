# AllegroApi\BlacklistManagementApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**doAddToBlackList()**](BlacklistManagementApi.md#doAddToBlackList) | **POST** /sale/blacklisted-users | Add a users to the blacklist
[**doRemoveFromBlackList()**](BlacklistManagementApi.md#doRemoveFromBlackList) | **DELETE** /sale/blacklisted-users/{excludedUserId} | Remove users from the blacklist


## `doAddToBlackList()`

```php
doAddToBlackList($blacklist_request): \AllegroApi\Model\BlackListResponse
```

Add a users to the blacklist

Use this resource to add new users to the blacklist on given account. At least one of id or login is required. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-dodac-kupujacego-do-listy-nieaktywnych-kupujacych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-add-the-buyer-to-the-blacklist\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\BlacklistManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blacklist_request = new \AllegroApi\Model\BlacklistRequest(); // \AllegroApi\Model\BlacklistRequest | request

try {
    $result = $apiInstance->doAddToBlackList($blacklist_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistManagementApi->doAddToBlackList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blacklist_request** | [**\AllegroApi\Model\BlacklistRequest**](../Model/BlacklistRequest.md)| request |

### Return type

[**\AllegroApi\Model\BlackListResponse**](../Model/BlackListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `doRemoveFromBlackList()`

```php
doRemoveFromBlackList($excluded_user_id)
```

Remove users from the blacklist

Use this resource to remove users from the blacklist on given account. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-usunac-uzytkownika-z-listy-nieaktywnych-kupujacych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-remove-a-user-from-blacklist\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\BlacklistManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$excluded_user_id = 56; // int | Remove users from the blacklist.

try {
    $apiInstance->doRemoveFromBlackList($excluded_user_id);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistManagementApi->doRemoveFromBlackList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **excluded_user_id** | **int**| Remove users from the blacklist. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
