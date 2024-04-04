<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'AdFormatLeadType.php';
//require_once 'AbstractResponseType.php';

class GetAdFormatLeadsResponseType extends AbstractResponseType
{
	// start props
	// @var AdFormatLeadType $AdFormatLead
	var $AdFormatLead;
	// @var int $AdFormatLeadCount
	var $AdFormatLeadCount;
	// end props

/**
 *

 * @return AdFormatLeadType
 * @param  $index 
 */
	function getAdFormatLead($index = null)
	{
		if ($index) {
		return $this->AdFormatLead[$index];
	} else {
		return $this->AdFormatLead;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setAdFormatLead($value, $index = null)
	{
		if ($index) {
	$this->AdFormatLead[$index] = $value;
	} else {
	$this->AdFormatLead = $value;
	}

	}
/**
 *

 * @return int
 */
	function getAdFormatLeadCount()
	{
		return $this->AdFormatLeadCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAdFormatLeadCount($value)
	{
		$this->AdFormatLeadCount = $value;
	}
/**
 *

 * @return 
 */
	function GetAdFormatLeadsResponseType()
	{
		$this->AbstractResponseType('GetAdFormatLeadsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AdFormatLead' =>
				array(
					'required' => false,
					'type' => 'AdFormatLeadType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'AdFormatLeadCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
