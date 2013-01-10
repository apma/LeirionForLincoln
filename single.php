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
<p>Every donation, every dollar makes a real difference and is gratefully appreciated. By clicking below, you can make a safe and secure online contribution using PayPal.</p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="73T852CR6BSRQ"><input type="image" src="http://www.leirionforlincoln.com/wp-includes/images/button-donate.jpg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><br />
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"><br />
</form>
<address><strong>You may also mail contributions to:</strong><br />
Leirion for Lincoln<br />
P.O. Box 23185<br />
Lincoln, NE 68542</address>
<address> </address>
<address> </address>
<br />
<p><a href="http://www.leirionforlincoln.com/donate/photo-portrait/" rel="attachment wp-att-82"><img class="size-full wp-image-82 aligncenter" alt="photo-portrait" src="http://www.leirionforlincoln.com/wp-content/uploads/2012/12/photo-portrait.jpg" width="280" height="226" /></a></p>
<p>&nbsp;</p>
<address> </address>
                
                
            </div>
	
            <div class="clear-both"></div>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>