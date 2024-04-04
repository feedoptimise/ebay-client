<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_FacetType.php';

class ListingFlowCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $AddItem
	var $AddItem = 'AddItem';
	// @var string $ReviseItem
	var $ReviseItem = 'ReviseItem';
	// @var string $RelistItem
	var $RelistItem = 'RelistItem';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function ListingFlowCodeType()
	{
		$this->EbatNs_FacetType('ListingFlowCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ListingFlowCodeType = new ListingFlowCodeType();

?>
