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
                <h2>Please Donate Today</h2>
                <p>Every contribution, every dollar makes a difference. Click below to contribute online with your credit card. You will be taken to PayPal's website to make your donation.</p>

                <img alt="" src="/wp-includes/images/button-donate.jpg" />

                <address><strong>You may also mail contributions to:</strong><br />
                Leirion for Lincoln<br />
                P.O. Box 23185<br />
                Lincoln, NE 68542</address>
                
                
                <p><a href="http://66.147.244.93/~leirionf/donate/photo-portrait/" rel="attachment wp-att-82"><img class="size-full wp-image-82 aligncenter" alt="photo-portrait" src="http://66.147.244.93/~leirionf/wp-content/uploads/2012/12/photo-portrait.jpg" width="280" height="226" /></a></p>

                
                
            </div>
	
            <div class="clear-both"></div>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>