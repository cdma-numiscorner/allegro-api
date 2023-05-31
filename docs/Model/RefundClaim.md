# # RefundClaim

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the returned refund application. | [optional]
**status** | **string** | Status of the returned refund application. - &#x60;IN_PROGRESS&#x60; - the application is being processed or awaits user or admin action. - &#x60;WAITING_FOR_PAYMENT_REFUND&#x60; - the application is being processed and awaits payment refund to buyer. - &#x60;GRANTED&#x60; - the application was accepted and a commission refund was granted as requested,   or the application was rejected and the seller successfully appealed.  - &#x60;REJECTED&#x60; - the application was rejected and no commission was refunded. - &#x60;REJECTED_AFTER_APPEAL&#x60; - the application was initially rejected and the seller unsuccessfully appealed. - &#x60;CANCELLED&#x60; - the application was cancelled by the seller. - &#x60;APPEALED&#x60; - the application was rejected and the seller appealed, but the appeal has not yet finished processing. | [optional]
**quantity** | **int** | Quantity of product for which the seller filed the refund application. | [optional]
**commission** | [**\AllegroApi\Model\RefundClaimCommission**](RefundClaimCommission.md) |  | [optional]
**buyer** | [**\AllegroApi\Model\RefundClaimBuyer**](RefundClaimBuyer.md) |  | [optional]
**created_at** | **\DateTime** | Date when the refund application was created. | [optional]
**line_item** | [**\AllegroApi\Model\RefundClaimLineItem**](RefundClaimLineItem.md) |  | [optional]
**type** | **string** | Type of commission refund application. - &#x60;MANUAL&#x60; - the application was created manually by the seller. - &#x60;AUTOMATIC&#x60; - the application was created automatically. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
