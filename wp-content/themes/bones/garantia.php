<?php /* Template Name: GARANTIA */ ?>

<?php get_header(); ?>
	<div class="breadcrumbswraper">
		<div class="breadcrumbs">
			<?php if(function_exists('bcn_display')) {bcn_display(); }?>
		</div>
	</div>
	<div id="content">

		<div id="inner-content" class="wrap clearfix">

			<?php while (have_posts()) : the_post(); ?>
			<div id="main" class=" first clearfix row" role="main">

				<div class="row">

					<div class="span8">

						<h1 class="title"> <?php the_title(); ?> </h1>

						<?php the_content(); ?>

					</div>

					<div class="span4 sidebar">

					</div>
				</div>

			</div> <!-- end #main -->
			<?php endwhile;?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>