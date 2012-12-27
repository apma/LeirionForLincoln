<?php
/**
 * The template for displaying the footer.
 */
?>
    <div id="connect-area">
        <div class="shadowline"></div>
        <h2>Connect with Our Campaign</h2>
            
    </div>
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