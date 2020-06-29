<?php get_header()?>



<?php if (have_posts()): while (have_posts()):the_post(); ?>
<div class="hero">
    <?php
$the_query = new WP_Query(array(
    'post_type'=>'chalets',
     'posts_per_page' => '1',
    'tax_query' => array(
        array(
            'taxonomy'=> 'property_status',
            'field' => 'slug',
            'terms' => array('featured-main')
        )
    )
));
while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <div class="hero__left">
        <h1 class="hero__left-heading"><?php the_field('chalet_name');?></h1>
        <div class="hero__left-location">
            <img src="<?php echo get_theme_file_uri('/assets/images/hero-location.svg') ?>" alt="location" />
            <p><?php the_field('location');?></p>
        </div>
        <p class="hero__left-specs">
            <?php the_field('no_of_bedrooms');?> bd | <?php the_field('no_of_bathrooms');?> ba |
            <?php the_field('no_in_sqft');?> sqft
        </p>
        <button class="hero__left-button">
            <a href="<?php the_permalink();?>" class="hero__left-button-link">View Chalet</a>
        </button>
    </div>
    <div class="hero__right">
        <div class="hero__right-image">
            <img src="<?php the_field('chalet_featured_image');?>">
        </div>
    </div>
</div>
<div class="gallery wrapper">
    <a class="gallery__image-one fancybox" href="<?php the_field('chalet_featured_image_one');?>" data-fancybox
        data-caption="<?php the_title()?>">
        <img class="g-img" src="<?php the_field('chalet_featured_image_one');?>" alt="" />
    </a>

    <a class="gallery__image-two fancybox" href="<?php the_field('chalet_featured_image_two');?>" data-fancybox
        data-caption="<?php the_title()?>">
        <img class="g-img" src="<?php the_field('chalet_featured_image_two');?>" alt="" />
    </a>

    <a class="gallery__image-three fancybox" href="<?php the_field('chalet_featured_image_three');?>" data-fancybox
        data-caption="<?php the_title()?>">
        <img class="g-img" src="<?php the_field('chalet_featured_image_three');?>" alt="" />
    </a>
    <a class="gallery__image-four fancybox" href="<?php the_field('chalet_featured_image_four');?>" data-fancybox
        data-caption="<?php the_title()?>">
        <img class="g-img" src="<?php the_field('chalet_featured_image_four');?>" alt="" />
    </a>
    <?php endwhile; ?>
    <?php wp_reset_query();?>
</div>
</header>
<!-- FORM SECTION -->

<section class="search-form">
    <div class="search-form__left-top">
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('chalets_customform_image'));?>" alt="">
    </div>
    <div class="search-form__left-bottom">
        <span><?php echo get_theme_mod('chalets_customform_headline')?></span>
        <div class="rect"></div>
    </div>
    <div class="search-form__right">
        <form action="/search-page" class="form">
            <!-- <div class="form-nav">
                <div class="form-nav__forsale">
                    <a href="/">For Sale</a>
                </div>
                <div class="form-nav__forrent">
                    <a href="/">For Rent</a>
                </div>
            </div> -->
            <div class="form-select">

            </div>

            <div class="dream">
                <h2>Looking for your dream chalet?

                </h2>
            </div>
            <div class="btnarea">
                <button class="form-btn" type="submit">Search now! </button>
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                </svg>
            </div>
        </form>
    </div>
</section>

<!-- END OF FORM SECTION -->

<!-- FEATURED CHALETS SECTION -->

<section class="featured">
    <div class="featured__heading">
        <h1>Featured chalets</h1>
        <div class="featured__heading-rect"></div>
    </div>

    <div class="featured__chalets">

        <div class="featured__chaletsRight">
            <?php
$the_featured_query = new WP_Query(array(
    'post_type'=>'chalets',
    'posts_per_page' => '8',
    'tax_query' => array(
        array(
            'taxonomy'=> 'property_status',
            'field' => 'slug',
            'terms' => array('for_sale')
        )
    )
));
while ($the_featured_query->have_posts()) : $the_featured_query->the_post(); ?>
            <div class="listing__card" id="post-<?php the_ID();?>" <?php post_class();?>>
                <div class="listing__card-image">
                    <div class="img-overlay"></div>
                    <div class="f-img-1">
                        <img src="<?php the_field('chalet_featured_image');?>">
                    </div>
                </div>
                <div class="listing__card-price">
                    <span>$<?php the_field('price');?></span>
                    <div class="tag">For Sale</div>
                </div>
                <div class="listing__card-body">
                    <?php the_title('<h3><a href="' . esc_url(get_permalink()) . '">', '</a></h3>')?>
                    <p><?php the_field('location');?></p>
                    <span><?php the_field('no_of_bedrooms');?> bd | <?php the_field('no_of_bathrooms');?> ba |
                        <?php the_field('no_in_sqft');?> sqft</span>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query();?>


        </div>
    </div>
</section>

<!-- END OF FEATURED CHALETS SECTION -->

<!-- CONTACT FORM SECTION -->

<!-- <section class="enquiry__form">
    <div class="enquiry__form-heading">
        <h3>Enquire</h3>
    </div>
    <form action="">
        <input type="text" placeholder="Your Name" class="form__input-text" />
        <input type="email" placeholder="Email Address" class="form__input-email" />
        <input type="text" placeholder="Subject" class="form__input-subject" />
        <textarea name="" id="" cols="30" rows="10" placeholder="How can we help you?"
            class="form__input-textarea"></textarea>
        <button class="form__input-btn">Submit</button>
    </form>
</section> -->


<?php endwhile; else:?>
<?php get_template_part('template-parts/content', 'none')?>

<?php endif;?>


<!-- END OF CONTACT FORM SECTION -->
<?php get_footer()?>