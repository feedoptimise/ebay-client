<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';
//require_once 'UserIdPasswordType.php';

class CustomSecurityHeaderType extends EbatNs_ComplexType
{
	// start props
	// @var string $eBayAuthToken
	var $eBayAuthToken;
	// @var string $HardExpirationWarning
	var $HardExpirationWarning;
	// @var UserIdPasswordType $Credentials
	var $Credentials;
	// @var string $NotificationSignature
	var $NotificationSignature;
	// end props

/**
 *

 * @return string
 */
	function geteBayAuthToken()
	{
		return $this->eBayAuthToken;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function seteBayAuthToken($value)
	{
		$this->eBayAuthToken = $value;
	}
/**
 *

 * @return string
 */
	function getHardExpirationWarning()
	{
		return $this->HardExpirationWarning;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setHardExpirationWarning($value)
	{
		$this->HardExpirationWarning = $value;
	}
/**
 *

 * @return UserIdPasswordType
 */
	function getCredentials()
	{
		return $this->Credentials;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCredentials($value)
	{
		$this->Credentials = $value;
	}
/**
 *

 * @return string
 */
	function getNotificationSignature()
	{
		return $this->NotificationSignature;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setNotificationSignature($value)
	{
		$this->NotificationSignature = $value;
	}
/**
 *

 * @return 
 */
	function CustomSecurityHeaderType()
	{
		$this->EbatNs_ComplexType('CustomSecurityHeaderType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'eBayAuthToken' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HardExpirationWarning' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Credentials' =>
				array(
					'required' => false,
					'type' => 'UserIdPasswordType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NotificationSignature' =>
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
