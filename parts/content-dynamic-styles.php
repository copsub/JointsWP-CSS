<style>
	
<?php 
	$mainsection_index = 0;
// check for rows (parent repeater)
if( have_rows('mainsection', $post->ID ) ):
	// loop through rows (parent repeater)
	while( have_rows('mainsection', $post->ID ) ): the_row(); 
		$background_image = get_sub_field('background_image');
		if ($background_image[width] <> 0) {
			$background_image_ratio = ($background_image[height]/$background_image[width])*100;
		} else {
			$background_image_ratio = 0;
		} 
		$background_color = get_sub_field('background_color');
		$margin_top = get_sub_field('margin_top');
		$margin_bottom = get_sub_field('margin_bottom');
		?>
			.wrapper_main_section_<?php echo $mainsection_index ?> {
				background-image: url('<?php echo $background_image[url] ?>');
				background-color: <?php echo $background_color; ?>;
			}	
			.wrapper_main_section_<?php echo $mainsection_index ?>:after {
			  padding-top: <?php echo $background_image_ratio; ?>%;
				display: block;
  			content: '';
			}	
			.margin_top_main_section_<?php echo $mainsection_index ?> {
				background-color: <?php echo $background_color; ?>;
				height: <?php echo $margin_top; ?>vw;
			}
			.margin_bottom_main_section_<?php echo $mainsection_index ?> {
				background-color: <?php echo $background_color; ?>;
				height: <?php echo $margin_bottom; ?>vw;
			}
		<?php	
		// check for rows (sub repeater)
	  $overlaysection_index = 0;
		if( have_rows('overlay') ): 
			// loop through rows (sub repeater)
			while( have_rows('overlay') ): the_row();
				$sub_section_active = get_sub_field('sub_section_active');
				$background_image = get_sub_field('background_image');
				$background_image_hover = get_sub_field('background_image_hover');
				$background_position = get_sub_field('background_position');
				$background_color = get_sub_field('background_color');
				$background_size = get_sub_field('background_image_size');
				$left_position = get_sub_field('left_position');
				$overlay_width = get_sub_field('overlay_width');
				$top_position = get_sub_field('top_position');
				$overlay_height = get_sub_field('overlay_height');
				$overlay_padding = get_sub_field('overlay_padding');
				$text_color = get_sub_field('text_color');
				$font_size = get_sub_field('font_size');
				$font_weight = get_sub_field('font_weight');
				$line_height = get_sub_field('line_height');
				$text_align = get_sub_field('text_align');

				switch ($text_align) {
    			case 'lefttop':
						$htext_align = 'left';
						$vertical_align = 'top';
					break;
    			case 'leftmiddle':
						$htext_align = 'left';
						$vertical_align = 'middle';
					break;
    			case 'leftbottom':
						$htext_align = 'left';
						$vertical_align = 'bottom';
					break;
    			case 'centertop':
						$htext_align = 'center';
						$vertical_align = 'top';
					break;
    			case 'centermiddle':
						$htext_align = 'center';
						$vertical_align = 'middle';
					break;
    			case 'centerbottom':
						$htext_align = 'center';
						$vertical_align = 'bottom';
					break;
					case 'righttop':
						$htext_align = 'right';
						$vertical_align = 'top';
					break;
    			case 'rightmiddle':
						$htext_align = 'right';
						$vertical_align = 'middle';
					break;
    			case 'rightbottom':
						$htext_align = 'right';
						$vertical_align = 'bottom';
					break;
					default:
				}	
	
	
				$hover_layout = get_sub_field('hover_layout');


			// display each item as a list - with a class of completed ( if completed )?>
				.main_front_section_<?php echo $mainsection_index ?>_overlay_<?php echo $overlaysection_index ?> {
  				position: absolute;
  				top: <?php echo $top_position ?>%;
  				bottom: <?php echo (100-$overlay_height-$top_position) ?>%;
  				right: <?php echo (100-$overlay_width-$left_position) ?>%;
  				left: <?php echo $left_position ?>%;
					color: <?php echo $text_color ?>;
					background-color: <?php echo $background_color ?>;
					background-image: url('<?php echo $background_image['url'] ?>');
					background-repeat: no-repeat;
					background-position: <?php echo $background_position ?>;
					background-size: <?php echo $background_size ?>%;
					font-size: <?php echo $font_size ?>vw;
					font-weight: <?php echo $font_weight ?>;
					line-height: <?php echo $line_height ?>;
					text-align: <?php echo $htext_align ?>;
					vertical-align: <?php echo $vertical_align ?>;
					height: <?php echo $overlay_height ?>%;
					padding: <?php echo $overlay_padding ?>;					
				}
				.main_front_section_<?php echo $mainsection_index ?>_overlay_<?php echo $overlaysection_index ?>:hover {
				<?php	
				switch ($hover_layout) {
    			case 'none':
					?>
        	<?php 
					break;
    			case 'csgrey-white':
					?>
						background-color: #e7e7e7;
						color: #FFFFFF;
        	<?php         		
        	break;    		
					case 'csgrey-black':
					?>
						background-color: #e7e7e7;
						color: #000000;
        	<?php         		
        	break;
    			case 'image': 
					?>
						background-image: url('<?php echo $background_image_hover['url'] ?>');
        	<?php         		
        	break;
					default:
				}	
				?>	
					
					

				}
			<?php 
	    $overlaysection_index++;
	    endwhile; 
		endif; 	
		$mainsection_index++;
	endwhile;  
endif;  ?>

</style>
