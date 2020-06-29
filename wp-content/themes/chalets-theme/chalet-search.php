<?php
/* Template Name: Chalet Search */?>
<?php get_header('listing');?>



<?php
  echo do_shortcode(
    '[chalet_search]'
);
?>


<?php
    if ($_GET['search_text'] && !empty($_GET['search_text'])) {
        $text =$_GET['search_text'];
    }
    if ($_GET['type'] && !empty($_GET['type'])) {
        $type =$_GET['type'];
    }
?>

<?php
    $args = array(
        'post_type' => $type,
        'post_per_page' => -1,
        's' => $text
    );
    $query = new WP_Query($args);
    while ($query->have_posts()) : $query -> the_post();
?>


<div id="search-results" class="search_results">
    <div id="listing-card">
        <div class="listing__card">
        <div class="listing__card-image">
          <div class="img-overlay"></div>
          <div class="f-img-1"></div>
        </div>
        <div class="listing__card-price">
          <span>$22,800,000</span>
          <div class="tag">For Sale</div>
        </div>
        <div class="listing__card-body">
          <h3>Chalet Dalmat</h3>
          <p>651 Pfister Dr, Aspen, Co 81611</p>
          <span>8 bd | 11 ba | 13,390 sqft</span>
        </div>
      </div>
    </div>
    
    <strong>
        <?php
        if (get_post_type() == 'chalets') {
            echo 'Chalet';
        }
        ?>
    </strong>

</div>
<?php endwhile; wp_reset_query();?>

<?php get_footer();?>