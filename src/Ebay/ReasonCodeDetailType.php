<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';

class ReasonCodeDetailType extends EbatNs_ComplexType
{
	// start props
	// @var string $BriefText
	var $BriefText;
	// @var string $DetailedText
	var $DetailedText;
	// end props

/**
 *

 * @return string
 */
	function getBriefText()
	{
		return $this->BriefText;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBriefText($value)
	{
		$this->BriefText = $value;
	}
/**
 *

 * @return string
 */
	function getDetailedText()
	{
		return $this->DetailedText;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDetailedText($value)
	{
		$this->DetailedText = $value;
	}
/**
 *

 * @return 
 */
	function ReasonCodeDetailType()
	{
		$this->EbatNs_ComplexType('ReasonCodeDetailType', 'http://www.w3.org/2001/XMLSchema');
		$this->_elements = array_merge($this->_elements,
			array(
				'BriefText' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DetailedText' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));
	$this->_attributes = array_merge($this->_attributes,
		array(
			'codeID' =>
			array(
				'name' => 'codeID',
				'type' => 'long',
				'use' => 'required'
			)
		));

	}
}
?>
