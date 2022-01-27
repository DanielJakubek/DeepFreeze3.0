const features = [
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.9752812064344845, 56.47771842976488]
        },
        "properties": {
            "title": "Food on the Green",
            "icon": "restaurant"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.9756198245999315, 56.457553240112105]
        },
        "properties": {
            "title": "Saint Andrew's Cathedral",
            "icon": "restaurant"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.9702483423523245, 56.459454855550916]
        },
        "properties": {
            "title": "Mozza Dundee",
            "icon": "restaurant"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.9908989213196286, 56.45646500985416]
        },
        "properties": {
            "title": "Cafe Sicilia",
            "icon": "cafe"
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

