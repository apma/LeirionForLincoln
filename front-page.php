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
                    <a class="headerbutton-tri-fold" href="http://www.youtube.com/channel/UCpe25KXOg4TKfGCEx9qhJsQ?feature=watch">
                        <span>More Videos &raquo;</span>
                    </a>
                    <div class="clear-both"></div>
                    <div class="tri-fold-content">
                        <?php the_block('video'); ?>
                    </div>
                </div>
                <div class="home-tri-fold">
                    <h1>Recent Post</h1>
                    <a class="headerbutton-tri-fold" href="<?php echo get_page_link(9); ?>"><span>More Blog Posts &raquo;</span></a>
                    <div class="clear-both"></div>
                    <div class="tri-fold-content">
                        
                    <ul>
                        <?php
                        query_posts('category_Name = Blog&showposts=1'); // query to show all posts independant from what is in the center;
                        if (have_posts()) :
                            while (have_posts()) :
                                the_post(); ?>
                        <a href="<?php the_permalink() ?>" rel="bookmark"><h2><?php the_title(); ?></h2></a>
                        <div class="home-timestamp"><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></div>
                        <?php the_excerpt('Read the rest of this entry &raquo;'); ?>
                         <span class="blog-nav"><?php comments_number('Comments(%)' );?> </span>
            <span class="blog-nav-divider">|</span>
            <a href="<?php echo get_permalink(); ?>" class="blog-nav"> Continue Reading</a>
                        <?php  endwhile;
                        endif;
                        wp_reset_query();
                        ?>
                        </ul>
                            
                    </div>
                </div>
                <div class="home-tri-fold">
                    <h1>Endorsements</h1>
                    <a class="headerbutton-tri-fold endorse"><span>Next &raquo;</span></a>
                    <div class="clear-both"></div>
                    <div class="tri-fold-content">
                        <div id="endorsement-block">
                        <?php the_block('endorsements'); ?>
                        
                        </div>
                    </div>
                </div>
            </div><!-- #tri-fold -->
            <div class="clear-both"></div>
            
			

		</div><!-- #content -->
        
        
        
	</div><!-- #primary -->

<?php get_footer(); ?>
    
  