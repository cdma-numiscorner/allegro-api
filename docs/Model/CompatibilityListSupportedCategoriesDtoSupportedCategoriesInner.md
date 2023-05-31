# # CompatibilityListSupportedCategoriesDtoSupportedCategoriesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **string** | Identifier of the category, where you can use the compatibility list in an offer listed in the category or in all subcategories, which belongs to returned category. | [optional]
**name** | **string** | Name of supported category. | [optional]
**items_type** | **string** | Type of the compatible item. | [optional]
**input_type** | **string** | Type of the representation of compatible item. &lt;ul&gt; &lt;li&gt;&#x60;TEXT&#x60; - item on compatibility list has to be provided as plain text.&lt;/li&gt; &lt;li&gt;&#x60;ID&#x60; - item on compatibility list has to be provided as identifier of compatible product. To obtain it please use &lt;a href&#x3D;\&quot;/documentation/#tag/Compatibility-List/paths/~1sale~1compatible-products/get\&quot;&gt;compatible-products&lt;/a&gt; resource together with &#x60;itemsType&#x60; supported in particular category. &lt;/li&gt; &lt;/ul&gt; | [optional]
**validation_rules** | [**\AllegroApi\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesInnerValidationRules**](CompatibilityListSupportedCategoriesDtoSupportedCategoriesInnerValidationRules.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
