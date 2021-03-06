<?php
namespace Plenty\Modules\Item\VariationSku\Models;


/**
 * The variationSku model
 */
abstract class VariationSku 
{
	public		$id;
	public		$variationId;
	public		$marketId;
	public		$accountId;
	public		$initialSku;
	public		$variationSku;
	public		$active;
	public		$createdTimestamp;
	public		$lastExportTimestamp;
	public		$deletedTimestamp;
	public		$status;
	public		$additionalInformation;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}