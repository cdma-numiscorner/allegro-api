# # SaleProductOfferResponseV1

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
**additional_marketplaces** | [**map[string,\AllegroApi\Model\OfferAdditionalMarketplace]**](OfferAdditionalMarketplace.md) | Settings for each additional marketplace. | [optional]
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
**name** | **string** | Name (title) of an offer. Length cannot be more than 50 characters. Read more: &lt;a href&#x3D;\&quot;../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt;  / &lt;a href&#x3D;\&quot;../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt; . | [optional]
**payments** | [**\AllegroApi\Model\Payments**](Payments.md) |  | [optional]
**selling_mode** | [**\AllegroApi\Model\SellingMode**](SellingMode.md) |  | [optional]
**location** | [**\AllegroApi\Model\Location**](Location.md) |  | [optional]
**images** | **string[]** |  | [optional]
**description** | [**\AllegroApi\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**external** | [**\AllegroApi\Model\ExternalId**](ExternalId.md) |  | [optional]
**size_table** | [**\AllegroApi\Model\SizeTable**](SizeTable.md) |  | [optional]
**tax** | [**\AllegroApi\Model\ExtendedTax**](ExtendedTax.md) |  | [optional]
**tax_settings** | [**\AllegroApi\Model\OfferTaxSettings**](OfferTaxSettings.md) |  | [optional]
**message_to_seller_settings** | [**\AllegroApi\Model\MessageToSellerSettings**](MessageToSellerSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
