<?php
/**
 * CreateHandler
 *
 * @package Review
 */

declare( strict_types=1 );

namespace HexagonalReviews\Review\Application\Command\Create;

use HexagonalReviews\Review\Domain\Entity\Review;
use HexagonalReviews\Review\Domain\Event\ReviewAdded;
use HexagonalReviews\Review\Domain\Repository\ReviewRepository;
use HexagonalReviews\Review\Domain\ValueObject\Email;
use HexagonalReviews\Review\Domain\ValueObject\Stars;
use HexagonalReviews\Review\Domain\ValueObject\Status;
use HexagonalReviews\Shared\Domain\Service\EventDispatcher;
use HexagonalReviews\Shared\Domain\ValueObject\ProductId;
use Ramsey\Uuid\Uuid;

/**
 * Class CreateHandler
 *
 * @package HexagonalReviews\Review\Application\Command\Create
 */
final class CreateHandler {
	/**
	 * Repo.
	 *
	 * @var ReviewRepository repo.
	 */
	private \HexagonalReviews\Review\Domain\Repository\ReviewRepository $review_repository;

	/**
	 * Event dispatcher.
	 *
	 * @var EventDispatcher dispatcher.
	 */
	private \HexagonalReviews\Shared\Domain\Service\EventDispatcher $event_dispatcher;

	/**
	 * CreateHandler constructor.
	 *
	 * @param ReviewRepository $review_repository repo.
	 * @param EventDispatcher  $event_dispatcher dispatcher.
	 */
	public function __construct( ReviewRepository $review_repository, EventDispatcher $event_dispatcher ) {
		$this->review_repository = $review_repository;
		$this->event_dispatcher  = $event_dispatcher;
	}

	/**
	 * Run.
	 *
	 * @param CreateCommand $command command.
	 *
	 * @throws \HexagonalReviews\Review\Domain\Exception\IncorrectStars Stars are not correct.
	 */
	public function run( CreateCommand $command ) {
		$review = Review::build(
			Uuid::uuid4(),
			ProductId::from_int( $command->get_post_id() ),
			Status::new(),
			$command->get_author(),
			$command->get_content(),
			$command->get_title(),
			Email::from_string( $command->get_email() ),
			Stars::from_result( $command->get_stars() )
		);

		$this->review_repository->insert( $review );

		if ( $review->get_status()->is_published() ) {
			$this->event_dispatcher->dispatch(
				new ReviewAdded(
					UUid::uuid4(),
					UUid::uuid4(),
					$review->get_product_id()->get_id(),
					$review->get_status()->get_status(),
					$review->get_stars()->get_stars()
				)
			);
		}
	}
}
