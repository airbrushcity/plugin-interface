<?php
namespace Plenty\Modules\Item\VariationStock\Models;


/**
 * The variation stock model.
 */
abstract class VariationStock 
{
	public		$itemId;
	public		$variationId;
	public		$warehouseId;
	public		$reservedListing;
	public		$reservedBundles;
	public		$valueOfGoods;
	public		$purchasePrice;
	public		$physicalStock;
	public		$reservedStock;
	public		$netStock;
	public		$reorderLevel;
	public		$deltaReorderLevel;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}