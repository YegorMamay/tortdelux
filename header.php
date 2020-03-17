<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">

    <title><?php
        if (is_front_page()) {
            echo bloginfo('name');
        } elseif (is_post_type_archive()) {
            echo post_type_archive_title();
        } elseif (!is_front_page() || !is_page()) {
            echo single_post_title();
        } elseif (!is_front_page() || !is_single()) {
            echo the_title();
        }
        ?></title>

    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- OpenGraph -->
    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:locale:alternate" content="ru_RU"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php
    if (is_front_page()) {
        echo bloginfo('name');
    } elseif (is_post_type_archive()) {
        echo post_type_archive_title();
    } elseif (!is_front_page() || !is_page()) {
        echo single_post_title();
    } elseif (!is_front_page() || !is_single()) {
        echo the_title();
    }
    ?>"/>
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:url" content="<?php echo esc_url(site_url()); ?>"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:image" content="<?php echo esc_url(the_post_thumbnail_url()); ?>"/>
    <meta property="og:image:secure_url" content="<?php echo esc_url(the_post_thumbnail_url()); ?>"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="628"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="<?php
    if (is_front_page()) {
        echo bloginfo('name');
    } elseif (is_post_type_archive()) {
        echo post_type_archive_title();
    } elseif (!is_front_page() || !is_page()) {
        echo single_post_title();
    } elseif (!is_front_page() || !is_single()) {
        echo the_title();
    }
    ?>"/>
    <meta name="twitter:image" content="<?php echo esc_url(the_post_thumbnail_url()); ?>"/>
    <!-- OpenGraph end-->

    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<?php wp_body_open(); ?>
<div class="wrapper js-container"><!--Do not delete!-->

    <header class="header hide-on-mobile">
            <div class="container">
                <div class="header__top-section">
                    <div class="header__logo">
                        <?php get_default_logo_link([
                            'name'    => 'logo.svg',
                            'options' => [
                                'class'  => 'logo-img',
                                'width'  => 160,
                                'height' => 50,
                            ],
                        ]) ?>
                    </div>
                    <div class="header__phone-wrapper">
                    <span class="header-icon">
                        <i class="fas fa-phone-alt"></i>
                    </span>
                        <?php echo do_shortcode('[bw-phone]'); ?>
                    </div>
                    <div class="header__content-wrapper">
                        <?php
                        $address = get_theme_mod('bw_additional_address');
                        if (!empty($address)) { ?>
                        <span class="header-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        <span class="header__text">
                        <?php echo pll_e('Address'); ?>
                        </span>
                        <?php } ?>
                        <?php if (has_nav_menu('language-switcher')) { ?>
                            <nav class="nav language-switcher">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'language-switcher',
                                    'container' => false,
                                    'menu_class' => 'menu-container',
                                    'menu_id' => '',
                                    'fallback_cb' => 'wp_page_menu',
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth' => 3
                                )); ?>
                            </nav>
                        <?php } ?>
                        <button type="button" class="btn btn-sm btn-secondary <?php the_lang_class('js-call-back'); ?>">
                            <?php pll_e('Call-back', 'brainworks'); ?>
                        </button>
                    </div>
                </div>
            </div>
            <div class="header__bottom-section">
                <div class="container">
                    <nav class="nav-wrapper">
                        <?php if (has_nav_menu('main-nav')) { ?>
                            <div class="nav js-menu">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'main-nav',
                                    'container' => false,
                                    'menu_class' => 'menu-container',
                                    'menu_id' => '',
                                    'fallback_cb' => 'wp_page_menu',
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth' => 3
                                )); ?>
                            </div>
                        <?php } ?>
                        <?php if (has_nav_menu('second-menu')) { ?>
                            <div class="nav js-menu">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'second-menu',
                                    'container' => false,
                                    'menu_class' => 'menu-container',
                                    'menu_id' => '',
                                    'fallback_cb' => 'wp_page_menu',
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth' => 3
                                )); ?>
                                <div class="header-social">
                                    <?php echo do_shortcode('[bw-social]'); ?>
                                </div>
                            </div>
                        <?php } ?>
                    </nav>
                </div>
            </div>
    </header>

    <!-- Mobile menu start-->
    <div class="nav-mobile-header">
        <div class="social-mob"><?php echo do_shortcode('[bw-social]'); ?></div>
        <div class="logo"><?php get_default_logo_link(); ?></div>
        <button class="hamburger js-hamburger" type="button" tabindex="0">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
        </button>
    </div>
    <?php if (has_nav_menu('main-nav')) { ?>
        <nav class="nav js-menu hide-on-desktop">
            <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
            <?php wp_nav_menu(array(
                'theme_location' => 'main-nav',
                'container' => false,
                'menu_class' => 'menu-container',
                'menu_id' => '',
                'fallback_cb' => 'wp_page_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 3
            )); ?>
            <?php if (has_nav_menu('second-menu')) { ?>
                <div class="mobile-menu">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'second-menu',
                        'container' => false,
                        'menu_class' => 'menu-wrapper',
                        'menu_id' => '',
                        'fallback_cb' => 'wp_page_menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 3
                    )); ?>
                </div>
            <?php } ?>
            <?php if (has_nav_menu('language-switcher')) { ?>
                <div class="mobile-language">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'language-switcher',
                        'container' => false,
                        'menu_class' => 'menu-container',
                        'menu_id' => '',
                        'fallback_cb' => 'wp_page_menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 3
                    )); ?>
                </div>
            <?php } ?>
            <div class="mobile-phones">
                <?php echo do_shortcode('[bw-phone]'); ?>
            </div>
        </nav>
    <?php } ?>
    <!-- Mobile menu end-->
