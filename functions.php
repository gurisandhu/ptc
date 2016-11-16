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
  
  function events_category(){
   $labels = array(
        'name'                => _x( 'Events', 'post type general name' ),
        'singular_name'       => _x( 'Event', 'post type singular name'),
        'add_new_item'        => __( 'Add Event'),
        'edit_item'           => __( 'Edit Event'),
        'new_item'            => __( 'New Event'),
        'all_items'           => __( 'All Events'),
        'view_item'           => __( 'View Event'),
        'not_found'           => __( 'No Event found'),
        'not_found_in_trash'  => __( 'No Event found in the Trash'),
        'menu_name'           => __( 'Events')
      );

   $args  =   array(
      'labels'          =>  $labels,
      'taxonomies'      =>  array('category', 'post_tag'),
      'menu_icon'       =>  'dashicons-building',
      'menu_position'   =>  95,
      'public'          =>  true,
      'rewrite'         =>  array('slug' => 'events', 'with_front' => true),
    );
   register_post_type('project', $args);
  }
  add_action('init', 'events_category');

?>