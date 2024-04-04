<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';

class MyeBayFavoriteSellerType extends EbatNs_ComplexType
{
	// start props
	// @var string $UserID
	var $UserID;
	// @var string $StoreName
	var $StoreName;
	// end props

/**
 *

 * @return string
 */
	function getUserID()
	{
		return $this->UserID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUserID($value)
	{
		$this->UserID = $value;
	}
/**
 *

 * @return string
 */
	function getStoreName()
	{
		return $this->StoreName;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setStoreName($value)
	{
		$this->StoreName = $value;
	}
/**
 *

 * @return 
 */
	function MyeBayFavoriteSellerType()
	{
		$this->EbatNs_ComplexType('MyeBayFavoriteSellerType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'UserID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreName' =>
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
