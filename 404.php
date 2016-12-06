<?php get_header(); ?>

<!-- Template 404.php -->

<section class="custom-page">
	<div class="container">
		<div class="full-wdith">
			<h1>Page not found</h1>
			Whoops. looks like the page you were looking for does not exit. Maybe try checking in Menu or <a href="<?php echo esc_url( home_url('')); ?>/contact/">contact us</a>.
		</div>
	</div>
</section>

<?php include(TEMPLATEPATH . '/association-slider.php'); ?>

<?php get_footer(); ?>