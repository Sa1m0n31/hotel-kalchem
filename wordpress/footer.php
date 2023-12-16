<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hotel_Kalchem
 */

?>

<section class="map">
    <div id="map"></div>
</section>

<footer>
    <article>
        <div>
            <h3>Kontakt</h3>
            <div class="contact">
                <h4>Recepcja:</h4>
                <p>tel.: 56 49 352 51
                    <br> email: hotel@kalchem.com.pl
                </p>
                <h4>Basen</h4>
                <p>tel.: 694 397 789<br>
                    email: basen@kalchem.com.pl</p>
            </div>
        </div>
        <div>
            <h3 class="footer--marginBottom">Dane firmy</h3>
            <p>Hotel Restauracja Kalchem
                <br> Brzozie 157, 87-313 Brzozie
                <br> NIP: 874-162-27-10
                <br> REGON: 340931353</p>
        </div>
        <div>
            <h3>Śledź nas w social media</h3>
            <div class="flex socialMedia">
                <a href="https://www.facebook.com/hotelkalchem"
                   target="_blank"
                   class="footer__socialMedia">
                    <img src="<?php echo get_bloginfo("stylesheet_directory") . '/assets/facebook.svg'; ?>" alt="facebook" />
                </a>
                <a href="https://www.instagram.com/hotel_kalchem/"
                   target="_blank"
                   class="footer__socialMedia">
                    <img src="<?php echo get_bloginfo("stylesheet_directory") . '/assets/instagram.svg'; ?>" alt="instagram" />
                </a>
            </div>
        </div>

    </article>
</footer>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" async lazyload>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css" async lazyload>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css" async lazyload>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.7/remodal.min.css" async lazyload>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.7/remodal-default-theme.min.css" async lazyload>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" async lazyload>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.53/responsiveslides.min.js"></script>
<script>
    $(function() {
        $(".fade").responsiveSlides({
            speed: 1000,
            timeout: 7500,
            namespace: "fade"
        });
    });
    $(function() {
        $(".rslides").responsiveSlides({});
    });
</script>
<script type="text/javascript">
    function vidplay() {
        var video = document.getElementById("bgvid");
        var button = document.getElementById("play");
        if (video.paused) {
            video.play();
            button.textContent = "||";
        } else {
            video.pause();
            button.textContent = ">";
        }
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 48,
        loop: true,
        lazyLoad: true,
        autoplay: true,
        smartSpeed: 500,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            }
        }
    });
</script>
<script>
    function initMap() {
        var styleArray = [{
            "featureType": "all",
            "elementType": "all",
            "stylers": [{
                "hue": "#ffbb00"
            }]
        }, {
            "featureType": "all",
            "elementType": "geometry.fill",
            "stylers": [{
                "hue": "#ffbb00"
            }]
        }, {
            "featureType": "all",
            "elementType": "labels.text.fill",
            "stylers": [{
                "hue": "#ffbb00"
            }]
        }];
        var kalchem = {
            lat: 53.3220229,
            lng: 19.5898
        };
        var crown = 'http://test.hotel.kalchem.com.pl/wp-content/themes/hotel-kalchem/assets/map-marker.png';
        var map = new google.maps.Map(document.getElementById('map'), {
            center: kalchem,
            scrollwheel: false,
            styles: styleArray,
            zoom: 9
        });
        var contentString = '<h4>Hotel Kalchem Brzozie</h4><div>tel.: 56 49 352 51<br> email: hotel@kalchem.com.pl<br> tel. kom.: 668 186 412<br> tel.kom.: 660 917 290</div>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var marker = new google.maps.Marker({
            position: kalchem,
            map: map,
            title: 'Hotel Kalchem Brzozie',
            icon: crown
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7DE9fbuDp4W5s7gGXf_e1PAetTcnGmPE&signed_in=true&callback=initMap" async defer></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>

<?php wp_footer(); ?>

</body>
</html>
