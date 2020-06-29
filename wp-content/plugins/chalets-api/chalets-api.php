<?php
/**
 * Plugin Name: Chalets Custom API
 * Description: custom rest api for chalets
 * Version: 1.0
 * Author: Isaiah Mekenye
 */

function chalets_search($data)
{
    $chalets =  new WP_Query([
        'post_type'=> 'chalets',
        's'=> sanitize_text_field($data['results'])
    ]);
      
    

    $chaletsResults = [];

  
    while ($chalets-> have_posts()) {
        $chalets->the_post();
        array_push($chaletsResults, [
            'title'=> get_the_title(),
            'permalink'=> get_the_permalink(),
            'bedrooms' => get_field('no_of_bedrooms'),
            'bathrooms' => get_field('no_of_bathrooms'),
            'price' => get_field('price'),
            'image' => get_field('chalet_featured_image')
          
        ]);
    }


   


    return $chaletsResults ;
}
add_action('rest_api_init', function () {
    register_rest_route('chalets/v1', 'search', [
        'methods' => WP_REST_Server::READABLE,
        'callback'=> 'chalets_search'
    ]);
});

// foreach($posts as $post)