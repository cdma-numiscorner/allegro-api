# # ConstraintCriteria

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** |  | [optional]
**type** | **string** | Constraint type. COUNTRY_SAME_QUANTITY is used by additional services that are realised before shipping (e.g. GIFT_WRAP), while COUNTRY_DELIVERY_SAME_QUANTITY is for additional services that are realised in delivery (e.g. CARRY_IN). | [optional]
**delivery_methods** | [**\AllegroApi\Model\JustId[]**](JustId.md) | This is used by additional services that are realised in transport (e.g. CARRY_IN), and this field exists together with COUNTRY_DELIVERY_SAME_QUANTITY constraint type. It describes which delivery methods can realise particular service. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
