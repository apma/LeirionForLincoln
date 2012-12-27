<?php
/**
 * The Header for our theme.
 *
 */
 
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class( (is_front_page)?'homepage':'contentpage' ); ?>>
<!-- el goog -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18999784-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
            <div id="head_contrib">
                <p>Join our campaign. Get email updates.</p>
                <div> 
                    <input id="head_contrib_box" /><a href="#" class="head_contrib_submit" alt="Subscribe to our Newsletter"></a>
                </div>
                
            </div>
            <div id="head_social">
            <div class="fb-like" data-href="http://www.facebook.com/LeirionforLincoln" data-send="false" data-layout="button_count" data-width="60" data-show-faces="true"></div>
            <a href="https://twitter.com/leirion4lincoln" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @leirion4lincoln</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            
            <img id="logo" src="/wp-includes/images/logo-leirion-for-lincoln.png" />
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'social-media-menu', 'menu_class' => 'social-menu', 'menu_id' => 'social_media') ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'nav-menu', 'menu_class' => 'nav-menu', 'menu_id' => 'mainnav') ); ?>
            
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="main" class="wrapper">