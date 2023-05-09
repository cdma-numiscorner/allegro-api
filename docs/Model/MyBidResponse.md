# # MyBidResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**max_amount** | [**\AllegroApi\Model\MaxPrice**](MaxPrice.md) |  |
**minimal_price_met** | **bool** | This indicates if the minimal price of the auction has been met or is not set at all. A minimal price can be set by the seller and is the minimum amount the seller is willing to sell the item for. If the highest bid is not higher than the minimal price when the auction ends, the listing ends and the item is not sold. | [optional]
**high_bidder** | **bool** | Is this bid currently winning? |
**auction** | [**\AllegroApi\Model\AuctionDetails**](AuctionDetails.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
