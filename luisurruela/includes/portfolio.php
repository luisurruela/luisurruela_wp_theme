<?php 

function lu_portfolio() {
    
    $labels = array(
        'name'                  => _x( 'Proyectos', 'Post type general name', 'portafolio' ),
        'singular_name'         => _x( 'Proyecto', 'Post type singular name', 'portafolio' ),
        'menu_name'             => _x( 'Proyectos', 'Admin Menu text', 'portafolio' ),
        'name_admin_bar'        => _x( 'Proyecto', 'Add New on Toolbar', 'portafolio' ),
        'add_new'               => __( 'Agregar proyecto', 'portafolio' ),
        'add_new_item'          => __( 'Agregar proyecto nuevo', 'portafolio' ),
        'new_item'              => __( 'Nuevo Proyecto', 'portafolio' ),
        'edit_item'             => __( 'Editar Proyecto', 'portafolio' ),
        'view_item'             => __( 'Ver Proyecto', 'portafolio' ),
        'all_items'             => __( 'Todos los Proyectos', 'portafolio' ),
        'search_items'          => __( 'Buscar Proyectos', 'portafolio' ),
        'parent_item_colon'     => __( 'Proyectos padre:', 'portafolio' ),
        'not_found'             => __( 'No se encontraron proyectos.', 'portafolio' ),
        'not_found_in_trash'    => __( 'No se encontraron pryectos en la basura.', 'portafolio' ),
        'featured_image'        => _x( 'Imagen del Proyecto', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'portafolio' ),
        'set_featured_image'    => _x( 'Elegir imagen principal', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'portafolio' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'portafolio' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'portafolio' ),
        'archives'              => _x( 'Historial de proyectos', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'portafolio' ),
        'insert_into_item'      => _x( 'Insertar en el proyecto', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'portafolio' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'portafolio' ),
        'filter_items_list'     => _x( 'Filtrar lista de proyectos', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'portafolio' ),
        'items_list_navigation' => _x( 'Lista de proyectos', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'portafolio' ),
        'items_list'            => _x( 'Lista de proyectos', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'portafolio' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'description'		 => 'Sección de portafolio profesional.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => [ 'slug' => 'proyecto' ],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'		 => [ 'category', 'post_tag' ],
        'show_in_rest'		 => true
    );
 
    register_post_type( 'proyecto', $args );
}