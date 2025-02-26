<?php
/**
 * GetByPostQuery
 *
 * @package Review
 */

declare( strict_types=1 );

namespace HexagonalReviews\Review\Application\Query\GetByPost;

use HexagonalReviews\Review\Domain\Repository\ReviewRepository;

/**
 * Class GetByPostQuery
 *
 * GeT.
 *
 * @package HexagonalReviews\Review\Application\Query\GetByPost
 */
final class GetByPostQuery {
	/**
	 * Id.
	 *
	 * @var int id.
	 */
	private int $id;

	/**
	 * Limit,
	 *
	 * @var ?int limit.
	 */
	private ?int $limit;

	/**
	 * Offset.
	 *
	 * @var ?int offset.
	 */
	private ?int $offset;

	/**
	 * GetByPostQuery constructor.
	 *
	 * @param int $id     id.
	 * @param int $limit  limit.
	 * @param int $offset offset.
	 */
	public function __construct( int $id, int $limit = ReviewRepository::LIMIT, int $offset = ReviewRepository::OFFSET ) {
		$this->id     = $id;
		$this->limit  = $limit;
		$this->offset = $offset;
	}

	/**
	 * Gets the id.
	 *
	 * @return int
	 */
	public function get_id(): int {
		return $this->id;
	}

	/**
	 * Gets the limit.
	 *
	 * @return int
	 */
	public function get_limit(): int {
		return $this->limit;
	}

	/**
	 * Gets the offset.
	 *
	 * @return int
	 */
	public function get_offset(): int {
		return $this->offset;
	}
}
