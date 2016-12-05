<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket role model.
 */
abstract class TicketRole 
{
	public		$id;
	public		$position;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}