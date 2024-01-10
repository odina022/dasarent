<?php 
/**
 *Template Name: Tech page
 */
?>

<?php
    $this_template = 'pages/technics.php';
    if(get_page_template_slug() === $this_template):
        get_header();
    endif;


    $technic_query = new WP_Query( ['post_type' => 'page'] );
    while ( $technic_query->have_posts() ):
        $technic_query->the_post();

        if(get_page_template_slug() === $this_template):
            $technic_title = get_the_title();
            $technic_link = get_the_permalink();
            break;
        endif;
    endwhile;
    wp_reset_postdata();

?>
    <div class="category_product">
        <div class="container">
            <h2>Тexnika</h2>
            <div class="category_product_grid">


            <?php 
            $number_of_categories = get_page_template_slug() === $this_template ? 'all': 8;
            $categories = $terms = get_terms([
                'taxonomy' => 'tech_category',
                'hide_empty' => false,
                'number'     => $number_of_categories,
            ]); 
            ?>

            <?php        ?>     

        <?php foreach($categories as $category): ?>
                <div class="category_product_item">
                    <div class="category_product_item-content">
                        <?php $image_category = get_field('picture',$category); ?>
                        <img src="<?= $image_category['url'] ?>" alt="">
                        <a class="category_product_item-link" href="#"><?= $category->name ?></a>
                    </div>
                </div>
        <?php endforeach; ?>
            </div>
            <a href="#" class="category_prodcut_link-more">More info</a>
        </div>
    </div>