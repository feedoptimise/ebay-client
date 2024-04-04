<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'ItemType.php';
//require_once 'AbstractRequestType.php';

class RelistItemRequestType extends AbstractRequestType
{
	// start props
	// @var ItemType $Item
	var $Item;
	// @var string $DeletedField
	var $DeletedField;
	// end props

/**
 *

 * @return ItemType
 */
	function getItem()
	{
		return $this->Item;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItem($value)
	{
		$this->Item = $value;
	}
/**
 *

 * @return string
 * @param  $index 
 */
	function getDeletedField($index = null)
	{
		if ($index) {
		return $this->DeletedField[$index];
	} else {
		return $this->DeletedField;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setDeletedField($value, $index = null)
	{
		if ($index) {
	$this->DeletedField[$index] = $value;
	} else {
	$this->DeletedField = $value;
	}

	}
/**
 *

 * @return 
 */
	function RelistItemRequestType()
	{
		$this->AbstractRequestType('RelistItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeletedField' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
