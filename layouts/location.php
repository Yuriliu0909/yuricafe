<!--The div element for the map -->
    <div id="map">
    <script src="../scripts/map.js"></script>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgAFPcYBZfYnrB3aD5EK5qVA5toZj_Cso&callback=initMap&libraries=&v=weekly"
            async>
    </script>
    </div>

    <style ="text/css">
    /* Set the size of the div element that contains the map */
    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }
    </style>