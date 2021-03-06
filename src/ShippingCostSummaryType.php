<?php

namespace intradesys\api\ebay\shopping;
// autogenerated file 09.05.2012 13:43
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'InsuranceOptionCodeType.php';
require_once 'ShippingTypeCodeType.php';
require_once 'AmountType.php';

/**
 * Type for the shipping-related details for an item or transaction. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShippingCostSummaryType.html
 *
 */
class ShippingCostSummaryType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $ShippingServiceName;
	/**
	 * @var AmountType
	 */
	protected $ShippingServiceCost;
	/**
	 * @var AmountType
	 */
	protected $InsuranceCost;
	/**
	 * @var ShippingTypeCodeType
	 */
	protected $ShippingType;
	/**
	 * @var boolean
	 */
	protected $LocalPickup;
	/**
	 * @var InsuranceOptionCodeType
	 */
	protected $InsuranceOption;
	/**
	 * @var AmountType
	 */
	protected $ListedShippingServiceCost;

	/**
	 * @return string
	 */
	function getShippingServiceName()
	{
		return $this->ShippingServiceName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setShippingServiceName($value)
	{
		$this->ShippingServiceName = $value;
	}
	/**
	 * @return AmountType
	 */
	function getShippingServiceCost()
	{
		return $this->ShippingServiceCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setShippingServiceCost($value)
	{
		$this->ShippingServiceCost = $value;
	}
	/**
	 * @return AmountType
	 */
	function getInsuranceCost()
	{
		return $this->InsuranceCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setInsuranceCost($value)
	{
		$this->InsuranceCost = $value;
	}
	/**
	 * @return ShippingTypeCodeType
	 */
	function getShippingType()
	{
		return $this->ShippingType;
	}
	/**
	 * @return void
	 * @param ShippingTypeCodeType $value 
	 */
	function setShippingType($value)
	{
		$this->ShippingType = $value;
	}
	/**
	 * @return boolean
	 */
	function getLocalPickup()
	{
		return $this->LocalPickup;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setLocalPickup($value)
	{
		$this->LocalPickup = $value;
	}
	/**
	 * @return InsuranceOptionCodeType
	 */
	function getInsuranceOption()
	{
		return $this->InsuranceOption;
	}
	/**
	 * @return void
	 * @param InsuranceOptionCodeType $value 
	 */
	function setInsuranceOption($value)
	{
		$this->InsuranceOption = $value;
	}
	/**
	 * @return AmountType
	 */
	function getListedShippingServiceCost()
	{
		return $this->ListedShippingServiceCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setListedShippingServiceCost($value)
	{
		$this->ListedShippingServiceCost = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShippingCostSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ShippingServiceName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingServiceCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InsuranceCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingType' =>
					array(
						'required' => false,
						'type' => 'ShippingTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LocalPickup' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InsuranceOption' =>
					array(
						'required' => false,
						'type' => 'InsuranceOptionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListedShippingServiceCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
