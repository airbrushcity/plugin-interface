<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The AttributeValueSet model
 */
abstract class AttributeValueSet 
{
	public		$attributeValueSetId;
	public		$attributeId;
	public		$valueId;
	public		$isLinkableToImage;
	public		$attributeValue;
	public		$attribute;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}