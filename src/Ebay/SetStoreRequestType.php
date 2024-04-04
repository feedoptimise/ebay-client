<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'StoreType.php';
//require_once 'AbstractRequestType.php';

class SetStoreRequestType extends AbstractRequestType
{
	// start props
	// @var StoreType $Store
	var $Store;
	// end props

/**
 *

 * @return StoreType
 */
	function getStore()
	{
		return $this->Store;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setStore($value)
	{
		$this->Store = $value;
	}
/**
 *

 * @return 
 */
	function SetStoreRequestType()
	{
		$this->AbstractRequestType('SetStoreRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Store' =>
				array(
					'required' => false,
					'type' => 'StoreType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
