<?php
namespace Plenty\Modules\Item\Variation\Models;

use Plenty\Modules\Item\VariationDefaultCategory\Models\VariationDefaultCategory;

/**
 * Variation
 */
abstract class Variation 
{
	public		$id;
	public		$isMain;
	public		$mainVariationId;
	public		$itemId;
	public		$position;
	public		$isActive;
	public		$number;
	public		$model;
	public		$externalId;
	public		$availability;
	public		$estimatedAvailableAt;
	public		$purchasePrice;
	public		$createdAt;
	public		$updatedAt;
	public		$relatedUpdatedAt;
	public		$priceCalculationId;
	public		$picking;
	public		$stockLimitation;
	public		$isVisibleIfNetStockIsPositive;
	public		$isInvisibleIfNetStockIsNotPositive;
	public		$isAvailableIfNetStockIsPositive;
	public		$isUnavailableIfNetStockIsNotPositive;
	public		$mainWarehouseId;
	public		$maximumOrderQuantity;
	public		$minimumOrderQuantity;
	public		$intervalOrderQuantity;
	public		$availableUntil;
	public		$releasedAt;
	public		$name;
	public		$weightG;
	public		$weightNetG;
	public		$widthMM;
	public		$lengthMM;
	public		$heightMM;
	public		$extraShippingCharge1;
	public		$extraShippingCharge2;
	public		$unitsContained;
	public		$palletTypeId;
	public		$packingUnits;
	public		$packingUnitTypeId;
	public		$transportationCosts;
	public		$storageCosts;
	public		$customs;
	public		$operatingCosts;
	public		$vatId;
	public		$bundleType;
	public		$automaticClientVisibility;
	public		$isHiddenInCategoryList;
	public		$categoryVariationId;
	public		$marketVariationId;
	public		$clientVariationId;
	public		$salesPriceVariationId;
	public		$supplierVariationId;
	public		$warehouseVariationId;
	public		$variationBarcodes;
	public		$variationSalesPrices;
	public		$marketItemNumbers;
	public		$variationCategories;
	public		$variationClients;
	public		$variationMarkets;
	public		$variationDefaultCategory;
	public		$variationSuppliers;
	public		$variationWarehouses;
	public		$images;
	public		$variationAttributeValues;
	public		$parent;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}