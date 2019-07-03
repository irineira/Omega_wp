$(document).ready(function() {

    $('.c-carousel__before a, .c-carousel__after a').click(function(e){ e.preventDefault() });

    $('#js-carousel--1__content').slick({
        prevArrow: '#js-carousel--1__before',
        nextArrow: '#js-carousel--1__after'
    });

    $('#js-carousel--2__content').slick({
        prevArrow: '#js-carousel--2__before',
        nextArrow: '#js-carousel--2__after'
    });

    $('#js-carousel--3__content').slick({
        prevArrow: '#js-carousel--3__before',
        nextArrow: '#js-carousel--3__after'
    });

});
