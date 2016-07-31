<?php
/*
Template Name: Sponsors
*/

global $post;

$pre_sponsors_text    =  get_field( '_pre_sponsors_text', $post->ID );
$gold_company_sponsors    =  get_field( '_gold_company_sponsors', $post->ID );
$silver_company_sponsors    =  get_field( '_silver_company_sponsors', $post->ID );
$private_cash_donations    =  get_field( '_private_cash_donations', $post->ID );


$type = 'spons';
$args=array(
	'post_type' => $type,
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'caller_get_posts' => 1,
	'orderby' => 'title',
	'order'   => 'ASC',
	'cat-spons' => 'gold-company-sponsor' );

$gold_query = null;
$gold_query = new WP_Query($args);


$args=array(
	'post_type' => $type,
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'caller_get_posts' => 1,
	'orderby' => 'title',
	'order'   => 'ASC',
	'cat-spons' => 'silver-company-sponsor' );

$silver_query = null;
$silver_query = new WP_Query($args);


$args=array(
	'post_type' => $type,
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'caller_get_posts' => 1,
	'orderby' => 'title',
	'order'   => 'ASC',
	'cat-spons' => '' );

$private_query = null;
$private_query = new WP_Query($args);

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
					<?php echo $pre_sponsors_text;?>					
				</div>
			</div>			
	
			<div class="row">
				<div class="small-12 columns">	
					<?php echo $gold_company_sponsors;?>			
				</div>
			</div>
			
			<div class="row small-up-1 medium-up-2 large-up-3">
				<?php 
				if( $gold_query->have_posts() ) {
					while ($gold_query->have_posts()) : $gold_query->the_post(); 
						$weblink_sponsor  =  get_field( '_sponsor_weblink', get_the_id() );
						$logo_sponsor  =  get_field( '_sponsor_logo', get_the_id() );
				?>
						<div class="column">
				<?php	
							if(strlen($weblink_sponsor) > 2) {
								if(strlen($logo_sponsor) > 2) {
				?>
									<a href="<?php echo $weblink_sponsor ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<img src="<?php echo $logo_sponsor?>" width="60">
									</a>						
				<?php  } ?>
								<a href="<?php echo $weblink_sponsor ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a>
				<?php } else { ?>
								<img src="<?php echo $logo_sponsor?>">
								<?php the_title(); ?>
				<?php } ?>				
						</div>
				<?php	
					endwhile;
				}
			wp_reset_query();  // Restore global post data stomped by the_post().
			?>
			</div>

			
			<div class="row">
				<div class="small-12 columns">		
					<?php echo $silver_company_sponsors;?>			
				</div>
			</div>
			
			<div class="row small-up-1 medium-up-2 large-up-3">
				<?php 
				if( $silver_query->have_posts() ) {
					while ($silver_query->have_posts()) : $silver_query->the_post(); 
						$weblink_sponsor  =  get_field( '_sponsor_weblink', get_the_id() );
						$logo_sponsor  =  get_field( '_sponsor_logo', get_the_id() );
				?>
						<div class="column">
				<?php	
							if(strlen($weblink_sponsor) > 2) {
								if(strlen($logo_sponsor) > 2) {
				?>
									<a href="<?php echo $weblink_sponsor ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<img src="<?php echo $logo_sponsor?>" width="60">
									</a>						
				<?php  } ?>
								<a href="<?php echo $weblink_sponsor ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a>
				<?php } else { ?>
								<img src="<?php echo $logo_sponsor?>">
								<?php the_title(); ?>
				<?php } ?>				
						</div>
				<?php	
					endwhile;
				}
			wp_reset_query();  // Restore global post data stomped by the_post().
			?>
			</div>
			
			
			<div class="row">
				<div class="small-12 columns">		
					<?php echo $private_cash_donations;?>			
				</div>
			</div>
			
			<div class="row small-up-1 medium-up-2 large-up-3">
				<?php 
				if( $private_query->have_posts() ) {
					while ($private_query->have_posts()) : $private_query->the_post(); 
						$weblink_sponsor  =  get_field( '_sponsor_weblink', get_the_id() );
						$logo_sponsor  =  get_field( '_sponsor_logo', get_the_id() );
						$sponsor_country = get_field( 'sponsor_country', get_the_id() );
						$term_list = wp_get_post_terms(get_the_id(), 'cat-spons', array("fields" => "all"));
						$term_slug = $term_list[0]->slug;
						if (($term_slug != 'gold-company-sponsor') && ($term_slug != 'silver-company-sponsor')) {

				?>
						<div class="column">
							
						<?php				
					
									the_title(); 
									echo "  (".$sponsor_country.")"; 
					
					
							?>
						</div>
				<?php	
				}
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