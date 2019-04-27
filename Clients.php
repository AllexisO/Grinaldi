<?php
/*
Template Name: Клиенты
*/
?>

<?php get_header(); ?>

<section id="clients">
    <div class="container-about-us container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="banner-about-us">
                <div class="topic-clients">
                    <p class="text-center"><?php echo tStr('Clients'); ?></p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 clients-info" style="padding-top:15px;">
                    <?php echo do_shortcode( '[envira-gallery id="488"]' ); ?>
                </div>  
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>