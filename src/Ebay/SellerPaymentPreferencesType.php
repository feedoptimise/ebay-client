<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'DisplayPayNowButtonCodeType.php';
//require_once 'AddressType.php';
//require_once 'UPSRateOptionCodeType.php';

class SellerPaymentPreferencesType extends EbatNs_ComplexType
{
	// start props
	// @var boolean $AlwaysUseThisPaymentAddress
	var $AlwaysUseThisPaymentAddress;
	// @var DisplayPayNowButtonCodeType $DisplayPayNowButton
	var $DisplayPayNowButton;
	// @var boolean $PayPalPreferred
	var $PayPalPreferred;
	// @var string $DefaultPayPalEmailAddress
	var $DefaultPayPalEmailAddress;
	// @var boolean $PayPalAlwaysOn
	var $PayPalAlwaysOn;
	// @var AddressType $SellerPaymentAddress
	var $SellerPaymentAddress;
	// @var UPSRateOptionCodeType $UPSRateOption
	var $UPSRateOption;
	// end props

/**
 *

 * @return boolean
 */
	function getAlwaysUseThisPaymentAddress()
	{
		return $this->AlwaysUseThisPaymentAddress;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAlwaysUseThisPaymentAddress($value)
	{
		$this->AlwaysUseThisPaymentAddress = $value;
	}
/**
 *

 * @return DisplayPayNowButtonCodeType
 */
	function getDisplayPayNowButton()
	{
		return $this->DisplayPayNowButton;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDisplayPayNowButton($value)
	{
		$this->DisplayPayNowButton = $value;
	}
/**
 *

 * @return boolean
 */
	function getPayPalPreferred()
	{
		return $this->PayPalPreferred;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPayPalPreferred($value)
	{
		$this->PayPalPreferred = $value;
	}
/**
 *

 * @return string
 */
	function getDefaultPayPalEmailAddress()
	{
		return $this->DefaultPayPalEmailAddress;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDefaultPayPalEmailAddress($value)
	{
		$this->DefaultPayPalEmailAddress = $value;
	}
/**
 *

 * @return boolean
 */
	function getPayPalAlwaysOn()
	{
		return $this->PayPalAlwaysOn;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPayPalAlwaysOn($value)
	{
		$this->PayPalAlwaysOn = $value;
	}
/**
 *

 * @return AddressType
 */
	function getSellerPaymentAddress()
	{
		return $this->SellerPaymentAddress;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSellerPaymentAddress($value)
	{
		$this->SellerPaymentAddress = $value;
	}
/**
 *

 * @return UPSRateOptionCodeType
 */
	function getUPSRateOption()
	{
		return $this->UPSRateOption;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUPSRateOption($value)
	{
		$this->UPSRateOption = $value;
	}
/**
 *

 * @return 
 */
	function SellerPaymentPreferencesType()
	{
		$this->EbatNs_ComplexType('SellerPaymentPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AlwaysUseThisPaymentAddress' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisplayPayNowButton' =>
				array(
					'required' => false,
					'type' => 'DisplayPayNowButtonCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalPreferred' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DefaultPayPalEmailAddress' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalAlwaysOn' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerPaymentAddress' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UPSRateOption' =>
				array(
					'required' => false,
					'type' => 'UPSRateOptionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
