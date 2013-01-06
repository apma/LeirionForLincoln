<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

	<div id="secondary" class="site-content">
        <h1>Blog</h1>
		<div id="content" role="main">
            <div id="main-content">
                <?php while ( have_posts() ) :
                          the_post(); ?>
                <h2><?php the_title();  ?></h2>
                
				<?php get_template_part( 'content', get_post_format() ); ?>
                
				

				<?php comments_template( '/wp-content/themes/leirionforlincoln/comment-template.php', true ); ?>
				

			<?php endwhile; // end of the loop. ?>
            </div>
            
            <div id="sidebar">
                <?php the_block('rightsidemain'); ?>
                
                
            </div>
	
            <div class="clear-both"></div>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>