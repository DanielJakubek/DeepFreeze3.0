const features = [
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.975224170858764, 56.45639147912385]
        },
        "properties": {
            "title": "Dundee Science Centre",
            "icon": "chemist"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.967014272708416, 56.4576046461257]
        },
        "properties": {
            "title": "V&A Dundee",
            "icon": "museum"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.982903770983469, 56.459998336188846]
        },
        "properties": {
            "title": "Elevator Centre of Entrepreneurship",
            "icon": "bank"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-3.01592755921549, 56.456683891120264]
        },
        "properties": {
            "title": "Perth Road",
            "icon": "shop"
        }
    }
]

mapboxgl.accessToken = 'pk.eyJ1IjoiZ3JlZ29yZG9vbSIsImEiOiJja3l1NjF4Z2wwM2MwMm50NHVqeG52c2Y0In0.KNoSFWWsfL7xrj2kAnwjpQ';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/dark-v9',
    center: [-2.982, 56.467],
    zoom: 12
});
map.addControl(new mapboxgl.NavigationControl());
map.on('load', function () {
    map.addLayer({
        "id": "points",
        "type": "symbol",
        "source": {
            "type": "geojson",
            "data": {
                "type": "FeatureCollection",
                "features": features,
            }
        },
        "layout": {
            "icon-image": "{icon}-15",
            "text-field": "{title}",
            "text-font": ["Roboto Regular"],
            "text-offset": [0.6, 0.1],
            "text-anchor": "left",
        }
    });
});

