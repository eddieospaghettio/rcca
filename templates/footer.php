<footer class="content-info">
	<div class="container top-container">
		<div class="col-lg-12"><h2>Locations</h2></div>
		<div class="col-lg-3 col-md-6 col-sm-12">
			<span class="location-title">East Brunswick</span>
			<p>Brier Hill Court, Building J2<br>
			East Brunswick, NJ 08816<br>
			Phone: (732) 390-7750<br>
			Fax: (732) 390-7725
			</p>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12">
			<span class="location-title">Somerset</span>
			<p>454 Elizabeth Avenue<br>
			Suite 240<br>
			Somerset, NJ 08873<br>
			Phone: (732) 390-7750<br>
			Fax: (732) 390-7725
			</p>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12">
			<span class="location-title">Edison</span>
			<p>34-36 Progress Street<br>
			Suite B-2<br>
			Edison, NJ 08820<br>
			Phone: (908) 757-9696<br>
			Fax: (908) 757-9721
			</p>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12">
			<span class="location-title">Somerville</span>
			<p>Steeplechase Cancer Center<br>
			30 Rehill Avenue<br>
			Somerville, NJ 08876<br>
			Phone: (908) 927-8700<br>
			Fax: (908) 927-8706
			</p>
		</div>
	</div>

	<div class="footer-nav">
			<?php
			if (has_nav_menu('footer_navigation')) :
				wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-nav']);
			endif;
			?>
			
		</div>
	</div>

	<div id="footer-bottom">
		<div class="container bottom-container"> 
			<div id="find-us-online">
				<div id="footer-social">
					<a id="facebook" href="https://www.facebook.com/cjoncology/?fref=ts" title="Connect with us on Facebook" target="_blank">Facebook</a> <a id="twitter" href="https://twitter.com/CJ_Oncology" title="Follow us on Twitter" target="_blank">Twitter</a>
					<a id="youtube" href="#" title="Visit our Youtube channel" target="_blank">Youtube</a>
					<a id="googleplus" href="#" title="Connect with us on Google+" target="_blank">Google+</a><a id="linkedin" href="#" title="Find us on LinkedIn" target="_blank">LinkedIn</a>
				</div>
			</div>
			<p class="copyright">
				© <?php echo date('Y'); ?>  Regional Cancer Care Associates, LLC–Central Jersey Division. All rights reserved.
			</p>
		</div>
	</div>
</footer>