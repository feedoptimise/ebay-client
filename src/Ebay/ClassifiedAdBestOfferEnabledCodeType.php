<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_FacetType.php';

class ClassifiedAdBestOfferEnabledCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Disabled
	var $Disabled = 'Disabled';
	// @var string $Enabled
	var $Enabled = 'Enabled';
	// @var string $Required
	var $Required = 'Required';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function ClassifiedAdBestOfferEnabledCodeType()
	{
		$this->EbatNs_FacetType('ClassifiedAdBestOfferEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ClassifiedAdBestOfferEnabledCodeType = new ClassifiedAdBestOfferEnabledCodeType();

?>
