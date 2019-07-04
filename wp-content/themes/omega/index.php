<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php the_field('title'); ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta content="ie-edge" http-equiv="x-ua-compatible">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/styles/app.min.css?7">
  </head>
  <body>
    <div class="content">
      <header class="header">
        <div class="wrapper">
          <div class="header__content">
            <div class="header__left">
              <div class="header__logo"><a href="/"><img src="<?php bloginfo("template_directory"); ?>/images/i/logo.svg" alt=""></a></div>
            </div>
            <div class="header__right">
              <div class="header__select"> 
                <div class="select">
                  <input id="item00" name="sortType" type="radio" value="item00" checked="checked">
                  <label id="item_1" for="item00"><?php the_field('option_1'); ?></label>
                  <input id="item01" name="sortType" type="radio" value="item01">
                  <label id="item_2" for="item01"><?php the_field('option_2'); ?></label>
                  <input id="item02" name="sortType" type="radio" value="item02">
                  <label id="item_3" for="item02"><?php the_field('option_3'); ?></label>
                </div>
              </div>
              <div class="header__blockbutton">
                <button class="button"> 
                  <span>buy now</span>
                  <span></span>
                  
                  
                </button>
              </div>
              <div class="header__burger">
                <div class="burger">
                  <div class="burger__line"> </div>
                  <div class="burger__line"> </div>
                  <div class="burger__line"> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <section class="adaptmenu">
        <div class="adaptmenu__content">
          <div class="adaptmenu__item"><a href="#one"> <span>Mission </span></a></div>
          <div class="adaptmenu__item"><a href="#twoo"> <span>The process  </span></a></div>
          <div class="adaptmenu__item"><a href="#three"> <span>Our story </span></a></div>
          <div class="adaptmenu__item"><a href="#four"> <span>About us   </span></a></div>
          <div class="adaptmenu__item"><a href="#five"> <span>FAQ  </span></a></div>
          <div class="adaptmenu__item"><a href="#six"> <span>Contact   </span></a></div>
          <div class="adaptmenu__item"><a href="#seven"> <span>find us  </span></a></div>
        </div>
      </section>
      <section class="sect1"> 
        <div class="wrapper">
          <div class="sect1__content">
            <div class="sect1__left">
              <div class="sect1__descblock"><img src="<?php bloginfo("template_directory"); ?>/images/header-text-desktop.png" alt=""><img src="<?php bloginfo("template_directory"); ?>/images/header-text-mobile.png" alt=""></div>
              <div class="sect1__buttonblock"><a class="scroll_bottom" href="#three"> <span>read our story</span><img src="<?php bloginfo("template_directory"); ?>/images/arr_bot.png" alt=""></a></div>
            </div>
            <div class="sect1__right">
              <div class="sect1__imgblock"><img src="<?php bloginfo("template_directory"); ?>/images/container-mockup.png" alt=""></div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect2" id="one">
        <div class="wrapper">
          <div class="sect2__content">
            <div class="sect2__titleblock"><span class="title"><?php the_field('sect_2_title'); ?></span></div>
            <div class="sect2__descblock">
              <?php the_field('sect_2_desc'); ?>
              
            </div>
          </div>
        </div>
      </section>
      <section class="sect3">
        <div class="wrapper">
          <div class="sect3__content"> 
            <div class="sect3__slider"> 
              <div class="slider_custom">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="sect3__itemblock">
                        <div class="sect3__icon"><img src="<?php bloginfo("template_directory"); ?>/images/i/icon-no-fish.svg" alt=""></div>
                        <div class="sect3__title"> <span>  No Fish, <br>no Toxin  </span></div>
                      </div>
                    </div>
                    <div class="swiper-slide">   
                      <div class="sect3__itemblock">
                        <div class="sect3__icon"><img src="<?php bloginfo("template_directory"); ?>/images/i/icon-directly-from-source.svg" alt=""></div>
                        <div class="sect3__title"> <span>  Directly from <br>the source</span></div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="sect3__itemblock">
                        <div class="sect3__icon"><img src="<?php bloginfo("template_directory"); ?>/images/i/icon-sustainable.svg" alt=""></div>
                        <div class="sect3__title"> <span>  Sustainable, <br>for the planet</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect4" id="twoo">
        <div class="wrapper">
          <div class="sect4__content"> 
            <div class="sect4__titleblock"><span class="title"><?php the_field('sect_3_title'); ?></span></div>
            <div class="sect4__infoblock"><img src="<?php bloginfo("template_directory"); ?>/images/dailys-process-copy.png" alt=""></div>
          </div>
        </div>
      </section>
      <section class="sect5" id="three">
        <div class="wrapper">
          <div class="sect5__content"> 
            <div class="sect5__titleblock"><span class="title"><?php the_field('sect_4_title'); ?></span></div>
            <div class="sect5__descblock">
              <?php the_field('sect_4_desc_top'); ?>
            </div>
            <div class="sect5__descblockbig">
              <p><?php the_field('sect_4_desc_big'); ?></p>
            </div>
            <div class="sect5__subtitleblock"><span><?php the_field('sect_4_subtitle'); ?></span></div>
            <div class="sect5__descblock">
              <p><?php the_field('sect_4_desc_bottom'); ?></p>
            </div>
          </div>
        </div>
      </section>
      <section class="sect6" id="four">
        <div class="wrapper">
          <div class="sect6__content"> 
            <div class="sect6__massage">
              <div class="sect6__titleblcok"><span class="title"><?php the_field('sect_5_title'); ?></span></div>
              <div class="sect6__descblock">
                <p><?php the_field('sect_5_desc'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect7" id="five">
        <div class="wrapper">
          <div class="sect7__content">
            <div class="sect7__titleblock"><span class="title"><?php the_field('sect_6_title'); ?></span></div>
            <div class="sect7__faqwrapper">
              <div class="sect7__faqitem"> 
                <div class="questionitem"> 
                  <div class="questionitem__top">
                    <div class="questionitem__title"><span><?php the_field('question_1'); ?></span></div>
                    <div class="questionitem__icon"><img src="<?php bloginfo("template_directory"); ?>/images/arr_left.png" alt=""></div>
                  </div>
                  <div class="questionitem__bottom hidden">
                    <div class="questionitem__text">
                      <p><?php the_field('answer_1'); ?></p>
                    </div>
                  </div>
                </div>
                <div class="questionitem"> 
                  <div class="questionitem__top">
                    <div class="questionitem__title"><span><?php the_field('question_2'); ?></span></div>
                    <div class="questionitem__icon"><img src="<?php bloginfo("template_directory"); ?>/images/arr_left.png" alt=""></div>
                  </div>
                  <div class="questionitem__bottom hidden">
                    <div class="questionitem__text">
                      <p><?php the_field('answer_2'); ?></p>
                    </div>
                  </div>
                </div>
                <div class="questionitem"> 
                  <div class="questionitem__top">
                    <div class="questionitem__title"><span><?php the_field('question_3'); ?></span></div>
                    <div class="questionitem__icon"><img src="<?php bloginfo("template_directory"); ?>/images/arr_left.png" alt=""></div>
                  </div>
                  <div class="questionitem__bottom hidden">
                    <div class="questionitem__text">
                      <p><?php the_field('answer_3'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect8" id="six">
        <div class="wrapper">
          <div class="sect8__content">
            <div class="sect8__titleblock"><span class="title">Contact</span></div>
            <div class="sect8__desc">
              <p>Before you contact us, please have a quick look at our Frequently Asked Questions above. If that didn’t answer your question, feel free to send us an e-mail at <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>, call to <a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a> or fill out the form below.</p>
            </div>
            <div class="sect8__formblock">
              <form class="form">
                <div class="form__inputsblock">
                  <input type="text" placeholder="Full name">
                  <input type="email" placeholder="E-mail address">
                </div>
                <textarea class="textarea" placeholder="Message"></textarea>
                <button class="button" type="submit"><span>Submit</span></button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section class="sect9" id="seven">
        <div class="wrapper">
          <div class="sect9__content">
            <div class="sect9__titleblock"><span class="title">Where to find us</span></div>
            <div class="sect9__descblock">
              <p>Fill out your postal code below and find the shops nearest to you.</p>
            </div>
            <div class="sect9__formblock">
              <form class="sect9__form">
                <input type="text" placeholder="Postal code / City">
                <button class="button" type="submit"><span>Submit</span></button>
              </form>
            </div>
            <div class="sect9__mapblock">
              <div id="map"></div>
            </div>
          </div>
        </div>
      </section>
      <footer class="footer">
        <div class="wrapper">
          <div class="footer__content">
            <div class="footer__logo"><a href="/"><img src="<?php bloginfo("template_directory"); ?>/images/i/logo.svg" alt=""></a></div>
            <div class="footer__social">
              <a href="<?php the_field('linkedin'); ?>"><img src="<?php bloginfo("template_directory"); ?>/images/iconmonstr-linkedin-1-240.png" alt="" style="padding-bottom: 2px;"></a>
              <a href="<?php the_field('twitter'); ?>"><img src="<?php bloginfo("template_directory"); ?>/images/iconmonstr-twitter-1-240.png" alt=""></a>
              <a href="<?php the_field('instagram'); ?>"><img src="<?php bloginfo("template_directory"); ?>/images/iconmonstr-instagram-11-240.png" alt=""></a>
              <a href="<?php the_field('facebook'); ?>"><img src="<?php bloginfo("template_directory"); ?>/images/iconmonstr-facebook-6-240.png" alt=""></a>
            </div>
            <div class="footer__bottom">
              <a href="<?php the_field('privacy_statement'); ?>">Privacy Statement<?php the_field('option_m_1'); ?></a>
              <a href="<?php the_field('cookie_policy'); ?>">Cookie policy</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="<?php bloginfo("template_directory"); ?>/dist/js/jquery-3.2.1.min.js?7"></script>
    <script src="<?php bloginfo("template_directory"); ?>/dist/js/swiper.min.js?7"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpQfeIi-fXbljlaIQpl4FDYaY2DdZirEg"></script>
    <script src="<?php bloginfo("template_directory"); ?>/scripts/app.js?7"></script>
    
    
    <script>
      $(document).ready(() => {

        
          if ($(window).width() <= 769) {
              $('#item_1').html("<?php the_field('option_m_1'); ?>");
              $('#item_2').html("<?php the_field('option_m_2'); ?>");
              $('#item_3').html("<?php the_field('option_m_3'); ?>");
          }
      });


      // map
      (function initMap() {
          var coordinates = {lat: 46.477807, lng: 30.754870},  
          
          
              map = new google.maps.Map(document.getElementById('map'), {
                  center: coordinates,
                  zoom: 12
              });

              var image = '<?php bloginfo("template_directory"); ?>/images/map-marker.svg';
              marker = new google.maps.Marker({
                  position: {lat: 46.476452, lng: 30.752942},
                  map: map,
                  icon: image
              });

              marker = new google.maps.Marker({
                  position: {lat: 46.468941, lng: 30.760026},
                  map: map,
                  icon: image
              });
      })()

    </script>




  </body>
</html>