<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'AbstractRequestType.php';

class GetPromotionalSaleDetailsRequestType extends AbstractRequestType
{
	// start props
	// @var long $PromotionalSaleID
	var $PromotionalSaleID;
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

 * @return 
 */
	function GetPromotionalSaleDetailsRequestType()
	{
		$this->AbstractRequestType('GetPromotionalSaleDetailsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PromotionalSaleID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
