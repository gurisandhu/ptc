<?php 
get_header();
 ?>



<section class="custom-page">
	<div class="container">
		<div class="full-width">
			<h1><?php the_title(); ?></h1>
			<?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
			 	<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>

<?php include(TEMPLATEPATH . '/association-slider.php'); ?>

<?php get_footer(); ?>