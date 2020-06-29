<?php get_header('listing')?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="forsale__chalets">
            <?php if (have_posts()): while (have_posts()):the_post(); ?>
            <?php get_template_part('template-parts/content', 'chalets')?>
            <?php endwhile; else:?>
            <?php get_template_part('template-parts/content', 'none')?>

            <?php endif;?>
        </div>
        <!-- <p>Template: archive-chalets.php</p> -->
    </main>
</div>

<?php get_footer()?>