# AllegroApi\PromotionCampaignsApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPromotionToCampaignUsingPOST()**](PromotionCampaignsApi.md#addPromotionToCampaignUsingPOST) | **POST** /sale/loyalty/promotion-campaigns | Create an application for a promotion campaign
[**deleteCampaignFromPromotionUsingDELETE()**](PromotionCampaignsApi.md#deleteCampaignFromPromotionUsingDELETE) | **DELETE** /sale/loyalty/promotion-campaigns | Delete a campaign in a promotion
[**deletePromotionCampaignApplicationUsingDELETE()**](PromotionCampaignsApi.md#deletePromotionCampaignApplicationUsingDELETE) | **DELETE** /sale/loyalty/promotion-campaign-applications/{applicationId} | Delete an application for promotion campaign
[**getPromotionCampaignApplicationUsingGET()**](PromotionCampaignsApi.md#getPromotionCampaignApplicationUsingGET) | **GET** /sale/loyalty/promotion-campaign-applications/{applicationId} | Get an application for promotion campaign
[**getPromotionCampaignsUsingGET()**](PromotionCampaignsApi.md#getPromotionCampaignsUsingGET) | **GET** /sale/loyalty/promotion-campaigns | Get the user&#39;s promotion campaigns


## `addPromotionToCampaignUsingPOST()`

```php
addPromotionToCampaignUsingPOST($promotion_campaign_request_dto): \AllegroApi\Model\PromotionCampaignResponseDto
```

Create an application for a promotion campaign

For an additional fee, you can place a discount mark on a list of offers.         You have to define promotion id and campaign section giving LISTING_BADGE as the id.         Your promotion campaign application will be verified and you will be notified about the verification status via e-mail.         Fees will be charged in accordance with Annex No. 1 to the Daily deals zone regulations.         Read more: <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#zloz-wniosek\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#submit-an-application\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PromotionCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_campaign_request_dto = new \AllegroApi\Model\PromotionCampaignRequestDto(); // \AllegroApi\Model\PromotionCampaignRequestDto | request

try {
    $result = $apiInstance->addPromotionToCampaignUsingPOST($promotion_campaign_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCampaignsApi->addPromotionToCampaignUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_campaign_request_dto** | [**\AllegroApi\Model\PromotionCampaignRequestDto**](../Model/PromotionCampaignRequestDto.md)| request |

### Return type

[**\AllegroApi\Model\PromotionCampaignResponseDto**](../Model/PromotionCampaignResponseDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCampaignFromPromotionUsingDELETE()`

```php
deleteCampaignFromPromotionUsingDELETE($promotion_id, $campaign_id)
```

Delete a campaign in a promotion

Use this resource to delete campaign from promotion by promotion id and campaign id. Read more: <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-kampanie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#remove-a-promotional-campaign\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PromotionCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | The promotion unique id.
$campaign_id = 'campaign_id_example'; // string | The campaign unique id.

try {
    $apiInstance->deleteCampaignFromPromotionUsingDELETE($promotion_id, $campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCampaignsApi->deleteCampaignFromPromotionUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The promotion unique id. |
 **campaign_id** | **string**| The campaign unique id. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePromotionCampaignApplicationUsingDELETE()`

```php
deletePromotionCampaignApplicationUsingDELETE($application_id)
```

Delete an application for promotion campaign

Use this resource to delete promotion campaign application by application id. You need to use its unique id. Read more: <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-wniosek\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#delete-an-application\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PromotionCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string | The application unique id.

try {
    $apiInstance->deletePromotionCampaignApplicationUsingDELETE($application_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCampaignsApi->deletePromotionCampaignApplicationUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**| The application unique id. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotionCampaignApplicationUsingGET()`

```php
getPromotionCampaignApplicationUsingGET($application_id): object
```

Get an application for promotion campaign

Use this resource to retrieve promotion campaign application. You need to use its unique id. Read more: <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#sprawdz-status-wniosku\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#check-application-status\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PromotionCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string | The application unique id.

try {
    $result = $apiInstance->getPromotionCampaignApplicationUsingGET($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCampaignsApi->getPromotionCampaignApplicationUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**| The application unique id. |

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

## `getPromotionCampaignsUsingGET()`

```php
getPromotionCampaignsUsingGET($promotion_id, $limit, $offset): \AllegroApi\Model\PromotionCampaignsResponseDto
```

Get the user's promotion campaigns

Use this resource to retrieve promotion campaigns. You can find promotion campaign by promotion id. Read more: <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-liste-kampanii\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-promotional-campaigns\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PromotionCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | The promotion unique id.
$limit = 50; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getPromotionCampaignsUsingGET($promotion_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCampaignsApi->getPromotionCampaignsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The promotion unique id. | [optional]
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 50]
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]

### Return type

[**\AllegroApi\Model\PromotionCampaignsResponseDto**](../Model/PromotionCampaignsResponseDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
