# # DeliveryFull

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_info** | **string** | Additional information about delivery. Parameter is deprecated and will be removed in the future. Additional information is only visible on marketplace &#x60;allegro-pl&#x60;. | [optional]
**handling_time** | **string** | Handling time, ISO 8601 duration format. This field must be set to one of the following: PT0S for immediately, PT24H, P2D, P3D, P4D, P5D, P7D, P10D, P14D, P21D, P30D, P60D. | [optional]
**shipping_rates** | [**\AllegroApi\Model\JustId**](JustId.md) |  | [optional]
**shipment_date** | **\DateTime** | Shipment date, Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
