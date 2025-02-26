<?php
/**
 * DeleteHandler
 *
 * @package Review
 */

declare( strict_types=1 );

namespace HexagonalReviews\Review\Application\Command\Delete;

use HexagonalReviews\Review\Domain\Event\ReviewDeleted;
use HexagonalReviews\Review\Domain\Exception\IncorrectStars;
use HexagonalReviews\Review\Domain\Exception\ReviewNotFound;
use HexagonalReviews\Review\Domain\Exception\StatusNotFound;
use HexagonalReviews\Review\Domain\Repository\ReviewRepository;
use HexagonalReviews\Shared\Domain\Service\EventDispatcher;
use Ramsey\Uuid\Uuid;

/**
 * Class DeleteHandler
 *
 * @package HexagonalReviews\Review\Application\Command\Delete
 */
final class DeleteHandler {
	/**
	 * Repo.
	 *
	 * @var ReviewRepository repo.
	 */
	private \HexagonalReviews\Review\Domain\Repository\ReviewRepository $review_repository;

	/**
	 * Event Dispatcher.
	 *
	 * @var EventDispatcher event dispatcher.
	 */
	private \HexagonalReviews\Shared\Domain\Service\EventDispatcher $event_dispatcher;

	/**
	 * DeleteHandler constructor.
	 *
	 * @param ReviewRepository $review_repository repo.
	 * @param EventDispatcher  $event_dispatcher  Dispatcher.
	 */
	public function __construct( ReviewRepository $review_repository, EventDispatcher $event_dispatcher ) {
		$this->review_repository = $review_repository;
		$this->event_dispatcher  = $event_dispatcher;
	}

	/**
	 * Execution.
	 *
	 * @param DeleteCommand $command command.
	 *
	 * @throws IncorrectStars Incorrect stars.
	 * @throws ReviewNotFound When Review is not found.
	 * @throws StatusNotFound StatusNotFound.
	 */
	public function run( DeleteCommand $command ): void {
		$review = $this->review_repository->get( Uuid::fromString( $command->get_uuid() ) );

		$this->review_repository->delete( Uuid::fromString( $command->get_uuid() ) );

		if ( $review->get_status()->is_published() ) {
			$this->event_dispatcher->dispatch(
				new ReviewDeleted(
					UUid::uuid4(),
					UUid::uuid4(),
					$review->get_product_id()->get_id(),
					$review->get_stars()->get_stars()
				)
			);
		}
	}
}
