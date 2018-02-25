jQuery(function($){
    $iframe = $('.iframe');

    if ($iframe.length > 0) {
        $iframe.on('load', function(){
            this.style.height = (this.contentWindow.document.body.offsetHeight + 20) + 'px';
        });
    }

    /**
     * This function will render a Google Map onto the selected jQuery element.
     * @param object $el Window object
     * @return object map Object (instance of Google Maps)
     */
    function new_map($el) {
        var $markers = $el.find('.marker');

        var args = {
            zoom        : 16,
            center      : new google.maps.LatLng(0, 0),
            mapTypeId   : google.maps.MapTypeId.ROADMAP,
            scrollwheel : false,
        };

        var map = new google.maps.Map( $el[0], args);

        map.markers = [];

        $markers.each(function(){
            add_marker($(this), map);
        });

        center_map(map);

        return map;
    }

    /**
     * This function will add a marker to the selected Google Map.
     * @param object $marker (jQuery element)
     * @param object map Google Map object.
     * @return null
     */
    function add_marker($marker, map) {
        var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

        var marker = new google.maps.Marker({
            position  : latlng,
            map       : map,
            animation : google.maps.Animation.DROP,
        });

        map.markers.push( marker );

        if ($marker.html()) {
            var infowindow = new google.maps.InfoWindow({
                content : $marker.html()
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });
        }
    }

    /**
     * This function will center the map, showing all markers attached to this map.
     * @param object map Google Map object.
     * @return null
     */

    function center_map(map) {
        var bounds = new google.maps.LatLngBounds();

        $.each(map.markers, function(i, marker){
            var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
            bounds.extend(latlng);
        });

        if (map.markers.length == 1){
            map.setCenter(bounds.getCenter());
            map.setZoom( 16 );
        } else {
            map.fitBounds(bounds);
        }
    }

    /**
     * document ready
     * This function will render each map when the document is ready (page has loaded)
     * @return null
     */
    var map = null;

    $(document).ready(function(){
        $('.google-map').each(function(){
            map = new_map($(this));
        });
    });

});
