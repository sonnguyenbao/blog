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
        <title><?php is_home() ? bloginfo('name') : wp_title('|', true, 'right'); ?></title>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
        <!--[if lt IE 9]>
        <script src="<?php bloginfo('template_url'); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
        <!--WP generated header-->
        <?php wp_head(); ?>
        <!--/WP generated header-->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop()) {
                        $('#toTop').fadeIn();
                    } else {
                        $('#toTop').fadeOut();
                    }
                });

                $("#toTop").click(function() {
                    //1 second of animation time
                    //html works for FFX but not Chrome
                    //body works for Chrome but not FFX
                    //This strange selector seems to work universally
                    $("html, body").animate({scrollTop: 0}, 500);
                });
            });
        </script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-37265055-4']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>
        <!-- BEGIN Tynt Script -->
        <script type="text/javascript">
            if (document.location.protocol == 'http:') {
                var Tynt = Tynt || [];
                Tynt.push('dq2Zsspver4404acwqm_6r');
                (function() {
                    var s = document.createElement('script');
                    s.async = "async";
                    s.type = "text/javascript";
                    s.src = 'http://tcr.tynt.com/ti.js';
                    var h = document.getElementsByTagName('script')[0];
                    h.parentNode.insertBefore(s, h);
                })();
            }
        </script>
        <!-- END Tynt Script -->

    </head>

    <body>
        <div id="page" class="container">

            <!-- header-container -->
            <div class="header-container">
                <!-- header -->
                <div class="header">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                        <?php if (!get_option("omr_logo_url")): ?>
                            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="foreva.vn"/>
                        <?php else: ?>
                            <img src="<?php get_option("omr_logo_url"); ?>" alt="foreva.vn"/>
                        <?php endif; ?>
                    </a>
                </div>
                <!-- /header -->

                <!-- nav-container -->
                <div class="nav-container">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => '', 'menu_class' => 'nav')); ?>
                </div>
                <!-- /nav-container -->
            </div>
            <!-- /header-container -->
            <!--Banner-->
            <div id="bigbanner">
                <?php dynamic_sidebar('banner'); ?>
            </div>
            <!--/Banner-->

            <!-- main-container -->
            <div id="content" class="col-full">