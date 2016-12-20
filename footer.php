<?php include (TEMPLATEPATH . 'associations.php'); ?>
<footer>
	<div class="table-cell">
		<div class="container">
			<div class="row common-p-t-b">
				<button type="button" id="scroll-top" class="more sky but-2-col-3">Back to top</button>
			</div>
			<div class="row">
				<?php if (get_field('footer_widget_title', 'option')) : ?>
				<p><b><?php echo get_field('footer_widget_title', 'option'); ?></b></p>
				<?php endif; ?>
			</div>
			
			<div class="row">
				<div class="two-third">
					<div class="col-3">
						<ul class="footer-widget">
							<?php if (get_field('footer_widget_phone', 'option')): ?>
								<li><a href="tel:<?php echo get_field('footer_widget_phone', 'option'); ?>">P <?php echo get_field('footer_widget_phone', 'option'); ?></a></li>
							<?php endif; ?>
							<?php if (get_field('footer_widget_fax', 'option')): ?>
								<li>F <?php echo get_field('footer_widget_fax', 'option'); ?></li>
							<?php endif; ?>
							<?php if (get_field('footer_widget_email', 'option')): ?>
								<li><a href="mailto:<?php echo get_field('footer_widget_email', 'option'); ?>">E <?php echo get_field('footer_widget_email', 'option'); ?></a></li>
							<?php endif; ?>
							<li>&nbsp;</li>
							<li><b>Mailing Address</b></li>
							<?php if (get_field('footer_widget_po_box', 'option')): ?>
								<li>PO Box <?php echo get_field('footer_widget_po_box', 'option'); ?></li>
								<li>F <?php echo get_field('footer_widget_suburb', 'option'); ?></li>
							<?php endif; ?>
						</ul>
					</div>
					<?php if (get_field('footer_widget_2_suburb', 'option')): ?>
						<div class="col-3">
							<ul class="footer-widget">
								<li><b>Office Location</b></li>
								<li><?php echo get_field('footer_widget_2_building_address', 'option'); ?></li>
								<li><?php echo get_field('footer_widget_2_extra_notes', 'option'); ?></li>
								<li><?php echo get_field('footer_widget_2_street_address', 'option'); ?></li>
								<li><a target="_blank" href="https://map.google.com/?q=<?php echo get_field('footer_widget_2_street_address_2', 'option'); ?> <?php echo get_field('footer_widget_2_suburb', 'option'); ?>"><?php echo get_field('footer_widget_2_street_address_2', 'option'); ?><br /> <?php echo get_field('footer_widget_2_suburb', 'option'); ?></a></li>
							</ul>
						</div>
					<?php endif; ?>
					<?php $footer_widget_menu = get_field('footer_widget_3_menu', 'option'); ?>
					<?php if ($footer_widget_menu) : ?>
						<div class="col-3">
							<ul class="footer-widget footer-menu">
								<?php foreach( $footer_widget_menu as $post): setup_postdata($post); ?>
									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								<?php  endforeach; ?>
							</ul>
						</div>
					<?php wp_reset_postdata(); endif; ?>
				</div>
				<div class="one-third">
					<?php 
						if (have_rows('footer_widget_4_social_media', 'option')) :
					?>
						<ul class="social">
							<?php while (have_rows('footer_widget_4_social_media', 'option')) : the_row() ;  ?>
								<?php if (get_sub_field('footer_widget_4_media_type', 'option') == "Facebook") : ?>
									<li><a href="<?php the_sub_field('footer_widget_4_media_link', 'option'); ?>" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
								<?php elseif (get_sub_field('footer_widget_4_media_type', 'option') == "Linkedin") : ?>
									<li><a href="<?php the_sub_field('footer_widget_4_media_link', 'option'); ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
								<?php elseif (get_sub_field('footer_widget_4_media_type', 'option') == "Twitter") : ?>
									<li><a href="<?php the_sub_field('footer_widget_4_media_link', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<?php elseif (get_sub_field('footer_widget_4_media_type', 'option') == "Google Plus") : ?>
									<li><a href="<?php the_sub_field('footer_widget_4_media_link', 'option'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<?php elseif (get_sub_field('footer_widget_4_media_type', 'option') == "Youtube") : ?>
									<li><a href="<?php the_sub_field('footer_widget_4_media_link', 'option'); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a></li>		
								<?php endif; ?>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>

					<?php $footer_widget_4_menu = get_field('footer_widget_4_footer_menu', 'option') ; ?>

					<?php if ($footer_widget_4_menu) : ?>
					<div class="row">
						<ul class="site-map">
							<?php foreach ( $footer_widget_4_menu as $post): setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php endforeach; ?>
							<li><a href="http://www.sailorstudio.com.au" target="_blank">Website by Sailor Studio</a></li>
						</ul>
					</div>	
					<?php endif; ?>
					<span>Copyright &copy; <?php date_default_timezone_set("Australia/Sydney"); echo date("Y"); ?> PTC NSW. All Rights Reserved.</span>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="hide-body show-loader"></div>
</body>
</html>

<?php wp_footer(); ?>