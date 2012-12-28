<?php
/**
 * The template for displaying the footer.
 */
?>
    <div id="connect-area">
        <div class="shadowline"></div>
        <div id="connect-content">
            <h2>Connect with Our Campaign</h2>
            <hr/>
            <div class="social_media_box">
                <div class="fb-like-box" data-href="http://www.facebook.com/LeirionforLincoln" data-width="280" data-height="350" data-show-faces="false" data-stream="true" data-border-color="#e5e4e4" data-header="false"></div>
            </div>
            <div class="social_media_box">
            
                <a class="twitter-timeline" href="https://twitter.com/Leirion4Lincoln" data-widget-id="284482010167246849">Tweets by @Leirion4Lincoln</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

            </div>
            <div class="social_media_box">
                
            </div>
            <div class="clear-both"></div>
        </div>
            
    </div>
    <div class="shadowline"></div>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
        <div class="footer-logo"></div>
        
		<div class="site-info">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'footer-menu', 'menu_id' => 'footer-nav', 'link_after' => '<span class="footer-separator">|</span>') ); ?>
            <br />
            <div class="footer-legalese">Copyright 2013. Paid for by Leirion for Lincoln | Tracy Sanford. Treasurer. P.O. Box 23185, Lincoln, NE 68542</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #wrapper -->

<?php wp_footer(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</body>
</html>