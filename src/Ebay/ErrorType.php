<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'SeverityCodeType.php';
//require_once 'EbatNs_ComplexType.php';
//require_once 'ErrorClassificationCodeType.php';
//require_once 'ErrorParameterType.php';

class ErrorType extends EbatNs_ComplexType
{
	// start props
	// @var string $ShortMessage
	var $ShortMessage;
	// @var string $LongMessage
	var $LongMessage;
	// @var token $ErrorCode
	var $ErrorCode;
	// @var boolean $UserDisplayHint
	var $UserDisplayHint;
	// @var SeverityCodeType $SeverityCode
	var $SeverityCode;
	// @var ErrorParameterType $ErrorParameters
	var $ErrorParameters;
	// @var ErrorClassificationCodeType $ErrorClassification
	var $ErrorClassification;
	// end props

/**
 *

 * @return string
 */
	function getShortMessage()
	{
		return $this->ShortMessage;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setShortMessage($value)
	{
		$this->ShortMessage = $value;
	}
/**
 *

 * @return string
 */
	function getLongMessage()
	{
		return $this->LongMessage;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLongMessage($value)
	{
		$this->LongMessage = $value;
	}
/**
 *

 * @return token
 */
	function getErrorCode()
	{
		return $this->ErrorCode;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setErrorCode($value)
	{
		$this->ErrorCode = $value;
	}
/**
 *

 * @return boolean
 */
	function getUserDisplayHint()
	{
		return $this->UserDisplayHint;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUserDisplayHint($value)
	{
		$this->UserDisplayHint = $value;
	}
/**
 *

 * @return SeverityCodeType
 */
	function getSeverityCode()
	{
		return $this->SeverityCode;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSeverityCode($value)
	{
		$this->SeverityCode = $value;
	}
/**
 *

 * @return ErrorParameterType
 * @param  $index 
 */
	function getErrorParameters($index = null)
	{
		if ($index) {
		return $this->ErrorParameters[$index];
	} else {
		return $this->ErrorParameters;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setErrorParameters($value, $index = null)
	{
		if ($index) {
	$this->ErrorParameters[$index] = $value;
	} else {
	$this->ErrorParameters = $value;
	}

	}
/**
 *

 * @return ErrorClassificationCodeType
 */
	function getErrorClassification()
	{
		return $this->ErrorClassification;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setErrorClassification($value)
	{
		$this->ErrorClassification = $value;
	}
/**
 *

 * @return 
 */
	function ErrorType()
	{
		$this->EbatNs_ComplexType('ErrorType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ShortMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LongMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ErrorCode' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserDisplayHint' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SeverityCode' =>
				array(
					'required' => false,
					'type' => 'SeverityCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ErrorParameters' =>
				array(
					'required' => false,
					'type' => 'ErrorParameterType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ErrorClassification' =>
				array(
					'required' => false,
					'type' => 'ErrorClassificationCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
