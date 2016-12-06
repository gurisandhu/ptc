<?php 
/*
* Template Name: Schools Page
*/
get_header();

$asso_page_terms = get_terms( array(
	'taxonomy' => 'ptc_schools',
	'hide_empty' => false,
	));
 ?>

<section class="section-2 asso-page">
	<div class="container">
		<?php include (TEMPLATEPATH . '/bread-crumb.php'); ?>    
		<h2><?php the_title(); ?></h2>
		<div class="with-sidebar">
			<div class="full-width">
				<?php foreach ($asso_page_terms as $asso_page_term ) : 
						$asso_img = get_field('school_logo', $asso_page_term);
						$asso_pw = get_field('school_password', $asso_page_term);
				?>
					<a href="#" class="col-3 bg-shadow schools">
						<div class="asso-image" style="background-image: url('<?php echo $asso_img; ?>');">
							
						</div>
						<div class="full-width school-content">
							<h4><?php echo $asso_page_term->name; ?></h4>
							<div class="section-2-link">View Events <i class="fa fa-angle-right"></i></div>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div> <!-- with-sidebar -->
		<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
	</div> <!-- container -->
</section>
<?php include(TEMPLATEPATH . '/association-slider.php'); ?>

<?php wp_reset_query(); ?>	
<?php get_footer(); ?>