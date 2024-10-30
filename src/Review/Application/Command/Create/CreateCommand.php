<?php
/**
 * CreateCommand
 *
 * @package Review
 */

declare( strict_types=1 );

namespace HexagonalReviews\Review\Application\Command\Create;

/**
 * Class CreateCommand
 *
 * @package HexagonalReviews\Review\Application\Command\Create
 */
final class CreateCommand {

	/**
	 * Post id.
	 *
	 * @var int post id.
	 */
	private int $post_id;

	/**
	 * Author
	 *
	 * @var string author.
	 */
	private string $author;

	/**
	 * Title.
	 *
	 * @var string title.
	 */
	private string $title;

	/**
	 * Content.
	 *
	 * @var string content.
	 */
	private string $content;

	/**
	 * Email.
	 *
	 * @var string email.
	 */
	private string $email;

	/**
	 * Stars.
	 *
	 * @var float stars.
	 */
	private float $stars;

	/**
	 * CreateCommand constructor.
	 *
	 * @param int    $post_id post id.
	 * @param string $author author.
	 * @param string $title title.
	 * @param string $content content.
	 * @param string $email email.
	 * @param float  $stars stars.
	 */
	public function __construct( int $post_id, string $author, string $title, string $content, string $email, float $stars ) {
		$this->post_id = $post_id;
		$this->author  = $author;
		$this->title   = $title;
		$this->content = $content;
		$this->email   = $email;
		$this->stars   = $stars;
	}


	/**
	 * Get post id.
	 *
	 * @return int
	 */
	public function get_post_id(): int {
		return $this->post_id;
	}

	/**
	 * Get author.
	 *
	 * @return string
	 */
	public function get_author(): string {
		return $this->author;
	}

	/**
	 * Title.
	 *
	 * @return string
	 */
	public function get_title(): string {
		return $this->title;
	}

	/**
	 * Content.
	 *
	 * @return string
	 */
	public function get_content(): string {
		return $this->content;
	}

	/**
	 * Email.
	 *
	 * @return string
	 */
	public function get_email(): string {
		return $this->email;
	}

	/**
	 * Stars.
	 *
	 * @return float
	 */
	public function get_stars(): float {
		return $this->stars;
	}
}
