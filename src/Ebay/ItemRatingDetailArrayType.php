<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'ItemRatingDetailsType.php';

class ItemRatingDetailArrayType extends EbatNs_ComplexType
{
	// start props
	// @var ItemRatingDetailsType $ItemRatingDetails
	var $ItemRatingDetails;
	// end props

/**
 *

 * @return ItemRatingDetailsType
 * @param  $index 
 */
	function getItemRatingDetails($index = null)
	{
		if ($index) {
		return $this->ItemRatingDetails[$index];
	} else {
		return $this->ItemRatingDetails;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setItemRatingDetails($value, $index = null)
	{
		if ($index) {
	$this->ItemRatingDetails[$index] = $value;
	} else {
	$this->ItemRatingDetails = $value;
	}

	}
/**
 *

 * @return 
 */
	function ItemRatingDetailArrayType()
	{
		$this->EbatNs_ComplexType('ItemRatingDetailArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemRatingDetails' =>
				array(
					'required' => false,
					'type' => 'ItemRatingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
