<?php
/* Template Name: Chale */

$propertystatus = get_terms([
'taxonomy' => 'property_status',
'hide_empty' => false,
]);

$args = array(
    'post_type' => 'chalets',
    'meta_key' => 'no_of_bedrooms',
    'meta_value' => 3,
);
$the_query = new WP_Query($args)
?>

<?php get_header('listing');?>





<pre>
    <?php print_r($the_query)?>
</pre>



<?php
$arg =[
    'post_type'=> 'chalets',
    'posts_per_page' => 0,
    'tax_query'=>[],
    'meta_query' => [
        'relation' =>'AND',
    ],
];

if (isset($_GET['keyword'])) {
    if (!empty($_GET['keyword'])) {
        $args['s']= $_GET['keyword'];
    }
}
$query = new WP_Query($args);
?>

<?php if ($query->have_posts()):?>
<?php while ($query->have_posts()):$query->the_post();?>
<?php the_title();?>

<?php endwhile;?>
<?php else:?>
<p>There are no results!</p>
<?php endif;?>

<!-- <pre><?php print_r($query)?></pre> -->

<?php get_footer()?>