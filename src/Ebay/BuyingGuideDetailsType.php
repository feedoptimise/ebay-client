<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'BuyingGuideType.php';

class BuyingGuideDetailsType extends EbatNs_ComplexType
{
	// start props
	// @var BuyingGuideType $BuyingGuide
	var $BuyingGuide;
	// @var anyURI $BuyingGuideHub
	var $BuyingGuideHub;
	// end props

/**
 *

 * @return BuyingGuideType
 * @param  $index 
 */
	function getBuyingGuide($index = null)
	{
		if ($index) {
		return $this->BuyingGuide[$index];
	} else {
		return $this->BuyingGuide;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setBuyingGuide($value, $index = null)
	{
		if ($index) {
	$this->BuyingGuide[$index] = $value;
	} else {
	$this->BuyingGuide = $value;
	}

	}
/**
 *

 * @return anyURI
 */
	function getBuyingGuideHub()
	{
		return $this->BuyingGuideHub;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBuyingGuideHub($value)
	{
		$this->BuyingGuideHub = $value;
	}
/**
 *

 * @return 
 */
	function BuyingGuideDetailsType()
	{
		$this->EbatNs_ComplexType('BuyingGuideDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BuyingGuide' =>
				array(
					'required' => false,
					'type' => 'BuyingGuideType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'BuyingGuideHub' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
