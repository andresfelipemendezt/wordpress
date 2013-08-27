<?php get_header(); ?>
	<div class="breadcrumbs"><?php if(function_exists('bcn_display')) {bcn_display(); }?></div>
	<div id="content">
		<div id="inner-content row" class="wrap clearfix">
			<div id="main" class=" first clearfix row" role="main">
				<?php $my_query = new WP_Query('post_type=vehiculos'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<hr>
				<?php endwhile;?>
				<div class="row">
					<div class="span8">
						<div class="row">
							<div class="span3 ">
								<h2 class="cotizar">Fiat Palio Adventure</h2>
								<p>$00,000,000.00</p>
							</div>
							<div class="span5">
								<select>
									<?php while ($my_query->have_posts()) : $my_query->the_post() ?>
										<option>
												<?php the_title(); ?>
										</option>
									<?php endwhile; ?>
								</select>
							</div>
						</div>	
						<div class="">
							<img src="http://localhost/wordpress/wp-content/uploads/2013/08/Fiat_palio_adventure_016_Dualogic-.png" alt="">
						</div>

					</div> <!-- END SPAN 8 MAIN CONTENT -->
					<div class="span4 cotizar" >
						<div class="sidebar cotizar">
							<h1>Calcule  El precio para su vehículo</h1>
							<hr>	
							<div class="">
								<form action="">
									<div class="row">
										<label for=" ">Precio del vehículo</label>
										<input type="text"></div>
									<div class="row">
										<label for="">Cuota inicial</label>
										<input type="text"></div>
									<div class="row">
										<label for="">Valor a financiar</label>
										<input type="text"></div>
									<div class="row">
										<label for="">Tasa aproximada</label>
										<input type="text">
									</div>
									<input type="submit" value="Enviar solicitud">
								</form>
							</div>
						</div>
						<p>Recuerde, Almotores es su concesionario de confianza. 
*Los datos suministrados por este cotizador permiten dar una referencia sobre el valor posible del vehículo, y por lo tanto no constituyen una oferta final por parte de Almotores. </p>
					</div>
					<div class="">
						<div class="span12"><h2>Resultados de la cotizacion</h2></div>
						<div class="span12">
							<table border="0" class="cotizar">
								<tr>
									<th>12Cuotas</th>
									<th>24Cuotas</th>
									<th>36Cuotas</th>
									<th>48Cuotas</th>
									<th>60Cuotas</th>
									<th>72Cuotas</th>
								</tr>
								<tr>
									<td>$667,359.71</td>
									<td>$667,359.71</td>
									<td>$667,359.71</td>
									<td>$667,359.71</td>
									<td>$667,359.71</td>
									<td>$667,359.71</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php get_footer(); ?>