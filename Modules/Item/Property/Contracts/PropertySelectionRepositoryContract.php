<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\PropertySelection;

/**
 * Repository for property selection
 */
interface PropertySelectionRepositoryContract 
{

	public function create(
		array $data, 
		int $propertyItemId
	):PropertySelection;

	public function delete(
		int $propertyItemId, 
		string $lang
	):boolean;

	public function update(
		array $data, 
		int $propertyItemId, 
		string $lang
	):PropertySelection;

	public function findOne(
		int $propertyItemId, 
		string $lang
	):PropertySelection;

	public function findByPropertyItemId(
		int $propertyItemId
	):PropertySelection;

}