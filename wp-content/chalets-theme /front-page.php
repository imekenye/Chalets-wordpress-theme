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
        <form action="" class="form">
            <!-- <div class="form-nav">
                <div class="form-nav__forsale">
                    <a href="/">For Sale</a>
                </div>
                <div class="form-nav__forrent">
                    <a href="/">For Rent</a>
                </div>
            </div> -->
            <div class="form-select">
                <div class="form-select__beds custom-select">
                    <select name="Beds" id="Beds" class="select-bed">
                        <option value="0">Beds</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
                <div class="form-select__baths custom-select">
                    <select name="Baths" id="Baths" class="select-baths">
                        <option value="0">Baths</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </div>

            <div class="form-range">
                <div class="custom-rangeslider">
                    <label for="price">Price Range(USD)</label>
                    <input class="custom-rangeInput" title="Percentage" id="range-slider1" type="range" min="0"
                        max="500000" value="50000" step="1" data-tooltip="true" aria-controls="rangeTooltip rangeLabel"
                        aria-live="polite" />
                    <span class="custom-rangeslider__tooltip">0</span>
                    <span class="custom-rangeslider__label">
                        <span class="custom-rangeslider__label-min">0</span>
                        <span class="custom-rangeslider__label-max">500,000</span>
                    </span>
                </div>
            </div>
            <button class="form-btn">Search</button>
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

<section class="enquiry__form">
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
</section>


<?php endwhile; else:?>
<?php get_template_part('template-parts/content', 'none')?>

<?php endif;?>


<!-- END OF CONTACT FORM SECTION -->
<?php get_footer()?>