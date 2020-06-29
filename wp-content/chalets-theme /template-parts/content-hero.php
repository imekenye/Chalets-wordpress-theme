<!-- HERO SECTION -->

<div class="hero">
    <?php
$the_query = new WP_Query(array(
    'post_type'=>'chalets',
    'tax_query' => array(
        array(
            'taxonomy'=> 'chalet-category',
            'field' => 'slug',
            'terms' => array('featured-main')
        )
    )
));
while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <div class="hero__left">
        <h1 class="hero__left-heading"><?php the_field('chalet_name');?></h1>
        <div class="hero__left-location">
            <img src="<?php echo get_theme_file_uri('/assets/images/svg/hero-location.svg') ?>" alt="location" />
            <p><?php the_field('location');?></p>
        </div>
        <p class="hero__left-specs">
            <?php the_field('no_of_bedrooms');?> bd | <?php the_field('no_of_bathrooms');?> ba |
            <?php the_field('no_in_sqft');?> sqft
        </p>
        <button class="hero__left-button">
            <a href="/" class="hero__left-button-link">View Chalet</a>
        </button>
    </div>
    <div class="hero__right">
        <div class="hero__right-image">
            <img src="<?php the_field('chalet_featured_image');?>">
        </div>
    </div>
</div>
<div class="gallery wrapper">
    <div class="gallery__image-one">
        <img class="g-img" src="<?php the_field('chalet_featured_image_one');?>" alt="" />
    </div>
    <div class="gallery__image-two">
        <img class="g-img" src=<?php the_field('chalet_featured_image_two');?>" alt="" />
    </div>
    <div class="gallery__image-three">
        <img class="g-img" src="<?php the_field('chalet_featured_image_three');?>" alt="" />
    </div>
    <div class="gallery__image-four">
        <img class="g-img" src="<?php the_field('chalet_featured_image_four');?>" alt="" />
    </div>
    <?php endwhile; ?>
    <?php wp_reset_query();?>
</div>
</header>