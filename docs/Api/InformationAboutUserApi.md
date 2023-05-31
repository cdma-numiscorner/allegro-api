# AllegroApi\InformationAboutUserApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAdditionalEmailUsingPOST()**](InformationAboutUserApi.md#addAdditionalEmailUsingPOST) | **POST** /account/additional-emails | Add a new additional email address to user&#39;s account |
| [**answerUserRatingUsingPUT()**](InformationAboutUserApi.md#answerUserRatingUsingPUT) | **PUT** /sale/user-ratings/{ratingId}/answer | Answer for user&#39;s rating |
| [**deleteAdditionalEmailUsingDELETE()**](InformationAboutUserApi.md#deleteAdditionalEmailUsingDELETE) | **DELETE** /account/additional-emails/{emailId} | Delete an additional email address |
| [**getAdditionalEmailUsingGET()**](InformationAboutUserApi.md#getAdditionalEmailUsingGET) | **GET** /account/additional-emails/{emailId} | Get information about a particular additional email |
| [**getListOfAdditionalEmailsUsingGET()**](InformationAboutUserApi.md#getListOfAdditionalEmailsUsingGET) | **GET** /account/additional-emails | Get user&#39;s additional emails |
| [**getSellerSmartClassificationGET()**](InformationAboutUserApi.md#getSellerSmartClassificationGET) | **GET** /sale/smart | Get Smart! seller classification report |
| [**getUserRatingsUsingGET()**](InformationAboutUserApi.md#getUserRatingsUsingGET) | **GET** /sale/user-ratings | Get the user&#39;s ratings |
| [**meGET()**](InformationAboutUserApi.md#meGET) | **GET** /me | Get basic information about user |
| [**userRatingRemovalUsingPUT()**](InformationAboutUserApi.md#userRatingRemovalUsingPUT) | **PUT** /sale/user-ratings/{ratingId}/removal | Request removal of user&#39;s rating |


## `addAdditionalEmailUsingPOST()`

```php
addAdditionalEmailUsingPOST($additional_email_request): \AllegroApi\Model\AdditionalEmail
```

Add a new additional email address to user's account

Use this resource to add a new additional email address to account. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-dodac-adres-e-mail\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-add-an-additional-email\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_email_request = new \AllegroApi\Model\AdditionalEmailRequest(); // \AllegroApi\Model\AdditionalEmailRequest | request

try {
    $result = $apiInstance->addAdditionalEmailUsingPOST($additional_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->addAdditionalEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **additional_email_request** | [**\AllegroApi\Model\AdditionalEmailRequest**](../Model/AdditionalEmailRequest.md)| request | |

### Return type

[**\AllegroApi\Model\AdditionalEmail**](../Model/AdditionalEmail.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `answerUserRatingUsingPUT()`

```php
answerUserRatingUsingPUT($rating_id, $user_rating_answer_request): \AllegroApi\Model\Answer
```

Answer for user's rating

Use this resource to answer for received rating. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-dodac-odpowiedz-na-ocene\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-answer-for-user-rating\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rating_id = 5df0a6d1ef437e00255572a1; // string | ID of the rating.
$user_rating_answer_request = new \AllegroApi\Model\UserRatingAnswerRequest(); // \AllegroApi\Model\UserRatingAnswerRequest | User rating answer request.

try {
    $result = $apiInstance->answerUserRatingUsingPUT($rating_id, $user_rating_answer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->answerUserRatingUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rating_id** | **string**| ID of the rating. | |
| **user_rating_answer_request** | [**\AllegroApi\Model\UserRatingAnswerRequest**](../Model/UserRatingAnswerRequest.md)| User rating answer request. | |

### Return type

[**\AllegroApi\Model\Answer**](../Model/Answer.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdditionalEmailUsingDELETE()`

```php
deleteAdditionalEmailUsingDELETE($email_id)
```

Delete an additional email address

Use this resource to delete one of additional emails. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-usunac-adres-e-mail\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-remove-e-mail\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | Id of the additional email to be deleted.

try {
    $apiInstance->deleteAdditionalEmailUsingDELETE($email_id);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->deleteAdditionalEmailUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_id** | **string**| Id of the additional email to be deleted. | |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdditionalEmailUsingGET()`

```php
getAdditionalEmailUsingGET($email_id): \AllegroApi\Model\AdditionalEmail
```

Get information about a particular additional email

Use this resource to retrieve a single additional email. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-szczegolowe-informacje-o-adresie-e-mail\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-e-mail-details\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | Id of the additional email.

try {
    $result = $apiInstance->getAdditionalEmailUsingGET($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->getAdditionalEmailUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_id** | **string**| Id of the additional email. | |

### Return type

[**\AllegroApi\Model\AdditionalEmail**](../Model/AdditionalEmail.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfAdditionalEmailsUsingGET()`

```php
getListOfAdditionalEmailsUsingGET(): \AllegroApi\Model\AdditionalEmailsResponse
```

Get user's additional emails

Use this resource to get a list of all additional email addresses assigned to account. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-adresy-e-mail\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-email-addresses\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getListOfAdditionalEmailsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->getListOfAdditionalEmailsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\AdditionalEmailsResponse**](../Model/AdditionalEmailsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSellerSmartClassificationGET()`

```php
getSellerSmartClassificationGET($marketplace_id): \AllegroApi\Model\SmartSellerClassificationReport
```

Get Smart! seller classification report

Use this resource to get a full Smart! seller classification report. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#klasyfikacja-sprzedawcy\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#seller-classification\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = allegro-pl; // string | Marketplace for which seller classification report will be returned. If not specified, the classification result for the seller's registration marketplace will be returned.

try {
    $result = $apiInstance->getSellerSmartClassificationGET($marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->getSellerSmartClassificationGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplace_id** | **string**| Marketplace for which seller classification report will be returned. If not specified, the classification result for the seller&#39;s registration marketplace will be returned. | [optional] |

### Return type

[**\AllegroApi\Model\SmartSellerClassificationReport**](../Model/SmartSellerClassificationReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserRatingsUsingGET()`

```php
getUserRatingsUsingGET($recommended, $last_changed_at_gte, $last_changed_at_lte, $offset, $limit): \AllegroApi\Model\UserRatingListResponse
```

Get the user's ratings

Use this resource to receive your sales ratings sorted by last change date, starting from the latest. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-informacje-o-ocenie-sprzedazy\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-user-s-ratings-data\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recommended = 'recommended_example'; // string | Filter by recommended.
$last_changed_at_gte = 2020-11-13T12:45:20.818Z; // \DateTime | Last change (creation or latest edition) date time in ISO 8601 format. The lower bound of date time range from which ratings will be fetched.
$last_changed_at_lte = 2020-11-13T12:45:20.818Z; // \DateTime | Last change (creation or latest edition) date time in ISO 8601 format. The upper bound of date time range from which ratings will be fetched.
$offset = 0; // int | The offset of elements in the response.
$limit = 20; // int | The limit of elements in the response.

try {
    $result = $apiInstance->getUserRatingsUsingGET($recommended, $last_changed_at_gte, $last_changed_at_lte, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->getUserRatingsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recommended** | **string**| Filter by recommended. | [optional] |
| **last_changed_at_gte** | **\DateTime**| Last change (creation or latest edition) date time in ISO 8601 format. The lower bound of date time range from which ratings will be fetched. | [optional] |
| **last_changed_at_lte** | **\DateTime**| Last change (creation or latest edition) date time in ISO 8601 format. The upper bound of date time range from which ratings will be fetched. | [optional] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |
| **limit** | **int**| The limit of elements in the response. | [optional] [default to 20] |

### Return type

[**\AllegroApi\Model\UserRatingListResponse**](../Model/UserRatingListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meGET()`

```php
meGET(): \AllegroApi\Model\MeResponse
```

Get basic information about user

Use this resource when you need basic information about authenticated user. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#informacje-o-uzytkowniku\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#information-about-user\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->meGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->meGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\MeResponse**](../Model/MeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRatingRemovalUsingPUT()`

```php
userRatingRemovalUsingPUT($rating_id, $user_rating_removal_request): \AllegroApi\Model\Removal
```

Request removal of user's rating

Use this resource to request removal of received rating. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-wyslac-prosbe-o-usuniecie-oceny\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-send-a-request-to-remove-user-rating\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rating_id = 5df0a6d1ef437e00255572a1; // string | ID of the rating.
$user_rating_removal_request = new \AllegroApi\Model\UserRatingRemovalRequest(); // \AllegroApi\Model\UserRatingRemovalRequest | User rating removal request.

try {
    $result = $apiInstance->userRatingRemovalUsingPUT($rating_id, $user_rating_removal_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->userRatingRemovalUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rating_id** | **string**| ID of the rating. | |
| **user_rating_removal_request** | [**\AllegroApi\Model\UserRatingRemovalRequest**](../Model/UserRatingRemovalRequest.md)| User rating removal request. | |

### Return type

[**\AllegroApi\Model\Removal**](../Model/Removal.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
