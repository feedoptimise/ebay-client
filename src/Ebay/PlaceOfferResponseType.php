<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'SellingStatusType.php';
//require_once 'AbstractResponseType.php';

class PlaceOfferResponseType extends AbstractResponseType
{
	// start props
	// @var SellingStatusType $SellingStatus
	var $SellingStatus;
	// end props

/**
 *

 * @return SellingStatusType
 */
	function getSellingStatus()
	{
		return $this->SellingStatus;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSellingStatus($value)
	{
		$this->SellingStatus = $value;
	}
/**
 *

 * @return 
 */
	function PlaceOfferResponseType()
	{
		$this->AbstractResponseType('PlaceOfferResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'SellingStatus' =>
				array(
					'required' => false,
					'type' => 'SellingStatusType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
