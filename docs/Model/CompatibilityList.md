# # CompatibilityList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the compatibility list, two values are acceptable: &#x60;MANUAL&#x60;, &#x60;PRODUCT_BASED&#x60;. &lt;ul&gt; &lt;li&gt;&#x60;MANUAL&#x60; -  for offers not associated with product - compatibility list is created with items provided by user directly in the body of the request.&lt;/li&gt; &lt;li&gt;&#x60;PRODUCT_BASED&#x60; - for offers associated with product - if compatibility list is provided in the product details (GET/sale/products/{productId}), it needs to be included in the offer in unchanged form. &lt;/li&gt; &lt;/ul&gt; | [default to 'MANUAL']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
