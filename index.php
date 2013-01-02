<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

	<div id="secondary" class="site-content">
        <h1>Blog</h1>
		<div id="content" role="main">
            <div id="main-content">
             <?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) :
                      the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>


			

			
               
            </div>
            
            <div id="sidebar">
                <?php the_block('rightsidemain'); ?>
                
                
            </div>
	
            <div class="clear-both"></div>

		</div><!-- #content -->
	</div><!-- #secondary -->


<?php get_footer(); ?>