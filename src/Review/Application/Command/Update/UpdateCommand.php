<?php
/**
 * UpdateCommand
 *
 * @package Review
 */

declare( strict_types=1 );

namespace HexagonalReviews\Review\Application\Command\Update;

/**
 * Class UpdateCommand
 *
 * @package HexagonalReviews\Review\Application\Command\Update
 */
final class UpdateCommand {

	/**
	 * Uuid.
	 *
	 * @var string uuid.
	 */
	private string $uuid;

	/**
	 * Post Id.
	 *
	 * @var int post id.
	 */
	private int $post_id;

	/**
	 * Status.
	 *
	 * @var string status.
	 */
	private string $status;

	/**
	 * Author.
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
	 * UpdateCommand constructor.
	 *
	 * @param string $uuid uuid.
	 * @param int    $post_id post id.
	 * @param string $status status.
	 * @param string $author author.
	 * @param string $title title.
	 * @param string $content content.
	 * @param string $email email.
	 * @param float  $stars stars.
	 */
	public function __construct( string $uuid, int $post_id, string $status, string $author, string $title, string $content, string $email, float $stars ) {
		$this->uuid    = $uuid;
		$this->post_id = $post_id;
		$this->status  = $status;
		$this->author  = $author;
		$this->title   = $title;
		$this->content = $content;
		$this->email   = $email;
		$this->stars   = $stars;
	}

	/**
	 * Uuid.
	 *
	 * @return string
	 */
	public function get_uuid(): string {
		return $this->uuid;
	}

	/**
	 * Gets the post id.
	 *
	 * @return int
	 */
	public function get_post_id(): int {
		return $this->post_id;
	}

	/**
	 * Gets the status.
	 *
	 * @return string
	 */
	public function get_status(): string {
		return $this->status;
	}

	/**
	 * Gets the author.
	 *
	 * @return string
	 */
	public function get_author(): string {
		return $this->author;
	}

	/**
	 * Gets the title.
	 *
	 * @return string
	 */
	public function get_title(): string {
		return $this->title;
	}

	/**
	 * Gets the content.
	 *
	 * @return string
	 */
	public function get_content(): string {
		return $this->content;
	}

	/**
	 * Gets the email.
	 *
	 * @return string
	 */
	public function get_email(): string {
		return $this->email;
	}

	/**
	 * Gets the stars.
	 *
	 * @return float
	 */
	public function get_stars(): float {
		return $this->stars;
	}
}
