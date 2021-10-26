$(document).ready(function(){

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({

        dots:true,
        items:1
    });

    // top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        dots:false,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:5,
                nav:true,
            }
        }
    });

});