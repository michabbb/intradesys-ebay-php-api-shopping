<?php

namespace intradesys\api\ebay\shopping;
// autogenerated file 09.05.2012 13:43
// $Id: $
// $Log: $
//
//
require_once 'ShippingCostSummaryType.php';
require_once 'ShippingDetailsType.php';
require_once 'AbstractResponseType.php';

/**
 * Response to call of GetShippingCosts. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetShippingCostsResponseType.html
 *
 */
class GetShippingCostsResponseType extends AbstractResponseType
{
	/**
	 * @var ShippingDetailsType
	 */
	protected $ShippingDetails;
	/**
	 * @var ShippingCostSummaryType
	 */
	protected $ShippingCostSummary;

	/**
	 * @return ShippingDetailsType
	 */
	function getShippingDetails()
	{
		return $this->ShippingDetails;
	}
	/**
	 * @return void
	 * @param ShippingDetailsType $value 
	 */
	function setShippingDetails($value)
	{
		$this->ShippingDetails = $value;
	}
	/**
	 * @return ShippingCostSummaryType
	 */
	function getShippingCostSummary()
	{
		return $this->ShippingCostSummary;
	}
	/**
	 * @return void
	 * @param ShippingCostSummaryType $value 
	 */
	function setShippingCostSummary($value)
	{
		$this->ShippingCostSummary = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetShippingCostsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ShippingDetails' =>
					array(
						'required' => false,
						'type' => 'ShippingDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingCostSummary' =>
					array(
						'required' => false,
						'type' => 'ShippingCostSummaryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
