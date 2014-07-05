<?php

namespace intradesys\api\ebay\shopping;
// autogenerated file 09.05.2012 13:43
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Contains details about a category. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CategoryType.html
 *
 */
class CategoryType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var int
	 */
	protected $CategoryLevel;
	/**
	 * @var string
	 */
	protected $CategoryName;
	/**
	 * @var string
	 */
	protected $CategoryParentID;
	/**
	 * @var string
	 */
	protected $CategoryParentName;
	/**
	 * @var int
	 */
	protected $ItemCount;
	/**
	 * @var string
	 */
	protected $CategoryNamePath;
	/**
	 * @var string
	 */
	protected $CategoryIDPath;
	/**
	 * @var boolean
	 */
	protected $LeafCategory;

	/**
	 * @return string
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
	/**
	 * @return int
	 */
	function getCategoryLevel()
	{
		return $this->CategoryLevel;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCategoryLevel($value)
	{
		$this->CategoryLevel = $value;
	}
	/**
	 * @return string
	 */
	function getCategoryName()
	{
		return $this->CategoryName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryName($value)
	{
		$this->CategoryName = $value;
	}
	/**
	 * @return string
	 */
	function getCategoryParentID()
	{
		return $this->CategoryParentID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryParentID($value)
	{
		$this->CategoryParentID = $value;
	}
	/**
	 * @return string
	 */
	function getCategoryParentName()
	{
		return $this->CategoryParentName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryParentName($value)
	{
		$this->CategoryParentName = $value;
	}
	/**
	 * @return int
	 */
	function getItemCount()
	{
		return $this->ItemCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setItemCount($value)
	{
		$this->ItemCount = $value;
	}
	/**
	 * @return string
	 */
	function getCategoryNamePath()
	{
		return $this->CategoryNamePath;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryNamePath($value)
	{
		$this->CategoryNamePath = $value;
	}
	/**
	 * @return string
	 */
	function getCategoryIDPath()
	{
		return $this->CategoryIDPath;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryIDPath($value)
	{
		$this->CategoryIDPath = $value;
	}
	/**
	 * @return boolean
	 */
	function getLeafCategory()
	{
		return $this->LeafCategory;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setLeafCategory($value)
	{
		$this->LeafCategory = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CategoryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryLevel' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryParentID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryParentName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryNamePath' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryIDPath' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LeafCategory' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
