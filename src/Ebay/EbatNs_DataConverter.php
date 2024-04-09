<?php
 namespace Feedoptimise\Ebay;
// $Id: EbatNs_DataConverter.php,v 1.1 2007/05/31 11:38:00 michael Exp $
/* $Log: EbatNs_DataConverter.php,v $
/* Revision 1.1  2007/05/31 11:38:00  michael
/* - initial checkin
/* - version < 513
/*
 * 
 * 3     3.02.06 10:44 Mcoslar
 * 
 * 2     30.01.06 16:44 Mcoslar
 * �nderungen eingef�gt
*/
	class EbatNs_DataConverter
	{
		var $_options = array();
		function EbatNs_DataConverter()
		{
		}
		
		function decodeData($data, $type = 'string')
		{
			switch ($type)
			{
				case 'boolean':
					if ($data == 'true')
						return true;
					else
						return null;
			}
			return $data;
		}
		
		function encodeData($data, $type = 'string', $elementName = null)
		{
			switch ($type)
			{
				case 'string':
					if ($elementName == 'Description')
						return "<![CDATA[" . $data . "]]>";
			}
			return $data;
		}
		
		function encryptData($data, $type = null)
		{
			return $data;
		}
		
		function decryptData($data, $type = null)
		{
			return $data;
		}
	}
?>