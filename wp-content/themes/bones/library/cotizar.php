<?php /* Template Name: COTIZAR VEHIVULO */ ?>

<?php get_header(); ?>
	<!-- BANNER INDEX HEADER -->

	<div class="breadcrumbs"> <?php if(function_exists('bcn_display')) {bcn_display(); }?> </div>
	<!-- SLIDER AUTOMOVILES -->
	<div id="content">

		<div id="inner-content row" class="wrap clearfix">
			<div id="main" class=" first clearfix row" role="main">
			<?php while (have_posts()) : the_post(); ?>
			<!-- POST TYPE VEHICULOS CUSTOM QUERY -->
			<?php $my_query = new WP_Query('post_type=vehiculos'); ?>

			<h1><?php the_title(); ?></h1>
			<hr>
			<?php endwhile;?>
				<div class="span8">
					<!-- DROP DOWN LIST WRAPER -->
					<div class="dropdownlisrwraper">
						<!-- DROP DOWN LIST TABS SELECTORS -->
					    <ul class="nav nav-tabs">
						    <li class="dropdown">
							    <a class="dropdown-toggle"
							    data-toggle="dropdown"
							    href="#">
							    Dropdown
							    <b class="caret"></b>
							    </a>
								    <ul class="dropdown-menu carros">
									<?php while ($my_query->have_posts()) : $my_query->the_post() ?>
										<script>
											var str = "<?php the_title(); ?>"
											str.replace(/\s+/g, '-').toLowerCase();
											console.log(str);
											console.log(|);

										</script>
										<li>
										<a href="" data-toggle="tab">
											<?php the_title(); ?>
										</a>
										</li><br>
									<?php endwhile; ?>
								    <!-- links -->
								    </ul>
							    </li>
						    </ul>
						<!--  END DROP DOWS LIST -->

						<!-- TABS AUTOMOVILES -->

						<div class="tab-content">
							<?php while ($my_query->have_posts()) : $my_query->the_post() ?>
								<div class="tab-pane" id="<?php the_title() ?>">
									<?php the_post_thumbnail('full'); ?>
								</div>
							<?php endwhile; ?>
						</div> <!-- END TABS AUTOMOVILES -->
					</div> <!-- END DROPDOWNLISTWRAPER -->

				</div> <!-- END SPAN 8 MAIN CONTENT -->

				<div class="span4">
					<?php while ($my_query->have_posts()) : $my_query->the_post() ?>
						Value: <p><?php the_field('preciovehiculo'); ?></p>
					<?php endwhile; ?>
				</div>

			</div> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>