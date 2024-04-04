<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'AmountType.php';

class CheckoutOrderDetailType extends EbatNs_ComplexType
{
	// start props
	// @var AmountType $TotalCartMerchandiseCost
	var $TotalCartMerchandiseCost;
	// @var AmountType $TotalCartShippingCost
	var $TotalCartShippingCost;
	// @var AmountType $TotalTaxAmount
	var $TotalTaxAmount;
	// @var AmountType $TotalAmount
	var $TotalAmount;
	// end props

/**
 *

 * @return AmountType
 */
	function getTotalCartMerchandiseCost()
	{
		return $this->TotalCartMerchandiseCost;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTotalCartMerchandiseCost($value)
	{
		$this->TotalCartMerchandiseCost = $value;
	}
/**
 *

 * @return AmountType
 */
	function getTotalCartShippingCost()
	{
		return $this->TotalCartShippingCost;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTotalCartShippingCost($value)
	{
		$this->TotalCartShippingCost = $value;
	}
/**
 *

 * @return AmountType
 */
	function getTotalTaxAmount()
	{
		return $this->TotalTaxAmount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTotalTaxAmount($value)
	{
		$this->TotalTaxAmount = $value;
	}
/**
 *

 * @return AmountType
 */
	function getTotalAmount()
	{
		return $this->TotalAmount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTotalAmount($value)
	{
		$this->TotalAmount = $value;
	}
/**
 *

 * @return 
 */
	function CheckoutOrderDetailType()
	{
		$this->EbatNs_ComplexType('CheckoutOrderDetailType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'TotalCartMerchandiseCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalCartShippingCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalTaxAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
