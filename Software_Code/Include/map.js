function loadMap(map, layers) {
    console.log(layers);
    mapboxgl.accessToken = "pk.eyJ1IjoiZ3JlZ29yZG9vbSIsImEiOiJja3l1NjF4Z2wwM2MwMm50NHVqeG52c2Y0In0.KNoSFWWsfL7xrj2kAnwjpQ";
    var map = new mapboxgl.Map({
        container: map,
        style: "mapbox://styles/mapbox/streets-v11",
        center: [-2.982, 56.467],
        zoom: 12
    });
    map.addControl(new mapboxgl.NavigationControl());

    map.on("load", function () {
        for (const layer of layers) {
            map.addSource(layer.name, {
                "type": "geojson",
                "data": {
                    "type": "Feature",
                    "geometry": layer.geometry,
                    "properties": layer.properties,
                }
            })
            map.addLayer({
                "id": layer.name,
                "type": "symbol",
                "source": layer.name,
                "layout": {
                    "visibility": "visible",
                    "text-field": ["get", "title"],
                    "text-variable-anchor": ["top", "bottom", "left", "right"],
                    "text-radial-offset": 0.5,
                    "text-justify": "auto",
                    "icon-image": ["concat", ["get", "icon"], "-15"]
                },
                "filter": ["==", "$type", "Point"]
            });
            const row = createMapControl(map, layer);
            document.getElementById("map-menu").appendChild(row);
        }
    });
}

function createMapControl(map, layer) {
    const link = document.createElement("a");
    link.id = layer.name;
    link.href = "#map";
    link.textContent = layer.name;
    link.onclick = function (e) {
        e.preventDefault();
        e.stopPropagation();
        map.flyTo({
            center: layer.geometry.coordinates
        })
    }

    const button = document.createElement("button");
    button.className = "map-show-hide-shown";
    button.textContent = "Hide";
    button.onclick = function (e) {
        e.preventDefault();
        e.stopPropagation();

        const visibility = map.getLayoutProperty(
            layer.name,
            "visibility"
        );
        if (visibility === "visible") {
            map.setLayoutProperty(layer.name, "visibility", "none");
            this.className = "map-show-hide-hidden";
            this.textContent = "Show";
        } else {
            map.setLayoutProperty(layer.name, "visibility", "visible");
            this.className = "map-show-hide-shown";
            this.textContent = "Hide";
        }
    }

    const bold = document.createElement("b");
    bold.appendChild(link);
    bold.appendChild(document.createTextNode(": "))

    const row = document.createElement("div");
    row.appendChild(button);
    row.appendChild(bold);
    row.appendChild(document.createTextNode(layer.description));

    return row;
}