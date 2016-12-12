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
$schools 	= get_the_terms( get_the_ID(), 'ptc_schools');
if ( !empty($schools)){
	$school_term = array_pop($schools);
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
$school_login = False;


 ?>

 <?php if($school_term): ?>
 		<section class="light-bg">
 			<div class="container">
 				<?php include(TEMPLATEPATH . '/ptc-plus-form.php'); ?>
 			</div>
 		</section>
		
		<?php if(!$school_login): ?>
			<!--  -->
		<?php else: ?>
			<?php include(TEMPLATEPATH . '/single_school.php'); ?>
		<?php endif; ?>
		
	<?php else: ?>
		<?php include(TEMPLATEPATH . '/single_no_school.php'); ?>
<?php endif; ?>

	
<section class="light-bg">
	<?php include(TEMPLATEPATH . '/association-slider.php'); ?>
</section>

<?php wp_reset_query();  ?>
<?php get_footer(); ?>