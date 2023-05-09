# # ReturnPolicyAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Company or person name. Length is dependent on specified &#39;countryCode&#39; - for CZ length is equal to 50 characters, for other countries - 200. |
**street** | **string** | Street name. Length is dependent on specified &#39;countryCode&#39; - for PL and CZ length is equal to 35 characters, for other countries - 200. |
**post_code** | **string** | Post code format is dependent on &#39;countryCode&#39; - PL&#x3D;&#39;XX-XXX&#39;, CZ&#x3D;&#39;XXX XX&#39; for other countries format is less restrictive - 16 characters alphanumeric with &#39; &#39;(space) and &#39;-&#39; allowed. |
**city** | **string** | City name. Length is dependent on specified &#39;countryCode&#39; - for PL and CZ length is equal to 30 characters, for other countries - 200. |
**country_code** | **string** | Country code. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
