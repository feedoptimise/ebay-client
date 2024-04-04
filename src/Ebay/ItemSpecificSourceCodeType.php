<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_FacetType.php';

class ItemSpecificSourceCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $ItemSpecific
	var $ItemSpecific = 'ItemSpecific';
	// @var string $Attribute
	var $Attribute = 'Attribute';
	// @var string $Product
	var $Product = 'Product';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function ItemSpecificSourceCodeType()
	{
		$this->EbatNs_FacetType('ItemSpecificSourceCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ItemSpecificSourceCodeType = new ItemSpecificSourceCodeType();

?>
