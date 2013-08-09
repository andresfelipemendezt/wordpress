			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
							<?php bones_footer_links(); ?>
									</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.bxslider.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/bootstrap.min.js"></script>
		<script>

				$(function(){

					$('#gallery-3').data('large');

					var cantidaddl;

					$('#gallery-3').filter(function(){
						cantidaddl = $(this).children("dl").length;
					});

					console.log(cantidaddl);


					for (var i = 0; i < cantidaddl; i++) {

						console.log(i);

						$('#gallery-3 dl:nth-child('+i+') a').attr("data-slider-index" , i );
						$('#gallery-3 dl:nth-child('+i+') a').addClass('bx-pager-link');

					};

					console.log($("#gallery-3 dl:nth-child(3) a").html());
					$('')
				});


				$('.carrocolores').bxSlider({
					auto: false,
			        autoControls: true,
			        // slideSelector: 'dl',
				  	pagerCustom: '.carrocolores_colores'
				});

				$('.nav a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				});

		</script>
		<style>
			a[data-slider-index='5']{background: #f5f; }
			a[data-slider-index='6']{background: #50f; }
			a[data-slider-index='7']{background: #00f; }
			a[data-slider-index='9']{background: #f50; }
		</style>
	</body>

</html> <!-- end page. what a ride! -->
