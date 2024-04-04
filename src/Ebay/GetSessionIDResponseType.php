<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'AbstractResponseType.php';

class GetSessionIDResponseType extends AbstractResponseType
{
	// start props
	// @var string $SessionID
	var $SessionID;
	// end props

/**
 *

 * @return string
 */
	function getSessionID()
	{
		return $this->SessionID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSessionID($value)
	{
		$this->SessionID = $value;
	}
/**
 *

 * @return 
 */
	function GetSessionIDResponseType()
	{
		$this->AbstractResponseType('GetSessionIDResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'SessionID' =>
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
