# # CategoryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the category. This can be either in UUID format or an integer format. You should be ready to accept any string value as the category ID. | [optional]
**leaf** | **bool** | Indicates whether the category is at the lowest level. Leaf categories do not have any children. Offers can be listed only in leaf categories. | [optional]
**name** | **string** | Name of the category in Polish. | [optional]
**options** | [**\AllegroApi\Model\CategoryOptionsDto**](CategoryOptionsDto.md) |  | [optional]
**parent** | [**\AllegroApi\Model\CategoryDtoParent**](CategoryDtoParent.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
