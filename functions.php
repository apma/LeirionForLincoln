<?php
/**
 * LeirionForLincoln functions.
 */

add_filter( 'show_admin_bar', '__return_true' );

function register_my_menus() {
    register_nav_menus(
      array( 'social-media-menu' => __( 'Social Media Menu' ) ),
      array( 'nav-menu' => __( 'Nav Menu' ) )
    );
}
add_action( 'init', 'register_my_menus' );

?>