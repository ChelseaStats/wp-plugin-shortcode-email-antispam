<?php
/*
Plugin Name: Antispam Email Shortcode
Description: A email shortcode that also protects with antispam function built into WP.
Version: 1.0.0
Plugin URI: http://thecellarroom.github.io
Author: TheCellarRoom
Author URI: http://thecellarroom.github.io
Copyright (c) 2015 TheCellarRoom
*/

defined( 'ABSPATH' ) or die();
/*************************************************************************/
// Emails
function email_func( $atts, $content = null ){
	$parts=explode('|', $content);
    $name    = antispambot(trim($parts[0]));
	$subject = antispambot(trim($parts[1]));
    
	return "<a href='mailto:{$name}&subject={$subject}'>{$name}</a>";
}
add_shortcode( 'email', 'email_func' );
/*************************************************************************/

