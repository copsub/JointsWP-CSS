<?php

function dynamic_widget_areas() {
  $args = array(
	  'sort_order' => 'asc',
	  'sort_column' => 'post_title',
	  'hierarchical' => 1,
	  'exclude' => '',
	  'include' => '',
	  'meta_key' => '',
	  'meta_value' => '',
	  'authors' => '',
    'child_of' => 0,
    'parent' => -1,
    'exclude_tree' => '',
    'number' => '',
    'offset' => 0,
    'post_type' => 'page',
    'post_status' => array('publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', 'trash') 
  ); 
  $pages = get_pages($args); 							
  

  foreach ( $pages as $page ) {
    if( have_rows('mainsection', $page->ID) ): 
    $mainsection_index = 0;
    while( have_rows('mainsection', $page->ID) ): the_row();
		  if(get_sub_field('sect_type_selector') == 'widgetarea'):// Register Sidebars

        
		
        $widget_area_name = substr(get_the_title($page->ID),0,32);
        if(strlen(get_the_title($page->ID))>32) {$widget_area_name = $widget_area_name . ' ...';}
	      $args = array(
		      'id'            => 'widgetdynamicarea' . $page->ID . $mainsection_index,
          'name'          => $widget_area_name,
          'description'   => get_sub_field('section_description'),
          'before_title'  => '<h4 class="widget-title">',
          'after_title'   => '</h4>',
          'before_widget' => '<div id="%1$s" class="widget %2$s column">',
          'after_widget'  => '</div>',
        );
        register_sidebar( $args );

      endif;
    $mainsection_index++;
	  endwhile; 
  endif; 
  }			
		  
  
}


add_action( 'widgets_init', 'dynamic_widget_areas' );
