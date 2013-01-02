<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

	<div id="secondary" class="site-content">
        <h1><?php the_title();  ?></h1>
		<div id="content" role="main">
            <div id="main-content">
                
            </div>
            
            <div id="sidebar">
                <div class="donate">
                <h2>Please Donate Today</h2>
                <p class="donate-text-italic">
                    Every contribution, every dollar makes a difference. Click below to contribute online with your credit card. You will be taken to PayPal's website to make your donation.
                </p>
                <img src="/wp-includes/images/button-donate.jpg" alt="" />
                <p class="donate-address-strong">You may also mail contributions to:</p>
                <p class="donate-address">
                    Leirion for Lincoln<br/>
                    P.O. Box 23185 <br />
                    Lincoln, NE 68542
                </p>
                </div>
                <img src="/wp-includes/images/photo-planning-commission.jpg" alt="" />
                
            </div>
	
            <div class="clear-both"></div>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>