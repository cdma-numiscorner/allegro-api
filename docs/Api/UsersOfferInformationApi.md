# AllegroApi\UsersOfferInformationApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOfferEvents()**](UsersOfferInformationApi.md#getOfferEvents) | **GET** /sale/offer-events | Get events about the seller&#39;s offers
[**getOfferSmartClassificationGET()**](UsersOfferInformationApi.md#getOfferSmartClassificationGET) | **GET** /sale/offers/{offerId}/smart | Get Smart! classification report of the particular offer
[**getOfferUsingGET()**](UsersOfferInformationApi.md#getOfferUsingGET) | **GET** /sale/offers/{offerId} | Get all fields of the particular offer
[**searchOffersUsingGET()**](UsersOfferInformationApi.md#searchOffersUsingGET) | **GET** /sale/offers | Get seller&#39;s offers


## `getOfferEvents()`

```php
getOfferEvents($from, $limit, $type): \AllegroApi\Model\SellerOfferEventsResponse
```

Get events about the seller's offers

Use this endpoint to get events concerning changes in the authorized seller's offers. At present we support the following events:   - OFFER_ACTIVATED - offer is visible on site and available for purchase, occurs when offer status changes from ACTIVATING to ACTIVE.   - OFFER_CHANGED - occurs when offer's fields has been changed e.g. description or photos.   - OFFER_ENDED - offer is no longer available for purchase, occurs when offer status changes from ACTIVE to ENDED.   - OFFER_STOCK_CHANGED - stock in an offer was changed either via purchase or by seller.   - OFFER_PRICE_CHANGED - occurs when price in an offer was changed.   - OFFER_ARCHIVED - offer is no longer available on listing and has been archived.   - OFFER_BID_PLACED - bid was placed on the offer   - OFFER_BID_CANCELED - bid for offer was canceled   - OFFER_TRANSLATION_UPDATED - translation of offer was updated   - OFFER_VISIBILITY_CHANGED - visibility of offer was changed on marketplaces  Returned events may occur by actions made via browser or API. The resource allows you to get events concerning active offers and offers scheduled for activation (status ACTIVE and ACTIVATING). Returned events do not concern offers in INACTIVE and ENDED status (the exception is OFFER_ARCHIVED event). External id is returned for all event types except OFFER_BID_PLACED and OFFER_BID_CANCELED. Please note that one change may result in more than one event. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#dziennik-zdarzen-w-ofertach-sprzedawcy\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#event-journal-concerning-changes-in-seller-s-offers\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\UsersOfferInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = MTEzMjQzODU3NA; // string | The ID of the last seen event. Events that occured after the given event will be returned.
$limit = 100; // int | The number of events that will be returned in the response.
$type = array('type_example'); // string[] | The types of events that will be returned in the response. All types of events are returned by default.

try {
    $result = $apiInstance->getOfferEvents($from, $limit, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersOfferInformationApi->getOfferEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| The ID of the last seen event. Events that occured after the given event will be returned. | [optional]
 **limit** | **int**| The number of events that will be returned in the response. | [optional] [default to 100]
 **type** | [**string[]**](../Model/string.md)| The types of events that will be returned in the response. All types of events are returned by default. | [optional]

### Return type

[**\AllegroApi\Model\SellerOfferEventsResponse**](../Model/SellerOfferEventsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferSmartClassificationGET()`

```php
getOfferSmartClassificationGET($offer_id, $marketplace_id): \AllegroApi\Model\SmartOfferClassificationReport
```

Get Smart! classification report of the particular offer

Use this resource to get a full Smart! offer classification report of one of your offers. Please keep in mind you have to meet Smart! seller conditions first - for more details, use *GET /sale/smart*. To learn more about Smart! offer requirements, see our knowledge base article: [PL](https://allegro.pl/pomoc/dla-sprzedajacych/informacje-dla-sprzedajacych/co-zrobic-aby-moje-oferty-byly-oznaczone-ikona-allegro-smart-lDkP8VbKncV) / [EN](https://allegro.pl/help/for-sellers/allegro-smart-for-sellers/how-can-i-make-my-offers-be-marked-with-the-allegro-smart-badge-rKD1RV30jFM). Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#klasyfikacja-oferty\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#offer-classification\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\UsersOfferInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier.
$marketplace_id = allegro-pl; // string | Marketplace for which offer classification report will be returned. If not specified, the result of the offer's base marketplace will be returned.

try {
    $result = $apiInstance->getOfferSmartClassificationGET($offer_id, $marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersOfferInformationApi->getOfferSmartClassificationGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |
 **marketplace_id** | **string**| Marketplace for which offer classification report will be returned. If not specified, the result of the offer&#39;s base marketplace will be returned. | [optional]

### Return type

[**\AllegroApi\Model\SmartOfferClassificationReport**](../Model/SmartOfferClassificationReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferUsingGET()`

```php
getOfferUsingGET($offer_id): \AllegroApi\Model\OfferResponse
```

Get all fields of the particular offer

Get all fields of the particular offer. This endpoint is deprecated: <a href=\"../../news/na-poczatku-2024-roku-wylaczymy-zasoby-sale-offers-sluzace-do-tworzenia-i-edycji-ofert-BvqK3XOaEcW\" target=\"_blank\">PL</a> / <a href=\"../../news/at-the-beginning-of-2024-we-will-disable-the-sale-offers-resources-for-creating-and-editing-offers-k1dG88KlxHv\" target=\"_blank\">EN</a>. Use <a href=\"../../documentation#operation/getProductOffer\">GET /sale/product-offers/{offerId}</a> instead. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#publikacja-oferty-w-asynchronicznym-api\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-publication-in-asynchronous-api\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\UsersOfferInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier.

try {
    $result = $apiInstance->getOfferUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersOfferInformationApi->getOfferUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |

### Return type

[**\AllegroApi\Model\OfferResponse**](../Model/OfferResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchOffersUsingGET()`

```php
searchOffersUsingGET($offer_id, $name, $selling_mode_price_amount_gte, $selling_mode_price_amount_lte, $publication_status, $publication_marketplace, $selling_mode_format, $external_id, $delivery_shipping_rates_id, $delivery_shipping_rates_id_empty, $sort, $limit, $offset, $category_id, $product_id_empty, $productization_required, $b2b_buyable_only_by_business, $fundraising_campaign_id, $fundraising_campaign_id_empty): \AllegroApi\Model\OffersSearchResultDto
```

Get seller's offers

Use this resource to get the list of the seller's offers. You can use different query parameters to filter the list. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-moje-oferty-w-rest-api\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#list-of-offers\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\UsersOfferInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer ID.
$name = 'name_example'; // string | The text to search in the offer title.
$selling_mode_price_amount_gte = 9.99; // float | The lower threshold of price.  If additionally a `publication.marketplace` is provided, searches using the price on the given marketplace.
$selling_mode_price_amount_lte = 125.99; // float | The upper threshold of price.  If additionally a `publication.marketplace` is provided, searches using the price on the given marketplace.
$publication_status = array('publication_status_example'); // string[] | The publication status of the offer. Passing more than one value will search for offers with any of the given statuses. By default all statuses are included. Example: `publication.status=INACTIVE&publication.status=ACTIVE` - returns offers with status `INACTIVE` or `ACTIVE`.
$publication_marketplace = new \AllegroApi\Model\\AllegroApi\Model\MarketplaceId(); // \AllegroApi\Model\MarketplaceId | Either the base marketplace or an additional marketplace of the offer.  When passing the parameter `publication.marketplace`, searches for offers with the given marketplace as either its base marketplace or one of its additional marketplaces. When the parameter is omitted, searches for offers with all marketplaces.  In addition to searching, passing the parameter also influences the functionality of other query parameter by searching and sorting by data (e.g. price) on the given marketplace.
$selling_mode_format = array('selling_mode_format_example'); // string[] | The offer's selling format. Passing more than one value will search for offers with any of the given formats. By default all formats are included. Example: `sellingMode.format=BUY_NOW&sellingMode.format=ADVERTISEMENT` - returns offers with with format `BUY_NOW` or `ADVERTISEMENT`.
$external_id = array('external_id_example'); // string[] | The ID from the client's external system. Passing more than one value will search for offers with any of the given IDs. By default no ID is included. Example: `external.id=1233&external.id=1234` - returns offers with ID `1233` or `1234`. Single ID length shouldn't exceed 100 characters.
$delivery_shipping_rates_id = 'delivery_shipping_rates_id_example'; // string | The ID of shipping rates. Returns offers with given shipping rates ID.
$delivery_shipping_rates_id_empty = True; // bool | Allows to filter offers by existence of shipping rates ID.
$sort = 'sort_example'; // string | The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by offer creation time, descending.  If additionally a `publication.marketplace` is provided, sorts by price and `stock.sold` using the data on the given marketplace.
$limit = 20; // int | The maximum number of offers returned in the response.
$offset = 56; // int | Index of the first returned offer from all search results. Maximum sum of offset and limit is 10 000 000.
$category_id = 'category_id_example'; // string | The identifier of the category, where you want to search for offers.
$product_id_empty = True; // bool | Allows to filter offers by existence of product ID.
$productization_required = True; // bool | Allows to search for offers from categories where productization is required.
$b2b_buyable_only_by_business = True; // bool | Allows to search for offers buyable only by businesses.
$fundraising_campaign_id = 'fundraising_campaign_id_example'; // string | ID of the charity fundraising campaign that benefits from this offer.
$fundraising_campaign_id_empty = True; // bool | Allows to search for charity or commercial offers.

try {
    $result = $apiInstance->searchOffersUsingGET($offer_id, $name, $selling_mode_price_amount_gte, $selling_mode_price_amount_lte, $publication_status, $publication_marketplace, $selling_mode_format, $external_id, $delivery_shipping_rates_id, $delivery_shipping_rates_id_empty, $sort, $limit, $offset, $category_id, $product_id_empty, $productization_required, $b2b_buyable_only_by_business, $fundraising_campaign_id, $fundraising_campaign_id_empty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersOfferInformationApi->searchOffersUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer ID. | [optional]
 **name** | **string**| The text to search in the offer title. | [optional]
 **selling_mode_price_amount_gte** | **float**| The lower threshold of price.  If additionally a &#x60;publication.marketplace&#x60; is provided, searches using the price on the given marketplace. | [optional]
 **selling_mode_price_amount_lte** | **float**| The upper threshold of price.  If additionally a &#x60;publication.marketplace&#x60; is provided, searches using the price on the given marketplace. | [optional]
 **publication_status** | [**string[]**](../Model/string.md)| The publication status of the offer. Passing more than one value will search for offers with any of the given statuses. By default all statuses are included. Example: &#x60;publication.status&#x3D;INACTIVE&amp;publication.status&#x3D;ACTIVE&#x60; - returns offers with status &#x60;INACTIVE&#x60; or &#x60;ACTIVE&#x60;. | [optional]
 **publication_marketplace** | [**\AllegroApi\Model\MarketplaceId**](../Model/.md)| Either the base marketplace or an additional marketplace of the offer.  When passing the parameter &#x60;publication.marketplace&#x60;, searches for offers with the given marketplace as either its base marketplace or one of its additional marketplaces. When the parameter is omitted, searches for offers with all marketplaces.  In addition to searching, passing the parameter also influences the functionality of other query parameter by searching and sorting by data (e.g. price) on the given marketplace. | [optional]
 **selling_mode_format** | [**string[]**](../Model/string.md)| The offer&#39;s selling format. Passing more than one value will search for offers with any of the given formats. By default all formats are included. Example: &#x60;sellingMode.format&#x3D;BUY_NOW&amp;sellingMode.format&#x3D;ADVERTISEMENT&#x60; - returns offers with with format &#x60;BUY_NOW&#x60; or &#x60;ADVERTISEMENT&#x60;. | [optional]
 **external_id** | [**string[]**](../Model/string.md)| The ID from the client&#39;s external system. Passing more than one value will search for offers with any of the given IDs. By default no ID is included. Example: &#x60;external.id&#x3D;1233&amp;external.id&#x3D;1234&#x60; - returns offers with ID &#x60;1233&#x60; or &#x60;1234&#x60;. Single ID length shouldn&#39;t exceed 100 characters. | [optional]
 **delivery_shipping_rates_id** | [**string**](../Model/.md)| The ID of shipping rates. Returns offers with given shipping rates ID. | [optional]
 **delivery_shipping_rates_id_empty** | **bool**| Allows to filter offers by existence of shipping rates ID. | [optional]
 **sort** | **string**| The results&#39; sorting order. No prefix in the value means ascending order. &#x60;-&#x60; prefix means descending order. If you don&#39;t provide the sort parameter, the list is sorted by offer creation time, descending.  If additionally a &#x60;publication.marketplace&#x60; is provided, sorts by price and &#x60;stock.sold&#x60; using the data on the given marketplace. | [optional]
 **limit** | **int**| The maximum number of offers returned in the response. | [optional] [default to 20]
 **offset** | **int**| Index of the first returned offer from all search results. Maximum sum of offset and limit is 10 000 000. | [optional]
 **category_id** | **string**| The identifier of the category, where you want to search for offers. | [optional]
 **product_id_empty** | **bool**| Allows to filter offers by existence of product ID. | [optional]
 **productization_required** | **bool**| Allows to search for offers from categories where productization is required. | [optional]
 **b2b_buyable_only_by_business** | **bool**| Allows to search for offers buyable only by businesses. | [optional]
 **fundraising_campaign_id** | [**string**](../Model/.md)| ID of the charity fundraising campaign that benefits from this offer. | [optional]
 **fundraising_campaign_id_empty** | **bool**| Allows to search for charity or commercial offers. | [optional]

### Return type

[**\AllegroApi\Model\OffersSearchResultDto**](../Model/OffersSearchResultDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
