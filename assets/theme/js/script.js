$(document).ready(function () {

    $(window).on('load', function () {
        $('.loading').fadeOut('slow');
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 100) {
            $('nav.navbar').addClass('fixed-header animated fadeIn');
            // $('nav div').addClass('visible-title');
        } else {
            $('nav').removeClass('fixed-header animated fadeIn');
        }
    });

    $('#myCarousel').carousel();

    var percent = 0, bar = $('.transition-timer-carousel-progress-bar'), crsl = $('#myCarousel');

    function progressBarCarousel() {
        bar.css({width: percent + '%'});
        percent = percent + 0.5;
        if (percent > 100) {
            percent = 0;
            crsl.carousel('next');
        }
    }
    crsl.carousel({
        interval: false,
        pause: true
    }).on('slid.bs.carousel', function () {
        // $('.item').css('background','gray');
    });
    var barInterval = setInterval(progressBarCarousel, 30);
    crsl.hover(
            function () {
                clearInterval(barInterval);
            },
            function () {
                barInterval = setInterval(progressBarCarousel, 30);
            });

    $('.video-play').magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

            patterns: {
                youtube: {
                    index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

                    id: 'v=', // String that splits URL in a two parts, second part should be %id%
                    // Or null - full URL will be returned
                    // Or a function that should return %id%, for example:
                    // id: function(url) { return 'parsed id'; }

                    src: 'https://www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
                },
                vimeo: {
                    index: 'vimeo.com/',
                    id: '/',
                    src: 'http://player.vimeo.com/video/%id%?autoplay=1'
                },
                gmaps: {
                    index: 'http://maps.google.',
                    src: '%id%&output=embed'
                },
                dailymotion: {

                    index: 'dailymotion.com',

                    id: function (url) {
                        var m = url.match(/^.+dailymotion.com\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/);
                        if (m !== null) {
                            if (m[4] !== undefined) {

                                return m[4];
                            }
                            return m[2];
                        }
                        return null;
                    },

                    src: 'https://www.dailymotion.com/embed/video/%id%'

                }

                // you may add here more sources

            },

            srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
        }

    });

    $("#testimonial-slider").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        itemsMobile : [479,1],
        pagination: true,
        autoPlay: true
    });

    $(".clients-slider").owlCarousel({
        items : 5,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        singleItem : false,

        pagination: true,
        autoPlay: true
    });

    $('.fbtn-filter').on('click', function () {
        var filterId = $(this).data('filter');

        // alert(filterId);

        if (filterId === "all") {

            $('.filter').show("300");

        } else {
            $('.filter').not("." + filterId).hide("300");
            $('.filter').filter("." + filterId).show("300");
        }

        $(this).addClass('active').siblings().removeClass('active');

    });

    $('.test-popup-link').magnificPopup({
        type: 'image'
                // other options
    });


    $('a.btn-gallery').on('click', function (event) {
        event.preventDefault();

        var gallery = $(this).attr('href');

        $(gallery).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true
            }
        }).magnificPopup('open');
    });


    $('.subscriber-add-form').on('submit', function (e) {

        e.preventDefault();

        var url = $(this).attr('action'),
                method = $(this).attr('method'),
                formInputs = $(this).serialize();

        $.ajax({
            url: url,
            type: method,
            data: formInputs, // serializes the form's elements.
            beforeSend: function () {
                $('.send-join').html('<span>Sending ....</span>');
            },
            success: function (data)
            {
                $('.send-join').html('<span>Join</span>');

                $('#email').val('');

                alert('Thank You For Subscribe With Us !'); // show message if success.
            }
        });


    });

});