<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/8
 * Time: 14:41
 */
function wpbootstrap_scripts_with_jquery() {
	// Register the script like this for a theme:
	wp_register_script( 'custom-script' ,get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );



?>