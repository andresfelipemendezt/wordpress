<?php /* Template Name: SEDES */ ?>

<?php get_header(); ?>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false">
				</script>

	<div id="content">

		<div id="inner-content" class="wrap clearfix">
			<div class="breadcrumbs">
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
			</div>
			<div id="main" class=" first clearfix" role="main">
			<div class="sedesmap">

			<div id="map-canvas"></div>
			</div>
			</div> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

	<?php
	$images = get_field('footerslider');
	if( $images ): ?>
		<ul class="footerslider">
			<?php foreach( $images as $image): ?>
				<li>
					<img src=" <?php echo $image['url']; ?> " alt="">
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

<?php get_footer(); ?>