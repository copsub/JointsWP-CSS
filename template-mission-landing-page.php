<?php
/*
Template Name: Mission Landing Page
*/

$mission_landing_page_title_l1_normal_mode = get_field( 'mission_landing_page_title_l1_normal_mode',  'option' );
$mission_landing_page_title_l2_normal_mode = get_field( 'mission_landing_page_title_l2_normal_mode',  'option' );
$mission_landing_page_title_l1_war_mode = get_field( 'mission_landing_page_title_l1_war_mode',  'option' );
$mission_landing_page_title_l2_war_mode = get_field( 'mission_landing_page_title_l2_war_mode',  'option' );
$mission_landing_page_top_logo = get_field( 'mission_landing_page_top_logo',  'option' );
$mission_content_top = get_field( 'mission_content_top',  'option' );
$estimated_mission_plan = get_field( 'estimated_mission_plan',  'option' );
$for_the_press_content = get_field( 'for_the_press_content',  'option' );
$mission_press_kit = get_field( 'mission_press_kit',  'option' );

//Get latest news from specific category
$query =  new WP_Query( array(
	'no_found_rows'           => true, // counts posts, remove if pagination required
	'update_pos t_meta_cache' => false,  // grabs post meta, remove if post meta required
	'update_post_term_cache'  => false, // grabs terms, remove if terms required (category, tag...)
	'post_type'               => array( 'post' ),
	'posts_per_page'          => 4,
	'category_name'           => 'nexoe_news',
'order'                   => 'date'
) );
?>

	<?php get_header(); ?>

	<div id="content">


		<div class="row">
			<div id="landing-page-inner-header" class="small-11 medium-10 large-9 small-centered columns">
				<div class="row">
					<div class="small-9 medium-9 large-9 columns">
						<div id="landing-page-inner-header-l1">
							<?php echo $mission_landing_page_title_l1_normal_mode;?>
						</div>
						<div id="landing-page-inner-header-l2">
							<?php echo $mission_landing_page_title_l2_normal_mode;?>
						</div>
					</div>
					<div class="small-3 medium-3 large-3 columns clearfix">
						<img class="show-for-small-only float-right" src="<?php echo $mission_landing_page_top_logo[url];?>" style="height:50px;width:auto;">
						<img class="show-for-medium float-right" src="<?php echo $mission_landing_page_top_logo[url];?>" style="height:100px;width:auto;">
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<hr style="margin:0.5rem auto;">
						<?php echo $mission_content_top ?>
					</div>
				</div>
				<div class="row cs-grey-bg" style="margin-top: 40px;">
					<div class="small-12 large-6 columns">
						<ul style="list-style: none; margin: 0px;">
							<?php if ( $query->have_posts() ) : $query->have_posts();
							while ( $query->have_posts() ) :	$query->the_post(); ?>
							<li>
								<?php
									printf( '<div class="missionnews"><span>%s</span><a href="%s">%s</a></div>', get_the_date( 'd.m.Y' ), get_permalink(), get_the_title() );
  								printf( '<div>%s</div>', wp_trim_words( strip_tags( get_the_content( '', TRUE ) ), 20 ) );
									?>
							</li>
							<?php endwhile;
              else :
              endif;
              wp_reset_postdata();
              ?>
						</ul>
					</div>
					<div class="small-12 large-6 columns">
						<?php echo $estimated_mission_plan ?>
						<div>
							<table style="width: 100%;vertical-align:bottom;  padding-bottom: 10px; margin-top: 5px;">
								<tr>
									<td style="height: 60px; padding: 20px 10px 10px 0;vertical-align:bottom;">
										<span style="Color:black; Font-size:20px;font-weight: bold;line-height: 30px;padding-right: 10px;">Press:</span>
									</td>
								</tr>
								<tr>
									<td style="height: 100px; padding: 0 10px 10px 0;">
										<?php echo $for_the_press_content; ?>
										<?php	if (!$mission_press_kit == "") { ?>
											<a style="color: white;text-decoration: none;" href="<?php echo($mission_press_kit); ?>">
												<div class="orange_button" style="width: 220px; height: 40px;color: white; padding: 10px 0 0 10px; font-weight: normal;font-size:18px;">
													Download press kit >
												</div>
											</a>
										<?php } else { ?>
											<div style="background-color: #FF4F00;width: 260px; height: 40px;color: white; padding: 10px 0 0 10px; font-weight: normal;font-size:18px;">
												Press kit will be ready asap.
											</div>
										<?php } ?>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row"  style="margin-top: 40px;">
					<div class="small-12 medium-5 large-5 columns cs-orange-bg cs-black-bg-hover">
						<a  style="color: white;font-weight: bold;font-size:25px;text-decoration: none; " href="<?php echo get_site_url(); ?>/support-us/">
							<div style=" padding: 33px 10px 30px 10px;">Donate here ></div>
						</a>
					</div>
					<div class="small-12 medium-2 large-2 columns">	
					</div>
					<div class="small-12 medium-5 large-5 columns cs-black-bg">
						<div style="margin-bottom: 5px;color: white;">
							Sign up for our newsletter here:
						</div>
						<?php echo do_shortcode('[mc4wp_form id="11166"]') ?>
					</div>
				</div>
				
				
				
			</div>
		</div>

		<!-- -->



		<div id="inner-content" class="row">

			<main id="main" class="large-12 medium-12 columns" role="main">



				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'parts/loop', 'page' ); ?>

				<?php endwhile; endif; ?>

			</main>
			<!-- end #main -->

		</div>
		<!-- end #inner-content -->

	</div>
	<!-- end #content -->

	<?php get_footer(); ?>