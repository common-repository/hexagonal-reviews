<?php
/**
 * OnReviewDeletedRecalculateAverage
 *
 * @package Average
 */

declare( strict_types=1 );

namespace HexagonalReviews\Average\Application\Event;

use HexagonalReviews\Average\Domain\Entity\Average;
use HexagonalReviews\Average\Domain\Repository\AverageRepository;
use HexagonalReviews\Average\Domain\Service\AverageCalculator;
use HexagonalReviews\Review\Domain\Event\ReviewDeleted;
use HexagonalReviews\Shared\Domain\ValueObject\ProductId;

/**
 * Class OnReviewDeletedRecalculateAverage
 *
 * @package HexagonalReviews\Average\Application\Event
 */
final class OnReviewDeletedRecalculateAverage {

	/**
  * Repo.
  */
 private \HexagonalReviews\Average\Domain\Repository\AverageRepository $average_repository;

	/**
	 * OnReviewDeletedRecalculateAverage constructor.
	 *
	 * @param AverageRepository $average_repository repo.
	 */
	public function __construct( AverageRepository $average_repository ) {
		$this->average_repository = $average_repository;
	}

	/**
	 * Invocation.
	 *
	 * @param ReviewDeleted $event event.
	 *
	 * @return ReviewDeleted
	 */
	public function __invoke( ReviewDeleted $event ) {
		$average = $this->average_repository->find( ProductId::from_int( $event->get_product_id() ) );

		if ( $average ) {
			$this->average_repository->update(
				new Average(
					ProductId::from_int( $event->get_product_id() ),
					$average->get_review_count() - 1,
					$average->get_positives() - AverageCalculator::check_if_its_positive_review( $event->get_stars() )
				)
			);
		}

		return $event;
	}
}
