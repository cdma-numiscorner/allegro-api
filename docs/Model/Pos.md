# # Pos

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID. When creating a point of service (Post) the field is ignored. It is required when updating (Put) a point of service. | [optional]
**external_id** | **string** | ID from external client system. | [optional]
**name** | **string** |  |
**seller** | [**\AllegroApi\Model\Seller**](Seller.md) |  | [optional]
**type** | **string** | Indicates point type. The only valid value so far is PICKUP_POINT. |
**address** | [**\AllegroApi\Model\Address**](Address.md) |  |
**phone_number** | **string** |  | [optional]
**email** | **string** |  | [optional]
**locations** | [**\AllegroApi\Model\PosLocation[]**](PosLocation.md) | IDs for a location. When creating (Post) or updating (Put) a point of service the field is ignored. | [optional]
**open_hours** | [**\AllegroApi\Model\OpenHour[]**](OpenHour.md) | Possible empty list of opening hours. |
**service_time** | **string** | Delivery time / Time period for receipt. Date format ISO 8601 e.g. &#39;PT24H&#39; | [optional]
**payments** | [**\AllegroApi\Model\Payment[]**](Payment.md) | An empty list of payment types is available. | [optional]
**confirmation_type** | **string** | Confirmation method: AWAIT_CONTACT - We will inform you about the time of receipt, CALL_US - Please make an appointment, CONTACT_NOT_REQUIRED - Contact is not required. |
**status** | **string** | Point of service status: ACTIVE - active, TEMPORARILY_CLOSED - temporarily closed, CLOSED_DOWN - closed down, DELETED - deleted. |
**created_at** | **string** | Creation date. Date format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored. | [optional]
**updated_at** | **string** | Modification date. Date format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
