<?php
$field_repeater_carousel_array = array ( //======================================== Repeater (Carousel)
	'key' => 'field_repeater_carousel',
	'label' => 'Carousel',
	'name' => 'carousel',
	'type' => 'repeater',
	'instructions' => '',
	'required' => 0,
	'conditional_logic' => array (
		array (
			array (
				'field' => 'field_section_type_selector_select',
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
	'button_label' => 'Add Image',
	'sub_fields' => array (
		array ( // ---------------------------------- Field (Image)
			'key' => 'field_carousel_image',
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
		)
	),
);