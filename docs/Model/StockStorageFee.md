# # StockStorageFee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status of the storage fee. * NOT_APPLICABLE - fee for yesterday has not been charged and there are no available items of the product. * INCLUDED_IN_SERVICE_PRICE - fee for yesterday has not been charged and there are available items of the product. * CHARGED - the fee has been charged on seller&#39;s billing. | [optional]
**fee_status_at** | **string** | Date when the fee was charged. Normally we return the data for the day before. However, due to asynchronous nature of fee update process, which are calculated overnight, it is possible to have some outdated entries when querying during fee recalculation process. This value allows to ensure that you work on the most recent data. | [optional]
**details** | [**\AllegroApi\Model\StockStorageFeeDetails**](StockStorageFeeDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
