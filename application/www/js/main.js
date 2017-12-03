'use strict';

/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function() {
    $('#notice').delay(3000).fadeToggle();
    $('#searchBtn').on('click', function(){
       $('.articles').removeClass('visible');
       $('.articles').addClass('hidden');
       $('.results').toggleClass('hidden');
    });
    $('#filterPorT').on('click', function(){
        $('.articles').removeClass('visible');
        $('.articles').addClass('hidden');
        $('.tri-results').toggleClass('hidden');
        $('.triT-results').toggleClass('hidden');
        $('.filter-results').toggleClass('hidden');
    });


        $('.modalBtn').on('click', function(){
            //$('.myModal').css("display", "block");
            console.log('PUTE');
            $(this).parent().siblings('.myModal').css("display", "block");
        });
        $('.close').on('click', function(){
            $('.myModal').css("display", "none");
        });

    $('.slick').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        fade: true,
        cssEase: 'linear'
    });

});
/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL                                                                      //
/////////////////////////////////////////////////////////////////////////////////////////

