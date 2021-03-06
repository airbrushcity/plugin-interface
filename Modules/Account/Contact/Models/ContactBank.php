<?php
namespace Plenty\Modules\Account\Contact\Models;

use Plenty\Modules\Order\Models\Legacy\Order;

/**
 * The contact bank model.
 */
abstract class ContactBank 
{
	public		$id;
	public		$contactId;
	public		$orderId;
	public		$accountOwner;
	public		$bankName;
	public		$bankAddress;
	public		$bankPostalCodeTown;
	public		$bankCountry;
	public		$iban;
	public		$bic;
	public		$accountNumber;
	public		$sortCode;
	public		$lastUpdateBy;
	public		$directDebitMandateAvailable;
	public		$directDebitMandateAt;
	public		$directDebitMethod;
	public		$directDebitType;
	public		$paymentMethod;
	public		$createdAt;
	public		$updatedAt;
	public		$contact;
	public		$order;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}