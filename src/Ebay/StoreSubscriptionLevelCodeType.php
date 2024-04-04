<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_FacetType.php';

class StoreSubscriptionLevelCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Close
	var $Close = 'Close';
	// @var string $Basic
	var $Basic = 'Basic';
	// @var string $Featured
	var $Featured = 'Featured';
	// @var string $Anchor
	var $Anchor = 'Anchor';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function StoreSubscriptionLevelCodeType()
	{
		$this->EbatNs_FacetType('StoreSubscriptionLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreSubscriptionLevelCodeType = new StoreSubscriptionLevelCodeType();

?>
