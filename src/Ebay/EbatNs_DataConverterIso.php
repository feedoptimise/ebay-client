<?php

namespace Feedoptimise\Ebay;

class EbatNs_DataConverterIso extends EbatNs_DataConverter
{
    function EbatNs_DataConverterIso()
    {
        $this->EbatNs_DataConverter();
    }

    function decodeData($data, $type = 'string')
    {
        switch ($type)
        {
            case 'string':
                return utf8_decode($data);
            case 'dateTime':
            {
                $dPieces = preg_split('/T/', $data);
                $tPieces = preg_split("/\./", $dPieces[1]);
                $data = $dPieces[0] . ' ' . $tPieces[0];

                // return date('Y-m-d H:i:s', strtotime($data) + date('Z'));
                return $data;
            }
            case 'boolean':
                if ($data == 'true')
                    return true;
                else
                    return null;
            default:
                return $data;
        }
    }

    function encodeData($data, $type = 'string', $elementName = null)
    {
        switch ($type)
        {
            case 'string':
                if ($elementName == 'Description')
                    return "<![CDATA[" . utf8_encode($data) . "]]>";
                else
                    return utf8_encode($data);
            case 'dateTime':
            {
                $time = strtotime($data);
                return date("Y-m-d\\TH:i:s.000\\Z", $time);
            }
        }

        return $data;
    }
}