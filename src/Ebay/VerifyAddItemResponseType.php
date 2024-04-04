<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'FeesType.php';
//require_once 'ExpressItemRequirementsType.php';
//require_once 'AbstractResponseType.php';
//require_once 'ItemIDType.php';

class VerifyAddItemResponseType extends AbstractResponseType
{
	// start props
	// @var ItemIDType $ItemID
	var $ItemID;
	// @var FeesType $Fees
	var $Fees;
	// @var boolean $ExpressListing
	var $ExpressListing;
	// @var ExpressItemRequirementsType $ExpressItemRequirements
	var $ExpressItemRequirements;
	// @var string $CategoryID
	var $CategoryID;
	// @var string $Category2ID
	var $Category2ID;
	// end props

/**
 *

 * @return ItemIDType
 */
	function getItemID()
	{
		return $this->ItemID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
/**
 *

 * @return FeesType
 */
	function getFees()
	{
		return $this->Fees;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFees($value)
	{
		$this->Fees = $value;
	}
/**
 *

 * @return boolean
 */
	function getExpressListing()
	{
		return $this->ExpressListing;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExpressListing($value)
	{
		$this->ExpressListing = $value;
	}
/**
 *

 * @return ExpressItemRequirementsType
 */
	function getExpressItemRequirements()
	{
		return $this->ExpressItemRequirements;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExpressItemRequirements($value)
	{
		$this->ExpressItemRequirements = $value;
	}
/**
 *

 * @return string
 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
/**
 *

 * @return string
 */
	function getCategory2ID()
	{
		return $this->Category2ID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCategory2ID($value)
	{
		$this->Category2ID = $value;
	}
/**
 *

 * @return 
 */
	function VerifyAddItemResponseType()
	{
		$this->AbstractResponseType('VerifyAddItemResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Fees' =>
				array(
					'required' => false,
					'type' => 'FeesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressListing' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressItemRequirements' =>
				array(
					'required' => false,
					'type' => 'ExpressItemRequirementsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Category2ID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
