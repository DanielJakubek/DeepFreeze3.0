const features = [
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.957798301543697, 56.46791665399365]
        },
        "properties": {
            "title": "One World Centre",
            "icon": "school"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-3.0176032015432317, 56.48000219928659]
        },
        "properties": {
            "title": "Dundee Refugeee Support",
            "icon": "commercial"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-3.0488150396692144, 56.4742126813665]
        },
        "properties": {
            "title": "A&R Cleaning Services",
            "icon": "laundry"
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

