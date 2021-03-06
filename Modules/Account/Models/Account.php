<?php
namespace Plenty\Modules\Account\Models;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * the account model.
 */
abstract class Account 
{
	public		$id;
	public		$number;
	public		$companyName;
	public		$taxIdNumber;
	public		$valuta;
	public		$discountDays;
	public		$discountPercent;
	public		$timeForPaymentAllowedDays;
	public		$salesRepresentativeContactId;
	public		$userId;
	public		$deliveryTime;
	public		$dealerMinOrderValue;
	public		$createdAt;
	public		$updatedAt;
	public		$contacts;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}