<?php
/**
 * Sanitizer
 *
 * @package Google\AMP_Link_New_Tab
 */

namespace Google\AMP_Link_New_Tab;

use AMP_Base_Sanitizer;
use DOMElement;
use DOMNodeList;
use DOMXPath;

/**
 * Class Sanitizer
 */
class Sanitizer extends AMP_Base_Sanitizer {

	/**
	 * Sanitize.
	 */
	public function sanitize() {
		$xpath = new DOMXPath( $this->dom );

		$links = $xpath->query( '//a' );
		if ( $links instanceof DOMNodeList ) {
			foreach ( $links as $link ) {
				if ( $link instanceof DOMElement ) {
					if ( ! $link->hasAttribute( 'target' ) ) {
						$link->setAttribute( 'target', '_blank' );
					}
				}
			}
		}
	}
}
