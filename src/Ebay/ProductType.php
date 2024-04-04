<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'CharacteristicsSetType.php';
//require_once 'AmountType.php';

class ProductType extends EbatNs_ComplexType
{
	// start props
	// @var CharacteristicsSetType $CharacteristicsSet
	var $CharacteristicsSet;
	// @var anyURI $DetailsURL
	var $DetailsURL;
	// @var int $NumItems
	var $NumItems;
	// @var AmountType $MinPrice
	var $MinPrice;
	// @var AmountType $MaxPrice
	var $MaxPrice;
	// end props

/**
 *

 * @return CharacteristicsSetType
 */
	function getCharacteristicsSet()
	{
		return $this->CharacteristicsSet;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCharacteristicsSet($value)
	{
		$this->CharacteristicsSet = $value;
	}
/**
 *

 * @return anyURI
 */
	function getDetailsURL()
	{
		return $this->DetailsURL;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDetailsURL($value)
	{
		$this->DetailsURL = $value;
	}
/**
 *

 * @return int
 */
	function getNumItems()
	{
		return $this->NumItems;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setNumItems($value)
	{
		$this->NumItems = $value;
	}
/**
 *

 * @return AmountType
 */
	function getMinPrice()
	{
		return $this->MinPrice;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMinPrice($value)
	{
		$this->MinPrice = $value;
	}
/**
 *

 * @return AmountType
 */
	function getMaxPrice()
	{
		return $this->MaxPrice;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMaxPrice($value)
	{
		$this->MaxPrice = $value;
	}
/**
 *

 * @return 
 */
	function ProductType()
	{
		$this->EbatNs_ComplexType('ProductType', 'http://www.w3.org/2001/XMLSchema');
		$this->_elements = array_merge($this->_elements,
			array(
				'CharacteristicsSet' =>
				array(
					'required' => false,
					'type' => 'CharacteristicsSetType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DetailsURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NumItems' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));
	$this->_attributes = array_merge($this->_attributes,
		array(
			'productID' =>
			array(
				'name' => 'productID',
				'type' => 'string',
				'use' => 'required'
			),
			'stockPhotoURL' =>
			array(
				'name' => 'stockPhotoURL',
				'type' => 'anyURI',
				'use' => 'required'
			),
			'title' =>
			array(
				'name' => 'title',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
