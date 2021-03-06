<?php
namespace Plenty\Modules\Item\SalesPrice\Models;

use Illuminate\Database\Eloquent\Collection;

abstract class SalesPriceName 
{
	public		$priceId;
	public		$lang;
	public		$nameInternal;
	public		$nameExternal;
	public		$createdAt;
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