<?php
/**
 * ReviewStats
 *
 * @package Average
 */

declare( strict_types=1 );

namespace HexagonalReviews\Average\Domain\DTO;

/**
 * Class ReviewStats
 *
 * @package HexagonalReviews\Average\Domain\DTO
 */
final class ReviewStats {
	/**
  * Review Count.
  */
 private int $review_count;

	/**
  * Average
  */
 private float $average;

	/**
	 * ReviewStats constructor.
	 *
	 * @param int       $review_count review count.
	 * @param float|int $average average.
	 */
	public function __construct( int $review_count = 0, float $average = 0 ) {
		$this->review_count = $review_count;
		$this->average      = $average;
	}

	/**
	 * Get Review count.
	 *
	 * @return int
	 */
	public function get_review_count(): int {
		return $this->review_count;
	}

	/**
	 * Get Average.
	 *
	 * @return float
	 */
	public function get_average(): float {
		return $this->average;
	}
}
