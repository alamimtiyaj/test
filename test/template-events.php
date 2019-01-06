<?php 
/* 
Template Name: Events Page Template 
*/ 


get_header(); ?>
<!-- Intro Section -->
<?php
// Start the loop.
while ( have_posts() ) : the_post();
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
?>
			<section class="inner-intro  padding ptb-xs-40 bg-img1 overlay-dark light-color" style="background:url(<?php echo  $featured_img_url;?>)">
				<div class="container">
					<div class="row title">
						<h1><?php the_title(); ?></h1>
						 <div class="page-breadcrumb">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>/<span><?php the_title(); ?></span>
						</div> 
					</div>
				</div>
			</section>
			<!-- Intro Section -->								
<?php endwhile;?>

<!-- Blog Post Section -->
			<section class="padding ptb-xs-40">
				<div class="container">
					<div class="row">
						<!-- Post Item -->
						<div class="col-sm-9">
							<div class="row">
								<div class="col-md-12 blog-post-hr">
							<?php
							$new_loop = new WP_Query( array(
							'post_type' => 'post',
							'posts_per_page' => -1 // put number of posts that you'd like to display
							) );
							?>

							<?php 
							if ( $new_loop->have_posts() ) : 
							while ( $new_loop->have_posts() ) : $new_loop->the_post();
							$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
							?>


									<div class="blog-post mb-30">
										<div class="post-media">
											<img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" /><span class="event-calender blog-date"> 21 <span>june</span> </span>
										</div>
										<div class="post-meta">
											<span>by <a href="javascript:avoid(0);"><?php the_author(); ?></a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-comment-o"></i> 25</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-heart-o"></i> 57</a>,</span>
											<!-- <div class="post-more-link pull-right">
												<div class="icons-hover-black">
													<a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a><a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a><a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a><a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a>
												</div>
												<a class="get-start btn-Blue xs-hidden"> <i class="ion-android-share-alt"></i></a>
											</div> -->
										</div>
										<div class="post-header">
											<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
										</div>
										<div class="post-entry">
											<p>
												<?php echo wp_trim_words( get_the_content(), 200, '.' ); ?>
											</p>
											
										</div>
										<div class="post-more-link pull-left">
											<a href="<?php the_permalink(); ?>" class="btn-text">Read More</a>
										</div>
									</div>
									<hr />
							<?php 
							endwhile;
							else: 
							endif; 
							wp_reset_query(); 
							?>
									
								</div>
							</div>
							<!-- Pagination Nav -->
							<div class="pagination-nav text-left mt-60 mtb-xs-30">
								<ul>
									<li>
										<a href="javascript:avoid(0);"><i class="fa fa-angle-left"></i></a>
									</li>
									<li class="active">
										<a href="javascript:avoid(0);">1</a>
									</li>
									<li>
										<a href="javascript:avoid(0);">2</a>
									</li>
									<li>
										<a href="javascript:avoid(0);">3</a>
									</li>
									<li>
										<a href="javascript:avoid(0);"><i class="fa fa-angle-right"></i></a>
									</li>
								</ul>
							</div>
							<!-- End Pagination Nav -->
						</div>
						<!-- End Post Item -->
						<!-- Sidebar -->
						
					<div class="col-md-3 col-lg-3 mt-sm-60 sidebar-widget">
						<?php dynamic_sidebar('sidebar-1'); ?>

					</div>
						<!-- End Sidebar -->
					</div>
				</div>
			</section>
			<!-- End Blog Post Section -->

<?php get_footer(); ?>
