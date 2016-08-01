<?php
/**
 * Unit test class for WordPress Coding Standard.
 *
 * @package  PHP\CodeSniffer\WordPress-Coding-Standards
 * @link     https://make.wordpress.org/core/handbook/best-practices/coding-standards/
 */

/**
 * Unit test class for the Filesystem writes sniff.
 *
 * @package   PHP\CodeSniffer\WordPress-Coding-Standards
 * @author    Shady Sharaf <shady@x-team.com>
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class WordPress_Tests_VIP_FileSystemWritesDisallowUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * The key of the array should represent the line number and the value
	 * should represent the number of errors that should occur on that line.
	 *
	 * @return array(int => int)
	 */
	public function getErrorList() {
		return array(
			3  => 1,
			9  => 1,
			10 => 1,
			12 => 1,
		);

	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * The key of the array should represent the line number and the value
	 * should represent the number of warnings that should occur on that line.
	 *
	 * @return array(int => int)
	 */
	public function getWarningList() {
		return array();

	}

} // End class.
