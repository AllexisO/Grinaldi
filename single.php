<?php get_header(); ?>


<!-- Single page for products-->
<section id="products">
    <div class="container-about-us container">
        <div class="banner-about-us row">
            <div class="topic-about-us">
                <p class="text-center"><?php the_title(); ?></p>
            </div>
            <div class="products-images products-wrapper" style="margin-left:-3px; margin-right:-3px;">
                <div class="col-md-12 category-wrapper" style="padding:0;">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0;">
                        <?php foreach (get_the_category() as $cat) : ?>
                        <div class="col-md-4 col-sm-4 col-xs-4 paddings">
                            <div class="category-content">
                                <div class="post-thumb img-responsive">
                                    <a href="<?php echo get_category_link($cat->term_id); ?>" class="box living">
                                        <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" class="box living" />
                                        <div class="category-overlay-products">
                                            <p class="change-overlay"><?php echo $cat->cat_name; ?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>
<!-- /Single page for products -->

<?php get_footer(); ?>