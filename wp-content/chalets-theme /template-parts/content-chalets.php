<article id="post-<?php the_ID();?>" <?php post_class();?>>

    <div class="listing__card">
        <div class="listing__card-image">
            <div class="img-overlay"></div>
            <div class="f-img-1">
                <img src="<?php the_field('chalet_featured_image');?>">
            </div>
        </div>
        <div class="listing__card-price">
            <span>$<?php the_field('price');?></span>
            <div class="tag"><?php the_terms($post->ID, 'property_status')?></div>
        </div>
        <div class="listing__card-body">
            <!-- <h3><?php the_title()?></h3> -->
            <?php the_title('<h3><a href="' . esc_url(get_permalink()) . '">', '</a></h3>')?>
            <p><?php the_field('location');?></p>
            <span><?php the_field('no_of_bedrooms');?> bd | <?php the_field('no_of_bathrooms');?> ba |
                <?php the_field('no_in_sqft');?> sqft</span>
        </div>
    </div>

</article>