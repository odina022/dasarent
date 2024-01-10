<?php 
/**
 * Template Name: Aloqa sahifasi
 * Template Post Type: post
 */
?>

<?php
    $contact_query = new WP_Query( ['post_types' => 'page'] );
    while ( $contact_query->have_posts() ):
        $contact_query->the_post();

        if(get_page_template_slug() === 'pages/contact.php'):
         
?>
<footer class="footer">
        <div class="footer_wrap">
            <form class="footer_form" action="">
                <h4><?php the_title() ?></h4>
                <p><?php the_content() ?></p>
                <div class="footer_form-grid phone-letter">
                    <div class="grid_item">
                        <span class="icon"><i class="fa fa-phone-alt"></i>+998 (99) 531 35 10</span>
                    </div>
                    <div class="grid_item phone-letter">
                        <span class="icon"><i class="fa fa-envelope"></i>dasarent@gmail.com</span>
                    </div>

                    <div class="grid_item"><input type="text"></div>
                    <div class="grid_item"><input type="text"></div>
                    <div class="grid_item"><input type="text"></div>
                    <div class="grid_item"><button class="btn" type="submit">отрпавить</button></div>
                </div>
 <?php
		    	wp_nav_menu(
		    		array(
		    			'theme_location' => 'header-social',
		    			'menu_class'        => 'social',
						'container'    => false,
		    		)
		    	);
 ?>
                <!-- <ul class="footer_social">
                    <li>
                        <a href="#"><img src="images/whatsapp 1.png" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/twitter 1.png" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/instagram-sketched (2) 1.png" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/facebook (1) 1.png" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/telegram 1.png" alt=""></a>
                    </li>
                </ul> -->
                <p class="copy">Dasarent company &copy;2020 Designed by Developer</p>
            </form>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2313.3528353687984!2d-1.2310433842205342!3d54.562532980251866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487eed03b6f64855%3A0x2e6d9a872f68dbe1!2sAcklam%20Iron%20Steel%20%26%20Athletic%20Club!5e0!3m2!1sen!2s!4v1619782813888!5m2!1sen!2s"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

</footer>
<?php endif; ?>
<?php endwhile; ?>