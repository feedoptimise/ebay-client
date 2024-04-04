<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';

class MeasureType extends EbatNs_ComplexType
{
	// start props
	// end props

/**
 *

 * @return 
 */
	function MeasureType()
	{
		$this->EbatNs_ComplexType('MeasureType', 'urn:ebay:apis:eBLBaseComponents');
	$this->_attributes = array_merge($this->_attributes,
		array(
			'unit' =>
			array(
				'name' => 'unit',
				'type' => 'token',
				'use' => 'required'
			),
			'measurementSystem' =>
			array(
				'name' => 'measurementSystem',
				'type' => 'MeasurementSystemCodeType',
				'use' => 'required'
			)
		));

	}
}
?>
