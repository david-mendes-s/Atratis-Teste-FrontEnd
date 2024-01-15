{
    $(document).ready(function(){
        
        $('.owl-carousel-plans').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            nav:true,
            dots: false,
            navContainer: '#arrowsPrevNext',
            navText: ['', ''],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
            
        })

    });

    $('.owl-carousel-testimonys').owlCarousel({
        
        loop:true,
        margin: 20,
        responsiveClass:true,
        nav:false,
        dots: true,
        dotsContainer: '#dotsPersonal',
        dotsEach: true,

        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }

    })

    $('.owl-service-carrosel').owlCarousel({
        
        loop:true,
        margin: 20,
        responsiveClass:true,
        nav:false,
        dots: true,
        dotsContainer: '#dotsService',
        dotsEach: true,

        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }

    })
    
    $('.owl-banners').owlCarousel({
        items: 1,
        loop:true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 2000,
        mouseDrag: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    })
    

}
