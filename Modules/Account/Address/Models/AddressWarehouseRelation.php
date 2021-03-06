<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * address warehouse relation model
 */
abstract class AddressWarehouseRelation 
{
	public		$id;
	public		$warehouseId;
	public		$typeId;
	public		$addressId;
	public		$address;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}