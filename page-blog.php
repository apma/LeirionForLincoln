<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

	<div id="secondary" class="site-content">
        <h1>Blog</h1>
		<div id="content" role="main">
            <div id="main-content">
                
            <?php query_posts('category_name=Blog'); ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink() ?>" rel="bookmark"><h2><?php the_title(); ?></h2></a>
            <div class="blog-timestamp"><?php the_time('l, F j, Y'); ?></div>
            <?php the_excerpt(); ?>
            <span class="blog-nav"><?php comments_number('Comments(%)' );?> </span>
            <span class="blog-nav-divider">|</span>
            <a href="<?php echo get_permalink(); ?>" class="blog-nav"> Continue Reading</a>
           
            <?php endwhile; ?>

            <?php wp_reset_query(); ?>
               
            </div>
            
            <div id="sidebar">
                <?php the_block('rightsidemain'); ?>
                
                
            </div>
	
            <div class="clear-both"></div>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>