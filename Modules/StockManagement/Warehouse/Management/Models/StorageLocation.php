<?php
namespace Plenty\Modules\StockManagement\Warehouse\Management\Models;

use Plenty\Modules\StockManagement\Warehouse\Models\Warehouse;

/**
 * The storage location model
 */
abstract class StorageLocation 
{
	public		$id;
	public		$warehouseId;
	public		$rackId;
	public		$shelfId;
	public		$name;
	public		$type;
	public		$position;
	public		$warehouse;
	public		$rack;
	public		$shelf;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}