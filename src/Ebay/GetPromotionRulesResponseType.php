<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'PromotionRuleArrayType.php';
//require_once 'AbstractResponseType.php';

class GetPromotionRulesResponseType extends AbstractResponseType
{
	// start props
	// @var PromotionRuleArrayType $PromotionRuleArray
	var $PromotionRuleArray;
	// end props

/**
 *

 * @return PromotionRuleArrayType
 */
	function getPromotionRuleArray()
	{
		return $this->PromotionRuleArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPromotionRuleArray($value)
	{
		$this->PromotionRuleArray = $value;
	}
/**
 *

 * @return 
 */
	function GetPromotionRulesResponseType()
	{
		$this->AbstractResponseType('GetPromotionRulesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PromotionRuleArray' =>
				array(
					'required' => false,
					'type' => 'PromotionRuleArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
