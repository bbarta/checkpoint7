<?php
/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_post_type('treasures', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Treasures', 'treasures'), // Rename these to suit
            'singular_name' => __('Treasures', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Treasure', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Treasures', 'html5blank'),
            'new_item' => __('New Treasures', 'html5blank'),
            'view' => __('View Treasures', 'html5blank'),
            'view_item' => __('View Treasures', 'html5blank'),
            'search_items' => __('Search Treasures', 'html5blank'),
            'not_found' => __('No Treasures found', 'html5blank'),
            'not_found_in_trash' => __('No Treasures found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-admin-media',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
    ));
    register_taxonomy(
        'type_of_treasure',    // Taxonomy
        'treasure',             // Object Type
        array(
            'label' => __( 'Type' ),
            'rewrite' => array( 'slug' => 'type' ),
            'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );
}
