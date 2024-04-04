<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_FacetType.php';

class SMSSubscriptionErrorCodeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $SMSAggregatorNotAvailable
	var $SMSAggregatorNotAvailable = 'SMSAggregatorNotAvailable';
	// @var string $PhoneNumberInvalid
	var $PhoneNumberInvalid = 'PhoneNumberInvalid';
	// @var string $PhoneNumberChanged
	var $PhoneNumberChanged = 'PhoneNumberChanged';
	// @var string $PhoneNumberCarrierChanged
	var $PhoneNumberCarrierChanged = 'PhoneNumberCarrierChanged';
	// @var string $UserRequestedUnregistration
	var $UserRequestedUnregistration = 'UserRequestedUnregistration';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function SMSSubscriptionErrorCodeCodeType()
	{
		$this->EbatNs_FacetType('SMSSubscriptionErrorCodeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SMSSubscriptionErrorCodeCodeType = new SMSSubscriptionErrorCodeCodeType();

?>
