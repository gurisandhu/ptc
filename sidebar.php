<div class="sidebar">

	<?php $children = get_pages('child_of='.$post->ID); if(count( $children ) !== 0 ) : ?>
		<div class="row">
			<h5><?php the_title(); ?> Plus</h5>
			<ul class="page-menu">
				<?php
					global $post;
					wp_list_pages(array(
					'title_li'    => '',
					'child_of'    => $post->ID,
					'show_date'   => 'modified',
					'date_format' => $date_format,
					'depth' 	  => 1
					));
			?>
		</ul>
	</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( '1_ptc_sidebar' ) ) : ?>
		<div class="row">
			<?php dynamic_sidebar( '1_ptc_sidebar' ); ?>
		</div><!-- #primary-sidebar -->
	<?php endif; ?>

</div> <!-- sidebar -->