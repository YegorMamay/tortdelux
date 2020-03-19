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

    <div class="container">
        <div class="copyright">
            <div class="date">&copy; <?php echo date('Y'); ?>. Все права защищены</div>
            <div class="developer">
                <?php _e('Developed by ', 'brainworks') ?><a href="https://brainworks.pro/" target="_blank">BRAIN WORKS</a> 
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
