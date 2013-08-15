<?php /* Template Name: POSTVENTA */ ?>

<?php get_header(); ?>
	<!-- BANNER INDEX HEADER -->


	<!-- SLIDER AUTOMOVILES -->
	<div id="content">

		<div id="inner-content" class="wrap clearfix">

			<div id="main" class=" first clearfix row" role="main">
				<?php while (have_posts()) : the_post(); ?>

				<div class="span8">

					<?php the_title(); ?>
					<?php the_content(); ?>

					<div class="forumariopostventa">
						<?php echo do_shortcode('[contact-form-7 id="424" title="Formulario de contacto 1"]');  ?>
					</div>

				</div>

				<div class="span4 sidebar">

					<?php the_field('direccion'); ?>
					<?php the_field('telefono'); ?>
					<?php the_field('callcenter'); ?>

				</div>

				<?php endwhile;?>

			</div> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

		<ul class="footeriamgesnav">
			<li> <a href="">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/test-drive.jpg" alt="">
			</a> </li><!--
		 --><li> <a href="http://co.fiatalertas.com/Home.aspx?mssGUID=67255ecc-dafb-44d9-89c2-395f1a03d9ca">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/fiatalertas.jpg" alt="">
			</a> </li><!--
		 --><li> <a href="">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/lineaatencion.jpg" alt="">
			</a> </li>
		</ul>

<?php get_footer(); ?>