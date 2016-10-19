<?php
$field_repeater_column_array = array ( //======================================== Repeater (Column)
	'key' => 'field_repeater_column',
	'label' => 'Column',
	'name' => 'column',
	'type' => 'repeater',
	'instructions' => '',
	'required' => 0,
	'conditional_logic' => array (
		array (
			array (
				'field' => 'field_section_type_selector_select',
				'operator' => '==',
				'value' => 'grid',
			),
		),
	),
	'wrapper' => array (
		'width' => 100,
		'class' => '',
		'id' => '',
	),
	'collapsed' => 'field_column_description',
	'min' => '',
	'max' => '',
	'layout' => 'block',
	'button_label' => 'Add Column',
	'sub_fields' => array (
		array ( // ---------------------------------- Field (Column Description)
			'key' => 'field_column_description',
			'label' => 'Column Description',
			'name' => 'column_description',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '100',
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
		array (
			'key' => 'field_column_width_small',
			'label' => 'Column Width Small',
			'name' => 'column_width_small',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33%',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => 1,
			'max' => 12,
			'step' => 1,
		),
		array (
			'key' => 'field_column_width_medium',
			'label' => 'Column Width Medium',
			'name' => 'column_width_medium',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33%',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => 1,
			'max' => 12,
			'step' => 1,
		),

		array (
			'key' => 'field_column_width_large',
			'label' => 'Column Width Large',
			'name' => 'column_width_large',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33%',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => 1,
			'max' => 12,
			'step' => 1,
		),


		array ( // ---------------------------------- Field (Column Type Selector)
			'key' => 'field_Column_type_selector',
			'label' => 'Column Type Selector',
			'name' => 'column_type_selector',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '30',
				'class' => '',
				'id' => '',
			),
			'choices' => $column_type_selector_types,
			'default_value' => $column_type_selector_types_dv,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),	
	
	
	
		array ( //======================================== Repeater (Carousel)
			'key' => 'field_repeater_column_carousel',
			'label' => 'Carousel',
			'name' => 'carousel',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_Column_type_selector',
						'operator' => '==',
						'value' => 'carousel',
					),
				),
			),
			'wrapper' => array (
				'width' => 100,
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_carousel_image',
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Slide',
			'sub_fields' => array (
				array ( // ---------------------------------- Field (Image)
					'key' => 'field_column_carousel_image',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '60',
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
				array ( // ---------------------------------- Field (Background Color)
					'key' => 'field_column_carousel_slide_background_color_select',
					'label' => 'Background Color',
					'name' => 'background_color_carousel_slide',
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
				array ( // ---------------------------------- Field (Background Size)
					'key' => 'field_column_carousel_slide_background_size_select',
					'label' => 'Background Size',
					'name' => 'background_size_carousel_slide',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'choices' => $section_background_size_types,
					'default_value' => $section_background_size_dv,
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array (
					'key' => 'field_column_carousel_slide_text_textfield',
					'label' => 'Slide Text',
					'name' => 'textfield_column_carousel_slide_text',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '100',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
	
	
	
	
			)
		),

	
	
	
	
	
	
	
	
	
	),
);