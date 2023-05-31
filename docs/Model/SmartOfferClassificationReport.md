# # SmartOfferClassificationReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**classification** | [**\AllegroApi\Model\SmartOfferClassificationReportClassification**](SmartOfferClassificationReportClassification.md) |  | [optional]
**scheduled_for_reclassification** | **bool** | Indicates whether that particular offer is set to be reclassified in the next 24 hours | [optional]
**smart_delivery_methods** | [**\AllegroApi\Model\SmartDeliveryMethod[]**](SmartDeliveryMethod.md) | Delivery methods marked with Smart! label | [optional]
**conditions** | [**\AllegroApi\Model\SmartOfferClassificationReportConditionsInner[]**](SmartOfferClassificationReportConditionsInner.md) | Set of conditions to be met in order for that particular offer to be Smart!. Each condition filters out improperly configured delivery methods or checks some offer attributes. Order of conditions matters. Please keep in mind that this is a **PREVIEW** of an offer classification if being conducted right now - actual classification is triggered only by attribute changes and as of now it cannot be manually done on demand. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
