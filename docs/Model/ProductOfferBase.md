# # ProductOfferBase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product id. | [optional]
**id_type** | **string** | Type of id. This field is optional. It helps in finding products more accurately. If an idType is not set, a given id is understood as a product&#39;s id.  - &#x60;GTIN&#x60; - restricts the search filtering to GTINs (Global Trade Item Number), e.g. EAN, ISBN, UPC.  - &#x60;MPN&#x60; - restricts the search filtering to MPNs (Manufacturer Part Number). | [optional]
**parameters** | [**\AllegroApi\Model\ParameterProductOfferRequest[]**](ParameterProductOfferRequest.md) | List of product parameters. | [optional]
**images** | **string[]** | List of product images. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
