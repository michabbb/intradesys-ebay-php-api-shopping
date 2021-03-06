<?php

namespace intradesys\api\ebay\shopping;
// autogenerated file 09.05.2012 13:43
// $Id: $
// $Log: $
//
//
require_once 'NameValueListArrayType.php';
require_once 'AbstractRequestType.php';

/**
 * Retrieves publicly available data for a single listing.Use this call to retrieve 
 * most of the information that is visibleon a listing's View Item page on the eBay 
 * Web site,such as title, description, prices, basic seller and bidder 
 * information,and other details about the listing.Also returns basicshipping 
 * costs. For more shipping details, use GetShippingCosts. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSingleItemRequestType.html
 *
 */
class GetSingleItemRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $VariationSKU;
	/**
	 * @var NameValueListArrayType
	 */
	protected $VariationSpecifics;
	/**
	 * @var string
	 */
	protected $IncludeSelector;

	/**
	 * @return string
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return string
	 */
	function getVariationSKU()
	{
		return $this->VariationSKU;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setVariationSKU($value)
	{
		$this->VariationSKU = $value;
	}
	/**
	 * @return NameValueListArrayType
	 */
	function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
	}
	/**
	 * @return void
	 * @param NameValueListArrayType $value 
	 */
	function setVariationSpecifics($value)
	{
		$this->VariationSpecifics = $value;
	}
	/**
	 * @return string
	 */
	function getIncludeSelector()
	{
		return $this->IncludeSelector;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setIncludeSelector($value)
	{
		$this->IncludeSelector = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSingleItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VariationSKU' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VariationSpecifics' =>
					array(
						'required' => false,
						'type' => 'NameValueListArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeSelector' =>
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
