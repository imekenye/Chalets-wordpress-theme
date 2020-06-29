<?php
 
require('inc/theme-support.php');
require('inc/chalet-shortcode.php');

    function chalets_enqueue_styles()
    {
        wp_enqueue_style('spectral-font-css', 'https://fonts.googleapis.com/css2?family=Spectral:wght@200;300;400;700&display=swap', [], '', 'all');
        wp_enqueue_style('niramit-font-css', 'https://fonts.googleapis.com/css2?family=Niramit:wght@300;400;700&display=swap', [], '', 'all');
        wp_enqueue_style('fancy-css', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', [], '', 'all');
        wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', ['spectral-font-css','niramit-font-css'], time(), 'all');
        wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/public/css/style.css', ['main-css'], time(), 'all');
    }
    add_action('wp_enqueue_scripts', 'chalets_enqueue_styles');

function load_js()
{
    wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js', [], 3, true);
    wp_register_script('fancy', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', ['jquery'], time(), true);
   
    wp_register_script('bundlejs', get_template_directory_uri() . '/public/js/bundle.js', ['gsap'], time(), true);
    wp_register_script('search', get_template_directory_uri() . '/src/js/Search.js', ['jquery'], time(), true);
    wp_register_script('main', get_template_directory_uri() . '/src/js/main.js', ['jquery'], time(), true);
    wp_register_script('searchform', get_template_directory_uri() . '/src/js/SearchDropdown.js', ['jquery'], time(), true);
 
    wp_enqueue_script('bundlejs');
    wp_enqueue_script('search');
    wp_enqueue_script('main');
    wp_enqueue_script('searchform');
    wp_enqueue_script('fancy');
    wp_enqueue_script('gsap');

    wp_localize_script('bundlejs', 'chaletsData', array(
        'root_url' => get_site_url(),
    ));
}
add_action('wp_enqueue_scripts', 'load_js');

// CUSTOM LOGO
function chalets_custom_logo_setup()
{
    $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'chalets_custom_logo_setup');

// CUSTOM HEADER IMAGE

function chalets_custom_header_setup()
{
    $args = array(
        'default-image'      => get_template_directory_uri() . '/assets/images/header-image.jpg',
        'default-text-color' => '000',
        'width'              => 1280,
        'height'             => 240,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support('custom-header', $args);
}
add_action('after_setup_theme', 'chalets_custom_header_setup');

// NAVIGATION MENU


register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);

function add_specific_menu_location_atts($atts, $item, $args)
{
    // check if the item is in the primary menu
    if ($args->theme_location == 'top-menu') {
        // add the desired attributes:
        $atts['class'] = 'nav__listItemLink';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3);

// Add  Allowed mime types

function my_custom_mime_types($mimes)
{
 
// New allowed mime types.
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    $mimes['doc'] = 'application/msword';
 
    // Optional. Remove a mime type.
    unset($mimes['exe']);
 
    return $mimes;
}
add_filter('upload_mimes', 'my_custom_mime_types');

add_filter('acf/format_value/name=price', 'fix_number', 20, 3);
function fix_number($value, $post_id, $field)
{
    $value = number_format($value);
    return $value;
}

// Front Page custom form area

    function chalets_customform_area($wp_customize)
    {
        $wp_customize->add_section('chalets_customform_section', array(
            'title' => 'Frontpage Formarea '
        ));


        $wp_customize -> add_setting('chalets_customform_headline', array(
            'default' => 'Exmaple Text!'
        ));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'chalets_customform_headline', array(
            'label'=>'Headline',
            'section'=>'chalets_customform_section',
            'settings' => 'chalets_customform_headline'
        )));

        
        $wp_customize -> add_setting('chalets_customform_image');
        $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'chalets_customform_image_control', array(
            'label'=>'Image',
            'section'=>'chalets_customform_section',
            'settings' => 'chalets_customform_image',
            'width' => 750,
            'height' => 500
        )));
    }

    add_action('customize_register', 'chalets_customform_area');


    add_filter('wp_image_editors', 'wpse303391_change_graphic_editor');
function wpse303391_change_graphic_editor($array)
{
    return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}


// Register custom query vars

function chalets_register_query_vars($vars)
{
    $vars[] = 'bedroom';
    $vars[] = 'bathroom';
    return $vars;
}
add_filter('query_vars', 'chalets_register_query_vars');


/**
 * Build a custom query based on several conditions
 * The pre_get_posts action gives developers access to the $query object by reference
 * any changes you make to $query are made directly to the original object - no return value is requested
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/pre_get_posts
 *
 */
function chalets_pre_get_posts($query)
{
    // check if the user is requesting an admin page
    // or current query is not the main query
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }

    // edit the query only when post type is 'accommodation'
    // if it isn't, return
    if (!is_post_type_archive('chalets')) {
        return;
    }

    $meta_query = array();

    // add meta_query elements
    if (!empty(get_query_var('bedroom'))) {
        $meta_query[] = array( 'key' => 'no_of_bedrooms', 'value' => get_query_var('bedroom') );
    }

    if (!empty(get_query_var('bathroom'))) {
        $meta_query[] = array( 'key' => 'no_of_bathrooms', 'value' => get_query_var('bathroom'));
    }

    if (count($meta_query) > 1) {
        $meta_query['relation'] = 'AND';
    }

    if (count($meta_query) > 0) {
        $query->set('meta_query', $meta_query);
    }
}
add_action('pre_get_posts', 'chalets_pre_get_posts', 1);

// shortcode

function chalets_setup()
{
    add_shortcode('chalets_search_form', 'chalets_search_form');
}
add_action('init', 'chalets_setup');


function chalets_search_form($args)
{
    // The Query
    // meta_query expects nested arrays even if you only have one query
    $chalets_query = new WP_Query(array( 'post_type' => 'chalets', 'posts_per_page' => '0', 'meta_query' => array( array( 'key' => 'no_of_bedrooms' ) ) ));

    // The Loop
    if ($chalets_query->have_posts()) {
        $bedrooms = array();
        while ($chalets_query->have_posts()) {
            $chalets_query->the_post();
            $bedroom = get_post_meta(get_the_ID(), 'no_of_bedrooms', true);

            // populate an array of all occurrences (non duplicated)
            if (!in_array($bedroom, $bedrooms)) {
                $bedrooms[] = $bedroom;
            }
        }
    }



    /* Restore original Post Data */
    wp_reset_postdata();

    if (count($bedrooms) == 0) {
        return;
    }

    asort($bedrooms);

    $select_bedroom = '<select name="bedroom" style="width: 100%">';
    $select_bedroom .= '<option value="" selected="selected">' . __('Select bedroom', 3) . '</option>
    ';
    foreach ($bedrooms as $bedroom) {
        $select_city .= '<option value="' . $bedroom . '">' . $bedroom . '</option>';
    }
    $select_city .= '</select>' . "\n";

    reset($bedrooms);
}