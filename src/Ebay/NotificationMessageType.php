<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'AbstractResponseType.php';

class NotificationMessageType extends AbstractResponseType
{
	// start props
	// @var string $MessageBody
	var $MessageBody;
	// @var string $EIAS
	var $EIAS;
	// end props

/**
 *

 * @return string
 */
	function getMessageBody()
	{
		return $this->MessageBody;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMessageBody($value)
	{
		$this->MessageBody = $value;
	}
/**
 *

 * @return string
 */
	function getEIAS()
	{
		return $this->EIAS;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEIAS($value)
	{
		$this->EIAS = $value;
	}
/**
 *

 * @return 
 */
	function NotificationMessageType()
	{
		$this->AbstractResponseType('NotificationMessageType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'MessageBody' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EIAS' =>
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
