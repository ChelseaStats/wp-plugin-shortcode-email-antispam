<?php
/*
Plugin Name: Anti-spam Email Shortcode
Description: A email shortcode that also protects with anti-spam function built into WP.
Version: 1.0.0
Plugin URI: http://thecellarroom.uk
Author: TheCellarRoom
Author URI: http://thecellarroom.uk
Copyright (c) 2015 TheCellarRoom
*/

defined( 'ABSPATH' ) or die();

/*************************************************************************/

	if ( !class_exists( 'tcr_email_anti_spam_shortcode' ) ) :

		class tcr_email_anti_spam_shortcode {

			function __construct() {

				add_shortcode( 'email', array ($this , 'tcr_eas_shortcode') );
			}

			function tcr_eas_shortcode( $atts, $content = null ){
				$parts   = explode('|', $content);
			    $name    = antispambot(trim($parts[0]));
				$subject = antispambot(trim($parts[1]));

				return "<a href='mailto:{$name}&subject={$subject}'>{$name}</a>";
			}
		}

		new tcr_email_anti_spam_shortcode;

	endif;