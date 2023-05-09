# AllegroApi\CharityApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchFundraisingCampaigns()**](CharityApi.md#searchFundraisingCampaigns) | **GET** /charity/fundraising-campaigns | Search fundraising campaigns


## `searchFundraisingCampaigns()`

```php
searchFundraisingCampaigns($limit, $phrase): \AllegroApi\Model\FundraisingCampaigns
```

Search fundraising campaigns

Use this resource to search fundraising campaigns. Read more: <a href=\"../../news/wystaw-oferte-charytatywna-na-allegro-MR87PBxZySY\" target=\"_blank\">PL</a> / <a href=\"../../news/list-a-charity-offer-on-allegro-LRV0572GOhr\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\CharityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Maximum number of returned results.
$phrase = 'phrase_example'; // string | Fundraising campaign name or it's Organization name prefix to search for.

try {
    $result = $apiInstance->searchFundraisingCampaigns($limit, $phrase);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharityApi->searchFundraisingCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of returned results. |
 **phrase** | **string**| Fundraising campaign name or it&#39;s Organization name prefix to search for. |

### Return type

[**\AllegroApi\Model\FundraisingCampaigns**](../Model/FundraisingCampaigns.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.beta.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
