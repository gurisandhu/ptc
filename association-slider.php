<!--++++++++++++ 
	Associations
++++++++++++ -->
 <?php 
    $asso_terms = get_terms( array(
    	'taxonomy' => 'ptc_associations',
    	'hide_empty' => false,
    	));
  ?>
		<section class="section-4">
			<div class="container">
				<div class="section-4-container">
					<div class="section-4-wrapper">
						<div class="swiper-container-2">
							<div class="swiper-wrapper">
								<?php foreach ( $asso_terms as $asso_term ) : 
									$asso_slide = get_field('association_images', $asso_term);
								?>
									<div class="swiper-slide">
										<a href="<?php echo esc_url( home_url( '' ) ); ?>/ptc_associations/<?php echo $asso_term->slug; ?>" class="section-4-image" style="background-image: url('<?php echo $asso_slide; ?>');">
										</a>
									</div>
								<?php endforeach; ?>
							</div>
			        		<div class="swiper-button-prev-2 swiper-button"><!-- button --></div>
			        		<div class="swiper-button-next-2 swiper-button"><!-- button --></div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php wp_reset_query(); ?>	