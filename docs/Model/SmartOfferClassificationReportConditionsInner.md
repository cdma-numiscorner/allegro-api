# # SmartOfferClassificationReportConditionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Technical condition name | [optional]
**name** | **string** | Condition name | [optional]
**description** | **string** | Brief condition description, might contain useful instructions to help making that particular condition pass | [optional]
**fulfilled** | **bool** | Indicates whether this condition is met | [optional]
**passed_delivery_methods** | [**\AllegroApi\Model\DeliveryMethodId[]**](DeliveryMethodId.md) | Set of delivery methods that meet this condition. May be null if the condition does not apply to delivery methods. | [optional]
**failed_delivery_methods** | [**\AllegroApi\Model\DeliveryMethodId[]**](DeliveryMethodId.md) | Set of delivery methods that fail to meet this condition. May be null if the condition does not apply to delivery methods. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
