<?hh
namespace Plenty\Modules\DataExchange\Models;
/**
 * format setting
 */
abstract class FormatSetting{
	public int $id;

	public string $createdAt;

	public string $updatedAt;

	public int $exportId;

	public string $key;

	public string $value;

}