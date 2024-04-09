<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_ComplexType.php';

class UserIdPasswordType extends EbatNs_ComplexType
{
	// start props
	// @var string $AppId
	var $AppId;
	// @var string $DevId
	var $DevId;
	// @var string $AuthCert
	var $AuthCert;
	// @var string $Username
	var $Username;
	// @var string $Password
	var $Password;
	// end props

/**
 *

 * @return string
 */
	function getAppId()
	{
		return $this->AppId;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAppId($value)
	{
		$this->AppId = $value;
	}
/**
 *

 * @return string
 */
	function getDevId()
	{
		return $this->DevId;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDevId($value)
	{
		$this->DevId = $value;
	}
/**
 *

 * @return string
 */
	function getAuthCert()
	{
		return $this->AuthCert;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAuthCert($value)
	{
		$this->AuthCert = $value;
	}
/**
 *

 * @return string
 */
	function getUsername()
	{
		return $this->Username;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUsername($value)
	{
		$this->Username = $value;
	}
/**
 *

 * @return string
 */
	function getPassword()
	{
		return $this->Password;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPassword($value)
	{
		$this->Password = $value;
	}

	public function __construct()
	{
		$this->UserIdPasswordType();
	}
/**
 *

 * @return 
 */
	function UserIdPasswordType()
	{
		$this->EbatNs_ComplexType('UserIdPasswordType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AppId' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DevId' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AuthCert' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Username' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Password' =>
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
