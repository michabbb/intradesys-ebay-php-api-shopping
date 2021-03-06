<?php

namespace intradesys\api\ebay\shopping;
// autogenerated file 09.05.2012 13:43
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves publicly available data for one or more listings. Use this call to 
 * retrieve much of the information that is visible on a listing's View Item page 
 * on the eBay Web site, such as title, prices, and basic shipping costs. Provide 
 * ItemID for every item for which you want information. This call returns the same 
 * minimal information that is returned by GetSingleItem, for each item with no 
 * IncludeSelector specified. (Use GetShippingCosts to retrieve more detailed 
 * shipping cost information for a given item.) Duplicated items are returned as a 
 * single item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetMultipleItemsRequestType.html
 *
 */
class GetMultipleItemsRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $IncludeSelector;

	/**
	 * @return string
	 * @param integer $index 
	 */
	function getItemID($index = null)
	{
		if ($index !== null) {
			return $this->ItemID[$index];
		} else {
			return $this->ItemID;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setItemID($value, $index = null)
	{
		if ($index !== null) {
			$this->ItemID[$index] = $value;
		} else {
			$this->ItemID = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addItemID($value)
	{
		$this->ItemID[] = $value;
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
		parent::__construct('GetMultipleItemsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
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
