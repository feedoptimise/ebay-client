<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'UserIDType.php';
//require_once 'EbatNs_ComplexType.php';
//require_once 'CommentTypeCodeType.php';

class FeedbackInfoType extends EbatNs_ComplexType
{
	// start props
	// @var string $CommentText
	var $CommentText;
	// @var CommentTypeCodeType $CommentType
	var $CommentType;
	// @var UserIDType $TargetUser
	var $TargetUser;
	// end props

/**
 *

 * @return string
 */
	function getCommentText()
	{
		return $this->CommentText;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCommentText($value)
	{
		$this->CommentText = $value;
	}
/**
 *

 * @return CommentTypeCodeType
 */
	function getCommentType()
	{
		return $this->CommentType;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCommentType($value)
	{
		$this->CommentType = $value;
	}
/**
 *

 * @return UserIDType
 */
	function getTargetUser()
	{
		return $this->TargetUser;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTargetUser($value)
	{
		$this->TargetUser = $value;
	}
/**
 *

 * @return 
 */
	function FeedbackInfoType()
	{
		$this->EbatNs_ComplexType('FeedbackInfoType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CommentText' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CommentType' =>
				array(
					'required' => false,
					'type' => 'CommentTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TargetUser' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
