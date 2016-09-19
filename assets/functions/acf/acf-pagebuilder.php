<?php

if( function_exists('acf_add_local_field_group') ):

// General settings (colors, selectortypes exc.)
require_once(get_template_directory().'/assets/functions/acf/acf-settings.php'); 
// Grid -> Columns setup
require_once(get_template_directory().'/assets/functions/acf/acf-repeater-column.php'); 
// Responsive -> Overlay setup
require_once(get_template_directory().'/assets/functions/acf/acf-repeater-overlay.php'); 

acf_add_local_field_group(array (
	'key' => 'group_57a258b0ce8a5',
	'title' => 'Sections Page',
	'fields' => array (
		array ( //======================================= Repeater (Mainsection)
			'key' => 'field_57a367136db2d',
			'label' => 'Mainsection',
			'name' => 'mainsection',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_57a7a13764b90',
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Row',
			'sub_fields' => array (

				array ( // ---------------------------------- Field (Section Active)
					'key' => 'field_57a4d7f795c38',
					'label' => 'Section Active',
					'name' => 'section_active',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 10,
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
				),

				array ( // ---------------------------------- Field (Section Type Selector)
					'key' => 'field_Section_type_selector',
					'label' => 'Section Type Selector',
					'name' => 'sect_type_selector',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '30',
						'class' => '',
						'id' => '',
					),
					'choices' => $sect_type_selector_types,
					'default_value' => $sect_type_selector_types_dv,
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),	

				array ( // ---------------------------------- Field (Section Description)
					'key' => 'field_57a7a13764b90',
					'label' => 'Section Description',
					'name' => 'section_description',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),

				array ( // ---------------------------------- Field (Background Image)
					'key' => 'field_57a367386db2e',
					'label' => 'Background Image',
					'name' => 'background_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 40,
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
	
				array ( // ---------------------------------- Field (Background Color)
					'key' => 'field_section_background_color',
					'label' => 'Background Color',
					'name' => 'background_color',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'choices' => $section_background_color_types,
					'default_value' => $section_background_color_dv,
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
	
				array ( // ---------------------------------- Field (Margin Top)
					'key' => 'field_section_margin_top',
					'label' => 'Margin Top',
					'name' => 'margin_top',
					'type' => 'number',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'default_value' => 0,
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '0.0',
					'max' => 50,
					'step' => '0.1',
				),						
				array ( // ---------------------------------- Field (Margin Bottom)
					'key' => 'field_section_margin_bottom',
					'label' => 'Margin Bottom',
					'name' => 'margin_bottom',
					'type' => 'number',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'default_value' => 0,
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '0.0',
					'max' => 50,
					'step' => '0.1',
				),
				// Grid -> Columns setup
				$field_repeater_column_array,
				// Responsive -> Overlay setup
				$field_repeater_overlay_array,
				),
			),
		),
		'location' => array (  //------------------------------ Where to show the acf's
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-full-width-sections.php',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
		'local' => 'php',
	)
);

endif;

