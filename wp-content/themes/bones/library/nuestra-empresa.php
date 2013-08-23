<?php /* Template Name: NUESTRA EMPRESA*/ ?>

<?php get_header(); ?>
	<div class="breadcrumbs"> <?php if(function_exists('bcn_display')) {bcn_display(); }?> </div>
	<div id="content">

		<div id="inner-content" class="wrap clearfix">

			<?php while (have_posts()) : the_post(); ?>
			<div id="main" class=" first clearfix row" role="main">
					<h1><?php the_title(); ?></h1>
					<div class="row">
						<div class="span4">
							<img src="<?php the_field('imagen_nuestra_empresa')?> " alt="">
						</div>
						<div class="span8 quote nuestraempresa">
							<?php the_content(); ?>
						</div>
					</div>
					<div class="row">
						<div class="span6 quote blockquote">
							<hr>
							<?php the_field('cita'); ?>
							<hr>
						</div>
						<div class="span6">
							<!-- <div class="row"> -->
								<h2>MISIÓN</h2>
								<hr>
								<?php the_field('mision'); ?>
							<!-- </div> -->
							<!-- <div class="row"> -->
								<h2>VISIÓN</h2>
								<hr>
								<?php the_field('vision'); ?>
							<!-- </div> -->
						</div>
					</div>

			</div> <!-- end #main -->
			<?php endwhile;?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>