<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'ExpressProductType.php';

class ProductArrayType extends EbatNs_ComplexType
{
	// start props
	// @var ExpressProductType $Product
	var $Product;
	// end props

/**
 *

 * @return ExpressProductType
 * @param  $index 
 */
	function getProduct($index = null)
	{
		if ($index) {
		return $this->Product[$index];
	} else {
		return $this->Product;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setProduct($value, $index = null)
	{
		if ($index) {
	$this->Product[$index] = $value;
	} else {
	$this->Product = $value;
	}

	}
/**
 *

 * @return 
 */
	function ProductArrayType()
	{
		$this->EbatNs_ComplexType('ProductArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Product' =>
				array(
					'required' => false,
					'type' => 'ExpressProductType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
