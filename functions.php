<?php
/**
 * LeirionForLincoln functions.
 */


/*Need to check if user logged in. If not, don't show.*/
if ( is_user_logged_in() ) {
    add_filter( 'show_admin_bar', '__return_true' );
}
add_action( 'init', 'register_my_menus' );
/* Menus */
function register_my_menus() {
    register_nav_menus(
      array( 
      'socialmediamenu' => __( 'SocialMediaMenu' ) ,
      'footermenu' => __( 'FooterMenu' ) ,
      'navmenu' => __( 'NavMenu' )
      )
    );
}
function nav_menu_first_last( $items ) {
    $position = strrpos($items, 'class="menu-item', -1);
    $items=substr_replace($items, 'menu-item-last ', $position+7, 0);
    $position = strpos($items, 'class="menu-item');
    $items=substr_replace($items, 'menu-item-first ', $position+7, 0);
    return $items;
}
add_filter( 'wp_nav_menu_items', 'nav_menu_first_last' );

if ( ! function_exists( 'leirion_comment' ) ) :
    /**
     * Template for comments and pingbacks.
     *
     * To override this walker in a child theme without modifying the comments template
     * simply create your own leirion_comment(), and that function will be used instead.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     *
     * @since Twenty Twelve 1.0
     */
    function leirion_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
            case 'pingback' :
            case 'trackback' :
                // Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'leirion' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'leirion' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
                break;
            default :
                // Proceed with normal comments.
                global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
                echo get_avatar( $comment, 44 );
                printf( '<cite class="fn">%1$s %2$s</cite>',
                    get_comment_author_link(),
                    // If current post author is also comment author, make it known visually.
                    ( $comment->user_id === $post->post_author ) ? '<span> ' . __( 'Post author', 'leirion' ) . '</span>' : ''
                );
                printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
                    esc_url( get_comment_link( $comment->comment_ID ) ),
                    get_comment_time( 'c' ),
                    /* translators: 1: date, 2: time */
                    sprintf( __( '%1$s at %2$s', 'leirion' ), get_comment_date(), get_comment_time() )
                );
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'leirion' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'leirion' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'leirion' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
                break;
        endswitch; // end comment_type check
    }
endif;

if ( ! function_exists( 'leirion_entry_meta' ) ) :
    /**
     * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
     *
     * Create your own leirion_entry_meta() to override in a child theme.
     *
     * @since Twenty Twelve 1.0
     */
    function leirion_entry_meta() {
        // Translators: used between list items, there is a space after the comma.
        $categories_list = get_the_category_list( __( ', ', 'leirion' ) );

        // Translators: used between list items, there is a space after the comma.
        $tag_list = get_the_tag_list( '', __( ', ', 'leirion' ) );

        $date = sprintf( '<time class="entry-date" datetime="%3$s">%4$s</time>',
            esc_url( get_permalink() ),
            esc_attr( get_the_time() ),
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() )
        );

        $author = sprintf( '<span class="author vcard">%3$s</span>',
            esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
            esc_attr( sprintf( __( 'View all posts by %s', 'leirion' ), get_the_author() ) ),
            get_the_author()
        );

        // Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
        if ( $tag_list ) {
            $utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'leirion' );
        } elseif ( $categories_list ) {
            $utility_text = __( '<div class="blog-meta">This entry was posted on %3$s<span class="by-author"> by %4$s</span>.</div>', 'leirion' );
        } else {
            $utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'leirion' );
        }

        printf(
            $utility_text,
            $categories_list,
            $tag_list,
            $date,
            $author
        );
    }
endif;



?>