<?php
namespace Plenty\Modules\Account\Models;

use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * account contact relation model
 */
abstract class AccountContactRelation 
{
	public		$id;
	public		$accountId;
	public		$contactId;
	public		$account;
	public		$contact;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}