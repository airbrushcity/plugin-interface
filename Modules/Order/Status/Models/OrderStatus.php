<?php
namespace Plenty\Modules\Order\Status\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * The order status model contains the ID of an order status. The ID is always an integer with two decimal places. The highest number available is 99. Every status has names in different languages, which are accessible through the names attribute.
 */
abstract class OrderStatus 
{
	public		$id;
	public		$isErasable;
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