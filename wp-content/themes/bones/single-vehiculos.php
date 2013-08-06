<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.bxslider.min.js"></script>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">
						<div id="main" class=" first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="article-header">

									<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>

								</header> <!-- end article header -->

								<section class="entry-content clearfix">

									<?php the_content(); ?>

								</section> <!-- end article section -->

								<footer class="article-header">
									<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title">' . __('Custom Tags:', 'bonestheme') . '</span> ', ', ' ) ?></p>

								</footer> <!-- end article footer -->



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
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#motor" data-toggle="tab">motor</a></li>
								<li><a href="#encendido" data-toggle="tab">encendido</a></li>
								<li><a href="#alimentacion" data-toggle="tab">alimentacion</a></li>
								<li><a href="#transmision" data-toggle="tab">transmision</a></li>
							</ul>
							<div class="tab-content">

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
							</div>

						</div> <!-- end #main -->


				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->



<?php get_footer(); ?>
