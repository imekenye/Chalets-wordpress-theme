<?php get_header();?>
<?php get_header('status')?>
<div class="forsale__chalets">
    <?php if (have_posts()): while (have_posts()):the_post(); ?>
    <?php get_template_part('template-parts/content', 'chalets')?>
    <?php endwhile; else:?>
    <?php get_template_part('template-parts/content', 'none')?>

    <?php endif;?>
</div>
<p>Template: taxonomy.php</p>


<?php get_footer();?>