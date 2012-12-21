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
<div id="wrapper">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
            <div id="head_contrib">
                <p>Join our campaign. Get email updates.</p>
                <div> 
                    <input id="head_contrib_box" /><a href="#" class="head_contrib_submit" alt="Subscribe to our Newsletter"></a>
                </div>
                
            </div>
            <div id="head_social"></div>
            
            <img id="logo" src="/wp-includes/images/logo-leirion-for-lincoln.png" />
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'social-media-menu', 'menu_class' => 'social-menu', 'menu_id' => 'social_media') ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'nav-menu', 'menu_class' => 'nav-menu', 'menu_id' => 'mainnav') ); ?>
            
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="main" class="wrapper">