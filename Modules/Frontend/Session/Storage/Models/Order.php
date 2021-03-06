<?php
namespace Plenty\Modules\Frontend\Session\Storage\Models;


/**
 * session storage model for order data
 */
abstract class Order 
{
	public		$deliveryAddressId;
	public		$parcelServiceId;
	public		$parcelServicePresetId;
	public		$methodOfPayment;
	public		$isNet;
	public		$shippingCosts;
	public		$orderinfoText;
	public		$payDataComplete;
	public		$itemOrderParams;
	public		$uploadedFileStack;
	public		$trustedShopBuyerProtection;
	public		$trustedShopApplicationId;
	public		$coupon;
	public		$couponDisplay;
	public		$activePaymentMethodsList;
	public		$referrerId;
	public		$referrerPriceColumn;
	public		$referrerItemId;
	public		$schedulerId;
	public		$schedulerIntervalId;
	public		$schedulerOrderExecutionId;
	public		$schedulerFirstDeliveryDate;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}