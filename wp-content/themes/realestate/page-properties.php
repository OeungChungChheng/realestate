<?php
/**Template Name: Page Properties
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
	<section class="prop-maps">
		<?php $query = new WP_Query( array( 'pagename' => 'Properties' ) );
	        while ( $query->have_posts() ) {
	        $query->the_post();
	     		the_content();
	    }
	    wp_reset_postdata();
		?>
		<!----List Layout-->
		<div class="container properties" style="margin-top: 60px;">
			<div class="row">
				<div class="prop-left">
					<p class="title-listlayout">List Layout</p>
					<p class="title-sort">
						Sort By: <select>
						<option>Defual Order</option>
						<option>Price Low to Hight</option>
						<option>Date Old to New</option>
						<option>Date New to Old</option>
					</select>
					</p>
					<div class="container pd-30">
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
							<div class="container content-box mb-40">
								<div class="title-pagination">
									<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
								</div>
								<div class="row">
									<div class="col-md-5">
										<?php the_post_thumbnail();?>
									</div>
									<div class="col-md-7">
										<div class="paginat-price">
											<?php echo $_price;?>
										</div>
										<div class="content-paginate">
											<a href="<?php the_permalink();?>">
												<?php the_excerpt(); ?>
											</a>
										</div>
									</div>
								</div>
								<footer class="row">
									<div class="col-sm-3">
										<i class="fa fa-bell-o" aria-hidden="true"></i> <span><?php echo $_notification;?></span>
									</div>
									<div class="col-sm-3">
										<i class="fa fa-bed" aria-hidden="true"></i> <span><?php echo $_bedroom;?></span>
									</div>
									<div class="col-sm-3">
										<i class="fa fa-bath" aria-hidden="true"></i> <span><?php echo $_bathroom;?></span>
									</div>
									<div  class="col-sm-3">
										<i class="fa fa-book" aria-hidden="true"></i> <span><?php echo $_book;?></span>
									</div>
								</footer>
							</div>
							<?php endwhile;?>
							<div class="num-pag" style="margin: auto;">
								<?php 
									 echo paginate_links(array
      								('total' => $paginations->max_num_pages));
								?>
							</div>
							<?php	endif;
							?>
						</div>
					</div>
				</div>
				<div class="prop-right">
					<div class="container prop-content">
						<!--<span class="title-propcontent">Find your home <i class="fa fa-search" aria-hidden="true"></i></span>-->
							<p>Location</p>
							<div class="select">
							  <select name="slct" id="slct">
							    <option selected disabled>Choose an option</option>
							    <option value="1">Pure CSS</option>
							    <option value="2">No JS</option>
							    <option value="3">Nice!</option>
							  </select>
							</div>
						
						
							<p>Location</p>
							<div class="select">
							  <select name="slct" id="slct">
							    <option selected disabled>Choose an option</option>
							    <option value="1">Pure CSS</option>
							    <option value="2">No JS</option>
							    <option value="3">Nice!</option>
							  </select>
							</div>
						
						
							<p>Location</p>
							<div class="select">
							  <select name="slct" id="slct">
							    <option selected disabled>Choose an option</option>
							    <option value="1">Pure CSS</option>
							    <option value="2">No JS</option>
							    <option value="3">Nice!</option>
							  </select>
							</div>
						
					
							<p>Location</p>
							<div class="select">
							  <select name="slct" id="slct">
							    <option selected disabled>Choose an option</option>
							    <option value="1">Pure CSS</option>
							    <option value="2">No JS</option>
							    <option value="3">Nice!</option>
							  </select>
							</div>
			
							<button class="btn-search">Search</button>
					</div>

					<div class="container prop-content bg-light" style="margin-top: 40px;">
						<p class="title-agent">Agent</p>
					</div>

					<div class="container prop-content agent">
						<?php
							$paginations = new WP_Query(array
							(
								'category_name' =>'Agent',
								'post_per_page' => 3,
							));
						?>
						<div class="row">
							<?php if ($paginations->have_posts()):
								while ($paginations->have_posts()):
								$paginations->the_post();
								$_email = get_field('email');
								$_phone = get_field('phone');
								
							?>
								<div class="col-4 img-agent" style="border-bottom: 1px solid #dedede;">
									<?php the_post_thumbnail();?>
								</div>
								<div class="col-8 agent-content" style="border-bottom:1px solid #dedede;">
									<a href="<?php the_permalink();?>">
										<?php the_title();?>
									</a>
									<p>
										<?php echo $_email;?>
										<?php echo $_phone;?>
									</p>
								</div>
							<?php 
									endwhile;
								endif;
							wp_reset_postdata();
							?>
						</div>
					</div>

					<div class="container prop-content" style="margin-top: 40px;">
						<p class="title-agent">Feature Properties</p>
					</div>
					<div class="container prop-content" style="padding-top: 20px;">
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
							?>
								<div class="container feature-blog" >
									<?php the_post_thumbnail();?>
									<a href="<?php the_permalink();?>">
										<h4><?php the_title();?></h4>
										<?php the_excerpt();?>
									</a>
									<p class="price"><?php echo $_price;?></p>
								</div>
							<?php
								endwhile;
							endif;
							wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
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
