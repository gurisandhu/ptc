<?php 
get_header();
 ?>

 <!-- single-post -->
<?php $cat = get_the_category(); ?>
<section class="custom-page">
	<div class="container">
		<div class="full-width">
			<ul class="full-width bread-crumb">
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">PTC</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/<?php echo $cat[0]->slug; ?>"><?php echo $cat[0]->name; ?></a></li>
				<li><?php the_title(); ?></li>
			</ul>
		</div>
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

<?php include(TEMPLATEPATH . '/association-slider.php'); ?>


<?php get_footer(); ?>