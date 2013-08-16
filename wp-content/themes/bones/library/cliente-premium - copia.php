<?php /* Template Name: CLIENTE PREMIUM */ ?>
<?php get_header(); ?>
	<div class="breadcrumbs"> <?php if(function_exists('bcn_display')) {bcn_display(); }?> </div>
	<div id="content">
		<div id="inner-content" class="wrap clearfix">
			<?php while (have_posts()) : the_post(); ?>
			<div id="main" class=" first clearfix" role="main">
				<?php the_title(); ?>
				<div class="row">
					<div class="span6">
						<?php the_content(); ?>
					</div>
					<div class="span6">
						<?php the_field('porquepremium') ?>
					</div>
				</div>
				<div class="row">
					<div class="span12">

						<div class="clientewraper">
							<ul class="nav nav-pills nav-stacked cliente7">
								<li><a href="#mensajero" data-toggle="tab">MENSAJERO</a></li>
								<li><a href="#conduccion" data-toggle="tab">CONDUCCIÓN</a></li>
								<li><a href="#lavado" data-toggle="tab">LAVADO</a></li>
								<li><a href="#combustible" data-toggle="tab">COMBUSTIBLE</a></li>
							</ul>
							<div class="tab-content fichatabswraper">
								<div class="tab-pane active" id="mensajero">
									<?php the_field('mensajero') ?>
								</div>
								<div class="tab-pane" id="conduccion">
									<?php the_field('servicio_de_conduccion') ?>
								</div>
								<div class="tab-pane" id="lavado">
									<?php the_field('lavado') ?>
								</div>
								<div class="tab-pane" id="combustible">
									<?php the_field('combustible'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- end #main -->
			<?php endwhile;?>
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php get_footer(); ?>