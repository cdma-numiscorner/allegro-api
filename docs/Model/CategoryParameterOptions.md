# # CategoryParameterOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**variants_allowed** | **bool** | Parameters with this option enabled can be used for offer variants creation. | [optional]
**variants_equal** | **bool** | All offer variants must have the same values in parameters with this option enabled. | [optional]
**ambiguous_value_id** | **string** | Indicates what value in the dictionary is defined as an ambiguous one. Only parameters with dictionaries might have this option defined. | [optional]
**depends_on_parameter_id** | **string** | Indicates whether this parameter&#39;s behaviour depends on another parameter&#39;s values: - allowed values (only for dictionary parameters; see: &#x60;dictionary[].dependsOnValueIds&#x60;), - optionality (see &#x60;requiredDependsOnValueIds&#x60;, this usage is deprecated and will be replaced by   &#x60;requiredIf&#x60; in the future), - visibility (see &#x60;displayDependsOnValueIds&#x60;, this usage is deprecated and will be replaced by &#x60;displayedIf&#x60;   in the future). | [optional]
**required_depends_on_value_ids** | **string[]** | Indicates whether this parameter&#39;s optionality depends on another parameter&#39;s values.  This parameter is required if &#x60;require&#x60; is &#x60;true&#x60; and either: - this field is &#x60;null&#x60; **or** - the parameter that this parameter depends on (see: &#x60;dependsOnParameterId&#x60;) has set any value ID from this array.  Otherwise this parameter is optional.  This field is deprecated and will be removed in the future. Please use &#x60;requiredIf&#x60; instead. | [optional]
**display_depends_on_value_ids** | **string[]** | Indicates whether this parameter&#39;s visibility depends on another parameter&#39;s values.  This parameter is visible if and only if: - this field is &#x60;null&#x60; **or** - the parameter that this parameter depends on (see: &#x60;dependsOnParameterId&#x60;) has set any value ID from this array.  Otherwise this parameter will not be displayed anywhere. Setting a value of a hidden parameter is permitted, nonetheless.  This field is deprecated and will be removed in the future. Please use &#x60;displayedIf&#x60; instead. | [optional]
**describes_product** | **bool** | Indicates if parameter is used to define products. | [optional]
**custom_values_enabled** | **bool** | Indicates if a custom value can be added to a parameter with an ambiguous value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
