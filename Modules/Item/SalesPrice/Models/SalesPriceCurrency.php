<?php
namespace Plenty\Modules\Item\SalesPrice\Models;

use Illuminate\Database\Eloquent\Collection;

abstract class SalesPriceCurrency 
{
	public		$priceId;
	public		$currency;
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