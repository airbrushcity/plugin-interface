<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The AttributeValueName model including AttributeValue
 */
abstract class AttributeValueName 
{
	public		$valueId;
	public		$lang;
	public		$name;
	public		$attributeValue;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}