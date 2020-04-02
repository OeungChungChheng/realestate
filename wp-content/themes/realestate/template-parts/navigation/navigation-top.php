<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<?php the_custom_logo();?>
		</div>
		<div class="col-lg-9" style="margin-top: 10px;">
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'realestate' ); ?>">
					<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
						<?php
						echo realestate_get_svg( array( 'icon' => 'bars' ) );
						echo realestate_get_svg( array( 'icon' => 'close' ) );
						_e( 'Menu', 'realestate' );
						?>
					</button>

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'top',
							'menu_id'        => 'top-menu',
						)
					);
					?>

					<?php if ( ( realestate_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
						<a href="#content" class="menu-scroll-down"><?php echo realestate_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'realestate' ); ?></span></a>
					<?php endif; ?>
				</nav><!-- #site-navigation -->

		</div>
	</div>
</div>
