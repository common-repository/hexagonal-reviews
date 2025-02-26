<?php
/**
 * ListReviewsResponse
 *
 * @package Review
 */

declare( strict_types=1 );

namespace HexagonalReviews\Review\Domain\DTO;

use HexagonalReviews\Review\Domain\ValueObject\ReviewCollection;

/**
 * Class ListReviewsResponse
 *
 * @package HexagonalReviews\Review\Domain\DTO
 */
final class ListReviewsResponse {
	/**
	 * Repo.
	 *
	 * @var ReviewCollection repo.
	 */
	private \HexagonalReviews\Review\Domain\ValueObject\ReviewCollection $review_collection;

	/**
	 * Totals.
	 *
	 * @var int totals.
	 */
	private int $totals;

	/**
	 * ListReviewsResponse constructor.
	 *
	 * @param ReviewCollection $review_collection reviewCollection.
	 * @param int              $totals totals.
	 */
	public function __construct( ReviewCollection $review_collection, int $totals ) {
		$this->review_collection = $review_collection;
		$this->totals            = $totals;
	}

	/**
	 * Getter.
	 *
	 * @return ReviewCollection
	 */
	public function get_review_collection(): ReviewCollection {
		return $this->review_collection;
	}

	/**
	 * Getter.
	 *
	 * @return int
	 */
	public function get_totals(): int {
		return $this->totals;
	}
}
