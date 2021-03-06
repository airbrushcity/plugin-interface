<?php
namespace Plenty\Modules\Account\Address\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * The address options type model
 */
abstract class AddressOptionType 
{
	public		$id;
	public		$position;
	public		$nonErasable;
	public		$names;
	public		$options;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}