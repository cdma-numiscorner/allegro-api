# # SaleProductOfferRequestBaseAllOfPublication

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**duration** | **string** | Publication duration, ISO 8601 duration format. This field must be set to one of the following: PT0S for immediately, PT24H, P2D, P3D, P4D, P5D, P7D, P10D, P14D, P21D, P30D, P60D. | [optional]
**starting_at** | [**\DateTime**](\DateTime.md) | Publication starting date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified after activation or ending of the offer. | [optional]
**status** | [**\AllegroApi\Model\OfferStatus**](OfferStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
