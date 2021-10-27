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

    // isotope filter
    var $grid = $(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows'
    });

    // filter itmes on button click
    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter:filterValue});
    })


     // New Sneakers owl carousel
     $("#new-sneakers .owl-carousel").owlCarousel({
        loop:true,
        dots:true,
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