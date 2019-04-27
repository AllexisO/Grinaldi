<?php
/*
Template Name: Продукты
*/
?>

<?php get_header(); ?>

<section id="products">
    <div class="container-about-us container">
        <div class="banner-about-us row">
            <div class="topic-about-us">
                <p class="text-center"><?php echo tStr('Our_products'); ?></p>
            </div>
            
            <div class="products-images products-wrapper" style="margin-left:-3px; margin-right:-3px;">
                <div class="col-md-12 category-wrapper" style="padding:0;">
                    <!-- Block 1 -->
                    <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0;">
                    <?php
                        // page id 21 will get category ID 12 posts, page 16 will get category 32 posts, page 28 will get category 17 posts
                        if (is_page('21') ) {
                        $cat = array(12);
                        } elseif ( is_page('16') ) {
                        $cat = array(32);
                        } elseif ( is_page('28') ) {
                        $cat = array(17);
                        } else {
                        $cat = '';
                        }
                        $showposts = -1; // -1 shows all posts
                        $do_not_show_stickies = 0; // 0 to show stickies
                        $args=array(
                        'category__in' => $cat,
                        'showposts' => $showposts,
                        'caller_get_posts' => $do_not_show_stickies
                        );
                        $my_query = new WP_Query($args); 
                    ?>

                    <?php if( $my_query->have_posts() ) : ?>

                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <div class="col-md-4 col-sm-4 col-xs-4 paddings">
                            <div class="category-content">
                                <div class="post-thumb img-responsive">
                                        <!-- Photo miniature -->
                                    <a href="<?php the_permalink(); ?>" class="box living">
                                        <?php if(has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                        <?php endif; ?>   

                                        <div class="category-overlay-products">
                                            <p class="change-overlay"><?php the_title(); ?></p>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>    
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>