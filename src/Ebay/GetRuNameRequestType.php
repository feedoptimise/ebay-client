<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'AbstractRequestType.php';

class GetRuNameRequestType extends AbstractRequestType
{
	// start props
	// @var string $ClientUseCase
	var $ClientUseCase;
	// end props

/**
 *

 * @return string
 */
	function getClientUseCase()
	{
		return $this->ClientUseCase;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setClientUseCase($value)
	{
		$this->ClientUseCase = $value;
	}
/**
 *

 * @return 
 */
	function GetRuNameRequestType()
	{
		$this->AbstractRequestType('GetRuNameRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ClientUseCase' =>
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
