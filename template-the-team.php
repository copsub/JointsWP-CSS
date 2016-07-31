<?php
/*
Template Name: The Team
*/

global $post;

$type = 'personel';
$args=array(
	'post_type' => $type,
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'caller_get_posts' => 1,
	'orderby' => 'title',
	'order'   => 'ASC',
	'team' => 'mission-specialists' );


$specialists_query = null;
$specialists_query = new WP_Query($args);


$args=array(
	'post_type' => $type,
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'caller_get_posts' => 1,
	'orderby' => 'title',
	'order'   => 'ASC',
	'team' => 'support-group' );

$support_query = null;
$support_query = new WP_Query($args);


?>
<?php get_header(); ?>

<div id="content">
	<div class="row">
		<div class="small-11 medium-10 large-9 small-centered columns">

			<div class="row">
				<div class="small-12 columns">
					<header class="entry-header clr">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>					
				</div>
			</div>
	
			<div class="row">
				<div class="small-12 columns">	
					<h3>Mission Specialists</h3>		
				</div>
			</div>
			
			<div class="row small-up-1 medium-up-2 large-up-3">
				<?php 
				if( $specialists_query->have_posts() ) {
					while ($specialists_query->have_posts()) : $specialists_query->the_post(); 
						$job_area_personel  =  get_field( '_job_area', get_the_id() );
				?>
						<div class="column">
				
							<div class="row">
								<div class="small-4 columns">
					    		<?php 
									if ( has_post_thumbnail( $_post->ID ) ) {	
					    			echo the_post_thumbnail( array(100, 100) ); 
					    		} else {
					    			echo '<img width="100" height="100" src="' . CHILD_THEME_URI . '/img/siluet.jpg" class="personnel-siluet" alt="siluet">';
					    		}
				    			?>								
								</div>
								<div class="small-8 columns">
									<div><?php the_title(); ?></div>
									<div><?php echo $job_area_personel; ?></div>
								</div>
							</div>
							
						</div>
				<?php	
					endwhile;
				}
			wp_reset_query();  // Restore global post data stomped by the_post().
			?>
			</div>

	
			<div class="row">
				<div class="small-12 columns">	
					<h3>Support Group</h3>		
				</div>
			</div>
			
			<div class="row small-up-1 medium-up-2 large-up-3">
				<?php 
				if( $support_query->have_posts() ) {
					while ($support_query->have_posts()) : $support_query->the_post(); 
						$job_area_personel  =  get_field( '_job_area', get_the_id() );
				?>
						<div class="column">
				
							<div class="row">
								<div class="small-4 columns">
					    		<?php 
									if ( has_post_thumbnail( $_post->ID ) ) {	
					    			echo the_post_thumbnail( array(100, 100) ); 
					    		} else {
					    			echo '<img width="100" height="100" src="' . CHILD_THEME_URI . '/img/siluet.jpg" class="personnel-siluet" alt="siluet">';
					    		}
				    			?>								
								</div>
								<div class="small-8 columns">
									<div><?php the_title(); ?></div>
									<div><?php echo $job_area_personel; ?></div>
								</div>
							</div>
							
						</div>
				<?php	
					endwhile;
				}
			wp_reset_query();  // Restore global post data stomped by the_post().
			?>
			</div>			

			

			
			
	
		
		
		</div>
	</div>


</div>
	<!-- end #content -->

	<?php get_footer(); ?>