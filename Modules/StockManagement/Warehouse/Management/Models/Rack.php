<?php
namespace Plenty\Modules\StockManagement\Warehouse\Management\Models;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\StockManagement\Warehouse\Models\Warehouse;

/**
 * The storage rack model
 */
abstract class Rack 
{
	public		$id;
	public		$name;
	public		$position;
	public		$warehouseId;
	public		$zone;
	public		$warehouse;
	public		$shelves;
	public		$storageLocations;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}