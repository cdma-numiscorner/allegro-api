# # OfferResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | [**\AllegroApi\Model\OfferCategory**](OfferCategory.md) |  | [optional]
**additional_marketplaces** | [**array<string,\AllegroApi\Model\OfferAdditionalMarketplace>**](OfferAdditionalMarketplace.md) | Settings for each additional marketplace. | [optional]
**additional_services** | [**\AllegroApi\Model\JustId**](JustId.md) |  | [optional]
**after_sales_services** | [**\AllegroApi\Model\AfterSalesServices**](AfterSalesServices.md) |  | [optional]
**attachments** | [**\AllegroApi\Model\Attachment[]**](Attachment.md) | List of offer attachments. You can attach up to 7 files to the offer – one per each attachment type as described in &lt;a href&#x3D;\&quot;/documentation/#operation/createOfferAttachmentUsingPOST\&quot; target&#x3D;\&quot;_blank\&quot;&gt;uploading offer attachments flow&lt;/a&gt;. | [optional]
**compatibility_list** | [**\AllegroApi\Model\CompatibilityList**](CompatibilityList.md) |  | [optional]
**contact** | [**\AllegroApi\Model\JustId**](JustId.md) |  | [optional]
**created_at** | **\DateTime** | Creation date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified. | [optional]
**custom_parameters** | [**\AllegroApi\Model\CustomParameter[]**](CustomParameter.md) | List of custom parameters. You can add up to 4 custom parameters, each containing exactly one value. | [optional]
**delivery** | [**\AllegroApi\Model\DeliveryFull**](DeliveryFull.md) |  | [optional]
**description** | [**\AllegroApi\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**discounts** | [**\AllegroApi\Model\Discounts**](Discounts.md) |  | [optional]
**external** | [**\AllegroApi\Model\ExternalId**](ExternalId.md) |  | [optional]
**fundraising_campaign** | [**\AllegroApi\Model\JustId**](JustId.md) |  | [optional]
**id** | **string** |  | [optional]
**images** | [**\AllegroApi\Model\ImageUrl[]**](ImageUrl.md) |  | [optional]
**location** | [**\AllegroApi\Model\Location**](Location.md) |  | [optional]
**name** | **string** | Name (title) of an offer. Length cannot be more than 50 characters. Read more: &lt;a href&#x3D;\&quot;../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt;  / &lt;a href&#x3D;\&quot;../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt; . |
**parameters** | [**\AllegroApi\Model\Parameter[]**](Parameter.md) |  | [optional]
**payments** | [**\AllegroApi\Model\Payments**](Payments.md) |  | [optional]
**product** | [**\AllegroApi\Model\JustId**](JustId.md) |  | [optional]
**promotion** | [**\AllegroApi\Model\Promotion**](Promotion.md) |  | [optional]
**publication** | [**\AllegroApi\Model\Publication**](Publication.md) |  | [optional]
**selling_mode** | [**\AllegroApi\Model\SellingModeWithNetPrice**](SellingModeWithNetPrice.md) |  | [optional]
**tax** | [**\AllegroApi\Model\ExtendedTax**](ExtendedTax.md) |  | [optional]
**tax_settings** | [**\AllegroApi\Model\OfferTaxSettings**](OfferTaxSettings.md) |  | [optional]
**size_table** | [**\AllegroApi\Model\JustId**](JustId.md) |  | [optional]
**stock** | [**\AllegroApi\Model\Stock**](Stock.md) |  | [optional]
**tecdoc_specification** | [**\AllegroApi\Model\TecdocSpecification**](TecdocSpecification.md) |  | [optional]
**b2b** | [**\AllegroApi\Model\B2b**](B2b.md) |  | [optional]
**message_to_seller_settings** | [**\AllegroApi\Model\MessageToSellerSettings**](MessageToSellerSettings.md) |  | [optional]
**updated_at** | **\DateTime** | Last update date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified | [optional]
**validation** | [**\AllegroApi\Model\Validation**](Validation.md) |  | [optional]
**language** | **string** | Declared base language of the offer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
