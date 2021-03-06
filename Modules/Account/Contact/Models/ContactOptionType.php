<?php
namespace Plenty\Modules\Account\Contact\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * contact options type model
 */
abstract class ContactOptionType 
{
	public		$id;
	public		$position;
	public		$nonErasable;
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