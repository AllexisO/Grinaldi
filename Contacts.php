<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
<section id="contacts">
    <div class="container-about-us container">
        <div class="col-md-12">
            <div class="banner-about-us">
                <div class="topic-about-us">
                    <p class="text-center"><?php echo tStr('Our_contacts'); ?></p>
                </div>
                <div class="col-md-12 google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8760.983736215578!2d28.882667886889074!3d47.02111490361486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c768a72550b%3A0x632f1a88c00bd780!2zU3RyYWRhIE1lyJl0ZXJ1bCBNYW5vbGUgOSwgQ2hpyJlpbsSDdSwg0JzQvtC70LTQvtCy0LA!5e0!3m2!1sru!2s!4v1489179126470" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="contact-info">
                    <p class="contact-text"><?php echo tStr('Consultation'); ?></p>
                    <div class="col-md-9 contacts-form"> 
                        <form action="<?php bloginfo('template_url'); ?>/send-con.php" method="post" class="contact-form" name="contact-form" onsubmit="alert('<?php echo tStr('Send_message'); ?>');'">
                            <div class="contact-form" id="form" name="contact-form">
                                <div class="col-md-6 contacts-form-input">
                                    <div class="col-sm-12" style="padding:0;">
                                        <input type="text" class="form-control form-contol-lg" name="name" required="required" placeholder="<?php echo tStr('Name'); ?>">
                                    </div>
                                    <div class="col-sm-12" style="padding:0;">
                                        <input type="email" class="form-control" name="email" required="required" placeholder="Email">
                                    </div>
                                    <div class="col-sm-12" style="padding:0;">
                                        <input type="text" class="form-control" name="phone" placeholder="<?php echo tStr('Phone'); ?>">
                                    </div>
                                    <div class="col-sm-12 result alert-warning" style="display:none; border-radius:5px; height:100%; padding-top:3px;" role="alert"></div>
                                </div>
                                <div class="col-md-6" style="padding:0;">
                                    <div class="col-sm-12 message-input">
                                        <textarea name="message" class="form-control" required="required" cols="30" rows="5" placeholder="<?php echo tStr('Message'); ?>"></textarea>
                                    </div>
                                    <div class="col-sm-4 button-submit">
                                        <input type="submit" value="<?php echo tStr('Send'); ?>" >
                                    </div>
                                </div>                        
                            </div>
                      </form>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 street">
                        <p><?php echo tStr('Street'); ?><br> <?php echo tStr('City'); ?></p>
                        <br>
                        <p style="margin-bottom:0px;">+373 (68) 33 69 55</p>
                        <p style="margin-bottom:0px;">+373 (69) 56 98 96</p>
                        <p>sistem.veskoni@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>