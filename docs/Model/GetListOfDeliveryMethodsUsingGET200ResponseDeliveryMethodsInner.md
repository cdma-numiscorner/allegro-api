# # GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Delivery method id. | [optional]
**name** | **string** | Delivery method name. Please note that only method ids are unique, not method names. For duplicate names, check the marketplaces, paymentPolicy and allegroEndorsed properties as well. | [optional]
**marketplaces** | **string[]** | List of marketplace ids where this delivery method is available for buyers. | [optional]
**payment_policy** | **string** | Whether the payment is to be collected in advance or on delivery. | [optional]
**allegro_endorsed** | **bool** | Indicates Allegro signed delivery method, which allows to easily distinguish similar delivery methods with various restrictions, e.g. Allegro Paczkomaty 24/7 InPost from Paczkomaty 24/7. | [optional]
**shipping_rates_constraints** | [**\AllegroApi\Model\GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraints**](GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraints.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
