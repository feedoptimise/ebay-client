<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'DiscountCodeType.php';
//require_once 'ItemIDArrayType.php';
//require_once 'PromotionalSaleStatusCodeType.php';

class PromotionalSaleType extends EbatNs_ComplexType
{
	// start props
	// @var long $PromotionalSaleID
	var $PromotionalSaleID;
	// @var string $PromotionalSaleName
	var $PromotionalSaleName;
	// @var ItemIDArrayType $PromotionalSaleItemIDArray
	var $PromotionalSaleItemIDArray;
	// @var PromotionalSaleStatusCodeType $Status
	var $Status;
	// @var DiscountCodeType $DiscountType
	var $DiscountType;
	// @var double $DiscountValue
	var $DiscountValue;
	// @var dateTime $PromotionalSaleStartTime
	var $PromotionalSaleStartTime;
	// @var dateTime $PromotionalSaleEndTime
	var $PromotionalSaleEndTime;
	// end props

/**
 *

 * @return long
 */
	function getPromotionalSaleID()
	{
		return $this->PromotionalSaleID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPromotionalSaleID($value)
	{
		$this->PromotionalSaleID = $value;
	}
/**
 *

 * @return string
 */
	function getPromotionalSaleName()
	{
		return $this->PromotionalSaleName;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPromotionalSaleName($value)
	{
		$this->PromotionalSaleName = $value;
	}
/**
 *

 * @return ItemIDArrayType
 */
	function getPromotionalSaleItemIDArray()
	{
		return $this->PromotionalSaleItemIDArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPromotionalSaleItemIDArray($value)
	{
		$this->PromotionalSaleItemIDArray = $value;
	}
/**
 *

 * @return PromotionalSaleStatusCodeType
 */
	function getStatus()
	{
		return $this->Status;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
/**
 *

 * @return DiscountCodeType
 */
	function getDiscountType()
	{
		return $this->DiscountType;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDiscountType($value)
	{
		$this->DiscountType = $value;
	}
/**
 *

 * @return double
 */
	function getDiscountValue()
	{
		return $this->DiscountValue;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDiscountValue($value)
	{
		$this->DiscountValue = $value;
	}
/**
 *

 * @return dateTime
 */
	function getPromotionalSaleStartTime()
	{
		return $this->PromotionalSaleStartTime;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPromotionalSaleStartTime($value)
	{
		$this->PromotionalSaleStartTime = $value;
	}
/**
 *

 * @return dateTime
 */
	function getPromotionalSaleEndTime()
	{
		return $this->PromotionalSaleEndTime;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPromotionalSaleEndTime($value)
	{
		$this->PromotionalSaleEndTime = $value;
	}
/**
 *

 * @return 
 */
	function PromotionalSaleType()
	{
		$this->EbatNs_ComplexType('PromotionalSaleType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PromotionalSaleID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalSaleName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalSaleItemIDArray' =>
				array(
					'required' => false,
					'type' => 'ItemIDArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'PromotionalSaleStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DiscountType' =>
				array(
					'required' => false,
					'type' => 'DiscountCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DiscountValue' =>
				array(
					'required' => false,
					'type' => 'double',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalSaleStartTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalSaleEndTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
