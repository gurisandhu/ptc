<?php 
get_header();
 ?>

	<section class="inner-page">
		<div class="container">
			<?php include (TEMPLATEPATH . '/bread-crumb.php'); ?>
			<div class="row">
				<div class="two-third">
					<h1>About</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus nemo voluptatum sint nesciunt adipisci dolore. Enim, est, doloremque. Deleniti harum, omnis eligendi nam, mollitia labore odit dolorum saepe molestias voluptatibus.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit deserunt odio totam mollitia accusantium temporibus ratione rerum culpa quasi porro incidunt eum, nulla hic, earum enim possimus exercitationem pariatur, blanditiis.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus nemo voluptatum sint nesciunt adipisci dolore. Enim, est, doloremque. Deleniti harum, omnis eligendi nam, mollitia labore odit dolorum saepe molestias voluptatibus.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit deserunt odio totam mollitia accusantium temporibus ratione rerum culpa quasi porro incidunt eum, nulla hic, earum enim possimus exercitationem pariatur, blanditiis.</p>
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In sint nihil, maxime, omnis eaque magni aliquam. Harum, tenetur blanditiis commodi accusamus. Doloremque repellendus quasi pariatur quaerat laboriosam itaque unde, dolor.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima facilis vero eaque nulla deleniti aliquid ducimus quae vel, commodi odio sed ex repellat, repudiandae eligendi perspiciatis accusamus delectus quidem. Exercitationem.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae nulla, eveniet veritatis reiciendis laudantium. Eos illum non veniam minima amet enim quo consectetur, quaerat expedita accusamus libero, facilis ullam corrupti.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eligendi ipsam perspiciatis deleniti quas, adipisci officia, ratione maiores, error labore reiciendis temporibus modi. Iure, quibusdam, atque ratione possimus animi illum.</li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde tenetur asperiores cum suscipit possimus illo delectus nihil error, nobis. Culpa ipsum eaque sapiente. Ut obcaecati laboriosam minus nisi magni, asperiores.</p>
				</div>
				<div class="one-third">
					<div class="widget">
						<h5>About Plus</h5>
						<ul class="page-menu">
							<li><a href="#">Overview</a></li>
							<li><a href="#">Members and Affiliates</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Government Memorandum</a></li>
							<li><a href="#">Board Info</a></li>
							<li><a href="#">Students</a></li>
							<li><a href="#">Downloads</a></li>
							<li><a href="#">Resources</a></li>
							<li><a href="#">Awards</a></li>
						</ul>
					</div>
					<div class="widget">
						<h5>Latest News</h5>
						<ul class="news">
							<?php 
								function trimText($string, $repl, $limit){
									if(strlen($string) > $limit){
										return substr($string, 0, $limit) . $repl;
									}
									else{
										return $string;
									}
								}
								$eventTitle = "Professional teacher's associations deliver the greatest number and variety of professional learning";
								$trimedTitle = trimText($eventTitle, "...", 43);
							 ?>
							<li>
								<a href="#">
									<div class="news-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news.jpg');"><!-- image in style --></div>
									<div class="news-content">
										<div class="table-cell">
											<span>Thursday, 8 September 2016</span><h4><?php echo $trimedTitle; ?></h4>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="news-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news.jpg');"><!-- image in style --></div>
									<div class="news-content">
										<div class="table-cell">
											<span>Thursday, 8 September 2016</span><h4><?php echo $trimedTitle; ?></h4>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="news-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news.jpg');"><!-- image in style --></div>
									<div class="news-content">
										<div class="table-cell">
											<span>Thursday, 8 September 2016</span><h4><?php echo $trimedTitle; ?></h4>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="news-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news.jpg');"><!-- image in style --></div>
									<div class="news-content">
										<div class="table-cell">
											<span>Thursday, 8 September 2016</span><h4><?php echo $trimedTitle; ?></h4>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="news-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news.jpg');"><!-- image in style --></div>
									<div class="news-content">
										<div class="table-cell">
											<span>Thursday, 8 September 2016</span><h4><?php echo $trimedTitle; ?></h4>
										</div>
									</div>
								</a>
							</li>
						</ul>
						
						
						<a href="" class="but-full blue more">Read more news</a>
					</div>

					<div class="widget scale-bg">
						<h5>Join PTC Plus</h5>
						<div class="row">
							<img src="<?php echo get_template_directory_uri(); ?>/images/ad.jpg" alt="Advertise by PTC" title="PTC Plus">
						</div>
					</div>
				</div> <!-- one-third -->
			</div>	
		</div><!-- container -->
	</section>

	<section class="section-2 light-bg inset-top-shadow">
		<div class="container">
			<h2> Realated Events</h2>
			<a href="#" class="col-3">
				<div class="section-2-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/course.png');">
					<span class="date">12 Jul</span>
				</div>
				<div class="section-2-content">
					<div class="provider">
						<div class="provider-logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/course-sub.jpg');">
							
						</div>
						<div class="provider-title">
							<h3>Kodály Music Education Institute Aust NSW</h3>
						</div>
					</div>
					<div class="section-2-title">
						<h4>Building units of work through global education and cooperative learning and interdisciplinary approach to planning</h4>
						<p>Hornsby</p>
					</div>
					<div class="section-2-link">
						Read More <i class="fa fa-angle-right"></i>
					</div>
				</div>
			</a>

			<a href="#" class="col-3">
				<div class="section-2-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/course.png');">
					<span class="date">12 Jul</span>
				</div>
				<div class="section-2-content">
					<div class="provider">
						<div class="provider-logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/course-sub.jpg');">
							
						</div>
						<div class="provider-title">
							<h3>Kodály Music Education Institute Aust NSW</h3>
						</div>
					</div>
					<div class="section-2-title">
						<h4>Primary Levels 1 &amp; 2 Winter Scholl</h4>
						<p>Hornsby</p>
					</div>
					<div class="section-2-link">
						Read More <i class="fa fa-angle-right"></i>
					</div>
				</div>
			</a>

			<a href="#" class="col-3">
				<div class="section-2-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/course.png');">
					<span class="date">12 Jul</span>
				</div>
				<div class="section-2-content">
					<div class="provider">
						<div class="provider-logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/course-sub.jpg');">
							
						</div>
						<div class="provider-title">
							<h3>Kodály Music Education Institute Aust NSW</h3>
						</div>
					</div>
					<div class="section-2-title">
						<h4>Primary Levels 1 &amp; 2 Winter Scholl</h4>
						<p>Hornsby</p>
					</div>
					<div class="section-2-link">
						Read More <i class="fa fa-angle-right"></i>
					</div>
				</div>
			</a>

			<div class="row">
				<a href="#" class="more but-col-3">See All events</a>
			</div>
		</div>
	</section><!-- section-2 related events-->
	
	<!-- <section class="light-bg">
		
	</section> -->

<?php get_footer(); ?>