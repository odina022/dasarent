<?php 
/**
 *Template Name: Slider sahifa
 * Template Post Type: post
 */
?>


<?php
    $slider_query = new WP_Query( ['post_types' => 'page'] );
    while ( $slider_query->have_posts() ):
        $slider_query->the_post();

        if(get_page_template_slug() === 'pages/slider.php'):
?>

<div class="review">
        <div class="container">
            <h4><?php the_title() ?></h4>
            

            <div class="swiper-container review_slider d-flex">
                <?php the_content() ?>

        </div>
        <div class="swiper-button-next review_slider-button review_slider-next"></div>
        <div class="swiper-button-prev review_slider-button review_slider-prev"></div>
    </div>


<?php endif; ?>
<?php endwhile; ?>