			<ul class="footeriamgesnav">
				<li> <a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/test-drive.jpg" alt="">
				</a> </li><!--
			 --><li> <a href="http://co.fiatalertas.com/Home.aspx?mssGUID=67255ecc-dafb-44d9-89c2-395f1a03d9ca">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/fiatalertas.jpg" alt="">
				</a> </li><!--
			 --><li> <a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/lineaatencion.jpg" alt="">
				</a> </li>
			</ul>

			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.bxslider.min.js"></script>

		<script>
			var j = $.noConflict();
			j(function(){
				j('.bxslider').bxSlider({
					minSlides: 5,
  					maxSlides: 5,
			  		slideWidth: 192,
			  		slideMargin: 0,
					adaptiveHeight: true,
					prevSelector: '.vehiculos',
					nextSelector: '.vehiculos'

				});

				j('.bannerindex').bxSlider({
			  		slideMargin: 0,
			  		adaptiveHeight: true,
			  		pagerCustom: 'li'
				});

				j('.footerslider').bxSlider({
					minSlides: 3,
  					maxSlides: 3,
  					slideWidth: 300,
  					adaptiveHeight: true,
  					slideMargin: 20,

				});

			    j('.carrocolores').bxSlider({
					auto: false,
			        autoControls: true,
				  	pagerCustom: '.carrocolores_colores'
				});

				j('.fichatecnicawraper .nav a').click(function (e) {
					e.preventDefault();
					j(this).tab('show');
				});

				j('.clientewraper .nav a').click(function (e) {
					e.preventDefault();
					j(this).tab('show');
				});

			});
			var map;
			var myLatLang = new google.maps.LatLng(<?php  $location = get_field('google_maps'); echo $location['coordinates']; ?>);
			function initialize() {
		  		var mapOptions = {
		    		zoom: 8,
		    		center: myLatLang,
		    		mapTypeId: google.maps.MapTypeId.ROADMAP
		  		};
		  		map = new google.maps.Map(document.getElementById('map-canvas'),
		      	mapOptions);
		      	var marker = new google.maps.Marker({
		     		position: myLatLang,
		      		map: map
		  		});
			};
			google.maps.event.addDomListener(window, 'load', initialize);


		</script>

	</body>

</html> <!-- end page. what a ride! -->
