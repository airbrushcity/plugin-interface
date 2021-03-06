<?php
namespace Plenty\Modules\StockManagement\Stock\Models;

use Carbon\Carbon;

/**
 * The stock model. There are 4 different stock terms used in plentymarkets. The physical stock, the net stock, the reserved stock and the stock reserved for listings.
 */
abstract class Stock 
{
	public		$itemId;
	public		$variationId;
	public		$warehouseId;
	public		$stockPhysical;
	public		$reservedStock;
	public		$reservedEbay;
	public		$reorderDelta;
	public		$stockNet;
	public		$reordered;
	public		$reservedBundle;
	public		$averagePurchasePrice;
	public		$updatedAt;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}