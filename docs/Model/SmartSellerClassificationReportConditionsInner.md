# # SmartSellerClassificationReportConditionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Technical condition name | [optional]
**name** | **string** | Condition name | [optional]
**description** | **string** | Brief condition description, might contain useful instructions to help making that particular condition pass | [optional]
**value** | **float** | Value of related user attribute that this condition tests. Has to be greater that threshold if present. | [optional]
**threshold** | **float** | Minimum required &#x60;value&#x60; of related user attribute. | [optional]
**fulfilled** | **bool** | Indicates whether this condition is met | [optional]
**required** | **bool** | Indicates whether this condition is required to obtain Smart! status. Please note that certain conditions may be required (or not) based on result of checking other conditions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
