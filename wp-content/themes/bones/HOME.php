<?php
/*
	Template Name: INICIO
*/
?>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<?php get_header(); ?>

	<?php query_posts( 'category_name=automovil' )  ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<?php $imageuri = obtener_destacadas(get_the_post_thumbnail($post->ID, 'full')) ?>

	<?php endwhile; ?>
	<?php endif; ?>


	<?php echo do_shortcode('[slider id=62 name="indexbanner"]'); ?>

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

	<?php while (have_posts()) : the_post(); ?>
		<div class="indexcontent">

		<?php the_content(); ?>
		</div>
	<?php endwhile;?>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.bxslider.min.js"></script>
	<script>
		var map;
		var myLatLang = new google.maps.LatLng( <?php  $location = get_field('google_maps'); echo $location['coordinates']; ?>);
		function initialize() {
	  		var mapOptions = {
	    		zoom: 8,
	    		center: myLatLang,
	    		mapTypeId: google.maps.MapTypeId.ROADMAP
	  		};
	  		map = new google.maps.Map(document.getElementById('map-canvas'),
	      	mapOptions);
	      	var marker = new google.maps.Marker({
	     		position: myLatLang,
	      		map: map,
	      		title:"Hello World!"
	  		});
		};
		google.maps.event.addDomListener(window, 'load', initialize);
		$('.bxslider').bxSlider({
			minSlides: 5,
	  		maxSlides: 5,
	  		slideWidth: 192,
	  		slideMargin: 0,
			adaptiveHeight: true
		});
	</script>
	<div id="map-canvas"></div>
	<?php echo do_shortcode('[bxslider id="indexfooter"]'); ?>
<?php get_footer(); ?>


$galeria = get_children('post_type=attachment&post_mime_type=image&post_parent=' . $post->ID . '&order=ASC&orderby=menu_order ID');
<?php foreach ($galeria as $image) { ?>
<li>
<a href="<?php echo $image->guid; ?>" rel="prettyPhoto[pp_gal]" title="<?php echo get_the_title(); ?>">
<img src="<?php bloginfo('template_directory') ?>/timthumb/timthumb.php?src=<?php echo $image->guid; ?>&h=58&w=109&zc=1&q=100" width="109" height="58" />
</a>
</li>
<?php
}
?>
