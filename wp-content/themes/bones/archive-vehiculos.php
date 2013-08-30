<?php get_header(); ?>
<?php $my_query = new WP_Query('post_type=vehiculos'); ?>
<?php $query_automovil = new WP_Query('Tipo-de-vehiculo=automovil'); ?>
<?php $query_utilitarios = new WP_Query('Tipo-de-vehiculo=utilitarios'); ?>
<?php $query_taxi = new WP_Query('Tipo-de-vehiculo=taxis'); ?>
	<div id="content">
		<div id="inner-content" class="wrap clearfix">
			<div id="main" class="row" role="main">
				<div class="span3 sidebar listcars">
					<?php while ($my_query->have_posts()) : $my_query->the_post() ?>
						<a href="<?php the_permalink() ?>">
							<?php the_title(); ?>
						</a>
					<?php endwhile; ?>
				</div>
				<div class="span9 archive">
					<h1>Automoviles</h1>
					<div class="automoviles"><!--

					<?php while ($query_automovil->have_posts()) : $query_automovil->the_post() ?>

					 --><div class="thumb">
							<a class="archive" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>
							<a href="<?php the_permalink() ?>">
								<h2> <?php the_title(); ?></h2>
							</a>
						</div><!--

					<?php endwhile; ?>

					--></div>

					<h1>Utillitarios</h1>
					<div class="automoviles"><!--

					<?php while ($query_utilitarios->have_posts()) : $query_utilitarios->the_post() ?>

					 --><div class="thumb">
							<a class="archive" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>
							<a href="<?php the_permalink() ?>">
								<h2><?php the_title(); ?></h2>
							</a>
						</div><!--

					<?php endwhile; ?>

					--></div>

					<h1>Taxis</h1>
					<div class="automoviles"><!--

					<?php while ($query_taxi->have_posts()) : $query_taxi->the_post() ?>

					 --><div class="thumb">
							<a class="archive" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>
							<a href="<?php the_permalink() ?>">
								<h2><?php the_title(); ?></h2>
							</a><br>
						</div><!--

					<?php endwhile; ?>

					--></div>
				</div>

			</div> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php get_footer(); ?>
