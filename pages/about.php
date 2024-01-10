<?php 
/**
 *Template Name: Biz Haqimizda sahifa
 * Template Post Type: post
 */
?>

<?php
    $about_query = new WP_Query( ['post_types' => 'page'] );
    while ( $about_query->have_posts() ):
        $about_query->the_post();

        if(get_page_template_slug() === 'pages/about.php'):
?>


<div class="about_content">
            <div class="container">
                <h2><?php the_title() ?></h2>
                <p><?php the_content() ?></p>
      </div>  
</div>



 
<?php endif; ?>
<?php endwhile; ?>