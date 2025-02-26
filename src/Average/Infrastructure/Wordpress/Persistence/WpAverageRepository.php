<?php
/**
 * WpAverageRepository
 *
 * @package Average
 */

declare( strict_types=1 );

namespace HexagonalReviews\Average\Infrastructure\Wordpress\Persistence;

use HexagonalReviews\Average\Domain\Entity\Average;
use HexagonalReviews\Average\Domain\Repository\AverageRepository;
use HexagonalReviews\Shared\Domain\ValueObject\ProductId;

/**
 * Class WpAverageRepository
 *
 * @package HexagonalReviews\Average\Infrastructure\Wordpress\Persistence
 */
final class WpAverageRepository implements AverageRepository {

 /**
  * Prefix
  */
 private string $prefix;

	/**
	 * WpAverageRepository constructor.
	 *
	 * @param string $prefix prefix.
	 */
	public function __construct( string $prefix ) {
		$this->prefix = $prefix;
	}

	/**
	 * Find Product id.
	 *
	 * @param ProductId $product_id product id.
	 *
	 * @return Average|null
	 */
	public function find( ProductId $product_id ): ?Average {
		global $wpdb;

		$result = $wpdb->get_row(
			$wpdb->prepare(
				"SELECT * FROM {$wpdb->prefix}hexagonal_review_average WHERE post_id = %s",
				$product_id->get_id()
			),
			ARRAY_A
		);

		if ( null === $result ) {
			return null;
		}
		return Average::from_result( $result );
	}

	/**
	 * Insert Average.
	 *
	 * @param Average $average average.
	 *
	 * @return bool
	 */
	public function insert( Average $average ): bool {
		global $wpdb;
		return (bool) $wpdb->insert( $this->prefix . 'hexagonal_review_average', $average->to_array() );
	}

	/**
	 * Update Average.
	 *
	 * @param Average $average average.
	 *
	 * @return bool
	 */
	public function update( Average $average ): bool {
		global $wpdb;
		return (bool) $wpdb->update( $this->prefix . 'hexagonal_review_average', $average->to_array(), array( 'post_id' => $average->get_product_id()->get_id() ) );
	}
}
