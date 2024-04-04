<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'StoreThemeType.php';
//require_once 'StoreColorSchemeArrayType.php';

class StoreThemeArrayType extends EbatNs_ComplexType
{
	// start props
	// @var StoreThemeType $Theme
	var $Theme;
	// @var StoreColorSchemeArrayType $GenericColorSchemeArray
	var $GenericColorSchemeArray;
	// end props

/**
 *

 * @return StoreThemeType
 * @param  $index 
 */
	function getTheme($index = null)
	{
		if ($index) {
		return $this->Theme[$index];
	} else {
		return $this->Theme;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setTheme($value, $index = null)
	{
		if ($index) {
	$this->Theme[$index] = $value;
	} else {
	$this->Theme = $value;
	}

	}
/**
 *

 * @return StoreColorSchemeArrayType
 */
	function getGenericColorSchemeArray()
	{
		return $this->GenericColorSchemeArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setGenericColorSchemeArray($value)
	{
		$this->GenericColorSchemeArray = $value;
	}
/**
 *

 * @return 
 */
	function StoreThemeArrayType()
	{
		$this->EbatNs_ComplexType('StoreThemeArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Theme' =>
				array(
					'required' => false,
					'type' => 'StoreThemeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'GenericColorSchemeArray' =>
				array(
					'required' => false,
					'type' => 'StoreColorSchemeArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
