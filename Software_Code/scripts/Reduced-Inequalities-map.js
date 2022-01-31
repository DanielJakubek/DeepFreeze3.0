const features = [
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.957798301543697, 56.46791665399365]
        },
        "properties": {
            "description": "One World Centre",
            "icon": "marker"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-3.0176032015432317, 56.48000219928659]
        },
        "properties": {
            "description": "Dundee Refugeee Support",
            "icon": "marker"
        }
    },
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

