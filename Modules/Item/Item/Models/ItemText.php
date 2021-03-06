<?php
namespace Plenty\Modules\Item\Item\Models;


/**
 * The item text model
 */
abstract class ItemText 
{
	public		$lang;
	public		$name1;
	public		$name2;
	public		$name3;
	public		$shortDescription;
	public		$metaDescription;
	public		$description;
	public		$technicalData;
	public		$keywords;
	public		$urlPath;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}