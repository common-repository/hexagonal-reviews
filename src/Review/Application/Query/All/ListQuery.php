<?php
/**
 * ListQuery
 *
 * @package Average
 */

declare( strict_types=1 );

namespace HexagonalReviews\Review\Application\Query\All;

/**
 * Class ListQuery
 *
 * @package HexagonalReviews\Review\Application\Query\All
 */
final class ListQuery {

	/**
	 * Search string
	 *
	 * @var null|string Search sring.
	 */
	private ?string $search;

	/**
	 * Limit
	 *
	 * @var int Limit.
	 */
	private int $limit;

	/**
	 * Offset.
	 *
	 * @var int Offset.
	 */
	private int $offset;

	/**
	 * OrderBy.
	 *
	 * @var null|string OrderBy.
	 */
	private ?string $orderby;

	/**
	 * Order.
	 *
	 * @var null|string Order.
	 */
	private ?string $order;

	/**
	 * ListQuery constructor.
	 *
	 * @param string|null $search Search string.
	 * @param int         $limit Limit.
	 * @param int         $offset Offset.
	 * @param string|null $orderby Order By.
	 * @param string|null $order Order.
	 */
	public function __construct( ?string $search, int $limit, int $offset, ?string $orderby, ?string $order ) {
		$this->search  = $search;
		$this->limit   = $limit;
		$this->offset  = $offset;
		$this->orderby = $orderby;
		$this->order   = $order;
	}

	/**
	 * Gets the search string.
	 *
	 * @return string
	 */
	public function get_search(): ?string {
		return $this->search;
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

	/**
	 * Gets the order by
	 *
	 * @return array|null[]|string[]
	 */
	public function get_order_by(): array {
		if ( null === $this->orderby ) {
			return array();
		}

		return array( $this->orderby => $this->order );
	}
}
