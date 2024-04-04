<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'PictureManagerSubscriptionLevelCodeType.php';
//require_once 'EbatNs_ComplexType.php';
//require_once 'PictureManagerFolderType.php';

class PictureManagerDetailsType extends EbatNs_ComplexType
{
	// start props
	// @var PictureManagerSubscriptionLevelCodeType $SubscriptionLevel
	var $SubscriptionLevel;
	// @var int $StorageUsed
	var $StorageUsed;
	// @var int $TotalStorageAvailable
	var $TotalStorageAvailable;
	// @var boolean $KeepOriginal
	var $KeepOriginal;
	// @var boolean $WatermarkEPS
	var $WatermarkEPS;
	// @var boolean $WatermarkUserID
	var $WatermarkUserID;
	// @var PictureManagerFolderType $Folder
	var $Folder;
	// end props

/**
 *

 * @return PictureManagerSubscriptionLevelCodeType
 */
	function getSubscriptionLevel()
	{
		return $this->SubscriptionLevel;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSubscriptionLevel($value)
	{
		$this->SubscriptionLevel = $value;
	}
/**
 *

 * @return int
 */
	function getStorageUsed()
	{
		return $this->StorageUsed;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setStorageUsed($value)
	{
		$this->StorageUsed = $value;
	}
/**
 *

 * @return int
 */
	function getTotalStorageAvailable()
	{
		return $this->TotalStorageAvailable;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTotalStorageAvailable($value)
	{
		$this->TotalStorageAvailable = $value;
	}
/**
 *

 * @return boolean
 */
	function getKeepOriginal()
	{
		return $this->KeepOriginal;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setKeepOriginal($value)
	{
		$this->KeepOriginal = $value;
	}
/**
 *

 * @return boolean
 */
	function getWatermarkEPS()
	{
		return $this->WatermarkEPS;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setWatermarkEPS($value)
	{
		$this->WatermarkEPS = $value;
	}
/**
 *

 * @return boolean
 */
	function getWatermarkUserID()
	{
		return $this->WatermarkUserID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setWatermarkUserID($value)
	{
		$this->WatermarkUserID = $value;
	}
/**
 *

 * @return PictureManagerFolderType
 * @param  $index 
 */
	function getFolder($index = null)
	{
		if ($index) {
		return $this->Folder[$index];
	} else {
		return $this->Folder;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setFolder($value, $index = null)
	{
		if ($index) {
	$this->Folder[$index] = $value;
	} else {
	$this->Folder = $value;
	}

	}
/**
 *

 * @return 
 */
	function PictureManagerDetailsType()
	{
		$this->EbatNs_ComplexType('PictureManagerDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'SubscriptionLevel' =>
				array(
					'required' => false,
					'type' => 'PictureManagerSubscriptionLevelCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StorageUsed' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalStorageAvailable' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'KeepOriginal' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WatermarkEPS' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WatermarkUserID' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Folder' =>
				array(
					'required' => false,
					'type' => 'PictureManagerFolderType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
