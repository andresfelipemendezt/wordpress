<?php

add_action('init', 'vehiculos_init');
function vehiculos_init()
{

	$etiquetas_vehiculo = array(
		'name' => _x('Vehiculos', 'post type general name'),
		'singular_name' => _x('Vehiculo', 'post type singular name'),
		'all_items' => __('Todos los vehiculos'),
		'add_new' => _x('Agregar nuevo vehiculo', 'recipes'),
		'add_new_item' => __('Agregar nuevo vehiculo'),
		'edit_item' => __('Editar vehiculo'),
		'new_item' => __('Nuevo vehiculo'),
		'view_item' => __('Ver vehiculo'),
		'search_items' => __('Buscar en vehiculos'),
		'not_found' =>  __('Ningun vehiculo encontrato'),
		'not_found_in_trash' => __('Ningun vehiculo enocontrado en la papelera'),
		'parent_item_colon' => ''
	);


	$args = array(
		'labels' => $etiquetas_vehiculo,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 4,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
		'has_archive' => 'vehiculos'
	);
	register_post_type('vehiculos',$args);
}

add_action( 'init', 'cooking_create_taxonomies', 0 );

function cooking_create_taxonomies()
{
	$etiquetas_tipodevehiculos = array(
		'name' => _x( 'Tipo de vehiculo', 'taxonomy general name' ),
		'singular_name' => _x( 'Tipo de vehiculo', 'taxonomy singular name' ),
		'search_items' =>  __( 'Buscar en tipos de vehiculo' ),
		'all_items' => __( 'Todos los tipos de vehiculos' ),
		'most_used_items' => null,
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Editar tipo de vehiculoe' ),
		'update_item' => __( 'Actualizar tipo de vhiculo' ),
		'add_new_item' => __( 'Agregar nuevo tipo de vehiculo' ),
		'new_item_name' => __( 'Nueno tipo de vehiculo' ),
		'menu_name' => __( 'Tipo de vehiculo' ),
	);
	register_taxonomy('Tipo de vehiculo','vehiculos',array(
		'hierarchical' => true,
		'labels' => $etiquetas_tipodevehiculos,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'tipo de vehiculo' )
	));
}
?>