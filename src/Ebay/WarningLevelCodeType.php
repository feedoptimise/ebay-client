<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_FacetType.php';

class WarningLevelCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Low
	var $Low = 'Low';
	// @var string $High
	var $High = 'High';
	// end props

/**
 *

 * @return 
 */
	function WarningLevelCodeType()
	{
		$this->EbatNs_FacetType('WarningLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_WarningLevelCodeType = new WarningLevelCodeType();

?>
