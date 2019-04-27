<?php get_header(); ?>
<section id="main-page">
    <div class="container main-page-paddings">
        <div class="col-md-12 category-wrapper">
            <div class="col-md-8" style="padding:0;">  
                <!-- Kitchen -->
                <div class="col-lg-12 col-sm-12 col-xs-12 paddings">
                    <div class="category-content">
                        <a href="<?php if (pll_current_language() == 'ru') { echo ('kuhni'); } elseif (pll_current_language() == 'ro') { echo ('bucatarie'); } else { 
                                    echo ('eng/kitchen/'); } ?>" class="box kitchen">
                            <img src="<?php bloginfo('template_url'); ?>/img/main/picture1.jpg" class="img-responsive">
                            <div class="category-overlay">
                                <p><?php echo tStr('Kitchen'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Bath --> <!-- Băile -->
                 <div class="col-md-6 col-sm-6 col-xs-6 paddings">
                    <div class="category-content">
                        <a href="<?php if (pll_current_language() == 'ru') { echo ('vannie-komnati'); } elseif (pll_current_language() == 'ro') { echo ('bai'); } else { 
                                    echo ('bathrooms'); } ?>" class="box bath">
                            <img src="<?php bloginfo('template_url'); ?>/img/main/picture3.jpg" class="img-responsive picture3">
                            <div class="category-overlay">
                                <p><?php echo tStr('Bath'); ?></p>
                            </div>
                        </a>
                     </div>
                </div>
                <!-- Bed --> <!-- Dormitoare -->
                <div class="col-md-6 col-sm-6 col-xs-6 paddings">
                    <div class="category-content">
                        <a href="<?php if (pll_current_language() == 'ru') { echo ('spalnie-komnati'); } elseif (pll_current_language() == 'ro') { echo ('dormitoare'); } else { 
                                    echo ('sleeping-rooms'); } ?>" class="box bed">
                            <img src="<?php bloginfo('template_url'); ?>/img/main/picture4.jpg" class="img-responsive picture3">
                            <div class="category-overlay">
                                <p><?php echo tStr('Bed'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="padding:0;">
                <!--Design text -->
                <div class="col-md-12 col-sm-12 col-xs-12 paddings">
                    <div class="box">
                        <div class="text-box">
                            <div class="design-info">
                                <p class="design-block1"><span><?php echo tStr('About_us'); ?></span></p>
                                <p class="design-block2" style="margin: 0 0 5px;"><?php echo tStr('Design_text'); ?></p>
                                <div class="border-contacts" style="padding-top:6px;">
                                    <div class="border-con-middle"></div>
                                </div>
                                <p class="learn-more">
                                   <a href="<?php if (pll_current_language() == 'ru') { echo ('o-nas'); } elseif (pll_current_language() == 'ro') { echo ('ro/despre-noi/'); } 
                                    else { echo ('eng/about-us/'); } ?>" class="learn-more-link"><?php echo tStr('Learn_more'); ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cloakroom --> <!-- Cameră dressing -->
                <div class="col-md-12 col-sm-12 col-xs-12 paddings">
                    <div class="box">
                        <div class="category-content">
                            <a href="<?php if (pll_current_language() == 'ru') { echo ('garderob'); } elseif (pll_current_language() == 'ro') { echo ('camera-dressing'); } else { 
                                    echo ('cloakroom'); } ?>" class="box cloakroom">
                                <img src="<?php bloginfo('template_url'); ?>/img/main/picture2.jpg" class="img-responsive" style="opacity: 0.5;">
                                <div class="category-overlay">
                                    <p><?php echo tStr('Cloakroom'); ?></p>
                                </div>
                            </a> 
                        </div>
                    </div>    
                </div>
                <!-- Design mail and phone -->
                <div class="col-md-12 col-xs-12 paddings">
                    <div class="box">
                        <div class="text-box2">
                            <div class="design-mail">
                                <p><a href="mailto:sistem.veskoni@gmail.com" class="box grinaldi-mainblock-contacts">sistem.veskoni@gmail.com</a></p>
                                <div class="border-contacts">
                                    <div class="border-con-middle"></div>
                                </div>
                                    <p class="phone-color"><a href="tel:+37369569896">+373 (69) 569896</a></p>   
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="padding:0;">
                <!-- Living --> <!-- Camera de zi -->
                <div class="col-md-4 col-sm-6 col-xs-6 paddings">
                    <div class="category-content">
                        <a href="<?php if (pll_current_language() == 'ru') { echo ('gostinie-komnati'); } elseif (pll_current_language() == 'ro') { echo ('camera-de-zi'); } else { echo ('living-room'); } ?>" class="box living">
                            <img src="<?php bloginfo('template_url'); ?>/img/main/picture5.jpg" class="img-responsive">
                             <div class="category-overlay">
                                <p class="change-overlay"><?php echo tStr('Living'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Interior --> <!-- Uși de interior -->
                <div class="col-md-4 col-sm-6 col-xs-6 paddings">
                    <div class="category-content">
                        <a href="<?php if (pll_current_language() == 'ru') { echo ('mejkomnatie-dveri'); } elseif (pll_current_language() == 'ro') { echo ('usi-de-interior'); } else { echo ('interior-doors'); } ?>" class="box interior">
                            <img src="<?php bloginfo('template_url'); ?>/img/main/picture6.jpg" class="img-responsive">
                             <div class="category-overlay">
                                <p class="change-overlay"><?php echo tStr('Interior'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>               
                <!-- Shops --> <!-- Magazine și saloane -->
                <div class="col-md-4 col-sm-12 col-xs-12 paddings">
                    <div class="category-content">
                        <a href="<?php if (pll_current_language() == 'ru') { echo ('magazini-i-saloni'); } elseif (pll_current_language() == 'ro') { echo ('magazine-si-saloane'); } else { echo ('shops-and-salons'); } ?>" class="box shops">
                            <img src="<?php bloginfo('template_url'); ?>/img/main/picture7.jpg" class="img-responsive">
                            <div class="category-overlay">
                                <p class="change-overlay"><?php echo tStr('Shops'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
