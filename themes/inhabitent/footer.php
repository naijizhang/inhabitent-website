<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div>
						<h3>Contact Info</h3>
						<p>info@inhabitent.com</p>
						<p>778-456-7891</p>
						<p></p>
					</div>
					<div>
						<h3>Business Hour</h3>
						<p>Monday-Friday: 9am to 5pm</p>
						<p>Saturday: 10am to 2pm</p>
						<p>Sunday: Closed</p>
					</div>
					<?php $logo_text_url= get_template_directory_uri().'/assets/images/logos/inhabitent-logo-text-dark.svg';?>
					<img src='<?php echo $logo_text_url?>'>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
