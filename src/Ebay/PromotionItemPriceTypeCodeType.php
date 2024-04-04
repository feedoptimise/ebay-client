<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_FacetType.php';

class PromotionItemPriceTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $AuctionPrice
	var $AuctionPrice = 'AuctionPrice';
	// @var string $BuyItNowPrice
	var $BuyItNowPrice = 'BuyItNowPrice';
	// @var string $BestOfferOnlyPrice
	var $BestOfferOnlyPrice = 'BestOfferOnlyPrice';
	// @var string $ClassifiedAdPrice
	var $ClassifiedAdPrice = 'ClassifiedAdPrice';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function PromotionItemPriceTypeCodeType()
	{
		$this->EbatNs_FacetType('PromotionItemPriceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PromotionItemPriceTypeCodeType = new PromotionItemPriceTypeCodeType();

?>
