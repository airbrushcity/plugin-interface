<?php
namespace Plenty\Modules\System\Models;


/**
 * The webstore model
 */
abstract class Webstore 
{
	public		$id;
	public		$name;
	public		$type;
	public		$storeIdentifier;
	public		$configuration;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}