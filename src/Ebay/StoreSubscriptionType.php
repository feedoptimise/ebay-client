<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'StoreSubscriptionLevelCodeType.php';
//require_once 'AmountType.php';

class StoreSubscriptionType extends EbatNs_ComplexType
{
	// start props
	// @var StoreSubscriptionLevelCodeType $Level
	var $Level;
	// @var AmountType $Fee
	var $Fee;
	// end props

/**
 *

 * @return StoreSubscriptionLevelCodeType
 */
	function getLevel()
	{
		return $this->Level;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLevel($value)
	{
		$this->Level = $value;
	}
/**
 *

 * @return AmountType
 */
	function getFee()
	{
		return $this->Fee;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFee($value)
	{
		$this->Fee = $value;
	}
/**
 *

 * @return 
 */
	function StoreSubscriptionType()
	{
		$this->EbatNs_ComplexType('StoreSubscriptionType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Level' =>
				array(
					'required' => false,
					'type' => 'StoreSubscriptionLevelCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Fee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
