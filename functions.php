<?php 

define( 'ACF_LITE', true );
include_once('advanced-custom-fields/acf.php');


// RSS feed fetch interval
add_filter('wp_feed_cache_transient_lifetime',create_function('$a', 'return 60;'));

// Icrease media upload size
@ini_set( ‘upload_max_size’ , ’5M’ );
@ini_set( ‘post_max_size’, ’5M’);
@ini_set( ‘max_execution_time’, ’1000′ );



if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_upphovsratt',
		'title' => 'Upphovsrätt',
		'fields' => array (
			array (
				'key' => 'field_5346623684e84',
				'label' => 'Typ av licens',
				'name' => 'license_type',
				'type' => 'radio',
				'instructions' => 'På vilket sätt får andra än upphovsrättsinnehavaren (författaren/fotografen/...) använda materialet? Vi föredrar Creative Commons (CC) som tillåter andra att använda materialet.',
				'required' => 1,
				'choices' => array (
					'cc-by-nc-sa' => 'CC (BY-NC-SA) 4.0',
					'cc0' => 'CC0 - No rights reserved',
					'copyright' => '© - All rights reserved',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'cc-by-nc-sa',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_534662b684e85',
				'label' => 'Upphovrättsinnehavare',
				'name' => 'copyright_owner',
				'type' => 'radio',
				'required' => 1,
				'choices' => array (
					'editor' => 'Du som skriver detta',
					'site_owner' => 'Webbplatsens ägare',
					'author' => 'Författaren (Skriv vem i artikeltexten om du vet vem det är)',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'editor',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_5346643584e86',
				'label' => 'Länk till upphovsrättsinnehavaren',
				'name' => 'link_to_author',
				'type' => 'text',
				'instructions' => 'Här kan du länka till den som skrivit texten eller till själva originalet om du fått tillåtelse att publicera en kopia av det.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'custom_fields',
				2 => 'discussion',
				3 => 'revisions',
				4 => 'slug',
				5 => 'author',
				6 => 'format',
				7 => 'send-trackbacks',
			),
		),
		'menu_order' => 1,
	));
}


?>