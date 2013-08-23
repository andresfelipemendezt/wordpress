<?php /* Template Name: SEDES */ ?>

<?php get_header(); ?>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false">
				</script>

			<div class="breadcrumbs"> <?php if(function_exists('bcn_display')) {bcn_display(); }?> </div>
	<div id="content">

		<div id="inner-content" class="wrap clearfix">
			<?php while (have_posts()) : the_post(); ?>
			<div id="main" class=" first clearfix" role="main">
			<h1><?php the_title(); ?></h1>
			<div class="sedesmap">
				<div id="map-canvas"></div>
			</div>
			</div> <!-- end #main -->
		<?php endwhile;?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>

21