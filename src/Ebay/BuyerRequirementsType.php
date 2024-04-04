<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'MaximumItemRequirementsType.php';
//require_once 'VerifiedUserRequirementsType.php';
//require_once 'EbatNs_ComplexType.php';

class BuyerRequirementsType extends EbatNs_ComplexType
{
	// start props
	// @var boolean $ShipToRegistrationCountry
	var $ShipToRegistrationCountry;
	// @var boolean $ZeroFeedbackScore
	var $ZeroFeedbackScore;
	// @var int $MinimumFeedbackScore
	var $MinimumFeedbackScore;
	// @var boolean $MaximumUnpaidItemStrikes
	var $MaximumUnpaidItemStrikes;
	// @var MaximumItemRequirementsType $MaximumItemRequirements
	var $MaximumItemRequirements;
	// @var boolean $LinkedPayPalAccount
	var $LinkedPayPalAccount;
	// @var VerifiedUserRequirementsType $VerifiedUserRequirements
	var $VerifiedUserRequirements;
	// end props

/**
 *

 * @return boolean
 */
	function getShipToRegistrationCountry()
	{
		return $this->ShipToRegistrationCountry;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setShipToRegistrationCountry($value)
	{
		$this->ShipToRegistrationCountry = $value;
	}
/**
 *

 * @return boolean
 */
	function getZeroFeedbackScore()
	{
		return $this->ZeroFeedbackScore;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setZeroFeedbackScore($value)
	{
		$this->ZeroFeedbackScore = $value;
	}
/**
 *

 * @return int
 */
	function getMinimumFeedbackScore()
	{
		return $this->MinimumFeedbackScore;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMinimumFeedbackScore($value)
	{
		$this->MinimumFeedbackScore = $value;
	}
/**
 *

 * @return boolean
 */
	function getMaximumUnpaidItemStrikes()
	{
		return $this->MaximumUnpaidItemStrikes;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMaximumUnpaidItemStrikes($value)
	{
		$this->MaximumUnpaidItemStrikes = $value;
	}
/**
 *

 * @return MaximumItemRequirementsType
 */
	function getMaximumItemRequirements()
	{
		return $this->MaximumItemRequirements;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMaximumItemRequirements($value)
	{
		$this->MaximumItemRequirements = $value;
	}
/**
 *

 * @return boolean
 */
	function getLinkedPayPalAccount()
	{
		return $this->LinkedPayPalAccount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLinkedPayPalAccount($value)
	{
		$this->LinkedPayPalAccount = $value;
	}
/**
 *

 * @return VerifiedUserRequirementsType
 */
	function getVerifiedUserRequirements()
	{
		return $this->VerifiedUserRequirements;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setVerifiedUserRequirements($value)
	{
		$this->VerifiedUserRequirements = $value;
	}
/**
 *

 * @return 
 */
	function BuyerRequirementsType()
	{
		$this->EbatNs_ComplexType('BuyerRequirementsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ShipToRegistrationCountry' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ZeroFeedbackScore' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinimumFeedbackScore' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaximumUnpaidItemStrikes' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaximumItemRequirements' =>
				array(
					'required' => false,
					'type' => 'MaximumItemRequirementsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LinkedPayPalAccount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VerifiedUserRequirements' =>
				array(
					'required' => false,
					'type' => 'VerifiedUserRequirementsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
