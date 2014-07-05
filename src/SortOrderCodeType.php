<?php

namespace intradesys\api\ebay\shopping;
// autogenerated file 09.05.2012 13:43
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates the order of sorting. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SortOrderCodeType.html
 *
 * @property string Ascending
 * @property string Descending
 * @property string CustomCode
 */
class SortOrderCodeType extends EbatNs_FacetType
{
	const CodeType_Ascending = 'Ascending';
	const CodeType_Descending = 'Descending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SortOrderCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SortOrderCodeType = new SortOrderCodeType();

?>
