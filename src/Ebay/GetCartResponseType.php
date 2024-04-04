<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'CartType.php';
//require_once 'AbstractResponseType.php';

class GetCartResponseType extends AbstractResponseType
{
	// start props
	// @var CartType $Cart
	var $Cart;
	// end props

/**
 *

 * @return CartType
 */
	function getCart()
	{
		return $this->Cart;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCart($value)
	{
		$this->Cart = $value;
	}
/**
 *

 * @return 
 */
	function GetCartResponseType()
	{
		$this->AbstractResponseType('GetCartResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Cart' =>
				array(
					'required' => false,
					'type' => 'CartType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
