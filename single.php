<?php 
get_header();
 ?>

<!-- single -->

<?php 

// Taxonomies
// $ptc_asso = the_terms( $post->ID, 'ptc_associations', '');
// $ptc_audience = the_terms( $post->ID, 'ptc_audience', '');
// $ptc_levels = the_terms( $post->ID, 'ptc_levels', '');
// $ptc_subjects = the_terms( $post->ID, 'ptc_subjects', '');
// $ptc_specilist_area = the_terms( $post->ID, 'ptc_specilist_area', '');
// $ptc_regions = the_terms( $post->ID, 'ptc_regions', '');

// Custom fields from Taxonomies
$association = get_the_terms( get_the_ID(), 'ptc_associations');
if ( !empty($association)){
	$term = array_pop($association);
	$asso_person = get_field('association_contact_person', $term);
	$asso_image = get_field('association_images', $term);
	$asso_website = get_field('association_website', $term);
	$asso_email = get_field('association_email', $term);
	$asso_contact = get_field('association_contact_number', $term);
	$asso_contact_2 = get_field('association_contact_number_2', $term);
}
$subjects 	= get_the_terms( get_the_ID(), 'ptc_subjects');
if ( !empty($subjects)){
	$sub_term = array_pop($subjects);
	$sub_icon = get_field('subject_kla_icon', $sub_term);
	$sub_bg_color = get_field('subject_background_color', $sub_term);
}

// Custom fields from Events
$bostes_approved = get_field_object('events_approved_by')["value"][0];
if ($bostes_approved == "Yes"){
	$show_bostes_image = get_template_directory_uri() . '/images/event-logo.png';	
}
// If contact detials is from Association or in event (custom)
$event_contact_details 	= get_field('association_contact_details');
if ($event_contact_details == "Use Custom"){
	$contact_person = get_field('events_contact_person');
	$website_url = get_field('events_website');
	$email_id = get_field('events_email');
	$contact_number = get_field('events_contact_number');
	$contact_number_2 = get_field('events_contact_number_2');
} else {
	$contact_person = $asso_person;
	$website_url = $asso_website;
	$email_id = $asso_email;
	$contact_number = $asso_contact;
	$contact_number_2 = $asso_contact_2;
}
 ?>

	<section class="single-page light-bg">
		<div class="container rect-bg">

			<?php include (TEMPLATEPATH . 'bread-crumb.php'); ?>	

			<div class="row">
				<ul class="single-title" style="background-image: url('<?php echo $sub_icon ?>');">
					<li><span class="image" style="background-image: url('<?php echo $asso_image; ?>');"></span><h6><?php echo the_terms( $current_post_ID, 'ptc_associations', ''); ?></h6></li>
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
					<?php $current_post_ID= $post->ID; ?>
					<ul class="tags single-padding">
						<li><div>Audience:</div>
							<div><?php echo the_terms( $current_post_ID, 'ptc_audience', ''); ?></div></li>
						<li><div>Levels:</div>
							<div><?php echo the_terms( $current_post_ID, 'ptc_levels', ''); ?></div></li>
						<li><div>Subject | KLA:</div>
							<div><?php echo the_terms( $current_post_ID, 'ptc_subjects', ''); ?></div></li>
						<li><div>Specilist area:</div>
							<div><?php echo the_terms( $current_post_ID, 'ptc_specilist_area', ''); ?></div></li>
						<li><div>Region</div>
							<div><?php echo the_terms( $current_post_ID, 'ptc_regions', ''); ?></div>
						</li>
					</ul>
					<div class="full-width single-padding">
							<div class="full-width contact-title">Event contacts:</div>
							<ul class="event-contacts full-width" style="background-image: url('<?php echo $show_bostes_image; ?>');">
								<?php if ($contact_person): ?>
									<li><i class="fa fa-user"></i><p><?php echo $contact_person; ?></p></li>
								<?php endif; ?>
								<?php if ($contact_number): ?>
									<li><i class="fa fa-phone"></i><p><b><a href="tel:<?php echo $contact_number; ?>"><?php echo $contact_number; ?></a></b>
										<?php if($contact_number_2): ?>
											, <b><a href="tel:<?php echo $contact_number_2; ?>"><?php echo $contact_number_2; ?></a></b>
										<?php endif; ?>
									</p></li>
								<?php endif; ?>
								<?php if ($email_id): ?>
									<li><i class="fa fa-envelope"></i><p><a href="mailto:<?php echo $email_id; ?>"><?php echo $email_id; ?></a></p></li>
								<?php endif; ?>
								<?php if ($website_url): ?>
									<li><i class="fa fa-laptop"></i><p><a title="Link open in new tab" target="_blank" href="http://<?php echo $website_url; ?>" target="_blank"><?php echo $website_url; ?></a></p></li>
								<?php endif; ?>
							</ul>
					</div>
				</div>
				<div class="one-third">
					<div class="widget">
						<ul class="event-details">
							<?php if(get_field('events_start_date')): ?>
								<li class="day">
									<div>Start Date</div>
									<div><?php the_field('events_start_date'); ?></div>
								</li>
							<?php endif; ?>
							<?php if(get_field('events_time')): ?>
							<li class="time">
								<div>Time</div>
								<div><?php the_field('events_time'); ?> - <?php the_field('events_end_time'); ?></div>
							</li>
							<?php endif; ?>
							<?php if(get_field('events_location')): ?>
							<li class="location">
								<div>Location</div>
								<div>Venue: <a title="Open in Google Map with New Tab" target="_blank" href="https://maps.google.com/?q=<?php the_field('events_location'); ?> <?php the_field('events_location_suburb'); ?>"><?php the_field('events_location'); ?>, <?php the_field('events_location_suburb'); ?></a></div>
							</li>
							<?php endif; ?>
							<?php if(get_field('events_registration_closes')): ?>
							<li class="closes">
								<div>Registration closes</div>
								<div><?php the_field('events_registration_closes'); ?> <span>(<?php the_field('events_closes_comments'); ?>)</span></div>
							</li>
							<?php endif; ?>
							<?php if(get_field('events_costs_other_comments')): ?>
							<li class="cost">
								<div>Cost</div>
								<div><?php the_field('events_costs_other_comments'); ?>
								</div>
							</li>
							<?php endif; ?>
						</ul>
						<?php if(get_field('events_button_link')): ?>
							<a target="_blank" href="<?php the_field('events_button_link'); ?>" class="but-full sky more"><?php the_field('events_button_text'); ?></a>
						<?php endif; ?>
					</div>
				</div> <!-- one-third -->
			</div>	
			
		</div><!-- container -->
	</section>


<!-- +++++++++++++++
Related posts
 +++++++++++++++ -->
 <?php 

 	$current_post_type     =   array( 'post_type' => 'ptc_events');
    $repeat_events  =   new WP_Query( $current_post_type );
    $current_post_subject_obj = get_the_terms( $post->ID, 'ptc_subjects', '');
    $current_post_subject = $current_post_subject_obj[0]->name; ?>

 <section class="section-2 light-bg">
		<div class="container">
			<h2>Realated Events</h2>

 		<?php	while ( $repeat_events->have_posts() ) : 
 			$repeat_events->the_post(); 
			$terms_object = get_the_terms( $repeat_events->the_ID(), 'ptc_subjects', '');
			$related_terms = $terms_object[0]->name;
			$related_association = get_the_terms( $repeat_events->the_ID(), 'ptc_associations');
			$related_term = array_pop($related_association);
			$related_asso_image = get_field('association_images', $related_term);
			$related_subjects 	= get_the_terms( $repeat_events->the_ID(), 'ptc_subjects');
			$related_sub_term = array_pop($related_subjects);
			$related_sub_icon = get_field('subject_kla_icon', $related_sub_term);
			if ($related_terms == $current_post_subject):
			$related_date = get_field('events_start_date');
			$realted_suburb = get_field('events_location_suburb');
			$format_in 	= '';
			$related_date_short = date("j M", strtotime($related_date));
	 	?>

			<a href="<?php echo get_permalink(); ?>" class="col-3" style="background-color:<?php echo $sub_bg_color; ?>;">
				<div class="section-2-image" style="background-image: url('<?php echo $related_sub_icon; ?>');">
					<span class="date"><?php echo $related_date_short; ?></span>
				</div>
				<div class="section-2-content">
					<div class="provider">
						<div class="provider-logo" style="background-image: url('<?php echo $related_asso_image; ?>');">
						</div>
						<div class="provider-title">
							<h3><?php echo get_the_terms( $repeat_events->the_ID(), 'ptc_associations', '')[0]->name; ?></h3>
						</div>
					</div>
					<div class="section-2-title">
						<h4><?php the_title(); ?></h4>
						<p><?php echo $realted_suburb; ?></p>
					</div>
					<div class="section-2-link">
						Read More <i class="fa fa-angle-right"></i>
					</div>
				</div>
			</a>
	<?php endif; endwhile; ?>
			<div class="row">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/ptc_events" class="more but-col-3">See All events</a>
			</div>
		</div>
	</section><!-- section-2 related events-->
	
	<!-- <section class="light-bg">
		
	</section> -->

<?php wp_reset_query();  ?>
<?php get_footer(); ?>