# # SaleProductOfferResponseV1AllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**product_set** | [**ProductSetElementQuantity[]**](ProductSetElementQuantity.md) |  | [optional]
**category** | [**\AllegroApi\Model\OfferCategory**](OfferCategory.md) |  | [optional]
**attachments** | **object[]** | An array of offer attachments. | [optional]
**fundraising_campaign** | [**\AllegroApi\Model\ProductOfferFundraisingCampaignResponse**](ProductOfferFundraisingCampaignResponse.md) |  | [optional]
**additional_services** | [**\AllegroApi\Model\ProductOfferAdditionalServicesResponse**](ProductOfferAdditionalServicesResponse.md) |  | [optional]
**delivery** | [**\AllegroApi\Model\DeliveryProductOfferResponse**](DeliveryProductOfferResponse.md) |  | [optional]
**publication** | [**\AllegroApi\Model\SaleProductOfferPublicationResponse**](SaleProductOfferPublicationResponse.md) |  | [optional]
**additional_marketplaces** | **map[string,object]** | Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer. You will find all available marketplaces here. Even if the seller does not want the offer to be visible in the additional service, we will return it in response. | [optional]
**b2b** | [**\AllegroApi\Model\B2b**](B2b.md) |  | [optional]
**compatibility_list** | [**\AllegroApi\Model\CompatibilityListProductOfferResponse**](CompatibilityListProductOfferResponse.md) |  | [optional]
**language** | **string** | Declared base language of the offer. | [optional]
**validation** | [**\AllegroApi\Model\Validation**](Validation.md) |  | [optional]
**after_sales_services** | [**\AllegroApi\Model\AfterSalesServices**](AfterSalesServices.md) |  | [optional]
**discounts** | [**\AllegroApi\Model\DiscountsProductOfferResponse**](DiscountsProductOfferResponse.md) |  | [optional]
**stock** | [**\AllegroApi\Model\Stock**](Stock.md) |  | [optional]
**parameters** | [**\AllegroApi\Model\ParameterProductOfferResponse[]**](ParameterProductOfferResponse.md) | List of offer parameters. | [optional]
**contact** | [**JustId**](JustId.md) | Identifier of contact data for sales format ADVERTISEMENT (classified ad); retrieve it via GET /sale/offer-contacts. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | Creation date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified. | [optional]
**updated_at** | [**\DateTime**](\DateTime.md) | Last update date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
