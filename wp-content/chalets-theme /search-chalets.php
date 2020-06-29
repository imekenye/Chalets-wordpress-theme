<?php
/*
Template Name: Chalet Template
*/
$propertystatus = get_terms([
    'taxonomy' => 'category',
    'hide_empty' => false,
])


?>
<!-- <pre>
    <?php print_r($propertystatus)?>
</pre> -->
<form action="<?php echo home_url('/search-chalets/')?>">
    <input type="text" name="keyword" placeholder="Type a keyword"
        value="<?php echo isset($_GET['keyword']) ? $_GET['keyword']:'';?>">
    <select name="chalets" id="">
        <?php foreach ($propertystatus as $property):?>
        <option <?php if (isset($_GET['property'])&&($_GET['property'] == $brand->slug)): ?> <?php endif; ?>
            value="<?php echo $property->slug;?>"><?php echo $property->name;?>
        </option>
        <?php endforeach;?>
    </select>
    <button type="submit">Search</button>

</form>

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