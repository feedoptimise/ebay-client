<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_FacetType.php';

class RangeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $High
	var $High = 'High';
	// @var string $Low
	var $Low = 'Low';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function RangeCodeType()
	{
		$this->EbatNs_FacetType('RangeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RangeCodeType = new RangeCodeType();

?>
