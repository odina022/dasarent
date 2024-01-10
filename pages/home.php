<?php
/**
 * Template Name:Glavniy sahifa
*/
?>

<?php get_header() ?>

<div class="header_content">
 
            <?php
		    	wp_nav_menu(
		    		array(
		    			'theme_location' => 'header-social',
		    			'menu_class'        => 'social',
						'container'    => false,
		    		)
		    	);
		 	?>
       
        <div class="container">
            <div class="header_content-wrapper">
                <div class="text">
                    <h1><?= the_title() ?></h1>
                   <?php the_content() ?>
                  
                </div>
                <div class="header_content-image">
                    <?php  the_post_thumbnail() ?>
               </div>
            </div>
        </div>
    </div>

<?php require get_template_directory() . '/pages/why.php' ?>
<?php require get_template_directory() . '/pages/technics.php' ?>
<?php require get_template_directory() . '/pages/contactone.php' ?>
<div class="about">
    <?php require get_template_directory() . '/pages/about.php' ?>
    <?php require get_template_directory() . '/pages/about-two.php' ?>
</div>

<?php require get_template_directory() . '/pages/slider.php' ?>
<?php require get_template_directory() . '/pages/contact.php' ?>
