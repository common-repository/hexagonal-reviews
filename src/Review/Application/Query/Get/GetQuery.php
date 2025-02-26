<?php
/**
 * GetQuery
 *
 * @package Review
 */

declare( strict_types=1 );

namespace HexagonalReviews\Review\Application\Query\Get;

/**
 * Class GetQuery
 *
 * @package HexagonalReviews\Review\Application\Query\Get
 */
final class GetQuery {

	/**
	 * Uuid param
	 *
	 * @var string $uuid uuid.
	 */
	private string $uuid;

	/**
	 * GetQuery constructor.
	 *
	 * @param string $uuid uuid.
	 */
	public function __construct( string $uuid ) {
		$this->uuid = $uuid;
	}

	/**
	 * Gets the uuid
	 *
	 * @return string
	 */
	public function get_uuid(): string {
		return $this->uuid;
	}
}
