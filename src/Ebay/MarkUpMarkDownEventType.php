<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'MarkUpMarkDownEventTypeCodeType.php';
//require_once 'EbatNs_ComplexType.php';

class MarkUpMarkDownEventType extends EbatNs_ComplexType
{
	// start props
	// @var MarkUpMarkDownEventTypeCodeType $Type
	var $Type;
	// @var dateTime $Time
	var $Time;
	// @var string $Reason
	var $Reason;
	// end props

/**
 *

 * @return MarkUpMarkDownEventTypeCodeType
 */
	function getType()
	{
		return $this->Type;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setType($value)
	{
		$this->Type = $value;
	}
/**
 *

 * @return dateTime
 */
	function getTime()
	{
		return $this->Time;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTime($value)
	{
		$this->Time = $value;
	}
/**
 *

 * @return string
 */
	function getReason()
	{
		return $this->Reason;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setReason($value)
	{
		$this->Reason = $value;
	}
/**
 *

 * @return 
 */
	function MarkUpMarkDownEventType()
	{
		$this->EbatNs_ComplexType('MarkUpMarkDownEventType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Type' =>
				array(
					'required' => false,
					'type' => 'MarkUpMarkDownEventTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Time' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Reason' =>
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
