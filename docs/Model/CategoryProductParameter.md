# # CategoryProductParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the parameter. | [optional]
**name** | **string** | The name of the parameter in Polish. | [optional]
**type** | **string** | The type of the product parameter. Other fields in this structure may appear based on the type of the parameter. |
**required** | **bool** | Indicates whether the value of this parameter must be set in a product. Product without required parameters set cannot be created. See also &#x60;requiredIf&#x60;. | [optional]
**required_if** | [**\AllegroApi\Model\CategoryParameterRequirementConditions**](CategoryParameterRequirementConditions.md) |  | [optional]
**displayed_if** | [**\AllegroApi\Model\CategoryParameterDisplayConditions**](CategoryParameterDisplayConditions.md) |  | [optional]
**unit** | **string** | The unit in which values of the parameter are used. May be &#x60;null&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
