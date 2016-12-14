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
					<?php if (have_rows('front_page_slider')) : while(have_rows('front_page_slider')) : the_row() ; ?>
						<div class="swiper-slide" style="background-image: url('<?php the_sub_field('front_page_slide_image') ?>');">
							<div class="blue-shadow">
								<div class="container">
									<div class="slider-content">
										<h1><?php the_sub_field('front_page_text'); ?></h1>
										<a href="<?php the_sub_field('front_page_button_link'); ?>" class="more but-left"><?php the_sub_field('front_page_button_text'); ?></a>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div> <!-- slider -->
		<div class="home-page-menu">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '' ) ); ?>/member-associations">
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
			<form class="event-filter" method="post" class="row" action="<?php $_SERVER["PHP_SELF"]; ?>">
				<ul class="filters row">
					<li>
						<?php $filter_assos = get_terms('ptc_associations'); ?>
						<select name="filter-association" id="">
							<option value="">Association</option>
							<?php foreach($filter_assos as $filter_asso): ?>
								<option value="<?php echo $filter_asso->slug; ?>"><?php echo $filter_asso->name; ?></option>
							<?php endforeach; ?>	
						</select>
					</li>
					<li>
						<?php $filter_subjects = get_terms('ptc_subjects'); ?>
						<select name="filter-subject" id="">
							<option value="">Subject</option>
							<?php foreach($filter_subjects as $filter_subject): ?>
								<option value="<?php echo $filter_subject->slug; ?>"><?php echo $filter_subject->name; ?></option>
							<?php endforeach; ?>	
						</select>
					</li>
					<li>
						<?php $filter_levels = get_terms('ptc_levels'); ?>
						<select name="filter-level" id="">
							<option value="">Level</option>
							<?php foreach($filter_levels as $filter_level): ?>
								<option value="<?php echo $filter_level->slug; ?>"><?php echo $filter_level->name; ?></option>
							<?php endforeach; ?>	
						</select>
					</li>
					<li>
						<?php $filter_regions = get_terms('ptc_regions'); ?>
						<select name="filter-region" id="">
							<option value="">Region</option>
							<?php foreach($filter_regions as $filter_region): ?>
								<option value="<?php echo $filter_region->slug; ?>"><?php echo $filter_region->name; ?></option>
							<?php endforeach; ?>	
						</select>
					</li>
					<li>
						<input class="more" type="submit" value="search">
					</li>
				</ul>
			</form>
<?php wp_reset_query(); ?>

<?php if (isset($_POST['filter-association'])): $form_filter_asso=$_POST['filter-association']; else: $form_filter_asso =''; endif; ?>	
<?php if (isset($_POST['filter-subject'])): $form_filter_subject=$_POST['filter-subject']; else: $form_filter_subject =''; endif; ?>	
<?php if (isset($_POST['filter-level'])): $form_filter_level=$_POST['filter-level']; else: $form_filter_level =''; endif; ?>	
<?php if (isset($_POST['filter-region'])): $form_filter_region=$_POST['filter-region']; else: $form_filter_region =''; endif; ?>	

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
                $schools = get_the_terms( get_the_ID(), 'ptc_schools');
            	if (empty($schools)) :
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
			
			<?php endif; endwhile; endif; ?>

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