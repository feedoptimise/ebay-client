<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'BidderDetailType.php';
//require_once 'EbatNs_ComplexType.php';

class BidderDetailArrayType extends EbatNs_ComplexType
{
	// start props
	// @var BidderDetailType $BidderDetail
	var $BidderDetail;
	// end props

/**
 *

 * @return BidderDetailType
 * @param  $index 
 */
	function getBidderDetail($index = null)
	{
		if ($index) {
		return $this->BidderDetail[$index];
	} else {
		return $this->BidderDetail;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setBidderDetail($value, $index = null)
	{
		if ($index) {
	$this->BidderDetail[$index] = $value;
	} else {
	$this->BidderDetail = $value;
	}

	}
/**
 *

 * @return 
 */
	function BidderDetailArrayType()
	{
		$this->EbatNs_ComplexType('BidderDetailArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BidderDetail' =>
				array(
					'required' => false,
					'type' => 'BidderDetailType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
