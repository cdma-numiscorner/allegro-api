# # ProductChangeProposalRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Proposed product name. |
**note** | **string** | Note about product changes proposal. | [optional]
**category** | [**\AllegroApi\Model\ProductCategory**](ProductCategory.md) |  |
**images** | [**\AllegroApi\Model\ImageUrl[]**](ImageUrl.md) | List of product images. At least one image is required. |
**parameters** | [**\AllegroApi\Model\ProductParameter[]**](ProductParameter.md) | List of product parameters. |
**notify_via_email_after_verification** | **bool** | Receive an email notification after product changes proposal resolution. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
