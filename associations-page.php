<?php 
/*
* Template Name: Associations Page
*/
get_header();

$asso_page_terms = get_terms( array(
	'taxonomy' => 'ptc_associations',
	'hide_empty' => false,
	));
 ?>

<section class="section-2 asso-page">
	<div class="container">
		<?php include (TEMPLATEPATH . '/bread-crumb.php'); ?>    
		<h2><?php the_title(); ?></h2>
		<div class="full-width">
			<?php foreach ($asso_page_terms as $asso_page_term ) : 
					$asso_img = get_field('association_images', $asso_page_term);
					$asso_url = get_field('association_website', $asso_page_term);
			?>
				<a href="http://<?php echo $asso_url; ?>" target="_blank" class="col-3 bg-shadow">
					<div class="asso-image" style="background-image: url('<?php echo $asso_img; ?>');">
						
					</div>
					<h4><?php echo $asso_page_term->name; ?></h4>
					<button><h3><?php echo $asso_url; ?></h3></button>

				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php include(TEMPLATEPATH . '/association-slider.php'); ?>

<?php wp_reset_query(); ?>	
<?php get_footer(); ?>