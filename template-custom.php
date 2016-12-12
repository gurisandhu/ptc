<?php 
/*
* Template Name: Custom Template
*/
get_header();
 ?>

<!-- template-custom -->
	<section class="custom-page">
		<div class="container">
			<div class="full-width">
				<ul class="full-width bread-crumb">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">PTC</a></li>
					<li><?php the_title(); ?></li>
				</ul>
			</div>
			<div class="with-sidebar"> <!-- full or side -->
				<div class="full-width">
					<h1><?php the_title(); ?></h1>
					<?php if(have_rows('add_custom_rows')) : while (have_rows('add_custom_rows')): the_row(); ?>
							<?php if(get_row_layout() == 'full_width'): ?>
								<?php $row_full = get_sub_field('full_width'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
										<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
										<?php foreach($cust_accor_rept as $each_accord): ?>
											<div class="col-2">
												<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
												<div class="accordian-content">
													<?php echo $each_accord['custom_accordion_content'] ?>
													<?php if($each_accord['custom_accordion_add_button']): ?>
														<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
													<?php endif; ?>
												</div>
											</div>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>
							<?php endif; ?>
							<!-- end of full-width -->
							<?php if(get_row_layout() == 'two_columns'): ?>
								<div class="full-width">
									<div class="col-2">
										<?php $row_full = get_sub_field('column_1'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
											<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
											<?php foreach($cust_accor_rept as $each_accord): ?>
												<div class="full-width">
													<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
													<div class="accordian-content">
														<?php echo $each_accord['custom_accordion_content'] ?>
														<?php if($each_accord['custom_accordion_add_button']): ?>
															<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
														<?php endif; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?> <!-- two cols left -->
									</div>
									<div class="col-2">
										<?php $row_full = get_sub_field('columns_2'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
											<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
											<?php foreach($cust_accor_rept as $each_accord): ?>
												<div class="full-width">
													<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
													<div class="accordian-content">
														<?php echo $each_accord['custom_accordion_content'] ?>
														<?php if($each_accord['custom_accordion_add_button']): ?>
															<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
														<?php endif; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?> <!-- two cols right -->
									</div>
								</div>
							<?php endif; ?> <!-- two cols row -->

							<?php if(get_row_layout() == 'three_columns'): ?>
								<div class="full-width">
									<div class="col-3">
										<?php $row_full = get_sub_field('column_1_3'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
											<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
											<?php foreach($cust_accor_rept as $each_accord): ?>
												<div class="full-width">
													<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
													<div class="accordian-content">
														<?php echo $each_accord['custom_accordion_content'] ?>
														<?php if($each_accord['custom_accordion_add_button']): ?>
															<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
														<?php endif; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?> <!-- three cols first -->
									</div>
									<div class="col-3">
										<?php $row_full = get_sub_field('column_2_3'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
											<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
											<?php foreach($cust_accor_rept as $each_accord): ?>
												<div class="full-width">
													<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
													<div class="accordian-content">
														<?php echo $each_accord['custom_accordion_content'] ?>
														<?php if($each_accord['custom_accordion_add_button']): ?>
															<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
														<?php endif; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?> <!-- three cols second -->
									</div>
									<div class="col-3">
										<?php $row_full = get_sub_field('column_3_3'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
											<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
											<?php foreach($cust_accor_rept as $each_accord): ?>
												<div class="full-width">
													<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
													<div class="accordian-content">
														<?php echo $each_accord['custom_accordion_content'] ?>
														<?php if($each_accord['custom_accordion_add_button']): ?>
															<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
														<?php endif; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?> <!-- three cols third -->
									</div>
								</div>
							<?php endif; ?> <!-- three cols row -->

							<?php if(get_row_layout() == 'four_columns'): ?>
								<div class="full-width">
									<div class="col-4">
										<?php $row_full = get_sub_field('column_1_4'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
											<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
											<?php foreach($cust_accor_rept as $each_accord): ?>
												<div class="full-width">
													<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
													<div class="accordian-content">
														<?php echo $each_accord['custom_accordion_content'] ?>
														<?php if($each_accord['custom_accordion_add_button']): ?>
															<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
														<?php endif; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?> <!-- four cols first -->
									</div>
									<div class="col-4">
										<?php $row_full = get_sub_field('column_2_4'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
											<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
											<?php foreach($cust_accor_rept as $each_accord): ?>
												<div class="full-width">
													<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
													<div class="accordian-content">
														<?php echo $each_accord['custom_accordion_content'] ?>
														<?php if($each_accord['custom_accordion_add_button']): ?>
															<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
														<?php endif; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?> <!-- four cols second -->
									</div>
									<div class="col-4">
										<?php $row_full = get_sub_field('column_3_4'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
											<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
											<?php foreach($cust_accor_rept as $each_accord): ?>
												<div class="full-width">
													<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
													<div class="accordian-content">
														<?php echo $each_accord['custom_accordion_content'] ?>
														<?php if($each_accord['custom_accordion_add_button']): ?>
															<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
														<?php endif; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?> <!-- four cols third -->
									</div>
									<div class="col-4">
										<?php $row_full = get_sub_field('column_4_4'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
											<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
											<?php foreach($cust_accor_rept as $each_accord): ?>
												<div class="full-width">
													<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
													<div class="accordian-content">
														<?php echo $each_accord['custom_accordion_content'] ?>
														<?php if($each_accord['custom_accordion_add_button']): ?>
															<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
														<?php endif; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?> <!-- four cols fourth -->
									</div>
								</div>
							<?php endif; ?> <!-- four cols row -->

							<?php if(get_row_layout() == '14_and_34'): ?>
								<div class="full-width one-twothird">
									<div class="one-third">
										<?php $row_full = get_sub_field('column_14_34'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
											<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
											<?php foreach($cust_accor_rept as $each_accord): ?>
												<div class="full-width">
													<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
													<div class="accordian-content">
														<?php echo $each_accord['custom_accordion_content'] ?>
														<?php if($each_accord['custom_accordion_add_button']): ?>
															<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
														<?php endif; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?> <!-- 1/3 cols -->
									</div>
									<div class="two-third">
										<?php $row_full = get_sub_field('column_34_14_34'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
											<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
											<?php foreach($cust_accor_rept as $each_accord): ?>
												<div class="full-width">
													<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
													<div class="accordian-content">
														<?php echo $each_accord['custom_accordion_content'] ?>
														<?php if($each_accord['custom_accordion_add_button']): ?>
															<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
														<?php endif; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?> <!-- 2/3 cols right -->
									</div>
								</div>
							<?php endif; ?> <!-- 1/3 and 2/3 cols row -->

							<?php if(get_row_layout() == '34_and_14'): ?>
								<div class="full-width two-onethird">
									<div class="two-third">
										<?php $row_full = get_sub_field('column_34_14'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
											<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
											<?php foreach($cust_accor_rept as $each_accord): ?>
												<div class="full-width">
													<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
													<div class="accordian-content">
														<?php echo $each_accord['custom_accordion_content'] ?>
														<?php if($each_accord['custom_accordion_add_button']): ?>
															<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
														<?php endif; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?> <!-- 2/3 col -->
									</div>
									<div class="one-third">
										<?php $row_full = get_sub_field('column_14_34_14'); ?>
								<?php if($row_full['custom_content']): ?>
									<div class="full-width">
										<p><?php echo $row_full['custom_content']; ?></p>
									</div>
								<?php endif; ?>	
								<?php if($row_full['custom_add_button']): ?>
									<div class="full-width">
										<a href="<?php echo $row_full['custom_button_link']; ?>" class="but-left more"><?php echo $row_full['custom_button_text'] ?></a>
									</div>
								<?php endif; ?>
								<?php if($row_full['custom_add_accordion']): ?>
									<div class="accordian">
										<h5><?php echo $row_full['custom_main_title']; ?></h5>
											<?php $cust_accor_rept = $row_full['custom_repeater_accordion']; ?>
											<?php foreach($cust_accor_rept as $each_accord): ?>
												<div class="full-width">
													<h2 class="button"><?php echo $each_accord['custom_accordion_title']; ?></h2>
													<div class="accordian-content">
														<?php echo $each_accord['custom_accordion_content'] ?>
														<?php if($each_accord['custom_accordion_add_button']): ?>
															<a href="<?php echo $each_accord['custom_accordion_button_link']; ?>" class="but-left more"><?php echo $each_accord['custom_accordion_button_text']; ?></a>	
														<?php endif; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?> <!-- 1/3 col right -->
									</div>
								</div>
							<?php endif; ?> <!-- 2/3 and 1/3 cols row -->

						<?php endwhile; ?>
					<?php endif; ?>
				</div>

			</div> <!-- with-side-bar -->
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
		</div><!-- container -->

	</section>


	<section class="section-2 light-bg inset-top-shadow">
		<div class="container">
			<h2>Events</h2>
			<?php 
				$args = array(
					'post_type' => 'ptc_events',
					'posts_per_page' =>	9,
					'orderby' 	=> 'rand' 
					);
				$hp_events = new WP_Query($args);
			if ( $hp_events->have_posts() ) : while ( $hp_events->have_posts() ) : $hp_events->the_post(); 
				$association = get_the_terms( get_the_ID(), 'ptc_associations');
                if ( !empty($association)){
                    $term = array_pop($association);
                    $asso_image = get_field('association_images', $term);
                }
                $subjects   = get_the_terms( get_the_ID(), 'ptc_subjects');
                if ( !empty($subjects)){
                    $sub_term = array_pop($subjects);
                    $sub_icon = get_field('subject_kla_icon', $sub_term);
                    $sub_bg_color = get_field('subject_background_color', $sub_term);
                }
                $date = get_field('events_start_date');
                $suburb = get_field('events_location_suburb');
                $date_short = date("j M", strtotime($date));	
                $schools = get_the_terms( get_the_ID(), 'ptc_schools');
            	if ( empty($schools)) :
			?>

				<a href="<?php echo get_permalink(); ?>" class="col-3" style="background-color:<?php echo $sub_bg_color; ?>;">
					<div class="section-2-image" style="background-image: url('<?php echo $sub_icon; ?>');">
                        <span class="date"><?php echo $date_short; ?></span>
                    </div>
                     <div class="section-2-content">
                        <div class="provider">
                            <div class="provider-logo" style="background-image: url('<?php echo $asso_image; ?>');">
                            </div>
                            <div class="provider-title">
                                <h3><?php echo get_the_terms( $hp_events->the_ID(), 'ptc_associations', '')[0]->name; ?></h3>
                            </div>
                        </div>
                        <div class="section-2-title">
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo $suburb; ?></p>
                        </div>
                        <div class="section-2-link">
                            Read More <i class="fa fa-angle-right"></i>
                        </div>
                    </div>
				</a>
			
			<?php endif; endwhile; endif; ?>

			<div class="row">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/ptc_events" class="more but-col-3">See all events</a>
			</div>
		</div>
	</section><!-- section-2 related events-->
	
<section class="light-bg">
	<?php include(TEMPLATEPATH . '/association-slider.php'); ?>
</section>

<?php get_footer(); ?>