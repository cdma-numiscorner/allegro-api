# # ReserveInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**out_of_stock_in** | **float** | Prediction of number of days in which inventory will be sold out. | [optional]
**status** | **string** | Gives information about inventory, that can not be expressed using &#x60;outOfStockIn&#x60; property. Can be one of the given values: NOT_ENOUGH_DATA - not enough data to calculate sufficiency, LOW_STOCK - inventory quantity will run out soon (in 14 days or less) NORMAL - prediction can be calculated, EXCESS_ONE_YEAR - amount of inventory will not be exhausted in (approximately) one year threshold. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
