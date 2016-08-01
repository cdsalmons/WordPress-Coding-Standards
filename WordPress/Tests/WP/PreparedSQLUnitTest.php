<?php
/**
 * Unit test class for WordPress Coding Standard.
 *
 * @package  PHP\CodeSniffer\WordPress-Coding-Standards
 * @link     https://make.wordpress.org/core/handbook/best-practices/coding-standards/
 */

/**
 * Unit test class for the PreparedSQL sniff.
 *
 * @since 0.8.0
 *
 * @package  PHP\CodeSniffer\WordPress-Coding-Standards
 */
class WordPress_Tests_WP_PreparedSQLUnitTest extends AbstractSniffUnitTest {

	/**
	 * @since 0.8.0
	 */
	public function getErrorList() {
		return array(
			3 => 1,
			4 => 1,
			5 => 1,
			7 => 1,
			8 => 1,
			16 => 1,
			17 => 1,
			18 => 1,
			20 => 1,
			21 => 1,
		);
	}

	/**
	 * @since 0.8.0
	 */
	public function getWarningList() {
		return array();

	}

} // End class.
