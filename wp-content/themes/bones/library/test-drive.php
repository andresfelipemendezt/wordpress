<?php /* Template Name: TEST DRIVE */ ?>
<?php get_header(); ?>
	<div class="breadcrumbs"> <?php if(function_exists('bcn_display')) {bcn_display(); }?> </div>
	<div id="content">
		<div id="inner-content" class="wrap clearfix">
			<?php while (have_posts()) : the_post(); ?>
			<div id="main" class=" first clearfix" role="main">
				<?php the_title(); ?>
				<div class="row">
					<div class="span8">
						<?php the_content(); ?>

						<?php echo do_shortcode('[contact-form-7 id="452" title="Test drive"]');  ?>

					</div>
					<div class="span4 aside">
						<h1>HORARIO DE ATENCION</h1>
						<?php the_field('dias'); ?>
						<div class="asidemapwraper">
							<div id="map-canvas"></div>
						</div>
					</div>
				</div>
			</div> <!-- end #main -->
			<?php endwhile;?>
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php get_footer(); ?>
