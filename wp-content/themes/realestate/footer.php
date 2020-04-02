<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="ft-title">
						<h4>Contact Info</h4>
							<p><?php echo get_theme_mod('contact_info'); ?></p>
						<h4>Phone</h4>
							<p><?php echo get_theme_mod('phone');?></p>
						<h4>Email</h4>
							<p><?php echo get_theme_mod('email');?></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="ft-title">
						<h4>Recent Posts</h4>
						<?php 
						   // the query
						   $the_query = new WP_Query( array(
						      'post_type' => 'Post',
						      'posts_per_page' => 6,
						   )); 
						?>

						<?php if ( $the_query->have_posts() ) : ?>
						  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						  <p><i class="fa fa-caret-right" aria-hidden="true"></i> <?php the_title(); ?></p>
						  <?php endwhile; ?>
						  <?php wp_reset_postdata(); ?>

						<?php else : ?>
						  <p><?php __('No News'); ?></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="ft-title">
						<h4>Latest Tweets</h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="ft-title">
						<h4>newsletter</h4>
						<p>Email Address</p>
						<input type="text" name="" placeholder="your email address">
						<br>
						<button value="submit">Sign Up</button>
					</div>
				</div>
			</div>
			<!--Copy right-->
		</footer>
		<div class=" copy-right">
			<div class="container">
				<div class="ft-title">
					<p><?php echo get_theme_mod('copy_info'); ?></p>
				</div>
			</div>
		</div>
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
