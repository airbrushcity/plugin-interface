<?php
namespace Plenty\Modules\StockManagement\Stock\Models;

use Carbon\Carbon;

/**
 * The stock storage location model contains all information about the stock that is stored at one storage location.
 */
abstract class StockStorageLocation 
{
	public		$itemId;
	public		$variationId;
	public		$storageLocationId;
	public		$warehouseId;
	public		$quantity;
	public		$updatedAt;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}