<?php
/**
 * Redux Repeater Extension Class
 *
 * @package Redux Pro
 * @author  Dovy Paukstys & Kevin Provance <kevin.provance@gmail.com>
 * @class   Redux_Extension_Repeater
 *
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

// Don't duplicate me!
if ( ! class_exists( 'Redux_Extension_Repeater' ) ) {


	/**
	 * Class Redux_Extension_Repeater
	 */
	class Redux_Extension_Repeater extends Redux_Extension_Abstract {

		/**
		 * Extension version.
		 *
		 * @var string
		 */
		public static $version = '2.0.0';

		/**
		 * Extension friendly name.
		 *
		 * @var string
		 */
		public $extension_name = 'Repeater';

		/**
		 * Class Constructor. Defines the args for the extions class
		 *
		 * @since       1.0.0
		 * @access      public
		 *
		 * @param       array $parent Parent settings.
		 *
		 * @return      void
		 */
		public function __construct( $parent ) {
			parent::__construct( $parent, __FILE__ );

			$this->add_field( 'repeater' );
		}
	}
}
