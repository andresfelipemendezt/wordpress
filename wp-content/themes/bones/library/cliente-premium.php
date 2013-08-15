<?php /* Template Name: Cliente Premium */ ?>

<?php get_header(); ?>
	<!-- BANNER INDEX HEADER -->


	<!-- SLIDER AUTOMOVILES -->

			<?php $my_query = new WP_Query('post_type=vehiculos'); ?>
			<select name="" id="">
				<?php while ($my_query->have_posts()) : $my_query->the_post() ?>
					<option value="">
						<?php the_title(); ?>
					</option>
				<?php endwhile; ?>
			</select>
	<div id="content">

		<div id="inner-content" class="wrap clearfix">

			<div id="main" class=" first clearfix" role="main">

				<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false">
				</script>

				<div class="indexcontentwraper">

				<?php while (have_posts()) : the_post(); ?>
					<div class="indexcontent">
						<?php the_content(); ?>
					</div>
				<?php endwhile;?>

				</div>

			</div> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

	<?php
	$images = get_field('footerslider');
	if( $images ): ?>
		<ul class="footerslider">
			<?php foreach( $images as $image): ?>
				<li>
					<img src=" <?php echo $image['url']; ?> " alt="">
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

<?php get_footer(); ?>