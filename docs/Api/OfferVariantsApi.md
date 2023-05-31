# AllegroApi\OfferVariantsApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createVariantSet()**](OfferVariantsApi.md#createVariantSet) | **POST** /sale/offer-variants | Create variant set |
| [**deleteVariantSet()**](OfferVariantsApi.md#deleteVariantSet) | **DELETE** /sale/offer-variants/{setId} | Delete a variant set |
| [**getVariantSet()**](OfferVariantsApi.md#getVariantSet) | **GET** /sale/offer-variants/{setId} | Get a variant set |
| [**getVariantSets()**](OfferVariantsApi.md#getVariantSets) | **GET** /sale/offer-variants | Get the user&#39;s variant sets |
| [**updateVariantSet()**](OfferVariantsApi.md#updateVariantSet) | **PUT** /sale/offer-variants/{setId} | Update variant set |


## `createVariantSet()`

```php
createVariantSet($variant_set): \AllegroApi\Model\VariantSetResponse
```

Create variant set

Use this resource to create variant set.   A valid variant set must consist of three required elements:  - name:    - it can't be blank and must not be longer than 50 characters  - parameters:    - it should contain parameter identifiers used for offer grouping    - parameter identifiers from the offers and special `color/pattern` value (for grouping via image) are permitted    - it must contain at least one element (up to 2)  - offers:    - it must contain at least 2 offers (500 at most)    - `colorPattern` value must be set for every offer if `color/pattern` parameter is used    - `colorPattern` value can't be blank and must not be longer than 50 characters    - `colorPattern` can take arbitrary string value like `red`, `b323592c-522f-4ec1-b9ea-3764538e0ac4` (UUID), etc.    - offers having the same image should have identical `colorPattern` value    - offers must have `publication.marketplaces.base` equal to `allegro-pl`    Let's assume we have 4 offers:    - offer with id 2 having an image of a red t-shirt and S as a value of parameter with id 21    - offer with id 3 having an image of a red t-shirt and M as a value of parameter with id 21    - offer with id 4 having an image of a blue t-shirt and S as a value of parameter with id 21    - offer with id 5 having an image of a blue t-shirt and M as a value of parameter with id 21    You can build a variant set by grouping offers using combination of available parameters - examples are available in <i>Request samples</i>.    More general information about variant sets can be found [here](https://allegro.pl/pomoc/faq/wielowariantowosc-jak-polaczyc-oferty-xGgaOByGgTb#dodatkowe-informacje). Read more: <a href=\"../../tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#utworz-oferte-wielowariantowa\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#create-a-multi-variant-offer\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variant_set = {"name":"t-shirt","offers":[{"id":"2"},{"id":"3"}],"parameters":[{"id":"21"}]}; // \AllegroApi\Model\VariantSet

try {
    $result = $apiInstance->createVariantSet($variant_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->createVariantSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **variant_set** | [**\AllegroApi\Model\VariantSet**](../Model/VariantSet.md)|  | |

### Return type

[**\AllegroApi\Model\VariantSetResponse**](../Model/VariantSetResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVariantSet()`

```php
deleteVariantSet($set_id)
```

Delete a variant set

Use this resource to delete variant set by id. Offers included in variant set will not be stopped or modified by this operation. Read more: <a href=\"../../tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#usun-oferte-wielowariantowa\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#remove-a-multi-variant-offer\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 'set_id_example'; // string | Variant set identifier.

try {
    $apiInstance->deleteVariantSet($set_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->deleteVariantSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **string**| Variant set identifier. | |

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

## `getVariantSet()`

```php
getVariantSet($set_id): \AllegroApi\Model\VariantSetResponse
```

Get a variant set

Use this resource to get variant set by set id. Read more: <a href=\"../../tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#edytuj-oferte-wielowariantowa\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#update-a-multi-variant-offer\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 'set_id_example'; // string | Variant set identifier.

try {
    $result = $apiInstance->getVariantSet($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->getVariantSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **string**| Variant set identifier. | |

### Return type

[**\AllegroApi\Model\VariantSetResponse**](../Model/VariantSetResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVariantSets()`

```php
getVariantSets($offset, $limit, $query): \AllegroApi\Model\VariantSets
```

Get the user's variant sets

Use this resource to get created variant sets. The returned variant sets are ordered by name. Read more: <a href=\"../../tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#pobierz-liste-ofert-wielowariantowych\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#retrieve-a-multi-variant-offer\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Index of first returned variant set.
$limit = 10; // int | Maximum number of returned variant sets.
$query = 'query_example'; // string | Filter variant sets by name or offer id.

try {
    $result = $apiInstance->getVariantSets($offset, $limit, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->getVariantSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Index of first returned variant set. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of returned variant sets. | [optional] [default to 10] |
| **query** | **string**| Filter variant sets by name or offer id. | [optional] |

### Return type

[**\AllegroApi\Model\VariantSets**](../Model/VariantSets.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVariantSet()`

```php
updateVariantSet($set_id, $variant_set): \AllegroApi\Model\VariantSetResponse
```

Update variant set

Use this resource to edit variant set.   A valid variant set must consist of three required elements:  - name:    - it can't be blank and must not be longer than 50 characters  - parameters:    - it should contain parameter identifiers used for offer grouping    - parameter identifiers from the offers and special `color/pattern` value (for grouping via image) are permitted    - it must contain at least one element (up to 2)  - offers:    - it must contain at least 2 offers (500 at most)    - `colorPattern` value must be set for every offer if `color/pattern` parameter is used    - `colorPattern` value can't be blank and must not be longer than 50 characters    - `colorPattern` can take arbitrary string value like `red`, `b323592c-522f-4ec1-b9ea-3764538e0ac4` (UUID), etc.    - offers having the same image should have identical `colorPattern` value    - offers must have `publication.marketplaces.base` equal to `allegro-pl`    Let's assume we have 4 offers:    - offer with id 2 having an image of a red t-shirt and S as a value of parameter with id 21    - offer with id 3 having an image of a red t-shirt and M as a value of parameter with id 21    - offer with id 4 having an image of a blue t-shirt and S as a value of parameter with id 21    - offer with id 5 having an image of a blue t-shirt and M as a value of parameter with id 21    You can build a variant set by grouping offers using combination of available parameters - examples are available in <i>Request samples</i>.    More general information about variant sets can be found [here](https://allegro.pl/pomoc/faq/wielowariantowosc-jak-polaczyc-oferty-xGgaOByGgTb#dodatkowe-informacje). Read more: <a href=\"../../tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#edytuj-oferte-wielowariantowa\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#update-a-multi-variant-offer\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 'set_id_example'; // string | Variant set identifier.
$variant_set = {"name":"t-shirt","offers":[{"id":"2"},{"id":"3"}],"parameters":[{"id":"21"}]}; // \AllegroApi\Model\VariantSet

try {
    $result = $apiInstance->updateVariantSet($set_id, $variant_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->updateVariantSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **string**| Variant set identifier. | |
| **variant_set** | [**\AllegroApi\Model\VariantSet**](../Model/VariantSet.md)|  | |

### Return type

[**\AllegroApi\Model\VariantSetResponse**](../Model/VariantSetResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
