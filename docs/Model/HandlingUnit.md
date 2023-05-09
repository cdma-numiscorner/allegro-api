# # HandlingUnit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit_type** | **string** | The unit type of Advance Ship Notice. Available values - BOX, PALLET, CONTAINER. | [optional]
**amount** | **float** | Amount of unit type. Not required when ASN status is DRAFT. When unit type is BOX or PALLET then it means how many handling units will be sent. When unit type is CONTAINER then it means how many handling units inside a container will be sent. | [optional]
**labels_type** | **string** | Not required when ASN status is DRAFT. Available values - ONE_FULFILMENT, NONE. When unit type is CONTAINER labelsType can not be set to ONE_FULFILMENT. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
