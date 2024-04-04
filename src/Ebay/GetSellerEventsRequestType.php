<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'UserIDType.php';
//require_once 'AbstractRequestType.php';

class GetSellerEventsRequestType extends AbstractRequestType
{
	// start props
	// @var UserIDType $UserID
	var $UserID;
	// @var dateTime $StartTimeFrom
	var $StartTimeFrom;
	// @var dateTime $StartTimeTo
	var $StartTimeTo;
	// @var dateTime $EndTimeFrom
	var $EndTimeFrom;
	// @var dateTime $EndTimeTo
	var $EndTimeTo;
	// @var dateTime $ModTimeFrom
	var $ModTimeFrom;
	// @var dateTime $ModTimeTo
	var $ModTimeTo;
	// @var boolean $NewItemFilter
	var $NewItemFilter;
	// @var boolean $IncludeWatchCount
	var $IncludeWatchCount;
	// end props

/**
 *

 * @return UserIDType
 */
	function getUserID()
	{
		return $this->UserID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUserID($value)
	{
		$this->UserID = $value;
	}
/**
 *

 * @return dateTime
 */
	function getStartTimeFrom()
	{
		return $this->StartTimeFrom;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setStartTimeFrom($value)
	{
		$this->StartTimeFrom = $value;
	}
/**
 *

 * @return dateTime
 */
	function getStartTimeTo()
	{
		return $this->StartTimeTo;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setStartTimeTo($value)
	{
		$this->StartTimeTo = $value;
	}
/**
 *

 * @return dateTime
 */
	function getEndTimeFrom()
	{
		return $this->EndTimeFrom;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEndTimeFrom($value)
	{
		$this->EndTimeFrom = $value;
	}
/**
 *

 * @return dateTime
 */
	function getEndTimeTo()
	{
		return $this->EndTimeTo;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEndTimeTo($value)
	{
		$this->EndTimeTo = $value;
	}
/**
 *

 * @return dateTime
 */
	function getModTimeFrom()
	{
		return $this->ModTimeFrom;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setModTimeFrom($value)
	{
		$this->ModTimeFrom = $value;
	}
/**
 *

 * @return dateTime
 */
	function getModTimeTo()
	{
		return $this->ModTimeTo;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setModTimeTo($value)
	{
		$this->ModTimeTo = $value;
	}
/**
 *

 * @return boolean
 */
	function getNewItemFilter()
	{
		return $this->NewItemFilter;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setNewItemFilter($value)
	{
		$this->NewItemFilter = $value;
	}
/**
 *

 * @return boolean
 */
	function getIncludeWatchCount()
	{
		return $this->IncludeWatchCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setIncludeWatchCount($value)
	{
		$this->IncludeWatchCount = $value;
	}
/**
 *

 * @return 
 */
	function GetSellerEventsRequestType()
	{
		$this->AbstractRequestType('GetSellerEventsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'UserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StartTimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StartTimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ModTimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ModTimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NewItemFilter' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeWatchCount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
