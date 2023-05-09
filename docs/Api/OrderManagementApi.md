# AllegroApi\OrderManagementApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderInvoicesMetadata()**](OrderManagementApi.md#addOrderInvoicesMetadata) | **POST** /order/checkout-forms/{id}/invoices | Post new invoice
[**createOrderShipmentsUsingPOST()**](OrderManagementApi.md#createOrderShipmentsUsingPOST) | **POST** /order/checkout-forms/{id}/shipments | Add a parcel tracking number
[**getAllegroPickupDropOffPointsGET()**](OrderManagementApi.md#getAllegroPickupDropOffPointsGET) | **GET** /order/carriers/ALLEGRO/points | Get Allegro pickup drop off points
[**getListOfOrdersUsingGET()**](OrderManagementApi.md#getListOfOrdersUsingGET) | **GET** /order/checkout-forms | Get the user&#39;s orders
[**getOrderEventsStatisticsUsingGET()**](OrderManagementApi.md#getOrderEventsStatisticsUsingGET) | **GET** /order/event-stats | Get order events statistics
[**getOrderEventsUsingGET()**](OrderManagementApi.md#getOrderEventsUsingGET) | **GET** /order/events | Get order events
[**getOrderInvoicesDetails()**](OrderManagementApi.md#getOrderInvoicesDetails) | **GET** /order/checkout-forms/{id}/invoices | Get order invoices details
[**getOrderShipmentsUsingGET()**](OrderManagementApi.md#getOrderShipmentsUsingGET) | **GET** /order/checkout-forms/{id}/shipments | Get a list of parcel tracking numbers
[**getOrdersCarriersUsingGET()**](OrderManagementApi.md#getOrdersCarriersUsingGET) | **GET** /order/carriers | Get a list of available shipping carriers
[**getOrdersDetailsUsingGET()**](OrderManagementApi.md#getOrdersDetailsUsingGET) | **GET** /order/checkout-forms/{id} | Get an order&#39;s details
[**getParcelTrackingUsingGET()**](OrderManagementApi.md#getParcelTrackingUsingGET) | **GET** /order/carriers/{carrierId}/tracking | Get carrier parcel tracking history
[**setOrderFulfillmentUsingPUT()**](OrderManagementApi.md#setOrderFulfillmentUsingPUT) | **PUT** /order/checkout-forms/{id}/fulfillment | Set seller order status
[**uploadOrderInvoiceFile()**](OrderManagementApi.md#uploadOrderInvoiceFile) | **PUT** /order/checkout-forms/{id}/invoices/{invoiceId}/file | Upload invoice file


## `addOrderInvoicesMetadata()`

```php
addOrderInvoicesMetadata($id, $check_forms_new_order_invoice): \AllegroApi\Model\CheckFormsNewOrderInvoiceId
```

Post new invoice

Use to add new invoice metadata. Before you send an invoice file, you need to initialize the invoice instance with the required parameters. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-dodac-fakture-do-zamowienia\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#add-an-invoice-to-the-order\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier.
$check_forms_new_order_invoice = new \AllegroApi\Model\CheckFormsNewOrderInvoice(); // \AllegroApi\Model\CheckFormsNewOrderInvoice | request

try {
    $result = $apiInstance->addOrderInvoicesMetadata($id, $check_forms_new_order_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->addOrderInvoicesMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |
 **check_forms_new_order_invoice** | [**\AllegroApi\Model\CheckFormsNewOrderInvoice**](../Model/CheckFormsNewOrderInvoice.md)| request |

### Return type

[**\AllegroApi\Model\CheckFormsNewOrderInvoiceId**](../Model/CheckFormsNewOrderInvoiceId.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrderShipmentsUsingPOST()`

```php
createOrderShipmentsUsingPOST($id, $checkout_form_add_waybill_request): \AllegroApi\Model\CheckoutFormAddWaybillCreated
```

Add a parcel tracking number

Add a parcel tracking number (shipment) to given order line items. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-dodac-numer-przesylki-do-przedmiotu-w-zamowieniu\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#add-tracking-number-to-order\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier.
$checkout_form_add_waybill_request = new \AllegroApi\Model\CheckoutFormAddWaybillRequest(); // \AllegroApi\Model\CheckoutFormAddWaybillRequest | request

try {
    $result = $apiInstance->createOrderShipmentsUsingPOST($id, $checkout_form_add_waybill_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->createOrderShipmentsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |
 **checkout_form_add_waybill_request** | [**\AllegroApi\Model\CheckoutFormAddWaybillRequest**](../Model/CheckoutFormAddWaybillRequest.md)| request |

### Return type

[**\AllegroApi\Model\CheckoutFormAddWaybillCreated**](../Model/CheckoutFormAddWaybillCreated.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllegroPickupDropOffPointsGET()`

```php
getAllegroPickupDropOffPointsGET($carriers, $if_modified_since): \AllegroApi\Model\AllegroPickupDropOffPointsResponse
```

Get Allegro pickup drop off points

Get a list of Allegro pickup drop off points. Read more: <a href=\"../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-liste-punktow-allegro\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-list-of-allegro-pickup-drop-off-points\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carriers = array(new \AllegroApi\Model\\AllegroApi\Model\AllegroCarrier()); // \AllegroApi\Model\AllegroCarrier[] | List of carrier ids to filter the drop off/pick up points to only the ones where any of the listed carriers operate. In case of an empty list, all points are returned.
$if_modified_since = Sat, 01 Dec 2018 10:00:00 GMT; // string | Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Information about date (the same HTTP-date format) of last modified data is available in response - `Last-Modified`.

try {
    $result = $apiInstance->getAllegroPickupDropOffPointsGET($carriers, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getAllegroPickupDropOffPointsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carriers** | [**\AllegroApi\Model\AllegroCarrier[]**](../Model/\AllegroApi\Model\AllegroCarrier.md)| List of carrier ids to filter the drop off/pick up points to only the ones where any of the listed carriers operate. In case of an empty list, all points are returned. | [optional]
 **if_modified_since** | **string**| Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Information about date (the same HTTP-date format) of last modified data is available in response - &#x60;Last-Modified&#x60;. | [optional]

### Return type

[**\AllegroApi\Model\AllegroPickupDropOffPointsResponse**](../Model/AllegroPickupDropOffPointsResponse.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfOrdersUsingGET()`

```php
getListOfOrdersUsingGET($offset, $limit, $status, $fulfillment_status, $fulfillment_shipment_summary_line_items_sent, $line_items_bought_at_lte, $line_items_bought_at_gte, $payment_id, $surcharges_id, $delivery_method_id, $buyer_login, $marketplace_id, $updated_at_lte, $updated_at_gte, $sort): \AllegroApi\Model\CheckoutForms
```

Get the user's orders

Use this resource to get an order list. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#lista-zamowien\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#order-list\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Index of first returned checkout-form from all search results.
$limit = 100; // int | Maximum number of checkout-forms in response.
$status = 'status_example'; // string | Specify status value that checkout-forms must have to be included in the output. Allowed values are:   * `BOUGHT`: purchase without checkout form filled in.   * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change.   * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing.   * `CANCELLED`: purchase cancelled by buyer.
$fulfillment_status = 'fulfillment_status_example'; // string | Specify seller status value that checkout-forms must have to be included in the output. Allowed values are:   * `NEW`   * `PROCESSING`   * `READY_FOR_SHIPMENT`   * `READY_FOR_PICKUP`   * `SENT`   * `PICKED_UP`   * `CANCELLED`   * `SUSPENDED`.
$fulfillment_shipment_summary_line_items_sent = 'fulfillment_shipment_summary_line_items_sent_example'; // string | Specify filter for line items sending status. Allowed values are:   * `NONE`: none of line items have tracking number specified   * `SOME`: some of line items have tracking number specified   * `ALL`: all of line items have tracking number specified.
$line_items_bought_at_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Latest line item bought date. The upper bound of date time range from which checkout forms will be taken.
$line_items_bought_at_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Latest line item bought date. The lower bound of date time range from which checkout forms will be taken.
$payment_id = 'payment_id_example'; // string | Find checkout-forms having specified payment id.
$surcharges_id = 'surcharges_id_example'; // string | Find checkout-forms having specified surcharge id.
$delivery_method_id = 'delivery_method_id_example'; // string | Find checkout-forms having specified delivery method id.
$buyer_login = 'buyer_login_example'; // string | Find checkout-forms having specified buyer login.
$marketplace_id = 'marketplace_id_example'; // string | Find checkout-forms of orders purchased on specified marketplace
$updated_at_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Checkout form last modification date. The upper bound of date time range from which checkout forms will be taken.
$updated_at_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Checkout form last modification date. The lower bound of date time range from which checkout forms will be taken.
$sort = 'sort_example'; // string | The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by line item boughtAt date, descending.

try {
    $result = $apiInstance->getListOfOrdersUsingGET($offset, $limit, $status, $fulfillment_status, $fulfillment_shipment_summary_line_items_sent, $line_items_bought_at_lte, $line_items_bought_at_gte, $payment_id, $surcharges_id, $delivery_method_id, $buyer_login, $marketplace_id, $updated_at_lte, $updated_at_gte, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getListOfOrdersUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Index of first returned checkout-form from all search results. | [optional] [default to 0]
 **limit** | **int**| Maximum number of checkout-forms in response. | [optional] [default to 100]
 **status** | **string**| Specify status value that checkout-forms must have to be included in the output. Allowed values are:   * &#x60;BOUGHT&#x60;: purchase without checkout form filled in.   * &#x60;FILLED_IN&#x60;: checkout form filled in but payment is not completed yet so data could still change.   * &#x60;READY_FOR_PROCESSING&#x60;: payment completed. Purchase is ready for processing.   * &#x60;CANCELLED&#x60;: purchase cancelled by buyer. | [optional]
 **fulfillment_status** | **string**| Specify seller status value that checkout-forms must have to be included in the output. Allowed values are:   * &#x60;NEW&#x60;   * &#x60;PROCESSING&#x60;   * &#x60;READY_FOR_SHIPMENT&#x60;   * &#x60;READY_FOR_PICKUP&#x60;   * &#x60;SENT&#x60;   * &#x60;PICKED_UP&#x60;   * &#x60;CANCELLED&#x60;   * &#x60;SUSPENDED&#x60;. | [optional]
 **fulfillment_shipment_summary_line_items_sent** | **string**| Specify filter for line items sending status. Allowed values are:   * &#x60;NONE&#x60;: none of line items have tracking number specified   * &#x60;SOME&#x60;: some of line items have tracking number specified   * &#x60;ALL&#x60;: all of line items have tracking number specified. | [optional]
 **line_items_bought_at_lte** | **\DateTime**| Latest line item bought date. The upper bound of date time range from which checkout forms will be taken. | [optional]
 **line_items_bought_at_gte** | **\DateTime**| Latest line item bought date. The lower bound of date time range from which checkout forms will be taken. | [optional]
 **payment_id** | **string**| Find checkout-forms having specified payment id. | [optional]
 **surcharges_id** | **string**| Find checkout-forms having specified surcharge id. | [optional]
 **delivery_method_id** | **string**| Find checkout-forms having specified delivery method id. | [optional]
 **buyer_login** | **string**| Find checkout-forms having specified buyer login. | [optional]
 **marketplace_id** | **string**| Find checkout-forms of orders purchased on specified marketplace | [optional]
 **updated_at_lte** | **\DateTime**| Checkout form last modification date. The upper bound of date time range from which checkout forms will be taken. | [optional]
 **updated_at_gte** | **\DateTime**| Checkout form last modification date. The lower bound of date time range from which checkout forms will be taken. | [optional]
 **sort** | **string**| The results&#39; sorting order. No prefix in the value means ascending order. &#x60;-&#x60; prefix means descending order. If you don&#39;t provide the sort parameter, the list is sorted by line item boughtAt date, descending. | [optional]

### Return type

[**\AllegroApi\Model\CheckoutForms**](../Model/CheckoutForms.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderEventsStatisticsUsingGET()`

```php
getOrderEventsStatisticsUsingGET(): \AllegroApi\Model\OrderEventStats
```

Get order events statistics

Use this resource to returns object that contains event id and occurrence date of the latest event. It gives you current starting point for reading events. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-znalezc-najnowsze-zdarzenie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#how-to-find-the-newest-event\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrderEventsStatisticsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderEventsStatisticsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\OrderEventStats**](../Model/OrderEventStats.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderEventsUsingGET()`

```php
getOrderEventsUsingGET($from, $type, $limit): \AllegroApi\Model\OrderEventsList
```

Get order events

Use this resource to return events that allow you to monitor actions which clients perform, i.e. making a purchase, filling in the checkout form (FOD), finishing payment process, making a surcharge. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#dziennik-zdarzen\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#event-log\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 'from_example'; // string | You can use the event ID to retrieve subsequent chunks of events.
$type = array('type_example'); // string[] | Specify array of event types for filtering. Allowed values are:   * `BOUGHT`: purchase without checkout form filled in   * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change   * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing   * `BUYER_CANCELLED`: purchase was cancelled by buyer   * `FULFILLMENT_STATUS_CHANGED`: fulfillment status changed   * `AUTO_CANCELLED`: purchase was cancelled automatically by Allegro.
$limit = 100; // int | The maximum number of events returned in the response.

try {
    $result = $apiInstance->getOrderEventsUsingGET($from, $type, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderEventsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| You can use the event ID to retrieve subsequent chunks of events. | [optional]
 **type** | [**string[]**](../Model/string.md)| Specify array of event types for filtering. Allowed values are:   * &#x60;BOUGHT&#x60;: purchase without checkout form filled in   * &#x60;FILLED_IN&#x60;: checkout form filled in but payment is not completed yet so data could still change   * &#x60;READY_FOR_PROCESSING&#x60;: payment completed. Purchase is ready for processing   * &#x60;BUYER_CANCELLED&#x60;: purchase was cancelled by buyer   * &#x60;FULFILLMENT_STATUS_CHANGED&#x60;: fulfillment status changed   * &#x60;AUTO_CANCELLED&#x60;: purchase was cancelled automatically by Allegro. | [optional]
 **limit** | **int**| The maximum number of events returned in the response. | [optional] [default to 100]

### Return type

[**\AllegroApi\Model\OrderEventsList**](../Model/OrderEventsList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderInvoicesDetails()`

```php
getOrderInvoicesDetails($id): \AllegroApi\Model\CheckoutFormsOrderInvoices
```

Get order invoices details

Use to get invoices details including antivirus scan results and EPT invoice verification status. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-informacje-o-fakturach-dodanych-do-zamowienia\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#retrieve-information-about-invoices\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier.

try {
    $result = $apiInstance->getOrderInvoicesDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderInvoicesDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |

### Return type

[**\AllegroApi\Model\CheckoutFormsOrderInvoices**](../Model/CheckoutFormsOrderInvoices.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderShipmentsUsingGET()`

```php
getOrderShipmentsUsingGET($id): \AllegroApi\Model\CheckoutFormOrderWaybillResponse
```

Get a list of parcel tracking numbers

Get a list of parcel tracking numbers currently assigned to the order. Orders can be retrieved using REST API resource GET /order/checkout-forms. Please note that the shipment list may contain parcel tracking numbers added through other channels such as Moje Allegro or by the carrier that delivers the parcel. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-numery-przesylek-dodane-do-zamowienia\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#retrieving-tracking-numbers\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier.

try {
    $result = $apiInstance->getOrderShipmentsUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderShipmentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |

### Return type

[**\AllegroApi\Model\CheckoutFormOrderWaybillResponse**](../Model/CheckoutFormOrderWaybillResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersCarriersUsingGET()`

```php
getOrdersCarriersUsingGET(): \AllegroApi\Model\OrdersShippingCarriersResponse
```

Get a list of available shipping carriers

Shipping carriers are essential to provide accurate tracking experience for customers. Use this resource to get a list of all available shipping carriers.  The response of this resource can be stored in accordance with returned caching headers. Read more: <a href=\"../../news/nowy-zasob-do-pobrania-identyfikatorow-przewoznikow-8dmljjGRGUE\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resource-to-retrieve-available-delivery-company-id-VL6zDDdr4hk\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrdersCarriersUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrdersCarriersUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\OrdersShippingCarriersResponse**](../Model/OrdersShippingCarriersResponse.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersDetailsUsingGET()`

```php
getOrdersDetailsUsingGET($id): \AllegroApi\Model\CheckoutForm
```

Get an order's details

Use this resource to get an order details. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#szczegoly-zamowienia\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#order-details\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 29738e61-7f6a-11e8-ac45-09db60ede9d6; // string | Checkout form identifier.

try {
    $result = $apiInstance->getOrdersDetailsUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrdersDetailsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Checkout form identifier. |

### Return type

[**\AllegroApi\Model\CheckoutForm**](../Model/CheckoutForm.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParcelTrackingUsingGET()`

```php
getParcelTrackingUsingGET($carrier_id, $waybill): \AllegroApi\Model\CarrierParcelTrackingResponse
```

Get carrier parcel tracking history

Get tracking history for parcels sent via the Ship with Allegro tool using <a href=\"#operation/getAvailableDeliveryServices\" target=\"_blank\">a delivery service</a>. Read more: <a href=\"../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-historie-statusow-przesylek\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-parcels-statuses-history\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_id = 'carrier_id_example'; // string | Carrier identifier.
$waybill = array('waybill_example'); // string[] | Waybill number (parcel tracking number). Example: `waybill=AAA0000E5D201&waybill=BBB00000E5D202` - returns parcel tracking history for `AAA0000E5D201` as well as for `BBB00000E5D202`.

try {
    $result = $apiInstance->getParcelTrackingUsingGET($carrier_id, $waybill);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getParcelTrackingUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_id** | **string**| Carrier identifier. |
 **waybill** | [**string[]**](../Model/string.md)| Waybill number (parcel tracking number). Example: &#x60;waybill&#x3D;AAA0000E5D201&amp;waybill&#x3D;BBB00000E5D202&#x60; - returns parcel tracking history for &#x60;AAA0000E5D201&#x60; as well as for &#x60;BBB00000E5D202&#x60;. |

### Return type

[**\AllegroApi\Model\CarrierParcelTrackingResponse**](../Model/CarrierParcelTrackingResponse.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setOrderFulfillmentUsingPUT()`

```php
setOrderFulfillmentUsingPUT($id, $checkout_form_fulfillment, $checkout_form_revision)
```

Set seller order status

Use to set seller order status. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#zmiana-statusu-realizacji-zamowienia\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#order-fulfillment-status-change\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier.
$checkout_form_fulfillment = new \AllegroApi\Model\CheckoutFormFulfillment(); // \AllegroApi\Model\CheckoutFormFulfillment | request
$checkout_form_revision = 819b5836; // string | Checkout form revision.

try {
    $apiInstance->setOrderFulfillmentUsingPUT($id, $checkout_form_fulfillment, $checkout_form_revision);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->setOrderFulfillmentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |
 **checkout_form_fulfillment** | [**\AllegroApi\Model\CheckoutFormFulfillment**](../Model/CheckoutFormFulfillment.md)| request |
 **checkout_form_revision** | **string**| Checkout form revision. | [optional]

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadOrderInvoiceFile()`

```php
uploadOrderInvoiceFile($id, $invoice_id, $body)
```

Upload invoice file

Use to upload invoice file to match created invoice metadata. Read more: <a href=\"../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-dodac-fakture-do-zamowienia\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/process-orders-PgPMlWDr8Cv#add-an-invoice-to-the-order\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier.
$invoice_id = 'invoice_id_example'; // string | Invoice identifier.
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->uploadOrderInvoiceFile($id, $invoice_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->uploadOrderInvoiceFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |
 **invoice_id** | **string**| Invoice identifier. |
 **body** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/pdf`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
