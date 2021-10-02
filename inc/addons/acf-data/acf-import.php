<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5a9fabd08c934',
	'title' => 'Page Settings',
	'fields' => array(
		array(
			'key' => 'field_5a9fabf7b0bdf',
			'label' => 'Width Settings',
			'name' => 'wooe_page_width_settings',
			'type' => 'true_false',
			'instructions' => 'Select page width settings',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'Full',
			'ui_off_text' => 'Boxed',
		),
		array(
			'key' => 'field_5a9fac6cb0be0',
			'label' => 'Header template',
			'name' => 'wooe_page_header_settings',
			'type' => 'select',
			'instructions' => 'Select page header template',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'none' => 'None',
				'one' => 'Header One',
				'two' => 'Header Two',
			),
			'default_value' => array(
				0 => 'one',
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5a9fd53ef27e7',
			'label' => 'Footer Template',
			'name' => 'wooe_page_footer_template',
			'type' => 'select',
			'instructions' => 'Select the page footer template',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'none' => 'None',
				'one' => 'Footer One',
				'two' => 'Footer Two',
			),
			'default_value' => array(
				0 => 'one',
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;