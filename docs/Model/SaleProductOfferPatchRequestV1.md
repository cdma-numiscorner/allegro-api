# # SaleProductOfferPatchRequestV1

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
**publication** | [**\AllegroApi\Model\SaleProductOfferRequestBaseAllOfPublication**](SaleProductOfferRequestBaseAllOfPublication.md) |  | [optional]
**additional_marketplaces** | [**map[string,\AllegroApi\Model\OfferAdditionalMarketplace]**](OfferAdditionalMarketplace.md) | Settings for each additional marketplace. | [optional]
**language** | **string** | Declared base language of the offer. | [optional]
**category** | [**OfferCategoryRequest**](OfferCategoryRequest.md) |  | [optional]
**parameters** | [**\AllegroApi\Model\ParameterProductOfferRequest[]**](ParameterProductOfferRequest.md) |  | [optional]
**after_sales_services** | [**\AllegroApi\Model\AfterSalesServicesProductOfferRequest**](AfterSalesServicesProductOfferRequest.md) |  | [optional]
**size_table** | [**\AllegroApi\Model\SizeTable**](SizeTable.md) |  | [optional]
**discounts** | [**\AllegroApi\Model\DiscountsProductOfferRequest**](DiscountsProductOfferRequest.md) |  | [optional]
**name** | **string** | Name (title) of an offer. Length cannot be more than 50 characters. Read more: &lt;a href&#x3D;\&quot;../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt;  / &lt;a href&#x3D;\&quot;../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt; . | [optional]
**payments** | [**\AllegroApi\Model\Payments**](Payments.md) |  | [optional]
**selling_mode** | [**\AllegroApi\Model\SellingMode**](SellingMode.md) |  | [optional]
**location** | [**\AllegroApi\Model\Location**](Location.md) |  | [optional]
**images** | **string[]** |  | [optional]
**description** | [**\AllegroApi\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**external** | [**\AllegroApi\Model\ExternalId**](ExternalId.md) |  | [optional]
**tax** | [**\AllegroApi\Model\ExtendedTax**](ExtendedTax.md) |  | [optional]
**tax_settings** | [**\AllegroApi\Model\OfferTaxSettings**](OfferTaxSettings.md) |  | [optional]
**message_to_seller_settings** | [**\AllegroApi\Model\MessageToSellerSettings**](MessageToSellerSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
