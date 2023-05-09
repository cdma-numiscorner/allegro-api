# # RefundLineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The line-item identifier. |
**type** | **string** | Type for line items refund. QUANTITY is provided when you can refund one or more items. AMOUNT is provided when you can refund a partial price. |
**quantity** | **float** | This field is provided for QUANTITY type only. It specifies how many items will be refunded. | [optional]
**value** | [**\AllegroApi\Model\RefundLineItemValue**](RefundLineItemValue.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
