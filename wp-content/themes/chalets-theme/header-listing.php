 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Chalets & Cavair</title>

     <?php wp_head()?>
 </head>

 <body data-barba="wrapper">
     <main data-barba="container" data-barba-namespace="<?php echo get_the_ID()?>">
         <header>
             <div id="chalet-form">

                 <form action="/search" class="wrapper-search" id='wrapper-search'>
                     <div class="close-search"><span>X</span></div>
                     <div class="search_box">
                         <div class="search_field">
                             <input type="text" class="input" id="search-input" placeholder="Search chalet by name">
                             <svg class="svg-icon" viewBox="0 0 20 20">
                                 <path
                                     d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z">
                                 </path>
                             </svg>
                         </div>
                         <div class="results" id="results">

                         </div>
                     </div>
                 </form>
             </div>
             <!-- NAV SECTION -->

             <nav class="nav">
                 <div class="containerWrapper">
                     <div class="custom-logo"><?php the_custom_logo();?></div>
                     <div class="close__nav">x <span>Close</span> </div>
                     <?php
            wp_nav_menu(
    array(
                    'theme_location'=>'top-menu',
                    'menu_class' =>'nav__list',
                    
                )
);
            ?>
                     <?php wp_nav_menu(
                array(
                    'theme_location'=>'mobile-menu',
                    'menu_class' =>'nav__list-mobile',
                    'container' => 'div',
                    'container_class' => 'nav__wrapper'
                )
            );
            ?>
                     <div class="nav__right">
                         <svg id="sicon" class="js-search-trigger" width="40" data-name="Layer 1"
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

                         <div class="hamburger__menu" id="hamburger">
                             <span></span>
                             <span></span>
                             <span></span>
                         </div>

                     </div>
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