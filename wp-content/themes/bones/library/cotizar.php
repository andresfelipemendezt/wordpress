<?php /* Template Name: COTIZAR VEHIVULO */ ?>

<?php get_header(); ?>
	<!-- BANNER INDEX HEADER -->


	<!-- SLIDER AUTOMOVILES -->
	<div id="content">

		<div id="inner-content" class="wrap clearfix">

			<div id="main" class=" first clearfix row" role="main">

				<div class="span6">

					<?php $my_query = new WP_Query('post_type=vehiculos'); ?>
					<select name="" id="">
						<?php while ($my_query->have_posts()) : $my_query->the_post() ?>
							<option value="">
								<?php the_title(); ?>
							</option>
						<?php endwhile; ?>
					</select>

					<?php while (have_posts()) : the_post(); ?>
						<div class="indexcontent">
							<?php the_content(); ?>
						</div>
					<?php endwhile;?>

				</div>
				<div class="span4">
					<?php while ($my_query->have_posts()) : $my_query->the_post() ?>
						Value: <p><?php the_field('preciovehiculo'); ?></p>
					<?php endwhile; ?>
				</div>

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