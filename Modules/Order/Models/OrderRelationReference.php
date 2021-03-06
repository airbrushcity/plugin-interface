<?php
namespace Plenty\Modules\Order\Models;

use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Modules\Account\Models\Account;

/**
 * The order relation reference model specifies how references and orders are related to one another.
 */
abstract class OrderRelationReference 
{
	public		$id;
	public		$orderId;
	public		$referenceType;
	public		$referenceId;
	public		$relation;
	public		$order;
	public		$contactReceiver;
	public		$contactSender;
	public		$accountReceiver;
	public		$accountSender;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}