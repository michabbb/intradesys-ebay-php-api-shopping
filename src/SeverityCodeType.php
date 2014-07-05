<?php

namespace intradesys\api\ebay\shopping;
// autogenerated file 09.05.2012 13:43
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * SeverityCodeType - Type declaration to be used by other schema. This 
 * codeidentifies the severity of an API error. A code indicates whether there is 
 * an API-level error or warning that needs to be communicated to the client. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SeverityCodeType.html
 *
 * @property string Warning
 * @property string Error
 * @property string CustomCode
 */
class SeverityCodeType extends EbatNs_FacetType
{
	const CodeType_Warning = 'Warning';
	const CodeType_Error = 'Error';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SeverityCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SeverityCodeType = new SeverityCodeType();

?>
