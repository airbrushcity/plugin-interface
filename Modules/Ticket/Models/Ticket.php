<?php
namespace Plenty\Modules\Ticket\Models;

use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * The ticket model.
 */
abstract class Ticket 
{
	public		$id;
	public		$typeId;
	public		$priorityId;
	public		$parentTicketId;
	public		$statusId;
	public		$confidential;
	public		$contactId;
	public		$createdAt;
	public		$updatedAt;
	public		$contactLastUpdateAt;
	public		$deadlineAt;
	public		$finishedAt;
	public		$title;
	public		$progress;
	public		$plentyId;
	public		$source;
	public		$documentsCount;
	public		$hasDocuments;
	public		$childrenCount;
	public		$resubmissionAt;
	public		$owners;
	public		$messages;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}