<?php /* Template Name: GARANTIA */ ?>

<?php get_header(); ?>
	<div class="breadcrumbswraper">
		<div class="breadcrumbs">
			<?php if(function_exists('bcn_display')) {bcn_display(); }?>
		</div>
	</div>
	<div id="content">

		<div id="inner-content" class="wrap clearfix">

			<?php while (have_posts()) : the_post(); ?>
			<div id="main" class=" first clearfix row" role="main">

				<div class="row">

					<div class="span8">

						<h1 class="title"> <?php the_title(); ?> </h1>

						<?php the_content(); ?>

						<div class="row">

							<div class="span2">
								<img src="<?php the_field('logo'); ?>" alt="">
							</div>
							<div class="span6 sidebar">
								<?php the_field('ofrece'); ?>
							</div>
						</div>
						<?php the_field('fiat_ofrece'); ?>

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

			</div> <!-- end #main -->
			<?php endwhile;?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>