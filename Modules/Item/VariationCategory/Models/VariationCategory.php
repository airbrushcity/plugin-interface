<?php
namespace Plenty\Modules\Item\VariationCategory\Models;


/**
 * Variation Category
 */
abstract class VariationCategory 
{
	public		$variationId;
	public		$categoryId;
	public		$position;
	public		$isNeckermannPrimary;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}