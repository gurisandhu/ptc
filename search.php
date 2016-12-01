<?php get_header(); ?>

<!-- Template search.php -->

<section class="custom-page">
<div class="container">
		<?php
		$s=get_search_query();
		$args = array(
		                's' =>$s
		            );
		    // The Query
		$the_query = new WP_Query( $args );

		if ( $the_query->have_posts() ):
		        _e("<h1>Search Results for: ".get_query_var('s')."</h1><br />");
		    ?>
		    <div class="search-page">
		    	
		    
		        <?php while ( $the_query->have_posts() ):
		           $the_query->the_post();
		                 ?>	
		                 <div class="row">
		                 	<h4><?php the_title(); ?></h4>
		                 	<?php $content_post = get_post();

		                 		$content = $content_post->post_content;

		                 		$post_id = $content_post->ID;
		                 		$fields = get_fields($post_id);

		                 		reset($fields);
		                 		while (list($key, $val) = each($fields)){

	                 			if ($key == 'single_template_content'){
		                 				echo $val;
		                 			}
		                 		}
		                 		if ($key == 'category_content'){
		                 				echo $val;
		                 			}
		                 		if ($key == 'full_width_content'){
		                 				echo $val;
		                 			}	
							?>

							<p class="full-width">
								<?php 
								$searched_content = $post->post_content;
								$searched_trimedContent = trimText($searched_content, "...", 350); ?>
								<?php echo $searched_trimedContent; ?>
							</p>
							<div class="full-width">
								<a class="more but-left" href="<?php the_permalink(); ?>">Read More</a>
							</div>
		                 </div>
		         <?php endwhile; ?>
		<?php else: ?>         
		        <h2>Nothing Found</h2>
		        <div class="alert alert-info">
		          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
		        </div>
		<?php endif; ?>
		</div>
	</div>
</section>

<section class="search-form">
	<div class="container">
		<form class="row" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input class="row" type="text" value="" name="s" id="s" placeholder="Start typing ..." />
			<summary>Press enter</summary>
		</form>
	</div>
</section>
<?php include(TEMPLATEPATH . '/association-slider.php'); ?>


<?php get_footer(); ?>