<?php
/*
Template Name: Full Width Frontpage
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
		 $background_image = get_sub_field('background_image');
		?>
		
		
		<div class=" full-width-background wrapper_main_section_<?php echo $mainsection_index ?>">
			
										<div class="main_front_section_1_overlay_1" style="border: 1px solid black;">hhh
		</div>
		<?php 
		
		// check for rows (sub repeater)
		if( have_rows('items') ): ?>

			<?php 
			// loop through rows (sub repeater)
			while( have_rows('items') ): the_row();

				// display each item as a list - with a class of completed ( if completed )
				?>

			<?php endwhile; ?>
		
		<?php endif; //if( get_sub_field('items') ): ?>
		</div>	
	<?php $mainsection_index++ ?>
	<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
	</div>
<?php endif; // if( get_field('to-do_lists') ): ?>

<?php endwhile; // end of the loop. ?>










	

	


</div>
	<!-- end #content -->

	<?php get_footer(); ?>