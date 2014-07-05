<?php

namespace intradesys\api\ebay\shopping;
// autogenerated file 09.05.2012 13:43
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SimpleItemType.php';

/**
 * Container for a list of items. Can contain zero, one, or multipleSimpleItemType 
 * objects, each of which conveys the data for one item listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SimpleItemArrayType.html
 *
 */
class SimpleItemArrayType extends EbatNs_ComplexType
{
	/**
	 * @var SimpleItemType
	 */
	protected $Item;

	/**
	 * @return SimpleItemType
	 * @param integer $index 
	 */
	function getItem($index = null)
	{
		if ($index !== null) {
			return $this->Item[$index];
		} else {
			return $this->Item;
		}
	}
	/**
	 * @return void
	 * @param SimpleItemType $value 
	 * @param  $index 
	 */
	function setItem($value, $index = null)
	{
		if ($index !== null) {
			$this->Item[$index] = $value;
		} else {
			$this->Item = $value;
		}
	}
	/**
	 * @return void
	 * @param SimpleItemType $value 
	 */
	function addItem($value)
	{
		$this->Item[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SimpleItemArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Item' =>
					array(
						'required' => false,
						'type' => 'SimpleItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
