<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta  charset="<?php bloginfo('charset');?>" />
    <!-- Stylesheets
	============================================= -->
    <?php wp_head();?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body <?php body_class('no-transition stretched');?>>
<!--Skip to post -->
<a class="skip-link" href="#post"><?php _e('Skip to main content', 'seriozn');?></a>
<!--Skip to post - end-->
    <!-- Document Wrapper
============================================= -->
    <div id="wrapper" class="clearfix">
        <!-- Top Bar
		============================================= -->
        <div id="top-bar" class="dark">

            <div class="container clearfix">

                <div class="col_half nobottommargin">

                    <!-- Top Links
                ============================================= -->
                    <div class="top-links">
                        <?php if (has_nav_menu( 'secondary' )){
                        wp_nav_menu(array(
                            'theme_location'=>'secondary',
                            'container'=> false,
                            'fallback_cb'=>false,
                            'depth'=>1
                        ));
                    }
                    ?>
                    </div><!-- .top-links end -->

                </div>

                <div class="col_half fright col_last nobottommargin">

                  <!-- Top Social
                ============================================= -->
				<div id="top-social">
					<ul>
						<?php

						if( get_theme_mod( 'seriozn_facebook_handle' ) ){
							?><li><a href="https://facebook.com/<?php echo get_theme_mod( 'seriozn_facebook_handle' ); ?>" target="_blank" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li><?php
						}

						if( get_theme_mod( 'seriozn_twitter_handle' ) ){
							?> <li><a href="https://twitter.com/<?php echo get_theme_mod( 'seriozn_twitter_handle' ); ?>" target="_blank" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li><?php
						}

						if( get_theme_mod( 'seriozn_instagram_handle' ) ){
							?><li><a href="https://instagram.com/<?php echo get_theme_mod( 'seriozn_instagram_handle' ); ?>" target="_blank" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li><?php
						}

						if( get_theme_mod( 'seriozn_email' ) ){
							?><li><a href="mailto:<?php echo get_theme_mod( 'seriozn_email' ); ?>" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text"><?php echo get_theme_mod( 'seriozn_email' ); ?></span></a></li><?php
						}

						if( get_theme_mod( 'seriozn_phone_number' ) ){
							?><li><a href="tel:+<?php echo get_theme_mod( 'seriozn_phone_number' ); ?>" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text"><?php echo get_theme_mod( 'seriozn_phone_number' ); ?></span></a></li><?php
						}
						?>
                    </ul>
				</div><!-- #top-social end -->

                </div>

            </div>

        </div><!-- #top-bar end -->

        <!-- Header
    ============================================= -->
        <header id="header" class="sticky-style-2">

            <div class="container clearfix">

                <!-- Logo
            ============================================= -->
                <div id="logo">
                    <?php if (has_custom_logo() ){
				the_custom_logo();
			}
			else { ?>
                    <a href="<?php echo home_url('/');?>" class="standard-logo"><?php bloginfo('name');?></a>
                    <?php

			}
			?>

                </div><!-- #logo end -->

                <div class="top-advert">
                    <?php 
			/*Check if WP Quads adsense plugin (https://wordpress.org/plugins/quick-adsense-reloaded/) is activated. If it is - then display the ad */
			if (function_exists('quads_ad')){
				echo quads_ad(
					array(
						'location'=>'seriozn_header'
						)
					);

			}
			?>
                </div>

            </div>

            <div id="header-wrap">

                <!-- Primary Navigation
            ============================================= -->
                <nav id="primary-menu" class="style-2">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <?php if (has_nav_menu( 'primary' )){
                        wp_nav_menu(array(
                            'theme_location'=>'primary',
                            'container'=> false,
                            'fallback_cb'=>false,
                            'depth'=>4
                        ));
                    }
                    ?>

<?php 
if (get_theme_mod('seriozn_header_show_search') =='yes') {?>
 <!-- Top Search
                    ============================================= -->
                    <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i
                                    class="icon-line-cross"></i></a>
                            <form action="<?php echo esc_url(home_url('/'));?>" method="get">
                                <input type="text" name="s" class="form-control" value="<?php the_search_query();?>"
                                    placeholder="<?php _e('Type &amp; Hit Enter...', 'seriozn');?>">
                            </form>
                        </div><!-- #top-search end -->
<?php } ?>
                      

                       

                    </div>

                </nav><!-- #primary-menu end -->

            </div>

        </header><!-- #header end -->