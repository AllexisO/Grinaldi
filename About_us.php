<?php
/*
Template Name: О нас
*/
?>

<?php get_header(); ?>

<!-- About Us -->
<section id="about-us">
    <div class="container-about-us container">
        <div class="col-md-12">
            <div class="banner-about-us">
                <div class="topic-about-us">
                    <p class="text-center"><?php echo tStr('About_us'); ?></p>
                </div>
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <div class="image-about-us col-md-12 col-sm-12 col-xs-12">
                    <img src="<?php bloginfo('template_url'); ?>/img/about_us.jpg" class="img-responsive" alt="about-us">
                    <p class="context-about-us" style="text-align:left;" <?php the_content(); ?></p>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>