<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

	<div id="secondary" class="site-content">
        <h1>About Leirion Gaylor Baird</h1>
		<div id="content" role="main">
            <div id="main-content">
                <?php the_block('main'); ?>
            
               
            </div>
            
            <div id="sidebar">
                <?php the_block('rightsidemain'); ?>
                
                
            </div>
	
            <div class="clear-both"></div>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>