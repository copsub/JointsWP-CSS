<?php
/*
Template Name: Full Width Frontpage
*/

$background_image_front_section_1 = get_field( 'background_image_front_section_1',  'option' );

?>
<?php get_header(); ?>

<div id="content">
	<div class="row expanded columns full-width-background wrapper_front_section_1" style="background-image:url('<?php echo $background_image_front_section_1[url] ?>');">
			<div class="main_front_section_1_overlay_1" style="border: 1px solid black;">hhh
		</div>
	
	</div>
	<div class="row expanded columns full-width-background wrapper_front_section_1" style="background-image:url('<?php echo $background_image_front_section_1[url] ?>');">
	</div>

</div>
	<!-- end #content -->

	<?php get_footer(); ?>