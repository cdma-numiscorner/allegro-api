# # CheckoutFormLineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Line item identifier |
**offer** | [**\AllegroApi\Model\OfferReference**](OfferReference.md) |  |
**quantity** | **float** | quantity |
**original_price** | [**\AllegroApi\Model\Price**](Price.md) |  |
**price** | [**\AllegroApi\Model\Price**](Price.md) |  |
**reconciliation** | [**\AllegroApi\Model\LineItemReconciliation**](LineItemReconciliation.md) |  | [optional]
**selected_additional_services** | [**\AllegroApi\Model\CheckoutFormAdditionalService[]**](CheckoutFormAdditionalService.md) |  | [optional]
**bought_at** | [**\DateTime**](\DateTime.md) | ISO date when offer was bought | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
