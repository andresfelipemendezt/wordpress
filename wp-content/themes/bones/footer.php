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


				$('#gallery-2').bxSlider({
					auto: true,
			        autoControls: true,
			        slideSelector: '.gallery dl',
				  	pagerCustom: '#gallery-3'
				});
				$('.nav a').click(function (e) {
				  e.preventDefault();
				  $(this).tab('show');
				})
		</script>
	</body>

</html> <!-- end page. what a ride! -->
