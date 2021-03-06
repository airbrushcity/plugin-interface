<?php
namespace Plenty\Modules\Order\Payment\Method\Models;

use Plenty\Modules\Order\Shipping\Countries\Models\Country;

/**
 * The payment method model
 */
abstract class PaymentMethod 
{
	public		$id;
	public		$name;
	public		$minimumGross;
	public		$priority;
	public		$active;
	public		$showBankDetails;
	public		$infoPageType;
	public		$infoPageExternalUrl;
	public		$feeDomesticFlatRateWebstore;
	public		$feeDomesticFlatRateInternal;
	public		$feeDomesticPercentageWebstore;
	public		$feeDomesticPercentageInternal;
	public		$feeForeignFlatRateWebstore;
	public		$feeForeignFlatRateInternal;
	public		$feeForeignPercentageWebstore;
	public		$feeForeignPercentageInternal;
	public		$informations;
	public		$webstores;
	public		$coutries;
	public		$information;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}