
const $ = jQuery;

$('.owl-carousel.event-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive:{
        0:{
            items:1,
            nav:true,
            loop: true
        },
        600:{
            items:3,
            nav:true,
            loop: true
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    }
})

$('.owl-carousel.latest-news-carousel').owlCarousel({
    loop: true,
    margin: 20,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
        0: {
            items: 1,
            nav: true,
            loop: true
        },
        600: {
            items: 3,
            loop: true
        }
    }
})


$('.owl-carousel.upcoming-games-carousel').owlCarousel({
    loop:true,
    margin:30,
    responsiveClass:true,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive:{
        0:{
            items:1,
            nav:true,
            loop: true
        },
        600:{
            items:2,
            loop: true
        }
    }
})