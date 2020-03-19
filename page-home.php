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
<section class="top-section">
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
</section>
<section class="categories-section">
    <div class="container">
        <h2 class="main-title h3"><?php echo get_post_meta(get_the_ID(), 'category_title', true); ?></h2>
        <div class="categories-section__description"><?php echo get_post_meta(get_the_ID(), 'category_description', true); ?></div>
        <div class="categories-section__wrapper">
            <?php get_template_part('loops/content', 'home'); ?>
        </div>
        <div class="categories-section__button-wrapper">
            <button class="btn btn-primary btn-md js-request" type="button"><?php echo get_post_meta(get_the_ID(), 'category_button_text', true); ?></button>
        </div>
    </div>
    <img class="categories-section__decor-image" src="/wp-content/themes/tortdelux/assets/img/katalog-candy.png" alt="image">
</section>
<div class="block-special">
    <?php $special_content_1 = get_field('block_special_content_1'); ?>
    <div class="container">
        <div class="block-special__wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-4">
                    <div class="block-special__title"><?php echo $special_content_1['block_special_description']; ?></div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="block-special__button-wrapper">
                        <button class="block-special__button btn btn-primary js-special-1" type="button"><?php echo $special_content_1['block_special_button_text']; ?></button>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <img class="block-special__image block-special--style" src="<?php echo $special_content_1['block_special_image']; ?>" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<section class="block-advantages">
    <div class="container">
        <h2 class="main-title h2"><?php echo get_post_meta(get_the_ID(), 'advantages_title', true); ?></h2>
        <div class="block-advantages__wrapper">
            <div class="row">
                <?php
                global $post;
                $args = array(
                    'post_type'=> 'custom_advantages',
                    'publish' => true,
                    'posts_per_page' => 40
                );
                $advantages_item = get_posts($args);
                foreach ($advantages_item as $post) {
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="block-advantages__item">
                            <?php $post_thumbnail_id = get_post_thumbnail_id( $post ); ?>
                            <img class="block-advantages__icon" src="<?php echo wp_get_attachment_image_url( $post_thumbnail_id ); ?>" alt="icon"/>
                            <p class="block-advantages__title"><?php the_title(); ?></p>
                        </div>
                    </div>
                    <?php
                }

                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="block-advantages__button-wrapper">
            <button class="btn btn-primary" type="button"><?php echo get_post_meta(get_the_ID(), 'advantages_button_text', true); ?></button>
        </div>
    </div>
</section>
<div class="block-special block-special--no-padding">
    <?php $special_content_2 = get_field('block_special_content_2'); ?>
    <div class="container">
        <div class="block-special__wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-4">
                    <img class="block-special__image" src="<?php echo $special_content_2['block_special_image']; ?>" alt="image">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="block-special__title"><?php echo $special_content_2['block_special_description']; ?></div>

                </div>
                <div class="col-12 col-lg-2">
                    <div class="block-special__button-wrapper">
                        <button class="block-special__button btn btn-primary js-special-2" type="button"><?php echo $special_content_2['block_special_button_text']; ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="review-section">
    <div class="container">
        <h2 class="main-title h3"><?php echo get_post_meta(get_the_ID(), 'review_title', true); ?></h2>
        <div class="review-section__wrapper">
            <?php echo do_shortcode('[bw-reviews]'); ?>
            <div class="review-section__button-wrapper">
                <button class="btn btn-primary js-send-review" type="button">
                    <?php echo get_post_meta(get_the_ID(), 'review_button_text', true); ?>
                </button>
            </div>
        </div>
    </div>
</section>
<div class="block-special block-special--no-padding">
    <?php $special_content_3 = get_field('block_special_content_3'); ?>
    <div class="container">
        <div class="block-special__wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="block-special__title"><?php echo $special_content_3['block_special_description']; ?></div>
                </div>
                <div class="col-12 col-lg-4">
                    <img class="block-special__image" src="<?php echo $special_content_3['block_special_image']; ?>" alt="image">
                </div>
                <div class="col-12 col-lg-2">
                    <div class="block-special__button-wrapper">
                        <button class="block-special__button btn btn-primary js-special-3" type="button"><?php echo $special_content_3['block_special_button_text']; ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
