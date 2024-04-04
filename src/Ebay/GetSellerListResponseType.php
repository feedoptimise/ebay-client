<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'ItemArrayType.php';
//require_once 'AbstractResponseType.php';
//require_once 'UserType.php';
//require_once 'PaginationResultType.php';

class GetSellerListResponseType extends AbstractResponseType
{
	// start props
	// @var PaginationResultType $PaginationResult
	var $PaginationResult;
	// @var boolean $HasMoreItems
	var $HasMoreItems;
	// @var ItemArrayType $ItemArray
	var $ItemArray;
	// @var int $ItemsPerPage
	var $ItemsPerPage;
	// @var int $PageNumber
	var $PageNumber;
	// @var int $ReturnedItemCountActual
	var $ReturnedItemCountActual;
	// @var UserType $Seller
	var $Seller;
	// end props

/**
 *

 * @return PaginationResultType
 */
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}
/**
 *

 * @return boolean
 */
	function getHasMoreItems()
	{
		return $this->HasMoreItems;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setHasMoreItems($value)
	{
		$this->HasMoreItems = $value;
	}
/**
 *

 * @return ItemArrayType
 */
	function getItemArray()
	{
		return $this->ItemArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItemArray($value)
	{
		$this->ItemArray = $value;
	}
/**
 *

 * @return int
 */
	function getItemsPerPage()
	{
		return $this->ItemsPerPage;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItemsPerPage($value)
	{
		$this->ItemsPerPage = $value;
	}
/**
 *

 * @return int
 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
/**
 *

 * @return int
 */
	function getReturnedItemCountActual()
	{
		return $this->ReturnedItemCountActual;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setReturnedItemCountActual($value)
	{
		$this->ReturnedItemCountActual = $value;
	}
/**
 *

 * @return UserType
 */
	function getSeller()
	{
		return $this->Seller;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSeller($value)
	{
		$this->Seller = $value;
	}
/**
 *

 * @return 
 */
	function GetSellerListResponseType()
	{
		$this->AbstractResponseType('GetSellerListResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HasMoreItems' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemArray' =>
				array(
					'required' => false,
					'type' => 'ItemArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemsPerPage' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PageNumber' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnedItemCountActual' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Seller' =>
				array(
					'required' => false,
					'type' => 'UserType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
