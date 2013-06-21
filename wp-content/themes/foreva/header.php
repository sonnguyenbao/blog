<?php ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        
        <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
        <!--[if lt IE 9]>
        <script src="<?php bloginfo('template_url'); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.js" type="text/javascript"></script>
        <!--WP generated header-->
        <?php wp_head();?>
        <!--/WP generated header-->
    </head>

    <body>
        <div id="page" class="container">
            
            <!-- header-container -->
            <div class="header-container">
                <!-- header -->
                <div class="header">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                        <?php if(!get_option("omr_logo_url")):?>
                        <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="foreva.vn"/>
                        <?php else:?>
                        <img src="<?php get_option("omr_logo_url"); ?>" alt="foreva.vn"/>
                        <?php endif;?>
                    </a>
                </div>
                <!-- /header -->

                <!-- nav-container -->
                <div class="nav-container">
                    <?php wp_nav_menu(array('theme_location' => 'primary','container' => '', 'menu_class' => 'nav')); ?>
                </div>
                <!-- /nav-container -->
            </div>
            <!-- /header-container -->
            <!--Banner-->
<!--            <div id="bigbanner">
                <div class="col-full">
                    <div class="block-banner">
                        hinh anh trong nay se co thiet ke sau
                    </div>
                </div>
            </div>-->
            <!--/Banner-->

            <!-- main-container -->
            <div id="content" class="col-full">