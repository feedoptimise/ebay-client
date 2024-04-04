<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'TransactionPlatformCodeType.php';
//require_once 'PaginationType.php';
//require_once 'AbstractRequestType.php';
//require_once 'ItemIDType.php';

class GetItemTransactionsRequestType extends AbstractRequestType
{
	// start props
	// @var ItemIDType $ItemID
	var $ItemID;
	// @var dateTime $ModTimeFrom
	var $ModTimeFrom;
	// @var dateTime $ModTimeTo
	var $ModTimeTo;
	// @var string $TransactionID
	var $TransactionID;
	// @var PaginationType $Pagination
	var $Pagination;
	// @var boolean $IncludeFinalValueFee
	var $IncludeFinalValueFee;
	// @var boolean $IncludeContainingOrder
	var $IncludeContainingOrder;
	// @var TransactionPlatformCodeType $Platform
	var $Platform;
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

 * @return dateTime
 */
	function getModTimeFrom()
	{
		return $this->ModTimeFrom;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setModTimeFrom($value)
	{
		$this->ModTimeFrom = $value;
	}
/**
 *

 * @return dateTime
 */
	function getModTimeTo()
	{
		return $this->ModTimeTo;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setModTimeTo($value)
	{
		$this->ModTimeTo = $value;
	}
/**
 *

 * @return string
 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
/**
 *

 * @return PaginationType
 */
	function getPagination()
	{
		return $this->Pagination;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPagination($value)
	{
		$this->Pagination = $value;
	}
/**
 *

 * @return boolean
 */
	function getIncludeFinalValueFee()
	{
		return $this->IncludeFinalValueFee;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setIncludeFinalValueFee($value)
	{
		$this->IncludeFinalValueFee = $value;
	}
/**
 *

 * @return boolean
 */
	function getIncludeContainingOrder()
	{
		return $this->IncludeContainingOrder;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setIncludeContainingOrder($value)
	{
		$this->IncludeContainingOrder = $value;
	}
/**
 *

 * @return TransactionPlatformCodeType
 */
	function getPlatform()
	{
		return $this->Platform;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPlatform($value)
	{
		$this->Platform = $value;
	}
/**
 *

 * @return 
 */
	function GetItemTransactionsRequestType()
	{
		$this->AbstractRequestType('GetItemTransactionsRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				'ModTimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ModTimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeFinalValueFee' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeContainingOrder' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Platform' =>
				array(
					'required' => false,
					'type' => 'TransactionPlatformCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
