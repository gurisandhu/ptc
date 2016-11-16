<?php 
/*
* Template Name: Front Page
*/
get_header();
 ?>


	<section class="home-banner">
		<div class="slider home-slider">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home-banner.jpg');">
						<div class="blue-shadow">
							<div class="container">
								<h1>Support And Services to Teachers' Associations in New South Wales</h1>
							</div>
						</div>
					</div>
					<div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home-banner.jpg');">
						<div class="blue-shadow">
							<div class="container">
								<h1>Support to Teachers' Associations in New South Wales</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- slider -->
		<div class="home-page-menu">
			<ul>
				<li><a href="#">
					<div class="menu-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/members-off.svg" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/members-on.svg" alt="">
					</div>
					<span>Member Associations</span>
				</a></li>
				<li><a href="#">
					<div class="menu-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/course-off.svg" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/course-on.svg" alt="">
					</div>
					<span>Full course List</span>
				</a></li>
				<li><a href="#">
					<div class="menu-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/resources-off.svg" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/resources-on.svg" alt="">
					</div>
					<span>Teaching Resources</span>
				</a></li>
				<li><a href="#">
					<div class="menu-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/awards-off.svg" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/awards-on.svg" alt="">
					</div>
					<span>Awards</span>
				</a></li>
			</ul>
		</div>
	</section>

	<section class="section-2">
		<div class="container">
			<form action="" class="row">
				<ul class="filters row">
					<li>
						<select name="association" id="">
							<option value="">Association</option>
							<option value="company-1">Company 1</option>
							<option value="company-2">Company 2</option>
							<option value="company-3">Company 3</option>
						</select>
					</li>
					<li>
						<select name="subject" id="">
							<option value="">Subject</option>
							<option value="company-1">Subject 1</option>
							<option value="company-2">Subject 2</option>
							<option value="company-3">Subject 3</option>
						</select>
					</li>
					<li>
						<select name="level" id="">
							<option value="">Level</option>
							<option value="company-1">Level 1</option>
							<option value="company-2">Level 2</option>
							<option value="company-3">Level 3</option>
						</select>
					</li>
					<li>
						<select name="region" id="">
							<option value="">Region</option>
							<option value="company-1">Region 1</option>
							<option value="company-2">Region 2</option>
							<option value="company-3">Region 3</option>
						</select>
					</li>
					<li>
						<input class="more" type="submit" value="search">
					</li>
				</ul>
			</form>
			<h2>Events</h2>
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
						<h4>Primary Levels 1 &amp; 2 Winter Scholl Primary Levels 1 &amp; 2 Winter Scholl </h4>
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
				<a href="#" class="more but-col-3">See More</a>
			</div>
		</div>
	</section><!-- section-2 -->

	<section class="section-3">
		<div class="container">
			<div class="two-third">
				<h2>Latest News</h2>
				<ul class="news">
					<li>
						<a href="#">
							<div class="news-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news.jpg');"><!-- image in style --></div>
							<div class="news-content">
								<div class="table-cell">
									<span>Thursday, 8 September 2016</span><h4>Professional teacher's associations deliver the greatest number and variety of professional learning</h4>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="news-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news.jpg');"><!-- image in style --></div>
							<div class="news-content">
								<div class="table-cell">
									<span>Thursday, 8 September 2016</span><h4>Professional teacher's associations deliver the greatest number and variety of professional learning</h4>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="news-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news.jpg');"><!-- image in style --></div>
							<div class="news-content">
								<div class="table-cell">
									<span>Thursday, 8 September 2016</span><h4>Professional teacher's associations deliver the greatest number and variety of professional learning</h4>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="news-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news.jpg');"><!-- image in style --></div>
							<div class="news-content">
								<div class="table-cell">
									<span>Thursday, 8 September 2016</span><h4>Professional teacher's associations deliver the greatest number and variety of professional learning</h4>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="news-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news.jpg');"><!-- image in style --></div>
							<div class="news-content">
								<div class="table-cell">
									<span>Thursday, 8 September 2016</span><h4>Professional teacher's associations deliver the greatest number and variety of professional learning</h4>
								</div>
							</div>
						</a>
					</li>
				</ul>
				<div class="row">
					<a href="#" class="more but-col-3">Read more news</a>
				</div>
			</div>
			<a href="#" class="one-third scale-bg">
				<h2>Join PTC Plus</h2>
				<div class="row">
					<img src="<?php echo get_template_directory_uri(); ?>/images/ad.jpg" alt="Advertise by PTC" title="PTC Plus">
				</div>
			</a>
		</div>
	</section><!-- section-3 -->
	
<?php get_footer(); ?>