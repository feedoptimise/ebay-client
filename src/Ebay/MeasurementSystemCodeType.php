<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_FacetType.php';

class MeasurementSystemCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $English
	var $English = 'English';
	// @var string $Metric
	var $Metric = 'Metric';
	// end props

/**
 *

 * @return 
 */
	function MeasurementSystemCodeType()
	{
		$this->EbatNs_FacetType('MeasurementSystemCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MeasurementSystemCodeType = new MeasurementSystemCodeType();

?>
