const features = [
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.975224170858764, 56.45639147912385]
        },
        "properties": {
            "description": "Dundee Science Centre",
            "icon": "marker"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.967014272708416, 56.4576046461257]
        },
        "properties": {
            "description": "V&A Dundee",
            "icon": "marker"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.982903770983469, 56.459998336188846]
        },
        "properties": {
            "description": "Elevator Centre of Entrepreneurship",
            "icon": "marker"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-3.01592755921549, 56.456683891120264]
        },
        "properties": {
            "description": "Perth Road",
            "icon": "marker"
        }
    }
]

mapboxgl.accessToken = 'pk.eyJ1IjoiZ3JlZ29yZG9vbSIsImEiOiJja3l1NjF4Z2wwM2MwMm50NHVqeG52c2Y0In0.KNoSFWWsfL7xrj2kAnwjpQ';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [-2.982, 56.467],
    zoom: 12
});
map.addControl(new mapboxgl.NavigationControl());
map.on('load', function () {
    map.addSource("dundee", {
        "type": "geojson",
        "data": {
            "type": "FeatureCollection",
            "features": features,
        }
    })
    map.addLayer({
        "id": "points",
        "type": "symbol",
        "source": "dundee",
        "layout": {
            'text-field': ['get', 'description'],
            'text-variable-anchor': ['top', 'bottom', 'left', 'right'],
            'text-radial-offset': 0.5,
            'text-justify': 'auto',
            'icon-image': ['concat', ['get', 'icon'], '-15']
        },
        'filter': ['==', '$type', 'Point']
    });
});

