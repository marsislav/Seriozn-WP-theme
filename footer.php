	<!-- Footer
    ============================================= -->
	<footer id="footer" class="dark">

		<!-- Copyrights
	============================================= -->
	<div id="copyrights">

<div class="container clearfix">

	<div class="col_half">
		<?php echo get_theme_mod( 'seriozn_footer_copyright_text' ); ?><br>
		<div class="copyright-links">
			<?php

			if( get_theme_mod('seriozn_footer_tos_page' ) ){
				?><a href="<?php the_permalink(get_theme_mod('seriozn_footer_tos_page' )); ?>"><?php _e('Terms of Use', 'seriozn');?></a><?php
			}

			if( get_theme_mod('seriozn_footer_privacy_page' ) ){
				?><a href="<?php the_permalink(get_theme_mod('seriozn_footer_privacy_page' )); ?>"><?php _e('Privacy Policy', 'seriozn');?></a><?php
			}

			?>
		</div>
	</div>

	<div class="col_half col_last tright">
		<div class="fright clearfix">
			<?php

			if( get_theme_mod( 'seriozn_facebook_handle' ) ){
				?>
				<a href="https://facebook.com/<?php echo get_theme_mod( 'seriozn_facebook_handle' ); ?>" target="_blank" class="social-icon si-small si-borderless si-facebook">
					<i class="icon-facebook"></i>
					<i class="icon-facebook"></i>
				</a>
				<?php
			}

			if( get_theme_mod( 'seriozn_twitter_handle' ) ){
				?>
				<a href="https://twitter.com/<?php echo get_theme_mod( 'seriozn_twitter_handle' ); ?>" target="_blank" class="social-icon si-small si-borderless si-twitter">
					<i class="icon-twitter"></i>
					<i class="icon-twitter"></i>
				</a>
				<?php
			}

			if( get_theme_mod( 'seriozn_instagram_handle' ) ){
				?>
				<a href="https://instagram.com/<?php echo get_theme_mod( 'seriozn_instagram_handle' ); ?>" target="_blank" class="social-icon si-small si-borderless si-instagram">
					<i class="icon-instagram"></i>
					<i class="icon-instagram"></i>
				</a>
				<?php
			}

			?>
		</div>

		<div class="clear"></div>

		<?php

		if( get_theme_mod( 'seriozn_email' ) ){
			?><i class="icon-envelope2"></i> <?php echo get_theme_mod( 'seriozn_email' );
		}

		?>

		<span class="middot">&middot;</span>

		<?php

		if( get_theme_mod( 'seriozn_email' ) ){
			?><i class="icon-call"></i><?php echo get_theme_mod( 'seriozn_phone_number' );
		}

		?>

	</div>
</div>

</div><!-- #copyrights end -->

	</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->


<!-- Footer Scripts
============================================= -->

<?php wp_footer(); ?>

</body>
</html>