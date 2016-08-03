<?php
/*
Template Name: Live Stream
*/

$url_for_steaming_link = get_youtube_streaming_url_from_text_file();
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
  				<section>
						<?php the_content(); ?>
						<div class="flex-video widescreen">
							<iframe width="878" height="494" src="https://www.youtube.com/embed/<?php echo $url_for_steaming_link; ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
						</div>
					</section>    

				</div>
			</div>
			

	
			
	
		
		
		</div>
	</div>


</div>
	<!-- end #content -->

	<?php get_footer(); ?>