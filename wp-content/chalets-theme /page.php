<?php get_header('listing');?>
<?php
  echo do_shortcode(
    '[chalets_search_form]'
);
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if (have_posts()): while (have_posts()):the_post(); ?>

        <?php endwhile; else:?>
        <?php get_template_part('template-parts/content', 'none')?>

        <?php endif;?>
        <p>Template: page.php</p>
    </main>
</div>

<?php get_footer()?>