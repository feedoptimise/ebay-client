<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_FacetType.php';

class DescriptionTemplateCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Layout
	var $Layout = 'Layout';
	// @var string $Theme
	var $Theme = 'Theme';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function DescriptionTemplateCodeType()
	{
		$this->EbatNs_FacetType('DescriptionTemplateCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DescriptionTemplateCodeType = new DescriptionTemplateCodeType();

?>
