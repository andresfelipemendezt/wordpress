		<div class="footeriamgesnav">
			<ul>
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
		</div>

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
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/bootstrap-lightbox.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.bxslider.min.js"></script>

	<script>
		var j = $.noConflict();
		j(function(){
			j('#demoLightbox').lightbox();
			j('.bxslider').bxSlider({
				minSlides: 5,
					maxSlides: 5,
		  		slideWidth: 192,
		  		slideMargin: 0,
				adaptiveHeight: true,
				prevSelector: '.vehiculos',
				nextSelector: '.vehiculos'
			});

			j('.equipamiento').bxSlider({
		  		slideSelector: '.slide',
		  		pager: false,
		  		sliderWidth:300
			});

			j('.bannerindex').bxSlider({
		  		adaptiveHeight: true,
		  		pager: false
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
				speed: 1,
				controls: false,
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
			j('#scrollspy').scrollspy();
			j("#toTop").click(function () {
				j("html, body").animate({scrollTop: 0}, 1000);
			});

			var length = j('ul.galeria a').length;
			for (var i = 1; i < length+1; i++) {
				var contenedor = j('ul.galeria a:nth-child('+i+')'),
					imagen  = contenedor.children('img'),
					width   = imagen.width(),
					height  = imagen.height(),
					iratio  = width/height,
					cwidth  = contenedor.width(),
					cheigth = contenedor.height(),
					cratio  = cwidth/cheigth;

					console.log(cratio);
					console.log(iratio);

					if ( cratio < iratio ) {
						imagen.addClass('ancho');
						mitad = imagen.width()/-2;
						imagen.css('margin-left', mitad+'px')
					} else {
						imagen.addClass('alto');
						mitad = imagen.height()/-2;
						imagen.css('margin-top', mitad+'px')
					};
			};

		});
		<?php if($value = get_post_meta($post->ID, "google_maps", true)): ?>
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
		<?php endif; ?>

	</script>

	</body>

</html> <!-- end page. what a ride! -->



<div id="demoLightbox" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="lightbox-content" style="width: 998px; height: 662px;">
				<img src="assets/img/large.png">
				<div class="lightbox-caption"><p>Your caption here</p></div>
			</div>
