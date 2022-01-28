const features = [
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.986482259215495, 56.4565905337013]
        },
        "properties": {
            "description": "Dundee Community Fridge (Gate Church Carbon Saving Project) ",
            "icon": "marker"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.9576051976624287, 56.47104019102736]
        },
        "properties": {
            "description": "Dundee & Angus Foodbank",
            "icon": "marker"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.98556929229532, 56.462271093823006]
        },
        "properties": {
            "description": "FareShare Dundee",
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

