<?php
/*
Template Name: Партнеры
*/
?>

<?php get_header(); ?>

<section id="partners">
    <div class="container-about-us container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="banner-about-us">
                <div class="topic-about-us">
                    <p class="text-center"><?php echo tStr('Our_partners'); ?></p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0;">
                    <?php echo do_shortcode( '[envira-gallery id="631"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>