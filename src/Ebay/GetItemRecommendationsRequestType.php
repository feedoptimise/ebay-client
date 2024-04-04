<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'GetRecommendationsRequestContainerType.php';
//require_once 'AbstractRequestType.php';

class GetItemRecommendationsRequestType extends AbstractRequestType
{
	// start props
	// @var GetRecommendationsRequestContainerType $GetRecommendationsRequestContainer
	var $GetRecommendationsRequestContainer;
	// end props

/**
 *

 * @return GetRecommendationsRequestContainerType
 * @param  $index 
 */
	function getGetRecommendationsRequestContainer($index = null)
	{
		if ($index) {
		return $this->GetRecommendationsRequestContainer[$index];
	} else {
		return $this->GetRecommendationsRequestContainer;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setGetRecommendationsRequestContainer($value, $index = null)
	{
		if ($index) {
	$this->GetRecommendationsRequestContainer[$index] = $value;
	} else {
	$this->GetRecommendationsRequestContainer = $value;
	}

	}
/**
 *

 * @return 
 */
	function GetItemRecommendationsRequestType()
	{
		$this->AbstractRequestType('GetItemRecommendationsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'GetRecommendationsRequestContainer' =>
				array(
					'required' => false,
					'type' => 'GetRecommendationsRequestContainerType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
