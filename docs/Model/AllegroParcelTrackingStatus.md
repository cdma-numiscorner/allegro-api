# # AllegroParcelTrackingStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**occurred_at** | **\DateTime** | Actual shipment status change time in ISO 8601 format |
**code** | **string** | Status of the shipment. - &#x60;AVAILABLE_FOR_PICKUP&#x60; - The parcel is awaiting for pickup. - &#x60;DELIVERED&#x60; - The parcel was delivered to the receiver / collected by the receiver. - &#x60;IN_TRANSIT&#x60; - The parcel is on its way to the receiver. The status includes events such as acceptance of the shipment by the carrier, arriving at the hub or redirecting to another address. - &#x60;ISSUE&#x60; - Problem with shipment. It includes events such as the parcel was refused by the receiver or was lost. - &#x60;NOTICE_LEFT&#x60; - A notice was left because of an unsuccessful delivery attempt (for example, due to nobody was at the delivery address). - &#x60;PENDING&#x60; - The shipment has been prepared and it is awaiting to be sent. - &#x60;RELEASED_FOR_DELIVERY&#x60; - The parcel has been released for delivery to its final destination. - &#x60;RETURNED&#x60; - The parcel is being or has been returned to the sender. |
**details** | **string** | Optional description for a given status, mainly intended to describe the problem with the shipment | [optional]
**terminal** | **bool** | Indicates the final status, after which there should be no more status changes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
