# # ListingResponseFiltersValues

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the option; for NUMERIC parameters - word indicating start or end of range (i.e. *from*, *to*). | [optional]
**value** | **string** | Filter value. Should be used as query parameter value in the request. This can be:   - for MULTI and SINGLE parameters - a value identifier (e.g. KUJAWSKO_POMORSKIE option in location.province  filter),  - for other types - a value entered by user. | [optional]
**id_suffix** | **string** | Suffix used as a second part of query parameter name to be used in the request (the first part is the filter ID). Applicable for NUMERIC values only. | [optional]
**count** | **int** | Number of search results matching this filter value. | [optional]
**selected** | **bool** | Indicates whether this filter value was used in the current request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
