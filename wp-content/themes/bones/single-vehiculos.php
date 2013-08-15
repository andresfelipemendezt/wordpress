<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class=" first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="article-header">

									<img src="<?php the_field('imagen_header'); ?>" alt="" />

								</header> <!-- end article header -->

								<section class="entry-content clearfix">

								<div class="descripccion">
									<img src="<?php the_field('imagen_descripcion'); ?>" alt="" /><!--
								 --><div class="descripcioncopy">
										<?php the_field('descripccion'); ?>
									</div>
								</div>

								<div class="galeria">
									<h1>Galería</h1>
									<h4>En FIAT encuentras una gran cantidad de colores para que personalices tu vehículo como más te guste. </h4>
									<p>Colores sólidos y metalizados para hacer de tu carro un espacio único.</p>
									<?php
									 $images = get_field('gallera');
									 if( $images ): ?>
									 <ul class="carrocolores">
										<?php foreach( $images as $image): ?>
											<li>
												<img src=" <?php echo $image['url']; ?> " alt="">
											</li>
										<?php endforeach; ?>
									 </ul>
									<?php endif; ?>
								</div>

								<div class="coloreswraper">
									<?php
									 $images = get_field('carros');
									 if( $images ): ?>
									 <ul class="carrocolores">
										<?php foreach( $images as $image): ?>
											<li>
												<img src=" <?php echo $image['url']; ?> " alt="">
											</li>
										<?php endforeach; ?>
									 </ul>
									<?php endif; ?>
									<?php
									$imagenes = get_field('colores');
									if( $imagenes ): ?>
									<ul class="carrocolores_colores">
									<?php 	$index = 0; ?>
									<?php foreach( $imagenes as $imagen): ?>
										<li>
											<a  data-slide-index="<?php echo $index ?>" href="">
												<img src=" <?php echo $imagen['url']; ?> " alt="">
											</a>
										</li>
										<?php 	$index++ ; ?>
									<?php endforeach; ?>
									 </ul>
									<?php endif; ?>
								</div>

								<div class="fichatecnicawraper">
									<ul class="nav nav-pills nav-stacked fichatecnica ">
										<li><a href="#motor" data-toggle="tab">motor</a></li>
										<li><a href="#encendido" data-toggle="tab">encendido</a></li>
										<li><a href="#alimentacion" data-toggle="tab">alimentacion</a></li>
										<li><a href="#transmision" data-toggle="tab">transmision</a></li>
										<li><a href="#relaciones_de_transmision" data-toggle="tab">Relaciones de transmisión</a></li>
										<li><a href="#sistema_de_frenos" data-toggle="tab">Sistema de frenos</a></li>
										<li><a href="#suspension_delantera" data-toggle="tab">Suspensión delantera</a></li>
										<li><a href="#suspension_trasera" data-toggle="tab">Suspensión trasera</a></li>
										<li><a href="#direccion" data-toggle="tab">Dirección</a></li>
										<li><a href="#neumaticos_y_llantas" data-toggle="tab">Neumáticos y Llantas</a></li>
										<li><a href="#peso_y_capacidades_del_vehiculo" data-toggle="tab">Peso y capacidades del Vehículo</a></li>
										<li><a href="#dimensiones" data-toggle="tab">Dimensiones</a></li>
										<li><a href="#prestaciones" data-toggle="tab">Prestaciones</a></li>
									</ul>
									<div class="tab-content fichatabswraper">
										<div class="tab-pane active" id="motor">
											<?php the_field('motor'); ?>
										</div>
										<div class="tab-pane " id="encendido">
											<?php the_field('encendido'); ?>
										</div>
										<div class="tab-pane " id="alimentacion">
											<?php the_field('alimentacion'); ?>
										</div>
										<div class="tab-pane " id="transmision">
											<?php the_field('transmision'); ?>
										</div>
										<div class="tab-pane " id="relaciones_de_transmision">
											<?php the_field('relaciones_de_transmision'); ?>
										</div>
										<div class="tab-pane " id="sistema_de_frenos">
											<?php the_field('sistema_de_frenos'); ?>
										</div>
										<div class="tab-pane " id="suspension_delantera">
											<?php the_field('suspension_delantera'); ?>
										</div>
										<div class="tab-pane " id="suspension_delantera">
											<?php the_field('suspension_delantera'); ?>
										</div>
										<div class="tab-pane " id="suspension_trasera">
											<?php the_field('suspension_trasera'); ?>
										</div>
										<div class="tab-pane " id="direccion">
											<?php the_field('direccion'); ?>
										</div>
										<div class="tab-pane " id="neumaticos_y_llantas">
											<?php the_field('neumaticos_y_llantas'); ?>
										</div>
										<div class="tab-pane " id="peso_y_capacidades_del_vehiculo">
											<?php the_field('peso_y_capacidades_del_vehiculo'); ?>
										</div>
										<div class="tab-pane " id="peso_y_capacidades_del_vehiculo">
											<?php the_field('peso_y_capacidades_del_vehiculo'); ?>
										</div>
										<div class="tab-pane " id="dimensiones">
											<?php the_field('dimensiones'); ?>
										</div>
										<div class="tab-pane " id="prestaciones">
											<?php the_field('prestaciones'); ?>
										</div>
									</div>
								</div>

								</section> <!-- end article section -->

							</article> <!-- end article -->

							<?php endwhile; ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the single-custom_type.php template.", "bonestheme"); ?></p>
										</footer>
									</article>
							<?php endif; ?>

							<div class="navfooterwidget">
								<?php dynamic_sidebar('navwidget'); ?>
							</div>

						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
