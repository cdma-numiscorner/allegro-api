# AllegroApi\PublicOfferInformationApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListing()**](PublicOfferInformationApi.md#getListing) | **GET** /offers/listing | Search offers


## `getListing()`

```php
getListing($category_id, $phrase, $seller_id, $seller_login, $search_mode, $offset, $limit, $sort, $include, $fallback, $dynamic_filters): \AllegroApi\Model\ListingResponse
```

Search offers

<a href=\"../../listing/\" target=\"_blank\">Access for verified applications only</a>. Use this resource to get a list of offers based on the provided query parameters. At least one of: phrase, seller.id or category.id is required. Additional available parameters vary depending on category.id. The parameters are defined in the filters entity.  Note that requests for closed offers and searching by descriptions may be limited.  Read more: <a href=\"../../tutorials/jak-wyszukiwac-przegladac-oferty-ZM9YAKAwgfk\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-search-and-browse-offers-XxWm2ykMYHl\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PublicOfferInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 'category_id_example'; // string | The identifier of the category, where you want to search for offers.
$phrase = 'phrase_example'; // string | The search phrase. The phrase is searched in different fields of the offers depending on the value of the `searchMode` parameter.
$seller_id = 'seller_id_example'; // string | The identifier of a seller, to limit the results to offers from this seller. May be provided more than once. Should not be provided when seller.login is given.
$seller_login = 'seller_login_example'; // string | The login of a seller, to limit the results to offers from this seller. May be provided more than once. Should not be provided when seller.id is given.
$search_mode = 'REGULAR'; // string | Defines where the given phrase should be searched in. Allowed values:    - *REGULAR* - searching for a phrase in the title,   - *DESCRIPTIONS* - searching for a phrase in the title and the descriptions,   - *CLOSED* - searching for a phrase in the title of closed offers.
$offset = 0; // int | Index of the first returned offer from all search results. Max offset is `600 - <limit>`.
$limit = 60; // int | The maximum number of offers in a response.
$sort = 'relevance'; // string | Search results sorting order. `+` or no prefix in the value means ascending order. `-` prefix means descending order.
$include = 'include_example'; // string | Specify parts of the response that should be included in the output. Allowed values are the names of top level entities and *all* as an alias to all entities. By default, all top level entities are included. Use `-` prefix to exclude an entity. Example: `include=-all&include=filters&include=sort` - returns only filters and sort entities.
$fallback = true; // bool | Defines the behaviour of the search engine when no results with exact phrase match are found:    - *true* - related (not exact) results are returned,   - *false* - empty results are returned.
$dynamic_filters = array('key' => 'dynamic_filters_example'); // map[string,string] | You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id=value. When the filter definition looks like:   ````     {       \"id\": \"parameter.11323\",       \"type\": \"MULTI\",       \"name\": \"Stan\",       \"values\": [{           \"value\": \"11323_1\",           \"name\": \"nowe\",           \"count\": 21,           \"selected\": false         },         {           \"value\": \"11323_2\",           \"name\": \"używane\",           \"count\": 157,           \"selected\": false         },         {           \"value\": \"11323_238066\",           \"name\": \"po zwrocie\",           \"count\": 1,           \"selected\": false         }       ]     }   ```` You can use 'Stan' filter to query results, i.e.:   * `parameter.11323=11323_1` for \"nowe\"   * `parameter.11323=11323_2` for \"używane\"   * `parameter.11323=11323_238066` for \"po zwrocie\".

try {
    $result = $apiInstance->getListing($category_id, $phrase, $seller_id, $seller_login, $search_mode, $offset, $limit, $sort, $include, $fallback, $dynamic_filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicOfferInformationApi->getListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The identifier of the category, where you want to search for offers. | [optional]
 **phrase** | **string**| The search phrase. The phrase is searched in different fields of the offers depending on the value of the &#x60;searchMode&#x60; parameter. | [optional]
 **seller_id** | **string**| The identifier of a seller, to limit the results to offers from this seller. May be provided more than once. Should not be provided when seller.login is given. | [optional]
 **seller_login** | **string**| The login of a seller, to limit the results to offers from this seller. May be provided more than once. Should not be provided when seller.id is given. | [optional]
 **search_mode** | **string**| Defines where the given phrase should be searched in. Allowed values:    - *REGULAR* - searching for a phrase in the title,   - *DESCRIPTIONS* - searching for a phrase in the title and the descriptions,   - *CLOSED* - searching for a phrase in the title of closed offers. | [optional] [default to &#39;REGULAR&#39;]
 **offset** | **int**| Index of the first returned offer from all search results. Max offset is &#x60;600 - &lt;limit&gt;&#x60;. | [optional] [default to 0]
 **limit** | **int**| The maximum number of offers in a response. | [optional] [default to 60]
 **sort** | **string**| Search results sorting order. &#x60;+&#x60; or no prefix in the value means ascending order. &#x60;-&#x60; prefix means descending order. | [optional] [default to &#39;relevance&#39;]
 **include** | **string**| Specify parts of the response that should be included in the output. Allowed values are the names of top level entities and *all* as an alias to all entities. By default, all top level entities are included. Use &#x60;-&#x60; prefix to exclude an entity. Example: &#x60;include&#x3D;-all&amp;include&#x3D;filters&amp;include&#x3D;sort&#x60; - returns only filters and sort entities. | [optional]
 **fallback** | **bool**| Defines the behaviour of the search engine when no results with exact phrase match are found:    - *true* - related (not exact) results are returned,   - *false* - empty results are returned. | [optional] [default to true]
 **dynamic_filters** | [**map[string,string]**](../Model/string.md)| You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id&#x3D;value. When the filter definition looks like:   &#x60;&#x60;&#x60;&#x60;     {       \&quot;id\&quot;: \&quot;parameter.11323\&quot;,       \&quot;type\&quot;: \&quot;MULTI\&quot;,       \&quot;name\&quot;: \&quot;Stan\&quot;,       \&quot;values\&quot;: [{           \&quot;value\&quot;: \&quot;11323_1\&quot;,           \&quot;name\&quot;: \&quot;nowe\&quot;,           \&quot;count\&quot;: 21,           \&quot;selected\&quot;: false         },         {           \&quot;value\&quot;: \&quot;11323_2\&quot;,           \&quot;name\&quot;: \&quot;używane\&quot;,           \&quot;count\&quot;: 157,           \&quot;selected\&quot;: false         },         {           \&quot;value\&quot;: \&quot;11323_238066\&quot;,           \&quot;name\&quot;: \&quot;po zwrocie\&quot;,           \&quot;count\&quot;: 1,           \&quot;selected\&quot;: false         }       ]     }   &#x60;&#x60;&#x60;&#x60; You can use &#39;Stan&#39; filter to query results, i.e.:   * &#x60;parameter.11323&#x3D;11323_1&#x60; for \&quot;nowe\&quot;   * &#x60;parameter.11323&#x3D;11323_2&#x60; for \&quot;używane\&quot;   * &#x60;parameter.11323&#x3D;11323_238066&#x60; for \&quot;po zwrocie\&quot;. | [optional]

### Return type

[**\AllegroApi\Model\ListingResponse**](../Model/ListingResponse.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
