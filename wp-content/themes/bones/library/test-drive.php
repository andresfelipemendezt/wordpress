<?php /* Template Name: TEST DRIVE */ ?>
<?php get_header(); ?>
	<div class="breadcrumbs"> <?php if(function_exists('bcn_display')) {bcn_display(); }?> </div>
	<div id="content">
		<div id="inner-content" class="wrap clearfix">
			<?php while (have_posts()) : the_post(); ?>
			<div id="main" class=" first clearfix" role="main">
				<h1><?php the_title(); ?></h1>
				<div class="row">
					<div class="span8">
						<?php the_content(); ?>
						<?php echo do_shortcode('[contact-form-7 id="452" title="Test drive"]');  ?>
					</div>
					<div class="span4 sidebar">
						<h1>HORARIO DE ATENCION</h1>
						<hr>
						<div class="dias">
							<?php the_field('dias'); ?>
						</div>
						<div class="nuestrasede">
							<div id="map-canvas"></div>
						</div>
					</div>
				</div>
			</div> <!-- end #main -->
			<?php endwhile;?>
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php get_footer(); ?>
