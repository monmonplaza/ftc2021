<?php
function facethechildren_CPTs() {
    $labels  = array (
                    'name'          => __('Children', 'textdomain'),
                    'singular_name' => __('Child', 'textdomain'),
                    'add_new'       => __('Add Child', 'textdomain'),
                    'add_new_item'  => __('Add New Child', 'textdomain'),
                    'edit_item'     => __('Edit Child', 'textdomain'),
                    'all_items'     => __('All Children', 'textdomain')
                );

    $args = array(  'labels'       => $labels,
                    'public'      => true,
                    'show_in_menu'        => true,
                    'show_in_nav_menus'   => true,
                    'show_in_admin_bar'   => true,
                    'capability_type'     => 'post',
                    'taxonomies'  => array( 'category' ),
                    'supports'    => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
    );


register_post_type( 'children', $args ) ;

$labels  = array (
    'name'          => __('News', 'textdomain'),
    'singular_name' => __('News', 'textdomain'),
    'add_new'       => __('Add News', 'textdomain'),
    'add_new_item'  => __('Add New ', 'textdomain'),
    'edit_item'     => __('Edit News', 'textdomain'),
    'all_items'     => __('All News', 'textdomain')

);
$args = array(
        'labels'       => $labels,
        'public'      => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'capability_type'     => 'post',
        'taxonomies'  => array( 'category' ),
        'supports'    => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
);
register_post_type( 'news', $args ) ;



$labels  = array (
    'name'          => __('FAQ', 'textdomain'),
    'singular_name' => __('FAQ', 'textdomain'),
    'add_new'       => __('Add FAQ', 'textdomain'),
    'add_new_item'  => __('Add FAQ ', 'textdomain'),
    'edit_item'     => __('Edit FAQ', 'textdomain'),
    'all_items'     => __('All FAQ', 'textdomain')

);
$args = array(
        'labels'       => $labels,
        'public'      => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'capability_type'     => 'post',
        'taxonomies'  => array( 'groups' ),
        'supports'    => array( 'title', 'editor', )
);
register_post_type( 'faq', $args ) ;

}
add_action( 'init', 'facethechildren_CPTs');



//CUSTOM TAXONOMY
function faq_custom_taxonomy() {
  $labels = array(
    'name' => _x( 'Group', 'taxonomy general name' ),
    'singular_name' => _x( 'Group', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Group' ),
    'all_items' => __( 'All Group' ),
    'parent_item' => __( 'Parent Group' ),
    'parent_item_colon' => __( 'Parent Group:' ),
    'edit_item' => __( 'Edit Group' ), 
    'update_item' => __( 'Update Group' ),
    'add_new_item' => __( 'Add New Group' ),
    'new_item_name' => __( 'New Group Name' ),
    'menu_name' => __( 'Groups' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('Groups',array('faq'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'group' ),
  ));
 
}
add_action( 'init', 'faq_custom_taxonomy', 0 );
