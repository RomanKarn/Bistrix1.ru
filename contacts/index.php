<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<!-- Контакты + ФОС -->
<div class="contact-form pt-90 pb-30">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Нужен классный сайт?</h2>
                <p>Оставьте заявку в форме ниже и мы всё сделаем!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info">
                    <address>
                        <ul>
                            <li>
                                <i aria-hidden="true" class="fa fa-map-marker brand-color"></i>
                                <div class="address">
                                    Мы находимся по адресу:
                                    <hr>
                                    <p>г. Тюмень, ул. Республики 94, офис 23</p>
                                </div>
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-phone brand-color"></i>
                                <div class="phone">
                                    <p>8-123-456-7899</p>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-envelope brand-color"></i>
                                <div class="mail">
                                    <p>
                                        <a href="mailto:#">wecoders@wecodres.com</a>
                                    </p>
                                </div>
                            </li>
                            <li></li>
                        </ul>
                    </address>
                </div>
            </div>
            <? $APPLICATION->IncludeComponent(
                "myComponents:main.feedback",
                "feetback_forms",
                array(
                    "EMAIL_TO" => "stalker.karnuhov@yandex.ru",
                    "EVENT_MESSAGE_ID" => array(0 => "7",),
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "REQUIRED_FIELDS" => array(0 => "NAME", 1 => "EMAIL", 2 => "PHONE"),
                    "USE_CAPTCHA" => "N"
                )
            ); ?>
        </div>
    </div>
</div>
<!-- Карта -->
<div class="map-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="map" class="mtb-90"></div>
            </div>
        </div>
    </div>
</div><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
<script>
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 13,

            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(57.142129, 65.560198), // Tyumen

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{"color": "#dedede"}, {"lightness": 21}]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
            }, {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
            }]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(57.142129, 65.560198),
            map: map,
            title: 'Snazzy!'
        });
    }
</script>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
