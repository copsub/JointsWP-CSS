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
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
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
					?>
					<div class=" full-width-background wrapper_main_section_<?php echo $mainsection_index ?>">
					<?php 
					// check for rows (sub repeater)
	        $overlaysection_index = 0;
					if( have_rows('overlay') ):
						// loop through rows (sub repeater)
						while( have_rows('overlay') ): the_row();
							$sub_section_active = get_sub_field('sub_section_active');
							$text = get_sub_field('text');
							if ($sub_section_active): 
							// display each item as a list - with a class of completed ( if completed )
							?>
							<div class="main_front_section_<?php echo $mainsection_index ?>_overlay_<?php echo $overlaysection_index ?>">
								<?php echo $text; ?>
							</div>
						<?php
							endif;
	          $overlaysection_index++;
	          endwhile; ?>
					<?php endif; //if( get_sub_field('items') ): ?>
					</div>
					<?php endif; ?>
				
					<?php $mainsection_index++ ?>
				<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
			</div>
		<?php endif; // if( get_field('to-do_lists') ): ?>
	<?php endwhile; // end of the loop. ?>
</div>
<!-- end #content -->
<?php get_footer(); ?>