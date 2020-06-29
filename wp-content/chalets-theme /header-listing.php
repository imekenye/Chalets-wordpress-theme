 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chalets & Cavair</title>

    <?php wp_head()?>
</head>

<body>
    <header class="header">
        <!-- NAV SECTION -->

        <nav class="nav">
            <div class="containerWrapper">
                <!-- <img src="./images/svg/logo.svg" alt="logo" class="logo custom-logo" />
           -->
                <div class="custom-logo"><?php the_custom_logo();?></div>
                <?php
            wp_nav_menu(
    array(
                    'theme_location'=>'top-menu',
                    'menu_class' =>'nav__list'
                )
);
            ?>
            <svg id="Layer_1" class="js-search-trigger" width="30" data-name="Layer 1"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 484.42">
                    <defs>
                        <style>
                        .cls-1 {
                            fill: #fff;
                        }
                        </style>
                    </defs>
                    <title>search</title>
                    <path class="cls-1"
                        d="M508.87,478.71,360.14,330a201.64,201.64,0,0,0,45.19-127.31C405.33,90.92,314.42,0,202.67,0S0,90.92,0,202.67,90.92,405.33,202.67,405.33A201.64,201.64,0,0,0,330,360.14L478.71,508.88a10.67,10.67,0,0,0,15.08,0l15.09-15.09A10.66,10.66,0,0,0,508.87,478.71Zm-306.2-116c-88.23,0-160-71.77-160-160s71.77-160,160-160,160,71.77,160,160S290.9,362.67,202.67,362.67Z"
                        transform="translate(0 0)" />
                </svg>

            </div>
        </nav>
        <!-- END OF NAV SECTION -->
        <div class="listing-header">
            <div class="header-overlay">
                <h2><?php the_title()?></h2>
            </div>
            <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>"
                height="<?php echo absint(get_custom_header()->height); ?>"
                alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">

        </div>
    </header>