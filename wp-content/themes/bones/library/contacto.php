<?php /* Template Name: CONTACTO */ ?>

<?php get_header(); ?>
	<div class="breadcrumbs"> <?php if(function_exists('bcn_display')) {bcn_display(); }?> </div>
	<div id="content">

		<div id="inner-content" class="wrap clearfix">

			<?php while (have_posts()) : the_post(); ?>
			<div id="main" class=" first clearfix row" role="main">

				<div class="span8">
					<?php the_title(); ?>
					<?php the_content(); ?>
					<hr>
				 	<h1>Información personal</h1>
				 	<div class="row">

						<?php echo do_shortcode ('[contact-form-7 id="461" title="Contacto"]'); ?>
				 	</div>
				</div>

				<div class="span4 sidebar">
					<h3>NUESTRA SEDE EN CALI</h3>
					<hr>
					<?php the_field('direccion'); ?>
					<p class="rojo">
						<?php the_field('telefono'); ?>
					</p>
					<?php the_field('callcenter'); ?>
					<div id="map-canvas"></div>
				</div>

			</div> <!-- end #main -->
			<?php endwhile;?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>