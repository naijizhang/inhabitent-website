<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			

			<footer id="colophon" class="site-footer" role="contentinfo">
				
					<div class="footer-contact-info">
						<h3>Contact Info</h3>
						<p><i class="fas fa-envelope-square"></i>info@inhabitent.com</p>
						<p><i class="fas fa-phone"></i>778-456-7891</p>
						<p><i class="fab fa-facebook-square"></i>
						<i class="fab fa-twitter-square"></i>
						<i class="fab fa-google-plus-square"></i></p>
					</div>
					<div class="footer-business-hour">
						<h3>Business Hour</h3>
						<p>Monday-Friday: 9am to 5pm</p>
						<p>Saturday: 10am to 2pm</p>
						<p>Sunday: Closed</p>
					</div>
					<div class="footer-logo">
					<?php $logo_text_url= get_template_directory_uri().'/assets/images/logos/inhabitent-logo-text-dark.svg';?>
					<img src='<?php echo $logo_text_url?>'>
					</div>
				
			</footer><!-- #colophon -->
		
			<!-- copyright -->
			<div class="copyright">
				<p>COPYRIGHT &copy; 2019 INHABITENT</p>
			</div>
		<?php wp_footer(); ?>

	</body>
</html>
