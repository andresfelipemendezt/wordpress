<?php
/*
Template Name:custom loop
*/
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/jquery.bxslider.css">

<?php $my_query = new WP_Query('category_name=automovil'); ?>

<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
<?php endwhile; ?>

<div class="bxslider">

	<?php while ($my_query->have_posts()) : $my_query->the_post() ?>
		<?php if ( has_post_thumbnail()) : ?>
			<div class="slide">
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('full'); ?>
				</a>
			</div>
		<?php endif; ?>
	<?php endwhile; ?>

</div>


<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.bxslider.min.js"></script>
<script>
	$('.bxslider').bxSlider({
		minSlides: 5,
  		maxSlides: 6,
  		slideWidth: 360,
  		slideMargin: 10
	});
</script>