<?php
namespace Plenty\Modules\Order\Shipping\Countries\Models;


/**
 * The country model
 */
abstract class Country 
{
	public		$id;
	public		$name;
	public		$shippingDestinationId;
	public		$active;
	public		$storehouseId;
	public		$isoCode2;
	public		$isoCode3;
	public		$lang;
	public		$isCountryStateMandatory;
	public		$states;
	public		$names;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}