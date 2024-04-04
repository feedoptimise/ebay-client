<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 23.02.2007 11:57
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'EbatNsCsSetExt_AttributeType.php';

class EbatNsCsSetExt_AttributeArrayType extends EbatNs_ComplexType
{
	// start props
	// @var EbatNsCsSetExt_AttributeType $Attribute
	var $Attribute;
	// end props

/**
 *

 * @return EbatNsCsSetExt_AttributeType
 * @param  $index 
 */
	function getAttribute($index = null)
	{
		if ($index) {
		return $this->Attribute[$index];
	} else {
		return $this->Attribute;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setAttribute($value, $index = null)
	{
		if ($index) {
	$this->Attribute[$index] = $value;
	} else {
	$this->Attribute = $value;
	}

	}
/**
 *

 * @return 
 */
	function EbatNsCsSetExt_AttributeArrayType()
	{
		$this->EbatNs_ComplexType('EbatNsCsSetExt_AttributeArrayType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');
		$this->_elements = array_merge($this->_elements,
			array(
				'Attribute' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_AttributeType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => true,
					'cardinality' => '1..*'
				)
			));

	}
}
?>
