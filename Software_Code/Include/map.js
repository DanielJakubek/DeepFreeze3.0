function loadMap(map, layers) {
    console.log(layers);
    mapboxgl.accessToken = "pk.eyJ1IjoiZ3JlZ29yZG9vbSIsImEiOiJja3l1NjF4Z2wwM2MwMm50NHVqeG52c2Y0In0.KNoSFWWsfL7xrj2kAnwjpQ";
    var map = new mapboxgl.Map({
        container: map,
        style: "mapbox://styles/mapbox/streets-v11",
        center: [-2.982, 56.467],
        zoom: 12,
        attributionControl: false
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
                    "icon-image": ["concat", ["get", "icon"], "-15"],
                    'icon-size': 2
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

    const hideButton = document.createElement("button");
    hideButton.className = "btn btn-secondary";
    hideButton.textContent = "Hide";
    hideButton.onclick = function (e) {
        e.preventDefault();
        e.stopPropagation();

        const visibility = map.getLayoutProperty(
            layer.name,
            "visibility"
        );
        if (visibility === "visible") {
            map.setLayoutProperty(layer.name, "visibility", "none");
            this.className = "btn btn-primary";
            this.textContent = "Show";
        } else {
            map.setLayoutProperty(layer.name, "visibility", "visible");
            this.className = "btn btn-secondary";
            this.textContent = "Hide";
        }
    }

    const addToListButton = document.createElement("button");
    addToListButton.className = "btn btn-primary btn-sm";
    addToListButton.textContent = "+";
    addToListButton.onclick = function (e) {
        checkArrayExists(layer.name);
    };

    const bold = document.createElement("b");
    bold.appendChild(link);
    bold.appendChild(document.createTextNode(": "))

    const row = document.createElement("li");
    row.className = "map-list-entry";
    row.appendChild(hideButton);
    row.appendChild(document.createTextNode(" "));
    row.appendChild(addToListButton);
    row.appendChild(document.createTextNode("  "));
    row.appendChild(bold);
    row.appendChild(document.createTextNode(layer.description));

    return row;
}

function popUpWindow() {
    var popUp = document.getElementById("map-menu");

    if (popUp.style.display === "none") {
        popUp.style.display = "block";
    } else {
        popUp.style.display = "none";
    }
}