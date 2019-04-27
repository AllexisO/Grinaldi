<?php get_header(); ?>


<!-- Products -->
<section id="pdroducts">
    <div class="container-about-us container">
        <div class="banner-about-us row">
            <div class="topic-about-us">
                <p class="text-center"><?php single_cat_title(); ?></p>
            </div>
             <div class="products-images products-wrapper" style="margin-left:-3px; margin-right:-3px;">
                <div class="col-md-12 category-wrapper" style="padding:0;">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0;">
                         <div style="margin-left:-1px; margin-right:-1px; margin-top:1px;"><?php echo category_description(); ?></div> 
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>
<!-- /Products -->

<?php get_footer(); ?>