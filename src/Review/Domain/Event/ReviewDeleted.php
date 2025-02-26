<?php
/**
 * ReviewDeleted
 *
 * @package Review
 */

declare( strict_types=1 );

namespace HexagonalReviews\Review\Domain\Event;

use HexagonalReviews\Shared\Domain\Event\Event;
use Ramsey\Uuid\UuidInterface;

/**
 * Class ReviewDeleted
 *
 * @package HexagonalReviews\Review\Domain\Event
 */
final class ReviewDeleted implements Event {

	/**
  * Correlation Uuid.
  */
 private \Ramsey\Uuid\UuidInterface $correlation_uuid;

	/**
  * Parent Uuid.
  */
 private \Ramsey\Uuid\UuidInterface $parent_uuid;

	/**
  * Product id.
  */
 private int $product_id;

	/**
  * Stars
  */
 private float $stars;

	/**
	 * ReviewDeleted constructor.
	 *
	 * @param UuidInterface $correlation_uuid correlation uuid.
	 * @param UuidInterface $parent_uuid parent uuid.
	 * @param int           $product_id product id.
	 * @param float         $stars stars.
	 */
	public function __construct( UuidInterface $correlation_uuid, UuidInterface $parent_uuid, int $product_id, float $stars ) {
		$this->correlation_uuid = $correlation_uuid;
		$this->parent_uuid      = $parent_uuid;
		$this->product_id       = $product_id;
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
	 * Get Stars.
	 *
	 * @return float
	 */
	public function get_stars(): float {
		return $this->stars;
	}
}
