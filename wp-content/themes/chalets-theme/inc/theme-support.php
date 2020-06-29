<?php

   // Add theme support

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', ['aside','gallery','link','image','quote','status','video','audio','chat']);
    add_theme_support('html5');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('custom-logo');
    add_theme_support('custom-selective-refresh-widgets');
    add_theme_support('starter-content');


    function chalets_custom_image_size()
    {
        add_image_size('chalet_thumbnail', 150, 150, false);
        add_image_size('chalet_medium', 300, 300, false);
        add_image_size('chalet_large', 1024, 1024, false);
    }

    add_action('after_setup_theme', 'chalets_custom_image_size');