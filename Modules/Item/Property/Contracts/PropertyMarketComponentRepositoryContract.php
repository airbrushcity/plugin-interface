<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\PropertyMarketComponent;

/**
 * Repository for property market component
 */
interface PropertyMarketComponentRepositoryContract 
{

	public function create(
		array $data, 
		int $propertyItemId
	):PropertyMarketComponent;

	public function delete(
		int $propertyItemId, 
		float $marketReference
	):boolean;

	public function update(
		array $data, 
		int $propertyItemId, 
		float $marketReference
	):PropertyMarketComponent;

	public function findOne(
		int $propertyItemId, 
		float $marketReference
	):PropertyMarketComponent;

	public function findByPropertyItemId(
		int $propertyItemId
	):PropertyMarketComponent;

	public function getPropertyMarketComponents(
		float $referrerId, 
		int $componentId = null
	):array;

}