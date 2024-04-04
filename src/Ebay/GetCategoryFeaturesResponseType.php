<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'FeatureDefinitionsType.php';
//require_once 'SiteDefaultsType.php';
//require_once 'AbstractResponseType.php';
//require_once 'CategoryFeatureType.php';

class GetCategoryFeaturesResponseType extends AbstractResponseType
{
	// start props
	// @var string $CategoryVersion
	var $CategoryVersion;
	// @var dateTime $UpdateTime
	var $UpdateTime;
	// @var CategoryFeatureType $Category
	var $Category;
	// @var SiteDefaultsType $SiteDefaults
	var $SiteDefaults;
	// @var FeatureDefinitionsType $FeatureDefinitions
	var $FeatureDefinitions;
	// end props

/**
 *

 * @return string
 */
	function getCategoryVersion()
	{
		return $this->CategoryVersion;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCategoryVersion($value)
	{
		$this->CategoryVersion = $value;
	}
/**
 *

 * @return dateTime
 */
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}
/**
 *

 * @return CategoryFeatureType
 * @param  $index 
 */
	function getCategory($index = null)
	{
		if ($index) {
		return $this->Category[$index];
	} else {
		return $this->Category;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setCategory($value, $index = null)
	{
		if ($index) {
	$this->Category[$index] = $value;
	} else {
	$this->Category = $value;
	}

	}
/**
 *

 * @return SiteDefaultsType
 */
	function getSiteDefaults()
	{
		return $this->SiteDefaults;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSiteDefaults($value)
	{
		$this->SiteDefaults = $value;
	}
/**
 *

 * @return FeatureDefinitionsType
 */
	function getFeatureDefinitions()
	{
		return $this->FeatureDefinitions;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFeatureDefinitions($value)
	{
		$this->FeatureDefinitions = $value;
	}
/**
 *

 * @return 
 */
	function GetCategoryFeaturesResponseType()
	{
		$this->AbstractResponseType('GetCategoryFeaturesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CategoryVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UpdateTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Category' =>
				array(
					'required' => false,
					'type' => 'CategoryFeatureType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'SiteDefaults' =>
				array(
					'required' => false,
					'type' => 'SiteDefaultsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeatureDefinitions' =>
				array(
					'required' => false,
					'type' => 'FeatureDefinitionsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
