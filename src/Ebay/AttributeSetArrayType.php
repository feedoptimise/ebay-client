<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'AttributeSetType.php';

class AttributeSetArrayType extends EbatNs_ComplexType
{
	// start props
	// @var AttributeSetType $AttributeSet
	var $AttributeSet;
	// end props

/**
 *

 * @return AttributeSetType
 * @param  $index 
 */
	function getAttributeSet($index = null)
	{
		if ($index) {
		return $this->AttributeSet[$index];
	} else {
		return $this->AttributeSet;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setAttributeSet($value, $index = null)
	{
		if ($index) {
	$this->AttributeSet[$index] = $value;
	} else {
	$this->AttributeSet = $value;
	}

	}
/**
 *

 * @return 
 */
	function AttributeSetArrayType()
	{
		$this->EbatNs_ComplexType('AttributeSetArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AttributeSet' =>
				array(
					'required' => false,
					'type' => 'AttributeSetType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
