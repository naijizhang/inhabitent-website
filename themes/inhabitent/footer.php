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
						<a href="info@inhabitent.com"><i class="fas fa-envelope-square"></i>info@inhabitent.com</a>
						<a href="tel:778-456-7891"><i class="fas fa-phone"></i>778-456-7891</a>
						<p><i class="fab fa-facebook-square"></i>
						<i class="fab fa-twitter-square"></i>
						<i class="fab fa-google-plus-square"></i></p>
					</div>
					<div class="footer-business-hour">
						<h3>Business Hour</h3>
						<p><strong>Monday-Friday:</strong> 9am to 5pm</p>
						<p><strong>Saturday:</strong> 10am to 2pm</p>
						<p><strong>Sunday:</strong> Closed</p>
					</div>
					<div class="footer-logo">
					<?php $logo_text_url= get_template_directory_uri().'/assets/images/logos/inhabitent-logo-text.svg';?>
					<a class="footer-logo-link" href="<?php echo get_home_url(); ?>">
					<img src='<?php echo $logo_text_url?>'>
					</a>	
					
					</div>
				
			</footer><!-- #colophon -->
		
			<!-- copyright -->
			<div class="copyright">
				<p>COPYRIGHT &copy; 2019 INHABITENT</p>
			</div>
		<?php wp_footer(); ?>

	</body>
</html>
