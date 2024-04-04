<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';

class ExternalAlertIDArrayType extends EbatNs_ComplexType
{
	// start props
	// @var string $ExternalAlertID
	var $ExternalAlertID;
	// end props

/**
 *

 * @return string
 * @param  $index 
 */
	function getExternalAlertID($index = null)
	{
		if ($index) {
		return $this->ExternalAlertID[$index];
	} else {
		return $this->ExternalAlertID;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setExternalAlertID($value, $index = null)
	{
		if ($index) {
	$this->ExternalAlertID[$index] = $value;
	} else {
	$this->ExternalAlertID = $value;
	}

	}
/**
 *

 * @return 
 */
	function ExternalAlertIDArrayType()
	{
		$this->EbatNs_ComplexType('ExternalAlertIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ExternalAlertID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
