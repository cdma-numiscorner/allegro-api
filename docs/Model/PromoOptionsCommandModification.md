# # PromoOptionsCommandModification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_package** | [**PromoOptionsCommandModificationPackage**](PromoOptionsCommandModificationPackage.md) | The base package. Available packages can be determined using &lt;a href&#x3D;\&quot;#operation/getAvailableOfferPromotionPackages\&quot;&gt;GET /sale/offer-promotion-packages&lt;/a&gt;. | [optional]
**extra_packages** | [**\AllegroApi\Model\PromoOptionsCommandModificationPackage[]**](PromoOptionsCommandModificationPackage.md) | Extra packages to be set on offer. Omitting this parameter will preserve the packages already present. | [optional]
**modification_time** | **string** | Time at which the modification will be applied. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
