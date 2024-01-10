<?php
/**
 * Template Name: Why sahifa
 * Template Post Type: post
*/
?>
<?php 
 $why_query = new WP_Query([
   'post_type' => 'post'
 ]);
 while($why_query->have_posts()):
   $why_query->the_post();
   if(get_page_template_slug() === 'pages/why.php'):
?>
<section>
        <div class="why">
            <div class="container">
                <h2><?php the_title() ?></h2>
                <div class="why_wrapper">
                   <?php the_content() ?>
                </div>
            </div>
        </div>
</section>

<?php endif; ?>
<?php endwhile; ?>