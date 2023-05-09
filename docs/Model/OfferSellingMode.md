# # OfferSellingMode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | [**\AllegroApi\Model\SellingModeFormat**](SellingModeFormat.md) |  | [optional]
**price** | [**\AllegroApi\Model\OfferPrice**](OfferPrice.md) |  | [optional]
**fixed_price** | [**\AllegroApi\Model\OfferFixedPrice**](OfferFixedPrice.md) |  | [optional]
**popularity** | **int** | Lower bound of popularity range of the offer for *BUY_NOW* selling format. | [optional]
**popularity_range** | **string** | Popularity ranges of the offer for *BUY_NOW* selling format. Possible values: 0, [1-5], [6-10], [11-20], [21-50], [51-100] and [101+] | [optional]
**bid_count** | **int** | Number of bidders for *AUCTION* selling format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
