# # Location

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**city** | **string** |  | [optional]
**country_code** | **string** | The 2-letter country code as defined in ISO 3166. | [optional]
**post_code** | **string** | The format of post code depends on &#39;countryCode&#39;. For countryCode equal to &#39;PL&#39;, the expected format is &#39;XX-XXX&#39;, for other countries format is less restrictive - 12 characters or less are expected. | [optional]
**province** | **string** | This field is mandatory if countryCode is set to \&quot;PL\&quot;, for other values, currently, it is ignored. For countryCode equalling \&quot;PL\&quot;, this field must be set to one of the following: DOLNOSLASKIE, KUJAWSKO_POMORSKIE, LUBELSKIE, LUBUSKIE, LODZKIE, MALOPOLSKIE, MAZOWIECKIE, OPOLSKIE, PODKARPACKIE, PODLASKIE, POMORSKIE, SLASKIE, SWIETOKRZYSKIE, WARMINSKO_MAZURSKIE, WIELKOPOLSKIE, ZACHODNIOPOMORSKIE. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
