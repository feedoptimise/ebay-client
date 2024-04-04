<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'OrderType.php';

class OrderArrayType extends EbatNs_ComplexType
{
	// start props
	// @var OrderType $Order
	var $Order;
	// end props

/**
 *

 * @return OrderType
 * @param  $index 
 */
	function getOrder($index = null)
	{
		if ($index) {
		return $this->Order[$index];
	} else {
		return $this->Order;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setOrder($value, $index = null)
	{
		if ($index) {
	$this->Order[$index] = $value;
	} else {
	$this->Order = $value;
	}

	}
/**
 *

 * @return 
 */
	function OrderArrayType()
	{
		$this->EbatNs_ComplexType('OrderArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Order' =>
				array(
					'required' => false,
					'type' => 'OrderType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
