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
<title><?php bloginfo('name'); ?> <?php wp_title( ' - ', true, 'left' ); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/form.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon"/>
<link rel="icon" href="/favicon.ico" type="image/x-ico"/>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script src="/wp-content/themes/leirionforlincoln/js/wufoo1.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class( (is_front_page() ?'homepage':'contentpage') ); ?>>
<!-- el goog -->


<div id="wrapper">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
            <div id="head_contrib">
                <p>Get updates from Leirion.</p>
                <div> 
                    <form id="form2" name="form2" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://leirion.wufoo.com/forms/m7x3q1/#public">



                    <input id="Field1" name="Field1" type="email" watermark="Email Address." spellcheck="false" class="field text medium head_contrib_box" value="" maxlength="255" tabindex="1" required /> 

                    <ul style="display:none">
                    <li class="hide">
                    <label for="comment">Do Not Fill This Out</label>
                    <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
                    <input type="hidden" id="idstamp" name="idstamp" value="TUs1t6I10HziTovcQLVkVtQz4tYpMZjywtlAI+x4GVE=" />
                    </li>
                    </ul>
                    
                    <input id="saveForm" name="saveForm" class="btTxt submit head_contrib_submit" type="submit" value="Submit" />
                    </form> 
                    
                </div>
                
            </div>
            <div id="head_social">
            <div class="fb-like" data-href="http://www.facebook.com/LeirionforLincoln" data-send="false" data-layout="button_count" data-width="60" data-show-faces="true"></div>
            <a href="https://twitter.com/leirion4lincoln" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @leirion4lincoln</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            
            <a href="/"><img id="logo" src="/wp-includes/images/logo-leirion-for-lincoln.png" /></a>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'socialmediamenu', 'menu_class' => 'social-menu', 'menu_id' => 'social_media') ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'navmenu', 'menu_class' => 'nav-menu', 'menu_id' => 'mainnav') ); ?>
            
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="main" class="wrapper">