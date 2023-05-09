# # CustomerReturn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional]
**reference_number** | **string** |  | [optional]
**order_id** | **string** |  | [optional]
**items** | [**\AllegroApi\Model\CustomerReturnItem[]**](CustomerReturnItem.md) | List of returned items. | [optional]
**refund** | [**\AllegroApi\Model\CustomerReturnRefund**](CustomerReturnRefund.md) |  | [optional]
**parcels** | [**\AllegroApi\Model\CustomerReturnReturnParcel[]**](CustomerReturnReturnParcel.md) | List of returned parcels. | [optional]
**rejection** | [**\AllegroApi\Model\CustomerReturnRejection**](CustomerReturnRejection.md) |  | [optional]
**marketplace_id** | **string** | The marketplace ID where operation was made. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
