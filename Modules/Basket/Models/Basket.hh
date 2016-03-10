<?hh
namespace Plenty\Modules\Basket\Models;
/**
 * The basket model
 */
abstract class Basket{
	public int $id;

	public string $sessionId;

	public int $orderId;

	public int $customerId;

	public int $customerShippingAddressId;

	public string $currency;

	public float $referrerId;

	public int $shippingCountryId;

	public int $methodOfPaymentId;

	public int $shippingProviderId;

	public int $shippingProfileId;

	public float $itemSum;

	public float $itemSumNet;

	public float $basketAmount;

	public float $basketAmountNet;

	public float $shippingAmount;

	public float $shippingAmountNet;

	public float $paymentAmount;

	public string $couponCode;

	public float $couponDiscount;

	public bool $shippingDeleteByCoupon;

	public float $basketRebate;

	public int $maxFsk;

	public int $orderTimestamp;

	public string $createdAt;

	public string $updatedAt;

}