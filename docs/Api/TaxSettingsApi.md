# AllegroApi\TaxSettingsApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTaxSettingsForCategory()**](TaxSettingsApi.md#getTaxSettingsForCategory) | **GET** /sale/tax-settings | Get all tax settings for category


## `getTaxSettingsForCategory()`

```php
getTaxSettingsForCategory($category_id, $country_code): \AllegroApi\Model\TaxSettings
```

Get all tax settings for category

Use this resource to receive tax settings for given category. Based on received settings you may set VAT tax settings for your offers. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#opcje-faktury-i-stawki-vat\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#invoice-and-vat-settings\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\TaxSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 316194; // string | An identifier of a category for which all available tax settings will be returned.
$country_code = PL; // string[] | Country code for which tax settings will be returned. If not provided settings for all countries will be returned.

try {
    $result = $apiInstance->getTaxSettingsForCategory($category_id, $country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxSettingsApi->getTaxSettingsForCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| An identifier of a category for which all available tax settings will be returned. |
 **country_code** | [**string[]**](../Model/string.md)| Country code for which tax settings will be returned. If not provided settings for all countries will be returned. | [optional]

### Return type

[**\AllegroApi\Model\TaxSettings**](../Model/TaxSettings.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
