<?php 
get_header();
 ?>
<!-- archive -->
<section class="single-page light-bg">
	<div class="container">
		<div class="full-width">
			<ul class="full-width bread-crumb">
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">PTC</a></li>
				<li>News</li>
			</ul>
		</div>
		<div class="row">
			<h2>News</h2>
		</div>
		<div class="full-width">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<a href="<?php echo get_permalink(); ?>" class="single-padding row bg-shadow post">
					<h1><?php the_title(); ?></h1>
					<?php $content_to_trim = get_the_content(); ?>
					<?php $trimedContent = trimText($content_to_trim, "...", 400);
					 ?>
					 <div class="post-image">
					 	<?php the_post_thumbnail(); ?>
					 </div>
				 	<p><?php echo $trimedContent; ?></p>
					<div class="full-width">
						<button class="row but-left more">Read more</button>
					</div>
				</a>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>

<section class="light-bg">
	<?php include(TEMPLATEPATH . '/association-slider.php'); ?>
</section>

<?php get_footer(); ?>