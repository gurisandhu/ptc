<?php 
get_header();
 ?>

 <!-- single-post -->

<section class="custom-page">
	<div class="container">
		<div class="full-width">
			<h1><?php the_title(); ?></h1>
			<?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
				<div class="post-image">
				 	<?php the_post_thumbnail(); ?>
				 </div>
			 	<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>