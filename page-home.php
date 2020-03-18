<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<?php
$attachment_elem_id = get_post_meta(get_the_ID(), 'first_screen_image', true);
$attachment_image = wp_get_attachment_url($attachment_elem_id);
$first_screen_content = get_field('first_screen_content');
?>
<div class="top-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7">
                <div class="top-section__caption">
                    <div class="top-section__title-wrapper">
                        <span class="top-section__text"><?php echo $first_screen_content['first_screen_city_text']; ?></span>
                        <h1 class="top-section__title h2"><?php echo $first_screen_content['first_screen_title']; ?></h1>
                    </div>
                    <div class="top-section__description"><?php echo $first_screen_content['first_screen_description']; ?></div>
                    <button class="top-section__button btn btn-primary btn-lg js-order" type="button">
                        <?php echo $first_screen_content['first_screen_button_text']; ?>
                        <img src="/wp-content/themes/tortdelux/assets/img/button-cupcake.png" class="top-section__icon"
                             alt="icon">
                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <img class="top-section__image" src="<?php echo $attachment_image ?>" alt="image">
            </div>
        </div>
    </div>
</div>
<div class="categories-section">
    <div class="container">
        <?php echo do_shortcode('[sn_cat id="28, 34, 36, 38, 40, 42, 44, 46, 48" term="sn_cat"]'); ?>
    </div>
</div>

<?php get_template_part('loops/content', 'home'); ?>
<?php get_footer(); ?>
