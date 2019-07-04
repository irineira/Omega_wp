$(document).ready(() => {

    // scrol menu
        $(document).on('click', '.adaptmenu__item a, .scroll_bottom', function() {
            event.preventDefault();
            var id = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({
                scrollTop: top
            }, 800);
        })




    // slider
        var swiper = new Swiper('.swiper-container', {
            loop: false,
            slidesPerView: 3,
            centeredSlides: false,
            noSwiping: true,
            breakpoints: {
                500: {
                    slidesPerView: 1,
                    pagination: {
                        el: '.swiper-pagination',
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                }
            }
        });




    // faq
    $(document).on('click', '.questionitem', function(){
        $('.questionitem__bottom').addClass('hidden');
        $(this).find('.questionitem__bottom').removeClass('hidden');
        $('.questionitem__icon img').removeClass('trans_rot');
        $(this).find('.questionitem__icon img').addClass('trans_rot');
        
    });




    // select
    $('.select').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).toggleClass('expanded');
        $('#'+$(e.target).attr('for')).prop('checked',true);
    });

    $(document).click(function() {
        $('.select').removeClass('expanded');
    });

    $('.select').click(function() {
        $('.adaptmenu').removeClass('adaptmenu_active');
        $('.header').css('box-shadow', '0px 8px 8px 0px rgba(0,0,0,0.45)');
    });


     // burger
     $('.burger').click(function() {
        $('.adaptmenu').toggleClass('adaptmenu_active');
        $('.header').css('box-shadow', 'none');
    });

    $('.adaptmenu__item').click(function() {
        $('.adaptmenu').removeClass('adaptmenu_active');
    });



    // header

    $(function(){

        if(pageYOffset > 0) {
            $('.header').addClass('subheader_fix');
        }

        else{
            $('.header').removeClass('subheader_fix');
        }


        $(window).scroll(function(){

            if(pageYOffset > 0) {
                $('.header').addClass('subheader_fix');
            }

            else{
                $('.header').removeClass('subheader_fix');
            }

        });

    });


});