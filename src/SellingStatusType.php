<?php

namespace intradesys\api\ebay\shopping;
// autogenerated file 09.05.2012 13:43
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Contains various details about the current status of a listing. Thesevalues are 
 * computed by eBay and cannot be specified at listing time. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingStatusType.html
 *
 */
class SellingStatusType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $ConvertedCurrentPrice;
	/**
	 * @var AmountType
	 */
	protected $CurrentPrice;
	/**
	 * @var int
	 */
	protected $QuantitySold;

	/**
	 * @return AmountType
	 */
	function getConvertedCurrentPrice()
	{
		return $this->ConvertedCurrentPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setConvertedCurrentPrice($value)
	{
		$this->ConvertedCurrentPrice = $value;
	}
	/**
	 * @return AmountType
	 */
	function getCurrentPrice()
	{
		return $this->CurrentPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setCurrentPrice($value)
	{
		$this->CurrentPrice = $value;
	}
	/**
	 * @return int
	 */
	function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantitySold($value)
	{
		$this->QuantitySold = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingStatusType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ConvertedCurrentPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CurrentPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantitySold' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>