<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php 
			wp_head(); 
			global $post;
		?>
		
		

		
		
		
<style>
	
<?php 
	$mainsection_index = 0;
// check for rows (parent repeater)
if( have_rows('mainsection', $post->ID ) ):
	// loop through rows (parent repeater)
	while( have_rows('mainsection', $post->ID ) ): the_row(); 
		$background_image = get_sub_field('background_image');
		$background_image_ratio = ($background_image[height]/$background_image[width])*100;
		?>
			.wrapper_main_section_<?php echo $mainsection_index ?> {
				background-image: url('<?php echo $background_image[url] ?>');
			}	
			.wrapper_main_section_<?php echo $mainsection_index ?>:after {
			  padding-top: <?php echo $background_image_ratio; ?>%;
				display: block;
  			content: '';
			}	
		<?php	
		// check for rows (sub repeater)
	  $overlaysection_index = 0;
		if( have_rows('overlay') ): 
			// loop through rows (sub repeater)
			while( have_rows('overlay') ): the_row();
				$sub_section_active = get_sub_field('sub_section_active');
				$background_image = get_sub_field('background_image');
				$background_color = get_sub_field('background_color');
				$left_position = get_sub_field('left_position');
				$overlay_width = get_sub_field('overlay_width');
				$top_position = get_sub_field('top_position');
				$overlay_height = get_sub_field('overlay_height');
				$text_color = get_sub_field('text_color');
				$font_size = get_sub_field('font_size');
				$font_weight = get_sub_field('font_weight');
				$line_height = get_sub_field('line_height');
				$text_align = get_sub_field('text_align');

			// display each item as a list - with a class of completed ( if completed )?>
				.main_front_section_<?php echo $mainsection_index ?>_overlay_<?php echo $overlaysection_index ?> {
  				position: absolute;
  				top: <?php echo $top_position ?>%;
  				bottom: <?php echo (100-$overlay_height-$top_position) ?>%;
  				right: <?php echo (100-$overlay_width-$left_position) ?>%;
  				left: <?php echo $left_position ?>%;
					color: <?php echo $text_color ?>;
					background-color: <?php echo $background_color ?>;
					font-size: <?php echo $font_size ?>vw;
					font-weight: <?php echo $font_weight ?>;
					line-height: <?php echo $line_height ?>;
					text-align: <?php echo $text_align ?>;
				}
	
			<?php 
	    $overlaysection_index++;
	    endwhile; 
		endif; 	
		$mainsection_index++;
	endwhile;  
endif;  ?>

</style>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
			
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
				<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
				
				<div class="off-canvas-content" data-off-canvas-content>
					
					<header class="header" role="banner">
							

						 <?php get_template_part( 'parts/nav', 'copsub-header' ); ?>
						
						
						 <!-- This navs will be applied to the topbar, above all content 
							  To see additional nav styles, visit the /parts directory -->
						 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
		 	
					</header> <!-- end .header -->