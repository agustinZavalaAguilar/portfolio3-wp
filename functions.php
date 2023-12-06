<?php 

/** Ajouter un menu à son site */
function register_my_menu(){
  register_nav_menu( 'main-menu', 'Menu principal' );
}
add_action( 'after_setup_theme', 'register_my_menu' );


function velos_register_post_types() {

    // CPT Velos 
    $labels = array(
        'name' => 'Velo',
        'all_items' => 'Tous les velos',
        'sigular_name' =>'velo',
        'add_new_item' => 'Ajouter un velo',
        'edit_item' => 'Modifier le velo',
        'menu_name' => 'Velo'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show in rest' => true,
        'has archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-customizer',
    );

    register_post_type('velo', $args);

    // Déclaration de la Taxonomie
    $labels = array(
      'name' => 'marque',
      'new_item_name' => 'marque',
      'parent_item' => 'velo',
    );

    $args = array( 
      'labels' => $labels,
      'public' => true, 
      'show_in_rest' => true,
      'hierarchical' => true, 
  );

    register_taxonomy('marque','velo', $args);

  }
add_action('init','velos_register_post_types');