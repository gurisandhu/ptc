<?php include (TEMPLATEPATH . 'associations.php'); ?>
<footer>
	<div class="table-cell">
		<div class="container">
			<div class="row common-p-t-b">
				<button type="button" id="scroll-top" class="more sky but-2-col-3">Back to top</button>
			</div>
			<div class="row">
				<p><b>The Professional Teachers' Council NSW (PTCNSW)</b></p>
			</div>
			
			<div class="row">
				<div class="two-third">
					<div class="col-3">
						<ul class="footer-widget">
							<li><a href="tel:(02) 9716 0378">P (02) 9716 0378</a></li>
							<li>F (02) 9716 0378</li>
							<li><a href="mailto:admin@ptc.nsw.edu.au">E admin@ptc.nsw.edu.au</a></li>
							<li>&nbsp;</li>
							<li><b>Mailing Address</b></li>
							<li>PO Box 699</li>
							<li>Lidcombe NSW 1825</li>
						</ul>
					</div>
					<div class="col-3">
						<ul class="footer-widget">
							<li><b>Office Location</b></li>
							<li>COS Building</li>
							<li>Lower Ground Floor</li>
							<li>Entry via COS carpark</li>
							<li><a href="https://map.google.com/?q=PTC" target="_blank">25 Nyrang Street <br> Lidcombe NSW 2141</a></li>
						</ul>
					</div>
					<div class="col-3">
						<ul class="footer-widget footer-menu">
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Resources</a></li>
							<li><a href="#">Awards</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="one-third">
					<ul class="social">
						<li><a href="#" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
					</ul>
					
					<ul class="site-map">
						<li><a href="#">Site Map</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Accessibility</a></li>
					</ul>
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