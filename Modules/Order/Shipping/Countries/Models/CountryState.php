<?php
namespace Plenty\Modules\Order\Shipping\Countries\Models;


/**
 * country state
 */
abstract class CountryState 
{
	public		$id;
	public		$countryId;
	public		$isoCode;
	public		$name;
	public		$isoCode3166;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}