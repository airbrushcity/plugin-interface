<?php
namespace Plenty\Modules\Item\VariationClient\Models;


/**
 * Variation Client
 */
abstract class VariationClient 
{
	public		$variationId;
	public		$plentyId;
	public		$createdAt;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}