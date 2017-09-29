<?php

function ju_register_required_plugins(){
    $plugins            =   [
        [
            'name'      =>  'Adsense Plugin WP Quads',
            'slug'      =>  'quick-adsense-reloaded',
            'required'  =>  false     
        ],
        [
            'name'      =>  'BuddyPress',
            'slug'      =>  'buddypress',
            'required'  =>  false     
        ],
        [
            'name'      =>  'Regenerate Thumbnails',
            'slug'      =>  'regenerate-thumbnails',
            'required'  =>  false     
        ],
        [
            'name'      =>  'WooCommerce',
            'slug'      =>  'woocommerce',
            'required'  =>  false     
        ],
        [
            'name'      =>  'Wordpress Popular Posts',
            'slug'      =>  'wordpress-popular-posts',
            'required'  =>  false     
        ],
        [
            'name'      =>  'WP subtitle',
            'slug'      =>  'wp-subtitle',
            'required'  =>  false     
        ],
        [
            'name'      =>  'Recipe',
            'slug'      =>  'recipe',
            'source'    =>  get_template_directory() . '/plugins/recipe.zip',
            'recuired'  =>  true     
        ]

    ];

    $config             =   [
        'id'            =>  'wp',
        'menu'          =>  'tgmpa-install-plugins',
        'parent_slug'   =>  'themes.php',
        'has_notices'   =>  true,
        'dismissable'   =>  true
    ];

    tgmpa( $plugins, $config );
}