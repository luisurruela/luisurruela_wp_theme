<?php 

function lu_services() {
    
    $labels = array(
        'name'                  => _x( 'Servicios', 'Post type general name', 'servicios' ),
        'singular_name'         => _x( 'Servicio', 'Post type singular name', 'servicios' ),
        'menu_name'             => _x( 'Servicios', 'Admin Menu text', 'servicios' ),
        'name_admin_bar'        => _x( 'Servicio', 'Add New on Toolbar', 'servicios' ),
        'add_new'               => __( 'Agregar servicio', 'servicios' ),
        'add_new_item'          => __( 'Agregar servicio nuevo', 'servicios' ),
        'new_item'              => __( 'Nuevo servicio', 'servicios' ),
        'edit_item'             => __( 'Editar servicio', 'servicios' ),
        'view_item'             => __( 'Ver servicio', 'servicios' ),
        'all_items'             => __( 'Todos los servicios', 'servicios' ),
        'search_items'          => __( 'Buscar servicios', 'servicios' ),
        'parent_item_colon'     => __( 'Servicio padre:', 'servicios' ),
        'not_found'             => __( 'No se encontraron servicios.', 'servicios' ),
        'not_found_in_trash'    => __( 'No se encontraron servicios en la basura.', 'servicios' ),
        'featured_image'        => _x( 'Imagen del servicio', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'servicios' ),
        'set_featured_image'    => _x( 'Elegir imagen principal', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'servicios' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'servicios' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'servicios' ),
        'archives'              => _x( 'Historial de servicios', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'servicios' ),
        'insert_into_item'      => _x( 'Insertar en el servicio', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'servicios' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'servicios' ),
        'filter_items_list'     => _x( 'Filtrar lista de servicios', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'servicios' ),
        'items_list_navigation' => _x( 'Lista de servicios', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'servicios' ),
        'items_list'            => _x( 'Lista de servicios', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'servicios' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'description'		 => 'Sección de servicios.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => [ 'slug' => 'servicios' ],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 21,
        'supports'           => [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'		 => [ 'category', 'post_tag' ],
        'show_in_rest'		 => true
    );
 
    register_post_type( 'services', $args );
}