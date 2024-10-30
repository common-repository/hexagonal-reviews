<?php
/**
 * ReviewUpdated
 *
 * @package Review
 */

declare( strict_types=1 );

namespace HexagonalReviews\Review\Domain\Event;

use HexagonalReviews\Shared\Domain\Event\Event;
use Ramsey\Uuid\UuidInterface;

/**
 * Class ReviewUpdated
 *
 * @package HexagonalReviews\Review\Domain\Event
 */
final class ReviewUpdated implements Event {

	/**
  * Correlation uuid.
  */
 private \Ramsey\Uuid\UuidInterface $correlation_uuid;

	/**
  * Parent uuid.
  */
 private \Ramsey\Uuid\UuidInterface $parent_uuid;

	/**
  * Product id.
  */
 private int $product_id;

	/**
  * Status
  */
 private string $status;

	/**
  * Old Stars.
  */
 private float $old_stars;

	/**
  * Stars.
  */
 private float $stars;

	/**
	 * ReviewUpdated constructor.
	 *
	 * @param UuidInterface $correlation_uuid correlation.
	 * @param UuidInterface $parent_uuid parent.
	 * @param int           $product_id product id.
	 * @param string        $status status.
	 * @param float         $old_stars old stars.
	 * @param float         $stars new stars.
	 */
	public function __construct( UuidInterface $correlation_uuid, UuidInterface $parent_uuid, int $product_id, string $status, float $old_stars, float $stars ) {
		$this->correlation_uuid = $correlation_uuid;
		$this->parent_uuid      = $parent_uuid;
		$this->product_id       = $product_id;
		$this->status           = $status;
		$this->old_stars        = $old_stars;
		$this->stars            = $stars;
	}

	/**
	 * Gets parent id
	 *
	 * @return string
	 */
	public function get_parent_uuid(): string {
		return $this->parent_uuid->toString();
	}

	/**
	 * Get Correlation id
	 *
	 * @return string
	 */
	public function get_correlation_uuid(): string {
		return $this->correlation_uuid->toString();
	}

	/**
	 * Gets product id.
	 *
	 * @return int
	 */
	public function get_product_id(): int {
		return $this->product_id;
	}

	/**
	 * Get new Stars.
	 *
	 * @return float
	 */
	public function get_stars(): float {
		return $this->stars;
	}
	/**
	 * Get old Stars.
	 *
	 * @return float
	 */
	public function get_old_stars(): float {
		return $this->old_stars;
	}

	/**
	 * Gets Status.
	 *
	 * @return string
	 */
	public function get_status(): string {
		return $this->status;
	}
}
