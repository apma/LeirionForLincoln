<?php
/**
 * The homepage.
 */
get_header(); ?>

    <div id="primary" class="site-content">
        <img src="/wp-includes/images/homepage-photo-banner.jpg" alt="Leirion Gaylor Baird for Lincoln City Council" style="border-left: 1px #e5e4e4 solid;border-right: 1px #e5e4e4 solid;" />
        
		<div id="content" role="main">
            <div id="tri-fold-area">
                <div class="home-tri-fold">
                    <h1>Featured Video</h1>
                    <a class="headerbutton-tri-fold"><span>More Videos &raquo;</span></a>
                    <div class="clear-both"></div>
                    <div class="tri-fold-content"><h2>Lorem ipsum dolor sit amet, </h2>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </div>
                </div>
                <div class="home-tri-fold">
                    <h1>Recent Post</h1>
                    <a class="headerbutton-tri-fold"><span>More Blog Posts &raquo;</span></a>
                    <div class="clear-both"></div>
                    <div class="tri-fold-content"><h2>liquip ex ea commodo consequat.</h2> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepte</div>
                </div>
                <div class="home-tri-fold">
                    <h1>Endorsements</h1>
                    <a class="headerbutton-tri-fold endorse"><span>Next &raquo;</span></a>
                    <div class="clear-both"></div>
                    <div class="tri-fold-content">
                        <div id="endorsement-block">
                        <?php the_block('endorsements'); ?>
                        <!--<div class="quote">
                            <p>
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                        <div class="byline">&mdash; Mary Ma, Lincoln Resident<br /> Small Business Owner</div>-->
                        </div>
                    </div>
                </div>
            </div><!-- #tri-fold -->
            
            
			

		</div><!-- #content -->
        
        
        
	</div><!-- #primary -->

<?php get_footer(); ?>
    
  