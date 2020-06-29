<?php
function chalet_search_scripts()
{
    wp_enqueue_script('chalet-search', get_stylesheet_directory_uri() . '../src/js/search-page.js', array(), time(), true);
    wp_localize_script('chalet-search', 'ajax_url', admin_url('admin-ajax.php'));
}
add_action('wp_enqueue_scripts', 'chalet_search_scripts');

function chalet_search()
{
    chalet_search_scripts();
    ob_start(); ?>
<div class="searchform" id="chalet-search">
    <form action="" method="get">
        <!-- <input type="text" name="search_text"> -->
        <!-- <label for="status">Property Status:</label>
        <select id="status" name="status">

            <option value="for-sale">For Sale</option>
            <option value="for-rent">For Rent</option>
        </select> -->

        <label for="price">Price:</label>
        <select id="price" name="price">
            <option value="10000">10000</option>
            <option value="20000">20000</option>
            <option value="30000">30000</option>
            <option value="40000">40000</option>
            <option value="50000">50000</option>
            <option value="60000">60000</option>
            <option value="70000">70000</option>
            <option value="80000">80000</option>
            <option value="90000">90000</option>
            <option value="100000">100000</option>
        </select>

        <label for="bedrooms">No of Bedrooms:</label>
        <select id="bedrooms" name="bedrooms">

            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>

        </select>

        <label for="bathrooms">No of Bathrooms:</label>
        <select id="bathrooms" name="bathrooms">

            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>


        <button type="submit">Search</button>
    </form>


</div>

<?php
    return ob_get_clean();
}

add_shortcode('chalet_search', 'chalet_search');

add_action('wp_ajax_chalet_search', 'chalet_search_callback');
add_action('wp_ajax_nopriv_chalet_search', 'chalet_search_callback');
function chalet_search_callback()
{
    header('Content-Type: application/json');
   
    $noofbedrooms = 0;
    if (isset($_GET['no_of_bedrooms'])) {
        $noofbedrooms = intval(sanitize_text_field($_GET['no_of_bedrooms']));
    }
    $noofbathrooms = 0;
    if (isset($_GET['no_of_bathrooms'])) {
        $noofbathrooms = intval(sanitize_text_field($_GET['no_of_bathrooms']));
    }
    $price = 0;
    if (isset($_GET['price'])) {
        $price = intval(sanitize_text_field($_GET['price']));
    }


    $results = [];
    $args = [
        'post_type' => 'chalets',
        'posts_per_page' => -1,
    ];

   
    $secondval = $price + 10000;

    $args ['meta_query'][] = [
        'key' => 'price',
        'value' => [$price,$secondval],
        'compare' => 'BETWEEN'
    ];
    $args ['meta_query'][] = [
        'key' => 'no_of_bathrooms',
        'value' => $noofbathrooms,
        'compare' => 'LIKE'
    ];
    $args ['meta_query'][] = [
        'key' => 'no_of_bedrooms',
        'value' => $noofbedrooms,
        'compare' => 'LIKE'
    ];
    

    $chalet_query = new WP_Query($args);

    while ($chalet_query -> have_posts()) {
        $chalet_query-> the_post();
        $results[] = [
          'id' => get_the_ID(),
          'title' => get_the_title(),
          'permalink' => get_the_permalink(),
          'bathroom' => get_field('no_of_bathrooms'),
          'bedroom' => get_field('no_of_bedrooms'),
          'price' => get_field('price'),
          'image' => get_field('chalet_featured_image'),
          'location' => get_field('location'),
          'sqft' => get_field('no_in_sqft'),
          'status' => get_the_category($post->ID),
          
         
        ];
    }
    echo json_encode($results);
    // print_r($_GET);
    // die();

    wp_die();
}
