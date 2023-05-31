# # CheckoutFormAddWaybillCreated

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier of a shipment. | [optional]
**waybill** | **string** | Waybill number (parcel tracking number). Cannot be empty and must be no longer than 64 characters. | [optional]
**carrier_id** | **string** | Supported carriers are available via &lt;a href&#x3D;\&quot;#operation/getOrdersCarriersUsingGET\&quot; target&#x3D;\&quot;_blank\&quot;&gt;shipping carriers resource&lt;/a&gt;. | [optional]
**carrier_name** | **string** | Carrier name to be provided only if carrierId is OTHER, otherwise it’s ignored. Must be no longer than 30 characters. | [optional]
**line_items** | [**\AllegroApi\Model\CheckoutFormAddWaybillCreatedLineItemsInner[]**](CheckoutFormAddWaybillCreatedLineItemsInner.md) | List of order line items. They must be from the order specified in the path parameter. List cannot be empty. | [optional]
**created_at** | **string** | Date and time of the parcel tracking number registration in UTC (ISO8601 format). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
