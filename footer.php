<!-- Footer
    ============================================= -->
	<footer id="footer" class="dark">

		<!-- Copyrights
        ============================================= -->
		<div id="copyrights">

			<div class="container clearfix">

				<div class="col_half">
					Copyrights &copy; 2017 All Rights Reserved by Jasko Koyn Inc.<br>
					<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
				</div>

				<div class="col_half col_last tright">
					<div class="fright clearfix">
						<?php

						if( get_theme_mod( 'ju_facebook_handle' ) ){
							?>
							<a href="https://facebook.com/<?php echo get_theme_mod( 'ju_facebook_handle' ); ?>" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							<?php
						}

						if( get_theme_mod( 'ju_twitter_handle' ) ){
							?>
							<a href="https://twitter.com/<?php echo get_theme_mod( 'ju_twitter_handle' ); ?>" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
							<?php
						}

						if( get_theme_mod( 'ju_instagram_handle' ) ){
							?>
							<a href="https://instagram.com/<?php echo get_theme_mod( 'ju_instagram_handle' ); ?>" class="social-icon si-small si-borderless si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>
							<?php
						}

						?>
					</div>

					<div class="clear"></div>

					<?php

					if( get_theme_mod( 'ju_email' ) ){
						?><i class="icon-envelope2"></i> <?php echo get_theme_mod( 'ju_email' );
					}

					?>

					<span class="middot">&middot;</span>

					<?php

					if( get_theme_mod( 'ju_email' ) ){
						?><i class="icon-call"></i> +<?php echo get_theme_mod( 'ju_phone_number' );
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