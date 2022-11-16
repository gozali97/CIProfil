<script src="<?= base_url('front/assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('front/assets/js/tiny-slider.js') ?>"></script>
<script src="<?= base_url('front/assets/js/glightbox.min.js') ?>"></script>
<script src="<?= base_url('front/assets/js/main.js') ?>"></script>
<!-- owl carousel js -->
<script src="<?= base_url('front/assets/js/owl.carousel.min.js') ?>"></script>
<script type="text/javascript">
    //========= Hero Slider 
    tns({
        container: '.hero-slider',
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: false,
        controls: true,
        controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
    });

    //======== Brand Slider
    tns({
        container: '.brands-logo-carousel',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 3,
            },
            768: {
                items: 5,
            },
            992: {
                items: 6,
            }
        }
    });

    $(document).ready(function() {
        $(".carousel-profile").owlCarousel({
            rewind: true,
            margin: 20,
            responsiveClass: true,
            nav: true,
            navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 2
                },
                1000: {
                    items: 3,
                },
                1200: {
                    items: 4,
                }
            },
        });
    });
</script>