<?php 
/*
* Template Name: Front Page
*/
get_header();
 ?>

<!-- front-page -->

	<section class="home-banner">
		<div class="slider home-slider">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home-banner.jpg');">
						<div class="blue-shadow">
							<div class="container">
								<h1>Support And Services to Teachers' Associations in New South Wales</h1>
							</div>
						</div>
					</div>
					<div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home-banner.jpg');">
						<div class="blue-shadow">
							<div class="container">
								<h1>Support to Teachers' Associations in New South Wales</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- slider -->
		<div class="home-page-menu">
			<ul>
				<li><a href="#">
					<div class="menu-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/members-off.svg" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/members-on.svg" alt="">
					</div>
					<span>Member Associations</span>
				</a></li>
				<li><a href="#">
					<div class="menu-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/course-off.svg" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/course-on.svg" alt="">
					</div>
					<span>Full course List</span>
				</a></li>
				<li><a href="#">
					<div class="menu-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/resources-off.svg" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/resources-on.svg" alt="">
					</div>
					<span>Teaching Resources</span>
				</a></li>
				<li><a href="#">
					<div class="menu-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/awards-off.svg" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/awards-on.svg" alt="">
					</div>
					<span>Awards</span>
				</a></li>
			</ul>
		</div>
	</section>

	<section class="section-2">
		<div class="container">
			<form action="" class="row">
				<ul class="filters row">
					<li>
						<select name="association" id="">
							<option value="">Association</option>
							<option value="company-1">Company 1</option>
							<option value="company-2">Company 2</option>
							<option value="company-3">Company 3</option>
						</select>
					</li>
					<li>
						<select name="subject" id="">
							<option value="">Subject</option>
							<option value="company-1">Subject 1</option>
							<option value="company-2">Subject 2</option>
							<option value="company-3">Subject 3</option>
						</select>
					</li>
					<li>
						<select name="level" id="">
							<option value="">Level</option>
							<option value="company-1">Level 1</option>
							<option value="company-2">Level 2</option>
							<option value="company-3">Level 3</option>
						</select>
					</li>
					<li>
						<select name="region" id="">
							<option value="">Region</option>
							<option value="company-1">Region 1</option>
							<option value="company-2">Region 2</option>
							<option value="company-3">Region 3</option>
						</select>
					</li>
					<li>
						<input class="more" type="submit" value="search">
					</li>
				</ul>
			</form>
			<h2>Events</h2>
			<?php 
				$args = array(
					'post_type' => 'ptc_events',
					'posts_per_page' =>	9,
					'orderby' 	=> 'rand' 
					);
				$hp_events = new WP_Query($args);
			if ( $hp_events->have_posts() ) : while ( $hp_events->have_posts() ) : $hp_events->the_post(); 
				$association = get_the_terms( get_the_ID(), 'ptc_associations');
                if ( !empty($association)){
                    $term = array_pop($association);
                    $asso_image = get_field('association_images', $term);
                }
                $subjects   = get_the_terms( get_the_ID(), 'ptc_subjects');
                if ( !empty($subjects)){
                    $sub_term = array_pop($subjects);
                    $sub_icon = get_field('subject_kla_icon', $sub_term);
                    $sub_bg_color = get_field('subject_background_color', $sub_term);
                }
                $date = get_field('events_start_date');
                $suburb = get_field('events_location_suburb');
                $date_short = date("j M", strtotime($date));	

			?>

				<a href="<?php echo get_permalink(); ?>" class="col-3" style="background-color:<?php echo $sub_bg_color; ?>;">
					<div class="section-2-image" style="background-image: url('<?php echo $sub_icon; ?>');">
                        <span class="date"><?php echo $date_short; ?></span>
                    </div>
                     <div class="section-2-content">
                        <div class="provider">
                            <div class="provider-logo" style="background-image: url('<?php echo $asso_image; ?>');">
                            </div>
                            <div class="provider-title">
                                <h3><?php echo get_the_terms( $hp_events->the_ID(), 'ptc_associations', '')[0]->name; ?></h3>
                            </div>
                        </div>
                        <div class="section-2-title">
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo $suburb; ?></p>
                        </div>
                        <div class="section-2-link">
                            Read More <i class="fa fa-angle-right"></i>
                        </div>
                    </div>
				</a>
			
			<?php endwhile; endif; ?>

			<div class="row">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/ptc_events" class="more but-col-3">See More</a>
			</div>
		</div>
	</section><!-- section-2 -->
<?php wp_reset_query(); ?>

	<section class="section-3">
		<div class="container">
			<div class="two-third">
				<h2>Latest News</h2>
				<ul class="news">
					<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<li>
						<a href="<?php echo get_permalink(); ?>">
							<div class="news-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
							</div>
							<div class="news-content">
								<div class="table-cell">
									<span><?php echo get_the_date( 'l, j F Y' ); ?></span>
									<h4><?php the_title(); ?></h4>
								</div>
							</div>
							
						</a>
					</li>
					<?php 
					endwhile; wp_reset_postdata();
					?>
				</ul>
				<div class="row">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/news/" class="more but-col-3">Read more news</a>
				</div>
			</div>
			<a href="#" class="one-third scale-bg">
				<h2>Join PTC Plus</h2>
				<div class="row">
					<img src="<?php echo get_template_directory_uri(); ?>/images/ad.jpg" alt="Advertise by PTC" title="PTC Plus">
				</div>
			</a>
		</div>
	</section><!-- section-3 -->
	<?php include(TEMPLATEPATH . '/association-slider.php'); ?>
<?php wp_reset_query(); ?>	
<?php get_footer(); ?>