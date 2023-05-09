# # StockSellingStats

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_week_average** | **float** | Moving daily sales average calculated for last week (7 calendar days before current day), rounded to integer using \&quot;half up\&quot; logic. Doesn&#39;t include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period. | [optional]
**last_thirty_days_sum** | **float** | Total sales for the last 30 calendar days. Doesn&#39;t include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
