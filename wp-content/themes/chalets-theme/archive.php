<?php get_header();?>
<?php get_header('listing')?>

<?php if (have_posts()): while (have_posts()):the_post(); ?>
<?php get_template_part('template-parts/content')?>
<?php endwhile; else:?>
<?php get_template_part('template-parts/content', 'none')?>

<?php endif;?>
<p>Template: archive.php</p>


<?php get_footer();?>