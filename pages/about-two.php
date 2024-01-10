<?php 
/**
 *Template Name: Biz Haqimizda sahifa 2
 * Template Post Type: post
 */
?>

<?php
    $about_query2 = new WP_Query( ['post_types' => 'page'] );
    while ( $about_query2->have_posts() ):
        $about_query2->the_post();
        if(get_page_template_slug() === 'pages/about-two.php'):
         
?>
<div class="about_statistic">
            <div class="container">
                <div class="about_statistic-wrap">
                <?php the_content() ?>
                   
                </div>
            </div>
        </div>

        
<?php endif; ?>
<?php endwhile; ?>