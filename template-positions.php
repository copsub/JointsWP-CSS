<?php
/*
Template Name: Positions template
*/

global $post;

$contact_form_shortcode    =  get_field( 'contact_form_shortcode', $post->ID );


$type = 'positions';
$args=array(
	'post_type' => $type,
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'caller_get_posts' => 1,
	'orderby' => 'title',
	'order'   => 'ASC'
);

$positions_query = null;
$positions_query = new WP_Query($args);




?>
<?php get_header(); ?>

<div id="content">
	<div class="row">
		<div class="small-11 medium-10 large-9 small-centered columns">

			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="row">
				<div class="small-12 columns">
					<header class="entry-header clr">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>					
				</div>
			</div>
				
			<div class="row">
				<div class="small-12 columns">	
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; endif; ?>		
			
			<div class="row small-up-1">
				<?php 
				if( $positions_query->have_posts() ) {
					while ($positions_query->have_posts()) : $positions_query->the_post(); 
				?>
						<div class="column">
	    
					<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
							
						</div>
				<?php	
					endwhile;
				}
			wp_reset_query();  // Restore global post data stomped by the_post().
			?>
			</div>

			
			<div class="row">
				<div class="small-12 columns">
			<?php
echo do_shortcode($contact_form_shortcode);
?>						
				</div>
			</div>
			

			
		
		</div>
	</div>


</div>
	<!-- end #content -->

	<?php get_footer(); ?>