<?php /* Template Name: COTIZAR VEHIVULO */ ?>

<?php get_header(); ?>
	<!-- BANNER INDEX HEADER -->

	<div class="breadcrumbs"> <?php if(function_exists('bcn_display')) {bcn_display(); }?> </div>
	<!-- SLIDER AUTOMOVILES -->
	<div id="content">

		<div id="inner-content row" class="wrap clearfix">
			<div id="main" class=" first clearfix row" role="main">
			<?php while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<hr>
			<?php endwhile;?>

				<div class="span8">













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

<?php get_footer(); ?>