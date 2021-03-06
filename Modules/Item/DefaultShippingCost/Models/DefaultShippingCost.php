<?php
namespace Plenty\Modules\Item\DefaultShippingCost\Models;


/**
 * The default shipping cost model
 */
abstract class DefaultShippingCost 
{
	public		$id;
	public		$itemId;
	public		$profileId;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}