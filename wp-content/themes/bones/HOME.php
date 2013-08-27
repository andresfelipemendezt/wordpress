<?php /* Template Name: HOME */ ?>

<?php get_header(); ?>
	<div class="bannerwraper">
		<?php
		$images = get_field('banner');
		if( $images ):	 ?>
			<ul class="bannerindex">
				<?php foreach( $images as $image): ?>
					<li>
						<img src=" <?php echo $image['url']; ?> " alt="">
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
	<div class="bxsliderwraper slidervehiculos">
		<ul  class="vehiculos"></ul>
		<div class="bxslider ">
			<?php $my_query = new WP_Query('post_type=vehiculos'); ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post() ?>
				<div class="slide">
					<a class="title" href="<?php the_permalink() ?>">
						<?php the_title(); ?>
					</a>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('full'); ?>
					</a>
				</div>
			<?php endwhile; ?>
		</div>
		<h2>extremandamente unicos y modernos </h2>
	</div>
	<div id="content">

		<div id="inner-content" class="wrap clearfix">

			<div id="main" class=" first clearfix" role="main">

				<div class="indexcontentwraper">

				<?php while (have_posts()) : the_post(); ?>
					<div class="indexcontent">
						<?php the_content(); ?>
					</div>
				<?php endwhile;?>

					<div class="mapwraper">
						<div id="map-canvas"></div>
					</div>
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