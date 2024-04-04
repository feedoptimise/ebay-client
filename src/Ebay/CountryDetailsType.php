<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'CountryCodeType.php';
//require_once 'EbatNs_ComplexType.php';

class CountryDetailsType extends EbatNs_ComplexType
{
	// start props
	// @var CountryCodeType $Country
	var $Country;
	// @var string $Description
	var $Description;
	// end props

/**
 *

 * @return CountryCodeType
 */
	function getCountry()
	{
		return $this->Country;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCountry($value)
	{
		$this->Country = $value;
	}
/**
 *

 * @return string
 */
	function getDescription()
	{
		return $this->Description;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
/**
 *

 * @return 
 */
	function CountryDetailsType()
	{
		$this->EbatNs_ComplexType('CountryDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Country' =>
				array(
					'required' => false,
					'type' => 'CountryCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Description' =>
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
