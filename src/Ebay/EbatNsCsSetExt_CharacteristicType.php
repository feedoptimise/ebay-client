<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 23.02.2007 11:57
// $Id$
// $Log$
//
//require_once 'EbatNsCsSetExt_SortOrderCodeType.php';
//require_once 'EbatNs_ComplexType.php';
//require_once 'EbatNsCsSetExt_ValType.php';
//require_once 'EbatNsCsSetExt_LabelType.php';

class EbatNsCsSetExt_CharacteristicType extends EbatNs_ComplexType
{
	// start props
	// @var int $AttributeID
	var $AttributeID;
	// @var string $DisplaySequence
	var $DisplaySequence;
	// @var string $DisplayUOM
	var $DisplayUOM;
	// @var EbatNsCsSetExt_LabelType $Label
	var $Label;
	// @var EbatNsCsSetExt_SortOrderCodeType $SortOrder
	var $SortOrder;
	// @var EbatNsCsSetExt_ValType $ValueList
	var $ValueList;
	// end props

/**
 *

 * @return int
 */
	function getAttributeID()
	{
		return $this->AttributeID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAttributeID($value)
	{
		$this->AttributeID = $value;
	}
/**
 *

 * @return string
 */
	function getDisplaySequence()
	{
		return $this->DisplaySequence;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDisplaySequence($value)
	{
		$this->DisplaySequence = $value;
	}
/**
 *

 * @return string
 */
	function getDisplayUOM()
	{
		return $this->DisplayUOM;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDisplayUOM($value)
	{
		$this->DisplayUOM = $value;
	}
/**
 *

 * @return EbatNsCsSetExt_LabelType
 */
	function getLabel()
	{
		return $this->Label;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLabel($value)
	{
		$this->Label = $value;
	}
/**
 *

 * @return EbatNsCsSetExt_SortOrderCodeType
 */
	function getSortOrder()
	{
		return $this->SortOrder;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSortOrder($value)
	{
		$this->SortOrder = $value;
	}
/**
 *

 * @return EbatNsCsSetExt_ValType
 * @param  $index 
 */
	function getValueList($index = null)
	{
		if ($index) {
		return $this->ValueList[$index];
	} else {
		return $this->ValueList;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setValueList($value, $index = null)
	{
		if ($index) {
	$this->ValueList[$index] = $value;
	} else {
	$this->ValueList = $value;
	}

	}
/**
 *

 * @return 
 */
	function EbatNsCsSetExt_CharacteristicType()
	{
		$this->EbatNs_ComplexType('EbatNsCsSetExt_CharacteristicType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');
		$this->_elements = array_merge($this->_elements,
			array(
				'AttributeID' =>
				array(
					'required' => true,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'DisplaySequence' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisplayUOM' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Label' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_LabelType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SortOrder' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_SortOrderCodeType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ValueList' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_ValType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => true,
					'cardinality' => '1..*'
				)
			));

	}
}
?>
