# AllegroApi\InformationAboutMarketplacesApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**marketplacesGET()**](InformationAboutMarketplacesApi.md#marketplacesGET) | **GET** /marketplaces | Get details for all marketplaces in allegro |


## `marketplacesGET()`

```php
marketplacesGET(): \AllegroApi\Model\AllegroMarketplaces
```

Get details for all marketplaces in allegro

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\InformationAboutMarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->marketplacesGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutMarketplacesApi->marketplacesGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\AllegroMarketplaces**](../Model/AllegroMarketplaces.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
