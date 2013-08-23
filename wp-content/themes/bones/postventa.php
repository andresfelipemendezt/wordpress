<?php /* Template Name: POSTVENTA */ ?>

<?php get_header(); ?>
	<div class="breadcrumbs"> <?php if(function_exists('bcn_display')) {bcn_display(); }?> </div>
	<div id="content">

		<div id="inner-content" class="wrap clearfix">

			<div id="main" class=" first clearfix row" role="main">
				<?php while (have_posts()) : the_post(); ?>
				<div class="row">
					<div class="span8">

						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>

						<div class="forumariopostventa">
							<?php echo do_shortcode('[contact-form-7 id="424" title="Formulario de contacto 1"]');  ?>
						</div>

					</div>

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
				</div>
					<div class="row">
						<div class="span12">
							<h1>Clínica de servicios</h1>
							<hr>
						</div>
					</div>
				<div class="row clinicaservicios">
					<div class="span8">
						<!-- Clinica servicios -->
						<?php
						 $images = get_field('galeria');
						 if( $images ): ?>
						 <ul class="galeriaservicios"><!--
							<?php foreach( $images as $image): ?>
							 --><li>
									<img src=" <?php echo $image['url']; ?> " alt="">
								</li><!--
							<?php endforeach; ?>
					 --></ul>
						<?php endif; ?> <!-- end servicios -->
					</div>
					<div class="span4 sidebar quotation">
						<?php the_field('quote') ?>
					</div>
				</div>
				<?php endwhile;?>

			</div> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>