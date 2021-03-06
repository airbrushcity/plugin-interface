<?php
namespace Plenty\Modules\Order\Models;

use Carbon\Carbon;

/**
 * The order item amount model. Order item amount refers to amounts of money.
 */
abstract class OrderItemAmount 
{
	public		$id;
	public		$orderItemId;
	public		$isSystemCurrency;
	public		$currency;
	public		$exchangeRate;
	public		$priceOriginalGross;
	public		$priceOriginalNet;
	public		$priceGross;
	public		$priceNet;
	public		$surcharge;
	public		$discount;
	public		$isPercentage;
	public		$createdAt;
	public		$updatedAt;
	public		$orderItem;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}