<?php
/**
 * LeirionForLincoln functions.
 */


/*Need to check if user logged in. If not, don't show.*/
if ( is_user_logged_in() ) {
    add_filter( 'show_admin_bar', '__return_true' );
}

/* Menus */
function register_my_menus() {
    register_nav_menus(
      array( 'social-media-menu' => __( 'Social Media Menu' ) ),
      array( 'footer-menu' => __( 'Footer Menu' ) ),
      array( 'nav-menu' => __( 'Nav Menu' ) )
    );
}
add_action( 'init', 'register_my_menus' );

?>