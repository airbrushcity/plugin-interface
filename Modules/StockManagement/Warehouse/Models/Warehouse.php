<?php
namespace Plenty\Modules\StockManagement\Warehouse\Models;

use Plenty\Modules\Account\Address\Models\Address;
use Plenty\Modules\Account\Address\Models\AddressOption;
use Plenty\Modules\StockManagement\Warehouse\Management\Models\Rack;
use Plenty\Modules\StockManagement\Warehouse\Management\Models\StorageLocation;

/**
 * The warehouse model in plentymarkets represents actual warehouses. Every warehouse is identified by an Id. Furthermore a warehouse is described by a name and is always associated with an address. This address may not only contain a physical address information like a street, a house number, a postal code and a town, but also an email address, a telephone number or a fax number.
 */
abstract class Warehouse 
{
	public		$id;
	public		$name;
	public		$note;
	public		$typeId;
	public		$onStockAvailability;
	public		$outOfStockAvailability;
	public		$splitByShippingProfile;
	public		$storageLocationType;
	public		$storageLocationZone;
	public		$repairWarehouseId;
	public		$isInventoryModeActive;
	public		$logisticsType;
	public		$address;
	public		$repairWarehouse;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}