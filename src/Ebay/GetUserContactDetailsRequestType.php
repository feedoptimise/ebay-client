<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'AbstractRequestType.php';

class GetUserContactDetailsRequestType extends AbstractRequestType
{
	// start props
	// @var string $ItemID
	var $ItemID;
	// @var string $ContactID
	var $ContactID;
	// @var string $RequesterID
	var $RequesterID;
	// end props

/**
 *

 * @return string
 */
	function getItemID()
	{
		return $this->ItemID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
/**
 *

 * @return string
 */
	function getContactID()
	{
		return $this->ContactID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setContactID($value)
	{
		$this->ContactID = $value;
	}
/**
 *

 * @return string
 */
	function getRequesterID()
	{
		return $this->RequesterID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setRequesterID($value)
	{
		$this->RequesterID = $value;
	}
/**
 *

 * @return 
 */
	function GetUserContactDetailsRequestType()
	{
		$this->AbstractRequestType('GetUserContactDetailsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ContactID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RequesterID' =>
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
