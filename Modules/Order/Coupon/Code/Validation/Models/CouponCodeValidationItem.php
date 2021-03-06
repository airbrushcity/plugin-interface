<?php
namespace Plenty\Modules\Order\Coupon\Code\Validation\Models;


/**
 * The CouponCodeValidationItem model contains all item data needed for validating whether the coupon can be redeemed for these items or not.
 */
abstract class CouponCodeValidationItem 
{
	public		$amount;
	public		$noCoupon;
	public		$quantity;
	public		$singlePrice;
	public		$itemId;
	public		$vatField;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}