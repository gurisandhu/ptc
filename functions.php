<?php 


// *************************
// Add links for stylesheet, fonts and scripts (Instead of inserting in <head> section or before </body>)
// *************************

function my_styles(){
  wp_enqueue_style('ptc-font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.7.0');

    wp_enqueue_style('ptc-fonts-open', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');

    wp_enqueue_style( 'ptc-swiper' , get_template_directory_uri() . '/library/swiper.min.css');

     wp_enqueue_style( 'ptc-style' , get_template_directory_uri() . '/style.css', array(), '2.0.0', false, 'all');
}
add_action('template_redirect', 'my_styles');
//end of styles

function my_scripts(){
  wp_enqueue_script( 'ptc-swiper', get_bloginfo('template_directory') . '/library/swiper.min.js', null, null, true);
  
  wp_enqueue_script( 'ptc-script', get_bloginfo('template_directory') . '/compressed/script.js', null, null, true);

    // check if ACF working properly after comminting out
   
}
add_action('template_redirect', 'my_scripts');
 //end of my_scripts

// General Jquery CDN Start here
    if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

    function my_jquery_enqueue() {
       wp_deregister_script('jquery');
       wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js", true, null);
       wp_enqueue_script('jquery');
    }
// End of General Jquery CDN

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
      'page_title'  =>  'Sidebar Widget',
      'menu_title'  => 'Sidebar Widget',
      'menu_slug'   =>  'sidebar-widget-settings',
      'capability'  =>  'edit_posts',
      'icon_url'    =>  'dashicons-index-card',
      'redirect'    =>  false
    ));
  add_filter('menu_order', 'custom_menu_order', 99);
}
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
            'name'                  =>  'PTC Events',
            'singular_name'         =>  'Event',
            'add_new'               =>  'Add Event',
            'add_new_item'          =>  'Add New Event',
            'edit'                  =>  'Edit',
            'edit_item'             =>  'Edit Event',
            'new_item'              =>  'New Event',
            'view'                  =>  'View',
            'view_item'             =>  'View Event',
            'search_items'          =>  'Search Events',
            'not_found'             =>  'No Events Found',
            'not_found_in_trash'    =>    'No Events found in Trash',
            'parent'                =>  'Parent Event'
        ),
            'public'            =>  true,
            'menu_position'     =>  20,
            'supports'          =>  array( 'title', 'editor', 'comments', 'thumbnail'),
            'taxonomies'        =>  array( '' ),
            'menu_icon'         =>  'dashicons-calendar-alt',
            'has_archive'       => true
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
                    'new_item_name' =>  'New Association'
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true
                )
        );
    register_taxonomy(
            'ptc_subjects',
            'ptc_events',
            array(
                'labels'   => array(
                    'name'  => 'Subjects',
                    'add_new_item' =>   'Add New Subject',
                    'new_item_name' =>  'New Subject'
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true
                )
        );
    register_taxonomy(
            'ptc_levels',
            'ptc_events',
            array(
                'labels'   => array(
                    'name'  => 'Levels',
                    'add_new_item' =>   'Add New Level',
                    'new_item_name' =>  'New Level'
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true
                )
        );
    register_taxonomy(
            'ptc_regions',
            'ptc_events',
            array(
                'labels'   => array(
                    'name'  => 'Regions',
                    'add_new_item' =>   'Add New Region',
                    'new_item_name' =>  'New Region'
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true
                )
        );
    register_taxonomy(
        'shiba_theme', 'ptc_events',
        array(
            'hierarchical'  => False, 
            'label'         => __('Theme'),
            'public'        => True,
            'show_ui'       => True,
            'query_var'     => 'theme',
            'rewrite'       => array('slug' => 'theme')
          )

      );
    add_filter("manage_edit-shiba_theme_columns", 'theme_columns');

function theme_columns($theme_columns) {
  $new_columns = array(
      'cb'                =>    '<input type="checkbox" />',
      'name'              =>    __( 'Name' ),
      'header_icon'       =>    '',
      'slug'              =>    __('Slug'),
      'posts'             =>    __('Posts')
    );
  return $new_columns;
}
}




?>
