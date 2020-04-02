<?php
/**Template Name: Page Search From Over Image
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
	<div class="container">
		<?php 
			if(have_posts()) : 
			    while(have_posts()) : the_post(); 
			        get_template_part( 'content', get_post_format() );?>
			     
		<?php endwhile; 

			else : 
			?>
			    <div class="page-info">
			    <h1 style="font-family: <?php echo $options['heading_choise']; ?>"><?php _e('No items found', 'persona') ?></h1>
			    </div>
			<?php 
			endif; 
		?>	
	</div>	
	
		<section class="content-box container top-title search-from">
		<?php
			$args = array(
			  'cat' => 3,
			  'posts_per_page' => 1,
			);
			$category = get_category( $args['cat'] );
			$query = new WP_Query( $args );
			if ($query->have_posts()) {
				while ($query->have_posts()) {
			    $query->the_post();?>
			   		<div class="col narrative">
						<h2 class="text-center"><?php the_title();?></h2>
						<p><?php the_content();?></p>
					</div>	
			<?php  }
			  wp_reset_postdata();
			} else {
			  // no posts found
			}
		?>
	<!---pagination vila--->
		<?php if (have_posts()):
							while (have_posts()): the_post();
							get_template_part('content','page');
							endwhile;
							else:
								echo "No Content Post!";
							endif;
						?>
						<?php
							$ourCurrentPage = get_query_var('paged');
							$paginations = new WP_Query(array
							(
								'category_name' =>'pagination',
								'post_per_page' => 2,
								'paged' => $ourCurrentPage
							));
						?>
						<div class="row"> 
							<?php if ($paginations->have_posts()):
								while ($paginations->have_posts()):
								$paginations->the_post();
								$_price = get_field('price');
								$_label = get_field('label');
								$_status = get_field('status');
								$_notification = get_field('notification');
								$_bedroom = get_field('bedroom');
								$_bathroom = get_field('bathroom');
								$_book = get_field('book');
							?>
								<div class="col-md-6">
									<div class="container content-box">
										<div class="title">
											<h2><?php the_title();?></h2>
										</div>
										<div class="row">
											<div class="col-md-6">
												<?php the_post_thumbnail();?>
											</div>
											<div class="col-md-6 submenu1">
												<div class="search-price">
													<?php echo $_price;?>
												</div>
												<?php the_excerpt();?>
											</div>
										</div>
									<footer class="row search-footer">
										<div class="col-md-3">
											<i class="fa fa-bell-o" aria-hidden="true"></i>  <span><?php echo $_notification;?></span>
										</div>	
										<div class="col-md-3">
											<i class="fa fa-bed" aria-hidden="true"></i> <span><?php echo $_bedroom;?></span>
										</div>
										<div class="col-md-3">
											<i class="fa fa-bath" aria-hidden="true"></i> <span><?php echo $_bathroom;?></span>
										</div>
										<div  class="col-md-3">
											<i class="fa fa-book" aria-hidden="true"></i> <span><?php echo $_book;?></span>
										</div>
									</footer>
									</div>
								</div>	
							<?php endwhile;?>
							<div class="num-pag" style="margin: auto;color: #666;padding-top: 40px;padding-bottom: 40px;">
								<?php 
									 echo paginate_links(array
      								('total' => $paginations->max_num_pages));
								?>
							</div>
							<?php	endif;
							?>
						</div>
	</section>

		<!----Amazing Feature-->
	<section class="container amazing content-box text-center">
		<?php
			$args = array(
			  'cat' => 5,
			  'posts_per_page' => 3,
			);
			$category = get_category( $args['cat'] );
			$query = new WP_Query( $args );
			echo '<div class="container cat-name"';
				echo '<center>';?> 
					<h2><?php echo $category->name?></h2>
					<p><?php echo $category->description;?></p>
			<?php	echo '</center>';
			echo '</div>';
			?>
			<div class="container">
				<div class="row">
					<?php if ($query->have_posts()) {
						while ($query->have_posts()) {
					    $query->the_post();?>
					   		<div class="col-4">
					   			<div class="img-amazing">
					   				<?php the_post_thumbnail();?>
					   			</div>
					   			<div class="amzing-title"> 
					   				<h4><a href=""><?php the_title();?></a></h4>
					   			</div>
								<p><?php the_content();?></p>
							</div>	
					<?php  }?>	
				</div>
			</div>
			<?php  wp_reset_postdata();
			} else {
			  // no posts found
			}
		?>
	</section>

		<!---News Posts-->
	<section class="content-box container news-post">
		<?php
			$args = array(
			  'cat' => 6,
			  'posts_per_page' => 3,
			);
			$category = get_category( $args['cat'] );
			$query = new WP_Query( $args );
			echo '<div class="container newsposts-name"';
				echo '<center>';?> 
					<h4><?php echo $category->name?></h4>
					<p><?php echo $category->description;?></p>
			<?php	echo '</center>';
			echo '</div>';?>
			<div class="container">
				<div class="row">
					<?php if ($query->have_posts()) {
						while ($query->have_posts()) {
					    $query->the_post();?>
					   		<div class="col-sm-4">
					   			<?php the_post_thumbnail();?>
					   			<div class="title-newspost">
					   				<p><?php the_title();?></p>
					   			</div>
					   			<small>
					   				<?php echo "On"." ".get_the_date();?>
					   			</small>
					   			<p><?php the_content();?></p>
					   		</div>
					<?php  }
					  wp_reset_postdata();
					} else {
					  // no posts found
					}?>
				</div>
			</div>
	</section>

	<!---Feature Propertiest--->
	<section class="feature container content-box">
		<?php
			$args = array(
			  'cat' =>  7,
			  'posts_per_page' => 3,
			);
			$category = get_category( $args['cat'] );
			$query = new WP_Query( $args );?>
			<div class="container text-center feature-name">
				<h4>
					<?php 
						echo $category->name;
					?>
				</h4>
				<p><?php echo $category->description;?></p>
			</div>			
			<!--<div class="container" style="background: #343a3b;">-->
				<div class="row" style="background: #343a3b;">
					<?php if ($query->have_posts()) {
						while ($query->have_posts()) {
					    $query->the_post();?>
					   		<div class="container">
					   			<div class="feature-title text-left">
					   				<div class="row">
					   					<div class="col-md-6">
					   						<?php the_post_thumbnail();?>
					   					</div>
					   					<div class="col-md-6">
					   						<h4><?php the_title();?></h4>
					   						<div class="feature-price">
					   							<h4><?php echo $_price;?></h4>
					   						</div>
					   						<div class="feature-content">
					   							<p><?php the_content();?></p>
					   							<p class="line"></p>
					   						</div>
					   						<div class="container icon">
					   							<div class="row">
					   								<div class="col-md-4">
					   									<i class="fa fa-bed" aria-hidden="true"></i> <small>4 Bedrooms</small>
					   								</div>
					   								<div class="col-md-4">
					   									<i class="fa fa-bath" aria-hidden="true"></i> <small>4 Bathrooms</small>
					   								</div>
					   								<div class="col-md-4">
					   									<i class="fa fa-address-book" aria-hidden="true"></i>​​ <small>4 Contacts</small>
					   								</div>
					   							</div>
					   						</div>
					   					</div>
					   				</div>
					   			</div>
					   		</div>
					<?php  }
					  wp_reset_postdata();
					} else {
					  // no posts found
					}?>
				</div>
			<!--</div>-->
	</section>
	

		<!---Partner--->
	<section class="container content-box partner">
		<div class="container partner-name text-center">
			<h4>
				<span>
					<?php echo 'Partner';?>
				</span>
			</h4>
		</div>
		<div class="customer-partner py-4">
		  <div class="customer-partner-cover">
		    <div class="container">
		      <?php
		            $args = array( 
		                  'orderby'     => 'ID', // or 'date', 'rand'
		                  'post_type'   => 'partner', // or 'post', 'page'
		                  'order'     => 'DESC', // or 'ASC'
		                  'posts_per_page'   => -1,
		              );
		              $_incr = 0;
		            // Get the posts
		              query_posts( $args );
		              if(have_posts()){
		          ?>
		          <div class="row">
		              <?php
		                  while ( have_posts() ) : the_post();
		              ?>
		                <div class="col-sm-2 py-1">
		                  <div class="card">
		                  <?php the_post_thumbnail(); ?>
		                  </div>
		                </div>
		            <?php
		                endwhile; 
		            ?>
		          </div>
		        <?php } ?>
		    </div>
		  </div>
		</div>
	</section>
<?php
get_footer();
