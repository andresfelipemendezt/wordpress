<?php /* Template Name: CONTACTO */ ?>

<?php get_header(); ?>
	<div class="breadcrumbs"> <?php if(function_exists('bcn_display')) {bcn_display(); }?> </div>
	<div id="content">

		<div id="inner-content" class="wrap clearfix">

			<?php while (have_posts()) : the_post(); ?>
			<div id="main" class=" first clearfix row" role="main">

				<div class="span8">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<hr>
					<h1>Información personal</h1>
					<div class="">
						<?php echo do_shortcode ('[contact-form-7 id="461" title="Contacto"]'); ?>
					</div>
				</div>

<link rel="stylesheet" href="../static/stylesheets/bootstrap-switch.css" />
 <script src="../static/js/bootstrap-switch.js"></script>


				<div class="span4 sidebar">
					<h3>NUESTRA SEDE EN CALI</h3>
					<hr>
					<div class="direccion">
						<?php the_field('direccion'); ?>
					</div>
					<div class="telefono">
						<?php the_field('telefono'); ?>
					</div>
					<div class="callcenter">
						<?php the_field('callcenter'); ?>
					</div>
					<div class="nuestrasede">
						<div id="map-canvas"></div>
					</div>
				</div>

			</div> <!-- end #main -->
			<?php endwhile;?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>