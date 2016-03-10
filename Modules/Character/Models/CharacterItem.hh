<?hh
namespace Plenty\Modules\Character\Models;
/**
 * The CharacterItem including CharacterItemName and CharacterMarketComponent
 */
abstract class CharacterItem{
	public int $id;

	public int $position;

	public string $unit;

	public int $character_group_id;

	public string $image_name;

	public string $backend_name;

	public string $value_type;

	public string $searchable;

	public string $order_param;

	public string $display_article;

	public string $display_article_list;

	public string $display_checkout;

	public string $display_pdf;

	public string $backend_notice;

	public float $markup;

	public string $view_as_fee;

	public string $plenty_character_item_last_update_timestamp;

	public array<\Plenty\Modules\Character\Models\CharacterItemName> $names;

	public array<\Plenty\Modules\Character\Models\CharacterMarketComponent> $marketComponents;

}