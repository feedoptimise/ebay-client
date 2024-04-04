<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'AmountType.php';

class BuyingSummaryType extends EbatNs_ComplexType
{
	// start props
	// @var int $BiddingCount
	var $BiddingCount;
	// @var int $WinningCount
	var $WinningCount;
	// @var AmountType $TotalWinningCost
	var $TotalWinningCost;
	// @var int $WonCount
	var $WonCount;
	// @var AmountType $TotalWonCost
	var $TotalWonCost;
	// @var int $WonDurationInDays
	var $WonDurationInDays;
	// @var int $BestOfferCount
	var $BestOfferCount;
	// end props

/**
 *

 * @return int
 */
	function getBiddingCount()
	{
		return $this->BiddingCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBiddingCount($value)
	{
		$this->BiddingCount = $value;
	}
/**
 *

 * @return int
 */
	function getWinningCount()
	{
		return $this->WinningCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setWinningCount($value)
	{
		$this->WinningCount = $value;
	}
/**
 *

 * @return AmountType
 */
	function getTotalWinningCost()
	{
		return $this->TotalWinningCost;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTotalWinningCost($value)
	{
		$this->TotalWinningCost = $value;
	}
/**
 *

 * @return int
 */
	function getWonCount()
	{
		return $this->WonCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setWonCount($value)
	{
		$this->WonCount = $value;
	}
/**
 *

 * @return AmountType
 */
	function getTotalWonCost()
	{
		return $this->TotalWonCost;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTotalWonCost($value)
	{
		$this->TotalWonCost = $value;
	}
/**
 *

 * @return int
 */
	function getWonDurationInDays()
	{
		return $this->WonDurationInDays;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setWonDurationInDays($value)
	{
		$this->WonDurationInDays = $value;
	}
/**
 *

 * @return int
 */
	function getBestOfferCount()
	{
		return $this->BestOfferCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBestOfferCount($value)
	{
		$this->BestOfferCount = $value;
	}
/**
 *

 * @return 
 */
	function BuyingSummaryType()
	{
		$this->EbatNs_ComplexType('BuyingSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BiddingCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WinningCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalWinningCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WonCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalWonCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WonDurationInDays' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferCount' =>
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
