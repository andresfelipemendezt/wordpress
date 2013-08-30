<?php /* Template Name: CONTACTO */ ?>

<?php get_header(); ?>
	<div class="breadcrumbs"> <?php if(function_exists('bcn_display')) {bcn_display(); }?> </div>
	<div id="content">

		<div id="inner-content" class="wrap clearfix">

			<?php while (have_posts()) : the_post(); ?>
			<div id="main" class=" first clearfix row" role="main">
				<div class="span8">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<hr>
					<h1>Información personal</h1>

						<?php echo do_shortcode ('[contact-form-7 id="461" title="Contacto"]'); ?>

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

			</div> <!-- end #main -->
			<?php endwhile;?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>



<div class="row">
	<div class="span4">
		Nombre (requerido)<br />
		    [text* nombre]

		Apellido (requerido)<br />
		    [text* apellido]

		Telefono (requerido)<br />
		    [tel* delefono]

		Ciudad (requerido)<br />
		    [text* ciudad]
	</div>
	<div class="span4">
		Su e-mail (requerido)<br />
		    [email* your-email]

		CC / Nit (requerido)<br />
		    [text* cc]

		Departamento<br />
		    [text departamento]
	</div>
    <div class="span8">
		<hr>
       	<h1> Motivo de contacto </h1>
		Descripcion*<br />
        	textarea* your-message]
		¿Deseas recibir información de Fiat periódicamente en tu cuenta de correo electrónico acerca de nuestras ofertas, productos e información general?:
			[acceptance informacion-666]

		¿Deseas autorizar a Fiat a utilizar tu cuenta de correo electrónico para ponerse en contacto contigo?:

		[acceptance contacto]

		<hr>
		<h3>Captcha</h3>
		Esta pregunta se hace para comprobar que es usted una persona real e impedir el envío automatizado de mensajes basura.
	</div>
	<div class="span4">
       		[captchac captcha size:l]
		Escribe el código que aparece en la imagen*.</br>
        	[captchar captcha]
		[submit "Enviar"]
	</div>
</div>