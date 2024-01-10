<?php 
/**
 * Template Name: Aloqa sahifasi 1
 * Template Post Type: post
 */
?>

<?php
    $contactone_query = new WP_Query( ['post_types' => 'page'] );
    while ( $contactone_query->have_posts() ):
        $contactone_query->the_post();

        if(get_page_template_slug() === 'pages/contactone.php'):
         
?>

<div class="bid">
        <div class="container">
            <h3><?php the_title() ?></h3>
            <p><?php the_content() ?></p>
            <form class="bid_form" action="">
                <div class="bid_form_grid">
                    <div class="bid_form-item"><input type="text" placeholder="Имя"></div>
                    <div class="bid_form-item"><input type="text" placeholder="+998 (__) ___-__-__"></div>
                    <div class="bid_form-item"><input type="text" placeholder="E-mail"></div>
                    <div class="bid_form-item"><button>отрпавить</button></div>
                </div> <label class="agree"><input type="checkbox"> <span></span>* Я согласен на обработку моих данных </label>

            </form>
        </div>
    </div>

<?php endif; ?>
<?php endwhile; ?>