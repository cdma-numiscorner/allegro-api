# # SaleProductOfferPatchRequestV1AllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_set** | [**ProductSetElement[]**](ProductSetElement.md) |  | [optional]
**b2b** | [**\AllegroApi\Model\B2b**](B2b.md) |  | [optional]
**attachments** | **object[]** | An array of offer attachments. | [optional]
**fundraising_campaign** | [**\AllegroApi\Model\ProductOfferFundraisingCampaignRequest**](ProductOfferFundraisingCampaignRequest.md) |  | [optional]
**additional_services** | [**\AllegroApi\Model\ProductOfferAdditionalServicesRequest**](ProductOfferAdditionalServicesRequest.md) |  | [optional]
**compatibility_list** | [**CompatibilityListManualType**](CompatibilityListManualType.md) | For the &#x60;/sale/product-offers&#x60; resources you can send only definition of the MANUAL compatibility list. If compatibility list is provided for the product assigned to the offer, it will be used automatically. | [optional]
**delivery** | [**DeliveryProductOfferRequest**](DeliveryProductOfferRequest.md) |  | [optional]
**stock** | [**\AllegroApi\Model\SaleProductOffersRequestStock**](SaleProductOffersRequestStock.md) |  | [optional]
**publication** | [**\AllegroApi\Model\SaleProductOfferPublicationRequest**](SaleProductOfferPublicationRequest.md) |  | [optional]
**additional_marketplaces** | **map[string,object]** | Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer.&lt;br/&gt; Possible values of &#x60;marketplaceId&#x60; can be obtained from &#x60;GET /marketplaces&#x60; resource.&lt;/br&gt; See [Allegro foreign marketplaces](https://developer.allegro.pl/tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn) for more details regarding this field. | [optional]
**language** | **string** | Declared base language of the offer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
