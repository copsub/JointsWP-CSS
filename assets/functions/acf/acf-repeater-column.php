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
				'field' => 'field_Section_type_selector',
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
		array (
			'key' => 'field_column_width',
			'label' => 'Column Width',
			'name' => 'column_width',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
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
	),
);