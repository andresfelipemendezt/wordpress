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

		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/bootstrap.min.js"></script>
		<script>

			var j = $.noConflict();
			j(function(){

			    j('.carrocolores').bxSlider({
					auto: false,
			        autoControls: true,
				  	pagerCustom: '.carrocolores_colores'
				});

				j('.fichatecnicawraper .nav a').click(function (e) {
					e.preventDefault();
					j(this).tab('show');
				});
			});

		</script>

	</body>

</html> <!-- end page. what a ride! -->
