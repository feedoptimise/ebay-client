<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'OfferType.php';
//require_once 'EbatNs_ComplexType.php';

class OfferArrayType extends EbatNs_ComplexType
{
	// start props
	// @var OfferType $Offer
	var $Offer;
	// end props

/**
 *

 * @return OfferType
 * @param  $index 
 */
	function getOffer($index = null)
	{
		if ($index) {
		return $this->Offer[$index];
	} else {
		return $this->Offer;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setOffer($value, $index = null)
	{
		if ($index) {
	$this->Offer[$index] = $value;
	} else {
	$this->Offer = $value;
	}

	}
/**
 *

 * @return 
 */
	function OfferArrayType()
	{
		$this->EbatNs_ComplexType('OfferArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Offer' =>
				array(
					'required' => false,
					'type' => 'OfferType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
