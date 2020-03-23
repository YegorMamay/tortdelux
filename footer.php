<div class="sp-xs-4"></div>
<footer class="footer js-footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>
    <div class="footer__wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="footer__row">
                        <div class="footer__column footer--width">
                            <div class="footer__logo">
                                <?php get_default_logo_link([
                                    'name' => 'logo-white.svg',
                                    'options' => [
                                        'class' => 'logo-img',
                                        'width' => 160,
                                        'height' => 50,
                                    ],
                                ]) ?>
                            </div>
                            <div class="footer__social">
                                <p class="footer__social-title"><?php echo get_post_meta(get_the_ID(), 'footer_social_text', true); ?></p>
                                <?php echo do_shortcode('[bw-social]'); ?>
                            </div>
                        </div>
                        <div class="footer__column">
                            <p class="footer__title"><?php echo get_post_meta(get_the_ID(), 'footer_category_title', true); ?></p>
                            <div class="footer__nav-wrapper">
                                <?php if (has_nav_menu('main-nav')) { ?>
                                    <div class="footer__nav">
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
                                    <div class="footer__nav">
                                        <?php wp_nav_menu(array(
                                            'theme_location' => 'second-menu',
                                            'container' => false,
                                            'menu_class' => 'menu-container',
                                            'menu_id' => '',
                                            'fallback_cb' => 'wp_page_menu',
                                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'depth' => 3
                                        )); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <p class="footer__title"><?php echo get_post_meta(get_the_ID(), 'footer_contact_title', true); ?></p>
                    <div class="footer__row">
                        <div class="footer__column footer--height">
                            <div class="footer__field">
                                <?php
                                $address = get_theme_mod('bw_additional_address');
                                if (!empty($address)) { ?>
                                    <span class="footer__icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                    <span class="footer__text">
                                <?php echo pll_e('Address'); ?>
                                </span>
                                <?php } ?>
                            </div>
                            <div class="footer__field">
                                 <span class="footer__icon">
                                    <i class="fal fa-clock"></i>
                                </span>
                                <span class="footer__text">
                                     <?php pll_e('Work Schedule'); ?>
                                </span>
                            </div>
                        </div>
                        <div class="footer__column footer--height">
                            <?php echo do_shortcode('[bw-phone]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom-section">
        <div class="container">
            <div class="copyright">
                <div class="date">&copy; <?php echo date('Y'); ?>. <?php pll_e('all-right-reserved'); ?></div>
                <div class="developer">
                    <?php _e('Developed by ', 'brainworks') ?><a href="https://brainworks.pro/" target="_blank">BRAIN
                        WORKS</a>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper end Do not delete! -->

<?php scroll_top(); ?>

<div class="is-hide">
    <?php svg_sprite(); ?>
    <svg width="0" height="0" class="hidden">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511.991" id="icon_left">
            <path d="M153.433 255.991L381.037 18.033c4.063-4.26 3.917-11.01-.333-15.083-4.229-4.073-10.979-3.896-15.083.333L130.954 248.616c-3.937 4.125-3.937 10.625 0 14.75L365.621 508.7a10.65 10.65 0 0 0 7.708 3.292c2.646 0 5.313-.979 7.375-2.958 4.25-4.073 4.396-10.823.333-15.083l-227.604-237.96z"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.995 511.995" id="icno_right">
            <path d="M381.039 248.62L146.373 3.287C142.29-.942 135.54-1.13 131.29 2.954c-4.25 4.073-4.396 10.823-.333 15.083L358.56 255.995 130.956 493.954c-4.063 4.26-3.917 11.01.333 15.083a10.63 10.63 0 0 0 7.375 2.958 10.65 10.65 0 0 0 7.708-3.292L381.039 263.37c3.938-4.125 3.938-10.625 0-14.75z"></path>
        </symbol>
    </svg>
</div>

<?php wp_footer(); ?>

</body>
</html>
