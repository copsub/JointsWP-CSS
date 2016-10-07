<?php
/*
Template Name: Full Width Sections
*/
global $post;
?>
<?php get_header(); ?>

<div id="content">
	<?php while ( have_posts() ) : the_post(); ?>
<!--
		<h1><?php //the_title(); ?></h1>
		<?php //the_content(); ?>
-->

		<?php 
		// check for rows (parent repeater)
		if( have_rows('mainsection') ): ?>
			<div id="mainsection">
				<?php 
				$mainsection_index = 0;
				// loop through rows (parent repeater)
				while( have_rows('mainsection') ): the_row(); 
					$section_active = get_sub_field('section_active');
					if ($section_active):
						$background_image = get_sub_field('background_image');
						$margin_top = get_sub_field('margin_top');
						$margin_bottom = get_sub_field('margin_bottom');
						$sect_type_selector = get_sub_field('sect_type_selector');
						?>
						<?php if ($margin_top > 0):?><div class="margin_top_main_section_<?php echo $mainsection_index ?>"></div><?php endif; ?>
						<?php 
						switch ($sect_type_selector) {
							case 'grid': 
								?>
								<div class="row wrapper_main_section_<?php echo $mainsection_index ?>"><?php
								// check for rows (sub repeater)
								$columnsection_index = 0;
								if( have_rows('column') ):
									// loop through rows (sub repeater)
									while( have_rows('column') ): the_row();
										$column_width_small = get_sub_field('column_width_small');
										$column_width_medium = get_sub_field('column_width_medium');
										$column_width_large = get_sub_field('column_width_large');
										$column_type_selector = get_sub_field('column_type_selector');
										?>
										<div class="small-<?php echo $column_width_small; ?> medium-<?php echo $column_width_medium; ?> large-<?php echo $column_width_large; ?> columns">
<?php
														switch ($column_type_selector) {
							case 'carousel': 
								
								?>
											
											
											<div class="slick-carousel">
												<?php
												$carouselsection_index = 0;
												if( have_rows('carousel') ):
													// loop through rows (sub repeater)
													while( have_rows('carousel') ): the_row();
														$image = get_sub_field('image');
														$url = $image['url'];
														echo "<image src='$url' />";
														$carouselsection_index++;
													endwhile; ?>
												<?php endif; ?>
											</div>
											<?php
																
																break;
															default:
														}
																
																?>
											
											
										</div>
									
									<?php
										

				
										$columnsection_index++;
									endwhile; ?>
								<?php endif; ?>
								</div>
								<?php
							break;							
							case 'normal':
								?><div class=" full-width-background wrapper_main_section_<?php echo $mainsection_index ?>"><?php
								// check for rows (sub repeater)
								$overlaysection_index = 0;
								if( have_rows('overlay') ):
									// loop through rows (sub repeater)
									while( have_rows('overlay') ): the_row();
										$sub_section_active = get_sub_field('sub_section_active');
										$text = get_sub_field('text');
										$link_type = get_sub_field('link_type');
										$link_on_site = get_sub_field('link_on_site');
										$link_off_site = get_sub_field('link_off_site');
										if ($link_type == 'onsite'):
											$link = $link_on_site;
										else:
											$link = $link_off_site;
										endif;
										if ($sub_section_active): 	
											if ($link_type <> 'none'): ?> <a href="<?php echo $link ?>"> <?php endif; //Loverlay Link?> 
											<div class="main_front_section_<?php echo $mainsection_index ?>_overlay_<?php echo $overlaysection_index ?>">
												<?php echo $text; ?>
											</div>
											<?php if ($link_type <> 'none'): ?>	</a> <?php endif; //Overlay link?>
											<?php
										endif;
										$overlaysection_index++;
									endwhile; ?>
								<?php endif; ?>
								</div>
								<?php
							break;
							case 'widgetarea':					
								?>	
								<div class=" full-width-background wrapper_main_section_<?php echo $mainsection_index ?>">
								<div class="row small-up-1 medium-up-2 large-up-3">
									<?php if ( is_active_sidebar( 'widgetdynamicarea' . get_the_ID() . $mainsection_index ) ) : ?>
									<?php dynamic_sidebar( 'widgetdynamicarea' . get_the_ID() . $mainsection_index ); ?>
									<?php endif; ?>
								</div>
								</div>
								<?php	
							break;
							case 'carousel':
								?>
								<div class=" full-width-background wrapper_main_section_<?php echo $mainsection_index ?>">
									<div class="row small-up-1 medium-up-2 large-up-3">
										<div class="slick-carousel">
											<?php
											$carouselsection_index = 0;
											if( have_rows('carousel') ):
												// loop through rows (sub repeater)
												while( have_rows('carousel') ): the_row();
													$image = get_sub_field('image');
													$url = $image['url'];
													echo "<image src='$url' />";
													$carouselsection_index++;
												endwhile; ?>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<?php	
							break;
							default:
						}	?>
							
							
							
							
							
					
				
				
				
						<?php if ($margin_bottom > 0):?><div class="margin_bottom_main_section_<?php echo $mainsection_index ?>"></div><?php endif; ?>
					<?php endif; ?>
				
					<?php $mainsection_index++ ?>
				<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
			</div>
		<?php endif; //( have_rows('mainsection') ): ?>
	
	
	
	
	<?php endwhile; // end of the loop. ?>
</div>
<!-- end #content -->
<?php get_footer(); ?>