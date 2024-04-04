<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_FacetType.php';

class DisputeRecordTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $UnpaidItem
	var $UnpaidItem = 'UnpaidItem';
	// @var string $ItemNotReceived
	var $ItemNotReceived = 'ItemNotReceived';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function DisputeRecordTypeCodeType()
	{
		$this->EbatNs_FacetType('DisputeRecordTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DisputeRecordTypeCodeType = new DisputeRecordTypeCodeType();

?>
