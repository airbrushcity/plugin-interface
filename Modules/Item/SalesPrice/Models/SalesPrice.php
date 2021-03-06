<?php
namespace Plenty\Modules\Item\SalesPrice\Models;

use Illuminate\Database\Eloquent\Collection;

abstract class SalesPrice 
{
	public		$id;
	public		$position;
	public		$minimumOrderQuantity;
	public		$type;
	public		$isCustomerPrice;
	public		$isDisplayedByDefault;
	public		$isLiveConversion;
	public		$createdAt;
	public		$updatedAt;
	public		$names;
	public		$accounts;
	public		$countries;
	public		$currencies;
	public		$customerClasses;
	public		$referrers;
	public		$clients;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}