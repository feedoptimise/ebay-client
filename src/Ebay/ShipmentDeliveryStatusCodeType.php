<?php
 namespace Feedoptimise\Ebay;
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
//require_once 'EbatNs_FacetType.php';

class ShipmentDeliveryStatusCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Created
	var $Created = 'Created';
	// @var string $DroppedOff
	var $DroppedOff = 'DroppedOff';
	// @var string $InTransit
	var $InTransit = 'InTransit';
	// @var string $Delivered
	var $Delivered = 'Delivered';
	// @var string $Returned
	var $Returned = 'Returned';
	// @var string $Canceled
	var $Canceled = 'Canceled';
	// @var string $LabelPrinted
	var $LabelPrinted = 'LabelPrinted';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function ShipmentDeliveryStatusCodeType()
	{
		$this->EbatNs_FacetType('ShipmentDeliveryStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ShipmentDeliveryStatusCodeType = new ShipmentDeliveryStatusCodeType();

?>
