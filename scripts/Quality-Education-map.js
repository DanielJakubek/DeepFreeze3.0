const features = [
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.9823315408624524, 56.45934140734307]
        },
        "properties": {
            "title": "University of Dundee",
            "icon": "school"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.9711849783481394, 56.46948931245987],
        },
        "properties": {
            "title": "Rosebank Primary School",
            "icon": "school"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.9954024687166783, 56.479652140327616],
        },
        "properties": {
            "title": "Kingspark School",
            "icon": "school"
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-2.9968293757039444, 56.475926111668784],
        },
        "properties": {
            "title": "St Johns RC High School",
            "icon": "school"
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

