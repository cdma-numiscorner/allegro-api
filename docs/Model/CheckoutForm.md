# # CheckoutForm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Checkout form id |
**message_to_seller** | **string** | Message from buyer to seller | [optional]
**buyer** | [**\AllegroApi\Model\CheckoutFormBuyerReference**](CheckoutFormBuyerReference.md) |  |
**payment** | [**\AllegroApi\Model\CheckoutFormPaymentReference**](CheckoutFormPaymentReference.md) |  | [optional]
**status** | [**\AllegroApi\Model\CheckoutFormStatus**](CheckoutFormStatus.md) |  |
**fulfillment** | [**\AllegroApi\Model\CheckoutFormFulfillment**](CheckoutFormFulfillment.md) |  | [optional]
**delivery** | [**\AllegroApi\Model\CheckoutFormDeliveryReference**](CheckoutFormDeliveryReference.md) |  | [optional]
**invoice** | [**\AllegroApi\Model\CheckoutFormInvoiceInfo**](CheckoutFormInvoiceInfo.md) |  | [optional]
**line_items** | [**\AllegroApi\Model\CheckoutFormLineItem[]**](CheckoutFormLineItem.md) |  |
**surcharges** | [**\AllegroApi\Model\CheckoutFormPaymentReference[]**](CheckoutFormPaymentReference.md) |  |
**discounts** | [**\AllegroApi\Model\CheckoutFormDiscount[]**](CheckoutFormDiscount.md) |  |
**marketplace** | [**\AllegroApi\Model\CheckoutFormMarketplace**](CheckoutFormMarketplace.md) |  | [optional]
**summary** | [**\AllegroApi\Model\CheckoutFormSummary**](CheckoutFormSummary.md) |  |
**updated_at** | **string** | Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601). | [optional]
**revision** | **string** | Checkout form revision | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
