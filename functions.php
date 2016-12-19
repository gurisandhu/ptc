<?php 

// *************************
// Add links for stylesheet, fonts and scripts (Instead of inserting in <head> section or before </body>)
// *************************

function my_styles_scripts(){
    wp_enqueue_style('ptc-font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.7.0');

    wp_enqueue_style('ptc-fonts-open', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');

    wp_enqueue_style( 'ptc-swiper' , get_template_directory_uri() . '/library/swiper.min.css');

    wp_enqueue_style( 'ptc-style' , get_template_directory_uri() . '/style.css', array(), '2.0.0', false, 'all');

    wp_enqueue_script( 'ptc-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js');

    wp_enqueue_script( 'ptc-swiper', get_bloginfo('template_directory') . '/library/swiper.min.js');
  
    wp_enqueue_script( 'ptc-script', get_bloginfo('template_directory') . '/compressed/script.js');

}
add_action('template_redirect', 'my_styles_scripts');
//end of styles scripts

// *************************
// Display Main Navigation in admin section
// *************************

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


// *************************
// Contact info (ACF: option page)
// *************************

if (function_exists('acf_add_options_page')){
  $contact_info = acf_add_options_page(array(
      'page_title'  =>  'Footer Widget',
      'menu_title'  => 'Footer Widget',
      'menu_slug'   =>  'footer-widget-settings',
      'capability'  =>  'edit_posts',
      'icon_url'    =>  'dashicons-editor-insertmore',
      'redirect'    =>  false
    ));
  add_filter('menu_order', 'custom_menu_order', 99);
}


// *************************
// Events Custom post
// *************************
  add_action( 'init', 'create_ptc_events');

  function create_ptc_events() {
    register_post_type( 'ptc_events',

      array(
        'labels'    => array(
            'name'                  =>  'PTC Events', 'post type general name',
            'singular_name'         =>  'Event', 'post type singular name',
            'add_new'               =>  'Add Event',
            'add_new_item'          =>  'Add New Event',
            'edit'                  =>  'Edit',
            'edit_item'             =>  'Edit Event',
            'all_items'             =>  'All Events',
            'new_item'              =>  'New Event',
            'view'                  =>  'View',
            'view_item'             =>  'View Event',
            'search_items'          =>  'Search Events',
            'not_found'             =>  'No Events Found',
            'not_found_in_trash'    =>  'No Events found in Trash',
            'parent'                =>  'Parent Event'
        ),
            // 'public'            =>  true,
            'menu_position'     =>  20,
            // 'supports'          =>  array( 'title', 'editor', 'comments', 'thumbnail'),
            'taxonomies'        =>  array( 'create_my_taxonomies'),
            'menu_icon'         =>  'dashicons-calendar-alt',
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            // 'has_archive'       => true,
            // 'hierarchical'      => true,
            'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', ),

        // 'taxonomies'            => array('hire_taxonomies'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        // 'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        )
      );

  }

  add_action( 'init', 'create_my_taxonomies', 0);

function create_my_taxonomies() {
    register_taxonomy(
            'ptc_associations',
            'ptc_events',
            array(
                'labels'   => array(
                    'name'  => 'Associations',
                    'add_new_item' =>   'Add New Association',
                    'edit_item'    =>  'Edit Association',
                    'new_item_name' =>  'New Association',
                    'new_item'              =>  'New Association',
                    'view'                  =>  'View',
                    'view_item'             =>  'View Association',
                    'search_items'          =>  'Search Associations',
                    'not_found'             =>  'No Associations Found',
                    'not_found_in_trash'    =>    'No Associations found in Trash',
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => true
                )
        );
    register_taxonomy(
            'ptc_audience',
            'ptc_events',
            array(
                'labels'   => array(
                    'name'  => 'Audience',
                    'add_new_item' =>   'Add New Audience',
                    'edit_item'    =>  'Edit Audience',
                    'new_item_name' =>  'New Audience',
                    'new_item'              =>  'New Audience',
                    'view'                  =>  'View',
                    'view_item'             =>  'View Audience',
                    'search_items'          =>  'Search Audiences',
                    'not_found'             =>  'No Audiences Found',
                    'not_found_in_trash'    =>    'No Audiences found in Trash'
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => true
                )
        );
    register_taxonomy(
            'ptc_levels',
            'ptc_events',
            array(
                'labels'   => array(
                    'name'  => 'Levels',
                    'add_new_item' =>   'Add New Level',
                    'edit_item'    =>  'Edit Level',
                    'new_item_name' =>  'New Level',
                    'new_item'              =>  'New Level',
                    'view'                  =>  'View',
                    'view_item'             =>  'View Level',
                    'search_items'          =>  'Search Levels',
                    'not_found'             =>  'No Levels Found',
                    'not_found_in_trash'    =>    'No Levels found in Trash'
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => true
                )
        );
    register_taxonomy(
            'ptc_subjects',
            'ptc_events',
            array(
                'labels'   => array(
                    'name'  => 'Subjects | KLA',
                    'add_new_item' =>   'Add New Subject',
                    'edit_item'    =>  'Edit Subject',
                    'new_item_name' =>  'New Subject',
                    'new_item'              =>  'New Subject',
                    'view'                  =>  'View',
                    'view_item'             =>  'View Subject',
                    'search_items'          =>  'Search Subjects',
                    'not_found'             =>  'No Subjects Found',
                    'not_found_in_trash'    =>    'No Subjects found in Trash'
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => true
                )
        );
    register_taxonomy(
            'ptc_specilist_area',
            'ptc_events',
            array(
                'labels'   => array(
                    'name'  => 'Specilist area',
                    'add_new_item' =>   'Add New Specilist area',
                    'edit_item'    =>  'Edit Specilist area',
                    'new_item_name' =>  'New Specilist area',
                    'new_item'              =>  'New Specilist area',
                    'view'                  =>  'View',
                    'view_item'             =>  'View Specilist area',
                    'search_items'          =>  'Search Specilist areas',
                    'not_found'             =>  'No Specilist areas Found',
                    'not_found_in_trash'    =>    'No Specilist areas found in Trash'
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => true
                )
        );
    register_taxonomy(
            'ptc_regions',
            'ptc_events',
            array(
                'labels'   => array(
                    'name'  => 'Regions',
                    'add_new_item' =>   'Add New Region',
                    'edit_item'    =>  'Edit Region',
                    'new_item_name' =>  'New Region',
                    'new_item'              =>  'New Region',
                    'view'                  =>  'View',
                    'view_item'             =>  'View Region',
                    'search_items'          =>  'Search Regions',
                    'not_found'             =>  'No Regions Found',
                    'not_found_in_trash'    =>    'No Regions found in Trash'
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => true
                )
        );

    register_taxonomy(
            'ptc_schools',
            'ptc_events',
            array(
                'labels'   => array(
                    'name'  => 'PTC &#10010; Schools',
                    'add_new_item' =>   'Add New School',
                    'edit_item'    =>  'Edit School',
                    'new_item_name' =>  'New School',
                    'new_item'              =>  'New School',
                    'view'                  =>  'View',
                    'view_item'             =>  'View School',
                    'search_items'          =>  'Search Schools',
                    'not_found'             =>  'No Schools Found',
                    'not_found_in_trash'    =>    'No Schools found in Trash'
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'exclude_from_search'        => true,
                'query_var'                  => false
                )
        );

 }

function trimText($string, $repl, $limit){
    if(strlen($string) > $limit){
        return substr($string, 0, $limit) . $repl;
    }
    else{
        return $string;
    }
}

add_theme_support('post-thumbnails');

// ++++++++++++++++++
// It creates radio buttons in categories
// ++++++++++++++++++

    // add_action('add_meta_boxes','mysite_add_meta_boxes',10,2);
    // function mysite_add_meta_boxes($post_type, $post) {
    //   ob_start();
    // }
    // add_action('dbx_post_sidebar','mysite_dbx_post_sidebar');
    // function mysite_dbx_post_sidebar() {
    //   $html = ob_get_clean();
    //   $html = str_replace('"checkbox"','"radio"',$html);
    //   echo $html;
    // }


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'PTC Sidebar',
        'id'            => '1_ptc_sidebar',
        'before_widget' => '<div class="row widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>'
    ) );

    register_sidebar( array(
        'name'          => 'Board Portal Sidebar',
        'id'            => 'board_portal_sidebar',
        'before_widget' => '<div class="row widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>'
    ) );

    register_sidebar( array(
        'name'          => 'Shop Sidebar',
        'id'            => 'shop_sidebar',
        'before_widget' => '<div class="row widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>'
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


// *************************
// Make ACF content on search page
// *************************
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;
   
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;
    if ( is_search() ) {
        return "DISTINCT";
    }
    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );



// *************************
// Board Members Login
// *************************
  add_action( 'init', 'create_board_portal');

  function create_board_portal() {
    register_post_type( 'board_portal',

      array(
        'labels'    => array(
            'name'                  =>  'Board Portal', 'post type general name',
            'singular_name'         =>  'Portal', 'post type singular name',
            'all_items'              =>  'All Portals',
            'add_new'               =>  'Add Portal',
            'add_new_item'          =>  'Add New Portal',
            'edit'                  =>  'Edit',
            'edit_item'             =>  'Edit Portal',
            'new_item'              =>  'New Portal',
            'view'                  =>  'View',
            'view_item'             =>  'View Portal',
            'search_items'          =>  'Search Portals',
            'not_found'             =>  'No Portals Found',
            'not_found_in_trash'    =>  'No Portals found in Trash',
            'parent'                =>  'Parent Portal'
        ),
            // 'public'            =>  true,
            'menu_position'     =>  21,
            // 'supports'          =>  array( 'title', 'editor', 'comments', 'thumbnail'),
            'taxonomies'        =>  array( 'create_board_portal_categories'),
            'menu_icon'         =>  'dashicons-admin-multisite',
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            // 'has_archive'       => true,
            // 'hierarchical'      => true,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', 'comments'),

        // 'taxonomies'            => array('hire_taxonomies'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        // 'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        )
      );

  }

add_action( 'init', 'create_board_portal_categories', 0);  
function create_board_portal_categories() {
    register_taxonomy(
            'board_portal_categories',
            'board_portal',
            array(
                'labels'   => array(
                    'name'  => 'Portal Categories',
                    'add_new_item' =>   'Add New Category',
                    'edit_item'    =>  'Edit Category',
                    'new_item_name' =>  'New Category',
                    'new_item'              =>  'New Category',
                    'view'                  =>  'View',
                    'view_item'             =>  'View Category',
                    'search_items'          =>  'Search Portal Category',
                    'not_found'             =>  'No Portal Category Found',
                    'not_found_in_trash'    =>    'No Portal Category found in Trash',
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => true
                )
        );
}
?>
