# AllegroApi\RebatesAndPromotionsApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPromotionUsingPOST1()**](RebatesAndPromotionsApi.md#createPromotionUsingPOST1) | **POST** /sale/loyalty/promotions | Create a new promotion
[**deactivatePromotionUsingDELETE()**](RebatesAndPromotionsApi.md#deactivatePromotionUsingDELETE) | **DELETE** /sale/loyalty/promotions/{promotionId} | Deactivate a promotion by id
[**getPromotionUsingGET()**](RebatesAndPromotionsApi.md#getPromotionUsingGET) | **GET** /sale/loyalty/promotions/{promotionId} | Get a promotion data by id
[**listSellerPromotionsUsingGET1()**](RebatesAndPromotionsApi.md#listSellerPromotionsUsingGET1) | **GET** /sale/loyalty/promotions | Get the user&#39;s list of promotions
[**updatePromotionUsingPUT()**](RebatesAndPromotionsApi.md#updatePromotionUsingPUT) | **PUT** /sale/loyalty/promotions/{promotionId} | Modify a promotion


## `createPromotionUsingPOST1()`

```php
createPromotionUsingPOST1($seller_create_rebate_request_dto): \AllegroApi\Model\SellerRebateDto
```

Create a new promotion

This endpoint creates a new promotion. You can create promotions only if your base marketplace is `allegro-pl`. Created promotions are visible only on the `allegro-pl` marketplace. You can define the following types of promotions: 1. Large order discount <br> Only company users will see and be eligible for this type of promotion. In order to create a large order discount, you also have to be a company user. Furthermore, you are allowed to have only one active order discount at a time. Define a promotion with a single benefit of type **LARGE_ORDER_DISCOUNT** and a single criterion of type **ALL_OFFERS**. The benefit specification should contain a list of order value based discount thresholds. Threshold's order value defines the minimum total value of an order for which the threshold is applicable (`lowerBound`). Threshold's discount defines the discount percentage applied when the threshold is applied. The percentage's fractional part must be equal to 0. Only the highest applicable threshold (if any) will be applied to the total value of the order. A threshold with a higher order value than another threshold in the order discount must also have a higher discount. Large order discount is assigned automatically to all seller's offers. Moreover, it will be assigned to all newly added seller's offers once activated. Please note that it may take some time to propagate this type of promotion to all of your offers. Read more: <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#dodaj-rabat\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#add-large-order-discount\" target=\"_blank\">EN</a>. 2. Wholesale price list <br> Only company users will see and be eligible for this type of promotion. In order to create a wholesale price list, you also have to be a company user. Define a promotion with a single benefit of type **WHOLESALE_PRICE_LIST** and a single criterion of type **OFFERS_ASSIGNED_EXTERNALLY**. The benefit specification should contain a name (it will be visible to you only) and a list of quantity based discount thresholds. Threshold's quantity defines the minimum number of units of an offer for which the threshold is applicable (`lowerBound`). Threshold's discount defines the discount percentage applied when the threshold is applied. The percentage's fractional part must be equal to 0. Only the highest applicable threshold (if any) will be applied to the total price of units of the offer bought. A threshold with a higher quantity than another threshold in the price list must also have a higher discount. In order to assign offers to a wholesale price list, use `discounts` field in <a href=\"#operation/modificationCommandUsingPUT\">batch offer modification</a>. Read more: <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#dodaj-cennik-hurtowy\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#add-wholesale-price-list\" target=\"_blank\">EN</a>. 3. Bundle <br> In order to create a new bundle, you have to define a  promotion with a single benefit of type **ORDER_FIXED_DISCOUNT** and a single criterion of type **CONTAINS_OFFERS**. In the benefit specification you have to declare the discount amount that you want to be deducted from the sum of bundled offers prices. In the offer criterion you need to pass a list of offers that are to be grouped as a bundle. For each offer you have to define a fixed quantity (that many pieces of your offer will be part of the bundle) and you also have to set a promotionEntryPoint flag (offers with this flag set to true will have a section that allows the users to purchase your bundle). Read more: <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#dodaj-promocyjny-zestaw\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#add-promotional-set-of-offers\" target=\"_blank\">EN</a>  4. Multipack <br> In order to create a new multipack, you have to define a promotion with a single benefit of type **UNIT_PERCENTAGE_DISCOUNT** and a single criterion of type **CONTAINS_OFFERS**. The benefit specification should contain a configuration section with a percentage which indicates the specific discount for the discounted offer. This percentage should be an integer value greater than 15 for quantity 2, greater than 30 for quantity 3, greater than 40 for quantity 4, greater than 50 for quantity 5 and lower than or equal to 100. The specification should also contain a trigger section with a field forEachQuantity that defines the amount of items in the multipack which is necessary to trigger the benefit. Additionally, the discountedNumber field must be set to 1 by default as you can only discount one unit in a multipack. Finally, the offer criterion specifies the offer for which the multipack promotion will take effect. Read more: <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#dodaj-rabat-ilosciowy\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#add-quantitative-discount\" target=\"_blank\">EN</a> 5. Cross-offer multipack <br> A cross-offer multipack is created in the same fashion as a standard multipack. The only difference is that you need to pass more than 1 offer in the offer criterion section. This group of offers is then considered as a pool from which users can pick and choose forEachQuantity offers and the cheapest of them gets a discount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\RebatesAndPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_create_rebate_request_dto = {"benefits":[{"specification":{"type":"LARGE_ORDER_DISCOUNT","thresholds":[{"orderValue":{"lowerBound":{"amount":"1000.00","currency":"PLN"}},"discount":{"percentage":"5.00"}},{"orderValue":{"lowerBound":{"amount":"1500.00","currency":"PLN"}},"discount":{"percentage":"8.00"}}]}}],"offerCriteria":[{"type":"ALL_OFFERS"}]}; // \AllegroApi\Model\SellerCreateRebateRequestDto

try {
    $result = $apiInstance->createPromotionUsingPOST1($seller_create_rebate_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RebatesAndPromotionsApi->createPromotionUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_create_rebate_request_dto** | [**\AllegroApi\Model\SellerCreateRebateRequestDto**](../Model/SellerCreateRebateRequestDto.md)|  |

### Return type

[**\AllegroApi\Model\SellerRebateDto**](../Model/SellerRebateDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivatePromotionUsingDELETE()`

```php
deactivatePromotionUsingDELETE($promotion_id)
```

Deactivate a promotion by id

Use this resource to deactivate the requested promotion. You need to use its unique id. Read more about: Large order discount <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-rabat\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#remove-large-order-discount\" target=\"_blank\">EN</a>, Wholesale price list <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-cennik\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#remove-wholesale-price-list\" target=\"_blank\">EN</a>, Bundles <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-promocyjny-zestaw\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#remove-a-promotional-set-of-offers\" target=\"_blank\">EN</a>, Multipack <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-rabat-ilosciowy\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#remove-an-quantitative-discount\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\RebatesAndPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | Promotion identifier.

try {
    $apiInstance->deactivatePromotionUsingDELETE($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling RebatesAndPromotionsApi->deactivatePromotionUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| Promotion identifier. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotionUsingGET()`

```php
getPromotionUsingGET($promotion_id): \AllegroApi\Model\SellerRebateDto
```

Get a promotion data by id

Use this resource to returns the requested promotion. You need to use its unique id. Read more about: Large order discount <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-informacje-o-rabacie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-information-about-large-order-discount\" target=\"_blank\">EN</a>, Wholesale price list <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-informacje-o-cenniku\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-information-about-wholesale-price-list\" target=\"_blank\">EN</a>, Bundles <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-informacje-o-promocyjnym-zestawie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-information-about-a-promotional-set-of-offers\" target=\"_blank\">EN</a>, Multipack <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-informacje-o-rabacie-ilosciowym\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#information-about-an-quantitative-discount\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\RebatesAndPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | Promotion identifier.

try {
    $result = $apiInstance->getPromotionUsingGET($promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RebatesAndPromotionsApi->getPromotionUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| Promotion identifier. |

### Return type

[**\AllegroApi\Model\SellerRebateDto**](../Model/SellerRebateDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSellerPromotionsUsingGET1()`

```php
listSellerPromotionsUsingGET1($limit, $offset, $offer_id, $promotion_type): \AllegroApi\Model\SellerRebatesDto
```

Get the user's list of promotions

<p>Get a list of promotions defined by the authorized user.</p> <p>Restrictions:</p> <p>Sum of limit and offset must be equal to or lower than 50000. Limit must be equal to or lower than 5000.</p> <p>Example:</p> <p>offset = 49950 and limit = 50 will return promotions</p> <p>offset = 49950 and limit = 51 will return 422 http error</p> <p>offset = 0 and limit = 5000 will return promotions</p> <p>offset = 0 and limit = 5001 will return 422 http error</p> <p>Read more about: Large order discount <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-dostepne-rabaty\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-large-order-discount\" target=\"_blank\">EN</a>, Wholesale price list <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-dostepne-cenniki\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-wholesale-price-lists\" target=\"_blank\">EN</a>, Bundles and Multipack <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-dostepne-rabaty-ilosciowe\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-promotional-sets\" target=\"_blank\">EN</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\RebatesAndPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Limit of promotions per page.
$offset = 0; // int | Distance between the beginning of the document and the point from which promotions are returned.
$offer_id = 8226673525; // string | Filter by offer id. No promotions with `OFFERS_ASSIGNED_EXTERNALLY` or `ALL_OFFERS` criteria will be returned if this parameter is present.
$promotion_type = 'promotion_type_example'; // string | Filter by promotion type.

try {
    $result = $apiInstance->listSellerPromotionsUsingGET1($limit, $offset, $offer_id, $promotion_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RebatesAndPromotionsApi->listSellerPromotionsUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limit of promotions per page. | [optional] [default to 50]
 **offset** | **int**| Distance between the beginning of the document and the point from which promotions are returned. | [optional] [default to 0]
 **offer_id** | **string**| Filter by offer id. No promotions with &#x60;OFFERS_ASSIGNED_EXTERNALLY&#x60; or &#x60;ALL_OFFERS&#x60; criteria will be returned if this parameter is present. | [optional]
 **promotion_type** | **string**| Filter by promotion type. | [optional]

### Return type

[**\AllegroApi\Model\SellerRebatesDto**](../Model/SellerRebatesDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePromotionUsingPUT()`

```php
updatePromotionUsingPUT($promotion_id, $seller_create_rebate_request_dto): \AllegroApi\Model\SellerRebateDto
```

Modify a promotion

Use this resource to update a promotion by its unique id. Only wholesale price lists or large order discounts can be updated. Benefit type cannot be changed. Read more about: Large order discount <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#edytuj-progi-rabatowe\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#edit-discount-thresholds\" target=\"_blank\">EN</a>, Wholesale price list <a href=\"../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#edytuj-cennik\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#edit-wholesale-price-list\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\RebatesAndPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | Promotion identifier.
$seller_create_rebate_request_dto = {"benefits":[{"specification":{"type":"LARGE_ORDER_DISCOUNT","thresholds":[{"orderValue":{"lowerBound":{"amount":"1000.00","currency":"PLN"}},"discount":{"percentage":"5.00"}},{"orderValue":{"lowerBound":{"amount":"1500.00","currency":"PLN"}},"discount":{"percentage":"8.00"}},{"orderValue":{"lowerBound":{"amount":"2000.00","currency":"PLN"}},"discount":{"percentage":"10.00"}}]}}],"offerCriteria":[{"type":"ALL_OFFERS"}]}; // \AllegroApi\Model\SellerCreateRebateRequestDto

try {
    $result = $apiInstance->updatePromotionUsingPUT($promotion_id, $seller_create_rebate_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RebatesAndPromotionsApi->updatePromotionUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| Promotion identifier. |
 **seller_create_rebate_request_dto** | [**\AllegroApi\Model\SellerCreateRebateRequestDto**](../Model/SellerCreateRebateRequestDto.md)|  |

### Return type

[**\AllegroApi\Model\SellerRebateDto**](../Model/SellerRebateDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
