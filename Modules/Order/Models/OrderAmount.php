<?php
namespace Plenty\Modules\Order\Models;

use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;

/**
 * The order amount model.
 */
abstract class OrderAmount 
{
	public		$id;
	public		$orderId;
	public		$isSystemCurrency;
	public		$isNet;
	public		$currency;
	public		$exchangeRate;
	public		$netTotal;
	public		$grossTotal;
	public		$vatTotal;
	public		$invoiceTotal;
	public		$paidAmount;
	public		$prepaidAmount;
	public		$createdAt;
	public		$updatedAt;
	public		$order;
	public		$vats;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}