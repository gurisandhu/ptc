<?php 
/*
* Template Name: Single
*/
get_header();
 ?>

<?php $current_post_id = get_the_ID();
		$current_cat_id = the_category_ID();

		$args = array(
			'cat'		=> $current_cat_id,
			'post_type'	=>	'PTC-events',
			'posts_per_page'	=> 4
		);
	$projects = new WP_Query($current_post_id);

	$current_post = var_export($GLOBALS['post'], TRUE);

	 ?>




	<section class="single-page light-bg">
		<div class="container rect-bg">

			<?php include (TEMPLATEPATH . 'bread-crumb.php'); ?>	

			<div class="row">
				<ul class="single-title" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/icons/single-event.png');">
					<li><span class="image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/associations/orff.png');"></span><h6>Orff Schulwerk Association NSW</h6></li>
					<li><h1><?php the_title(); ?></h1></li>
				</ul>
			</div>
			<div class="row">
				<div class="two-third bg-shadow">

					<?php if (have_posts()) : 
					while (have_posts()) :
					the_post(); ?>
					<div class="single-padding">
						<?php the_content();  ?>
					</div>
					<?php endwhile;
					endif;  ?>

					<div class="single-padding">
						 <?php

$taxonomy = create_my_taxonomies();
var_dump($taxonomy);

?>
					</div>
					
					

					<ul class="tags single-padding">
						<li><div>Audience:</div>
							<div>Secondary teachers</div></li>
						<li><div>Target group:</div>
							<div>7-12</div></li>
						<li><div>KLA:</div>
							<div>Creative Arts</div></li>
						<li><div>Specilist area:</div>
							<div>Music</div></li>
					</ul>
					<div class="full-width single-padding">
							<div class="full-width contact-title">Event contacts:</div>
							<ul class="event-contacts full-width" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/event-logo.png');">
								<li><i class="fa fa-user"></i><p>Michele Ellis</p></li>
								<li><i class="fa fa-phone"></i><p><b><a href="tel:0423 180 119">0423 180 119</a></b></p></li>
								<li><i class="fa fa-envelope"></i><p><a href="mailto:michele.ellis@hotmail.com">michele.ellis@hotmail.com</a></p></li>
								<li><i class="fa fa-laptop"></i><p><a href="http://www.orffnasw.org.au" target="_blank">www.orffnasw.org.au</a></p></li>
							</ul>
					</div>
				</div>
				<div class="one-third">
					<div class="widget">
						<ul class="event-details">
							<li class="day">
								<div>Start Date</div>
								<div>Saturday 16 July</div>
							</li>
							<li class="time">
								<div>Time</div>
								<div>9.00am - 3.00pm</div>
							</li>
							<li class="location">
								<div>Location</div>
								<div>Venue: International Grammar School, 4-8 Kelly Street Ultimo</div>
							</li>
							<li class="closes">
								<div>Registration closes</div>
								<div>Friday 1 July <span>(numbers limited)</span></div>
							</li>
							<li class="cost">
								<div>Cost</div>
								<div>Member $210 <br>
									Non memeber $230, <br>
									Student Member $110. <br>
									<span>Includes course notes, certificate of participation and morning tea.</span>
								</div>
							</li>
						</ul>
						<a href="#" class="but-full sky more">Book your place</a>
					</div>
				</div> <!-- one-third -->
			</div>	
			
		</div><!-- container -->
	</section>

	<section class="section-2 light-bg">
		<div class="container">
			<h2> Realated Events</h2>
			<a href="#" class="col-3">
				<div class="section-2-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/course.png');">
					<span class="date">12 Jul</span>
				</div>
				<div class="section-2-content">
					<div class="provider">
						<div class="provider-logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/course-sub.jpg');">
							
						</div>
						<div class="provider-title">
							<h3>Kodály Music Education Institute Aust NSW</h3>
						</div>
					</div>
					<div class="section-2-title">
						<h4>Building units of work through global education and cooperative learning and interdisciplinary approach to planning</h4>
						<p>Hornsby</p>
					</div>
					<div class="section-2-link">
						Read More <i class="fa fa-angle-right"></i>
					</div>
				</div>
			</a>

			<a href="#" class="col-3">
				<div class="section-2-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/course.png');">
					<span class="date">12 Jul</span>
				</div>
				<div class="section-2-content">
					<div class="provider">
						<div class="provider-logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/course-sub.jpg');">
							
						</div>
						<div class="provider-title">
							<h3>Kodály Music Education Institute Aust NSW</h3>
						</div>
					</div>
					<div class="section-2-title">
						<h4>Primary Levels 1 &amp; 2 Winter Scholl</h4>
						<p>Hornsby</p>
					</div>
					<div class="section-2-link">
						Read More <i class="fa fa-angle-right"></i>
					</div>
				</div>
			</a>

			<a href="#" class="col-3">
				<div class="section-2-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/course.png');">
					<span class="date">12 Jul</span>
				</div>
				<div class="section-2-content">
					<div class="provider">
						<div class="provider-logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/course-sub.jpg');">
							
						</div>
						<div class="provider-title">
							<h3>Kodály Music Education Institute Aust NSW</h3>
						</div>
					</div>
					<div class="section-2-title">
						<h4>Primary Levels 1 &amp; 2 Winter Scholl</h4>
						<p>Hornsby</p>
					</div>
					<div class="section-2-link">
						Read More <i class="fa fa-angle-right"></i>
					</div>
				</div>
			</a>

			<div class="row">
				<a href="#" class="more but-col-3">See All events</a>
			</div>
		</div>
	</section><!-- section-2 related events-->
	
	<!-- <section class="light-bg">
		
	</section> -->
<?php wp_reset_query();  ?>

<?php get_footer(); ?>