<?php
namespace Plenty\Modules\Market\Settings\Contracts;

use Plenty\Modules\Market\Settings\Models\Settings;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;

/**
 * Use this interface to store and retrieve market specific settings.
 */
interface SettingsRepositoryContract 
{

	/**
	 * Create market settings.
	 */
	public function create(
		string $marketplaceId, 
		string $type, 
		array $settings
	):Settings;

	/**
	 * Update one market settings entry.
	 */
	public function update(
		array $settingsData, 
		int $id
	);

	/**
	 * Return the settings for a given settings ID.
	 */
	public function get(
		int $id
	):Settings;

	/**
	 * Find settings for a given marketplace ID and type.
	 */
	public function find(
		string $marketplaceId, 
		string $type = null
	):array;

	/**
	 * Delete a setting.
	 */
	public function delete(
		int $id
	);

	/**
	 * Delete all settings for a given type and marketplace ID.
	 */
	public function deleteAll(
		string $marketplaceId, 
		string $type
	);

}