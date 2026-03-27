<?php 
function cpt_carriere() {

    $labels = array(
        'name'               => 'Carrières',
        'singular_name'      => 'Carrière',
        'menu_name'          => 'Carrières',
        'name_admin_bar'     => 'Carrière',
        'add_new'            => 'Ajouter',
        'add_new_item'       => 'Ajouter une nouvelle carrière',
        'new_item'           => 'Nouvelle carrière',
        'edit_item'          => 'Modifier la carrière',
        'view_item'          => 'Voir la carrière',
        'all_items'          => 'Toutes les carrières',
        'search_items'       => 'Rechercher des carrières',
        'not_found'          => 'Aucune carrière trouvée',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'carriere-1'),
        'show_in_rest'       => true,
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_icon'          => 'dashicons-businessman',
    );

    register_post_type('carriere', $args);
}
add_action('init', 'cpt_carriere');













// ----------- CPT Articles -----------
function cpt_article() {
    $labels = [
        'name'          => 'Articles',
        'singular_name' => 'Article',
        'add_new_item'  => 'Ajouter un nouvel article',
        'edit_item'     => 'Modifier l’article',
        'all_items'     => 'Tous les articles',
    ];

    $args = [
        'label'             => 'Articles',
        'labels'            => $labels,
        'public'            => true,
        'has_archive'       => true,
        'menu_position'     => 5,
        'show_in_admin_bar' => true,
        'show_in_menu'      => true,
        'capability_type'   => 'post',
        'rewrite'           => ['slug' => 'actualites-1'],
        'show_in_rest'      => true,
        'supports'          => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
    ];

    register_post_type('article', $args);
}
add_action('init', 'cpt_article');

// ----------- Supprimer le menu "Articles" par défaut -----------
function remove_default_posts_menu() {
    remove_menu_page('edit.php'); // Supprime "Articles" du menu admin
}
add_action('admin_menu', 'remove_default_posts_menu');












function cpt_promotions() {
    $labels = [
        'name'          => 'Promotions',
        'singular_name' => 'Promotion',
        'add_new_item'  => 'Ajouter une nouvelle promotion',
        'edit_item'     => 'Modifier la promotion',
        'all_items'     => 'Tous les promotions',
    ];
    $args = [
        'label'             => 'Promotions',
        'labels'            => $labels,
        'public'            => true,
        'has_archive'       => true,
        'menu_position'      => 5,
        'show_in_admin_bar' => true,
        'show_in_menu'      => true,
        'capability_type'   => 'post',
        'rewrite'           => ['slug' => 'promotions-1'],
        'show_in_rest'      => true,
        'supports'          => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
    ];
    register_post_type('promotion', $args);
}
add_action('init', 'cpt_promotions');