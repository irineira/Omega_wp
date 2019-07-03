<?php get_header(); ?>

        <header class="c-header" style="background-image: url(<?php echo get_field('image-block1')['url'];?>);">
            
                <div class="c-logo c-header__logo">
                    <!-- <?php echo get_post_meta($post->ID, 'logo-lp', true); ?>  -->
                    <img src="<?php echo get_field('logo-lp')['url']; ?>" alt=""> 
                </div>

        </header>

        <section class="c-section c-section--1">
            <div class="h-center">
                
                <p class="c-subtitle c-section--1__subtitle">
                    <?php echo the_field('block1-title'); ?>
                </p>
                <p class="c-simply-text">
                    <?php echo the_field('btn_text'); ?>
                </p>

            </div>
        </section>

        <div class="c-divider"></div>

        <section class="c-section c-section--carousel">
            
            <div class="flex flex__space-between c-section--carousel__flex">

                <div>

                    <div class="c-carousel">
                        <div class="c-carousel__before" id="js-carousel--1__before">
                            <a href="">
                                <img src='<?php bloginfo("template_directory"); ?>/images/carousel-before.png' alt="">
                            </a>
                        </div>    

                        <div class="c-carousel__content" id="js-carousel--1__content" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>

                            <div>

                                <div class="c-carousel__img" 
                                     style="background-image: url(<?php echo get_field('carousel1-photo1')['url'];?>);">
                                </div>
                                <div class="c-carousel__title"><?php echo the_field('carousel1-title1');?></div>
                                <div class="c-carousel_description c-simply-text">
                                    <?php echo the_field('carousel1-description1'); ?>
                                </div>

                            </div>

                            <div>

                                <div class="c-carousel__img" 
                                     style="background-image: url(<?php echo get_field('carousel1-photo2')['url'];?>);">
                                </div>
                                <div class="c-carousel__title"><?php echo the_field('carousel1-title2');?></div>
                                <div class="c-carousel_description c-simply-text">
                                    <?php echo the_field('carousel1-description2'); ?>
                                </div>

                            </div>

                            <div>

                                <div class="c-carousel__img" 
                                     style="background-image: url(<?php echo get_field('carousel1-photo3')['url'];?>);">
                                </div>
                                <div class="c-carousel__title"><?php echo the_field('carousel1-title3');?></div>
                                <div class="c-carousel_description c-simply-text">
                                    <?php echo the_field('carousel1-description3'); ?>
                                </div>

                            </div>

                        </div>

                        <div class="c-carousel__after" id="js-carousel--1__after">
                            <a href="">
                                <img src='<?php bloginfo("template_directory"); ?>/images/carousel-after.png' alt="">
                            </a>
                        </div>   
                    </div>   
                    
                </div>

                <div>

                    <div class="c-carousel">
                        <div class="c-carousel__before" id="js-carousel--2__before">
                            <a href="">
                                <img src='<?php bloginfo("template_directory"); ?>/images/carousel-before.png' alt="">
                            </a>
                        </div>    

                        <div class="c-carousel__content" id="js-carousel--2__content" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>

                            <div>

                                <div class="c-carousel__img" 
                                     style="background-image: url(<?php echo get_field('carousel2-photo1')['url'];?>);">
                                </div>
                                <div class="c-carousel__title"><?php echo the_field('carousel2-title1');?></div>
                                <div class="c-carousel_description c-simply-text">
                                    <?php echo the_field('carousel2-description1'); ?>
                                </div>

                            </div>

                            <div>

                                <div class="c-carousel__img" 
                                     style="background-image: url(<?php echo get_field('carousel2-photo2')['url'];?>);">
                                </div>
                                <div class="c-carousel__title"><?php echo the_field('carousel2-title2');?></div>
                                <div class="c-carousel_description c-simply-text">
                                    <?php echo the_field('carousel2-description2'); ?>
                                </div>

                            </div>

                            <div>

                                <div class="c-carousel__img" 
                                     style="background-image: url(<?php echo get_field('carousel2-photo3')['url'];?>);">
                                </div>
                                <div class="c-carousel__title"><?php echo the_field('carousel2-title3');?></div>
                                <div class="c-carousel_description c-simply-text">
                                    <?php echo the_field('carousel2-description3'); ?>
                                </div>

                            </div>

                        </div>

                        <div class="c-carousel__after" id="js-carousel--2__after">
                            <a href="">
                                <img src='<?php bloginfo("template_directory"); ?>/images/carousel-after.png' alt="">
                            </a>
                        </div>   
                    </div>
                    
                </div>

                <div>

                    <div class="c-carousel">
                        <div class="c-carousel__before" id="js-carousel--3__before">
                            <a href="">
                                <img src='<?php bloginfo("template_directory"); ?>/images/carousel-before.png' alt="">
                            </a>
                        </div>    

                        <div class="c-carousel__content" id="js-carousel--3__content" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>

                            <div>

                                <div class="c-carousel__img" 
                                     style="background-image: url(<?php echo get_field('carousel3-photo1')['url'];?>);">
                                </div>
                                <div class="c-carousel__title"><?php echo the_field('carousel3-title1');?></div>
                                <div class="c-carousel_description c-simply-text">
                                    <?php echo the_field('carousel3-description1'); ?>
                                </div>

                            </div>

                            <div>

                                <div class="c-carousel__img" 
                                     style="background-image: url(<?php echo get_field('carousel3-photo2')['url'];?>);">
                                </div>
                                <div class="c-carousel__title"><?php echo the_field('carousel3-title2');?></div>
                                <div class="c-carousel_description c-simply-text">
                                    <?php echo the_field('carousel3-description2'); ?>
                                </div>

                            </div>

                            <div>

                                <div class="c-carousel__img" 
                                     style="background-image: url(<?php echo get_field('carousel3-photo3')['url'];?>);">
                                </div>
                                <div class="c-carousel__title"><?php echo the_field('carousel3-title3');?></div>
                                <div class="c-carousel_description c-simply-text">
                                    <?php echo the_field('carousel3-description3'); ?>
                                </div>

                            </div>


                        </div>

                        <div class="c-carousel__after" id="js-carousel--3__after">
                            <a href="">
                                <img src='<?php bloginfo("template_directory"); ?>/images/carousel-after.png' alt="">
                            </a>
                        </div>   
                    </div>
                    
                </div>

            </div>

        </section>

        <section class="c-section c-section--2">
            <div class="h-center">
                
                <p class="c-subtitle c-section--2__subtitle">
                    <?php echo the_field('block2-title'); ?>
                </p>
                <p class="c-simply-text">
                    <?php echo the_field('block2-text'); ?>
                </p>

            </div>
        </section>

        <section class="c-section c-section--contact">

                <p class="c-subtitle c-section--contact__subtitle">
                    <?php echo the_field('form-title'); ?> 
                </p>
                <p class="c-simply-text c-section--contact__simple-text">
                    <?php echo the_field('form-text'); ?> 
                </p>
                
                <form action="" method="post" class="c-form" id="js-form--contact">

                    <input class="c-form__input c-form__input--text" type="text" name="name" required placeholder="NAAM">
                    <input class="c-form__input c-form__input--text" type="text" name="company" required placeholder="BEDRIJF">
                    <input class="c-form__input c-form__input--text" type="email" name="email" required placeholder="E-MAIL">
                    <input class="c-form__input c-form__input--text" type="tel" name="tel" required placeholder="TELEFOON">
                    <input class="c-form__input c-form__input--submit" type="submit" value="Verstuur">

                    <div class="c-form__result" id="c-form__result"></div>

                </form>

                <div class="c-socials">
                    <a href="<?php echo the_field('soc-inst');?>" class="c-socials__link"><img src='<?php bloginfo("template_directory"); ?>/images/icons/soc-inst.png' alt=""></a>
                    <a href="<?php echo the_field('soc-in');?>" class="c-socials__link"><img src='<?php bloginfo("template_directory"); ?>/images/icons/soc-in.png' alt=""></a>
                    <a href="<?php echo the_field('soc-pin');?>" class="c-socials__link"><img src='<?php bloginfo("template_directory"); ?>/images/icons/soc-p.png' alt=""></a>
                    <a href="<?php echo the_field('soc-tw');?>" class="c-socials__link"><img src='<?php bloginfo("template_directory"); ?>/images/icons/soc-tw.png' alt=""></a>
                    <a href="<?php echo the_field('soc-geo');?>" class="c-socials__link"><img src='<?php bloginfo("template_directory"); ?>/images/icons/soc-hz.png' alt=""></a>
                </div>  
            
        </section> 

        <section class="c-section c-section--3">
            
            <div class="c-box">

                <p class="c-subtitle">
                    <?php echo the_field('block3-title'); ?> 
                </p>
                <p class="c-simply-text">
                    <?php echo the_field('block3-text'); ?> 
                </p>
                
            </div>  

        </section>

        <section class="c-section c-section--img">
            <img src="<?php echo get_field('image-block2')['url'];?>" alt="">
        </section>

<?php get_footer(); ?>

<script>
    $(document).ready(function() {

        $("#js-form--contact").submit(function() {

            var str = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "wp-content/themes/paletare/mail.php",
                data: str,
                success: function(msg) {

                    if (msg == 'OK') {
                        result = 'Uw aanvraag is succesvol verzonden';
                    }
                    else {
                        result = 'Error';
                    }
                    $("#c-form__result").html(result);
                }
            });
            return false;
        });
    });
</script>