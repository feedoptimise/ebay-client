<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'SortOrderCodeType.php';

class MyeBaySelectionType extends EbatNs_ComplexType
{
	// start props
	// @var boolean $Include
	var $Include;
	// @var SortOrderCodeType $Sort
	var $Sort;
	// @var int $MaxResults
	var $MaxResults;
	// end props

/**
 *

 * @return boolean
 */
	function getInclude()
	{
		return $this->Include;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setInclude($value)
	{
		$this->Include = $value;
	}
/**
 *

 * @return SortOrderCodeType
 */
	function getSort()
	{
		return $this->Sort;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSort($value)
	{
		$this->Sort = $value;
	}
/**
 *

 * @return int
 */
	function getMaxResults()
	{
		return $this->MaxResults;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMaxResults($value)
	{
		$this->MaxResults = $value;
	}
/**
 *

 * @return 
 */
	function MyeBaySelectionType()
	{
		$this->EbatNs_ComplexType('MyeBaySelectionType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Include' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Sort' =>
				array(
					'required' => false,
					'type' => 'SortOrderCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxResults' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
