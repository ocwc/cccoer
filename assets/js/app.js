jQuery(document).foundation();

jQuery(document).ready(function ($) {
    if ($('#members-map').length) {
        var map = new mapboxgl.Map({
            container: 'members-map',
            style: 'mapbox://styles/mapbox/light-v9',
            center: [-96, 37.8],
            zoom: 3,
            maxZoom: 5,
            minZoom: 3
        });

        var mapHawaii = new mapboxgl.Map({
            container: 'members-map-hawaii',
            style: 'mapbox://styles/mapbox/light-v9',
            center: [-157.9838322, 21.392589],
            zoom: 4,
            maxZoom: 5,
            minZoom: 1
        });

        map.on('load', function () {
            $.ajax({
                dataType: "jsonp",
                url: 'https://members.oeglobal.org/api/v1/address/list/geo/consortium/CCCOER/',
                data: {format: 'jsonp'},
                success: function (geoJsonData) {
                    var layerOptions = {
                        "id": "members",
                        "type": "circle",
                        "source": {
                            "type": "geojson",
                            "data": geoJsonData,
                        },
                        'paint': {
                            'circle-radius': {
                                'base': 2,
                                'stops': [[3, 4], [5, 8]]
                            },
                            "circle-color": "#1F3EB9",
                            "circle-opacity": 0.5,
                            "circle-stroke-width": 2,
                            "circle-stroke-color": "#4171DD",
                            "circle-stroke-opacity": 0.8
                        }
                    };
                    map.addLayer(layerOptions);
                    mapHawaii.addLayer(layerOptions);
                }
            });
        });
    }

    if ($('.members-toc').length) {
        $('.members-toc a').on('click', function () {
            var targetAnchor = $('a[name="' + $(this).attr('href').substr(1) + '"]');
            console.log(targetAnchor);
            $('html,body').animate({scrollTop: targetAnchor.offset().top - 50}, 'slow');
            return false;
        });
    }
});

/* Google Fonts */
window.WebFontConfig = {
    google: { families: ['Montserrat:400,600,700&amp;subset=latin-ext'] },
};

(function(d) {
    var wf = d.createElement('script'),
        s = d.scripts[0];
    wf.src =
        'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
    wf.async = true;
    s.parentNode.insertBefore(wf, s);
})(document);
