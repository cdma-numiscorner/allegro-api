# # CompatibilityListIdItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [optional] [default to 'ID']
**id** | **string** | Id of the compatible item. Should be used in categories where ID version of compatible list is supported. See &lt;a href&#x3D;\&quot;/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get\&quot;&gt; supported-categories&lt;/a&gt; resource. &lt;a href&#x3D;\&quot;../../compatibility_list\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Read more&lt;/a&gt;. |
**text** | **string** | Text description of the compatible item. When creating (Post) or updating (Put) a compatibility list the field is ignored. | [optional]
**additional_info** | [**\AllegroApi\Model\CompatibilityListIdItemAdditionalInfo[]**](CompatibilityListIdItemAdditionalInfo.md) | Details of the compatible item represented by ID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
