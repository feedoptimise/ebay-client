<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'AbstractResponseType.php';

class RemoveFromWatchListResponseType extends AbstractResponseType
{
	// start props
	// @var int $WatchListCount
	var $WatchListCount;
	// @var int $WatchListMaximum
	var $WatchListMaximum;
	// end props

/**
 *

 * @return int
 */
	function getWatchListCount()
	{
		return $this->WatchListCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setWatchListCount($value)
	{
		$this->WatchListCount = $value;
	}
/**
 *

 * @return int
 */
	function getWatchListMaximum()
	{
		return $this->WatchListMaximum;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setWatchListMaximum($value)
	{
		$this->WatchListMaximum = $value;
	}
/**
 *

 * @return 
 */
	function RemoveFromWatchListResponseType()
	{
		$this->AbstractResponseType('RemoveFromWatchListResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'WatchListCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WatchListMaximum' =>
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
