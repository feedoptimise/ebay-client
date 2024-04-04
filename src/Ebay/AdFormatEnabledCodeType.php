<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_FacetType.php';

class AdFormatEnabledCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Disabled
	var $Disabled = 'Disabled';
	// @var string $Enabled
	var $Enabled = 'Enabled';
	// @var string $Only
	var $Only = 'Only';
	// @var string $ClassifiedAdEnabled
	var $ClassifiedAdEnabled = 'ClassifiedAdEnabled';
	// @var string $ClassifiedAdOnly
	var $ClassifiedAdOnly = 'ClassifiedAdOnly';
	// @var string $LocalMarketBestOfferOnly
	var $LocalMarketBestOfferOnly = 'LocalMarketBestOfferOnly';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function AdFormatEnabledCodeType()
	{
		$this->EbatNs_FacetType('AdFormatEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AdFormatEnabledCodeType = new AdFormatEnabledCodeType();

?>
