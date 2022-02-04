function loadMap(map, layers, addListButtons = true) {
    // Create the map and add navigation controls
    mapboxgl.accessToken = "pk.eyJ1IjoiZ3JlZ29yZG9vbSIsImEiOiJja3l1NjF4Z2wwM2MwMm50NHVqeG52c2Y0In0.KNoSFWWsfL7xrj2kAnwjpQ";
    var map = new mapboxgl.Map({
        container: map,
        style: "mapbox://styles/mapbox/streets-v11",
        center: [-2.982, 56.467],
        zoom: 12,
        attributionControl: false
    });
    map.addControl(new mapboxgl.NavigationControl());

    // When it's done loading
    map.on("load", function () {
        // For every layer...
        for (const layer of layers) {
            // Add it as a point
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
            // And add a row to the map controls
            const row = createMapControl(map, layer, addListButtons);
            document.getElementById("map-menu").appendChild(row);
        }
    });
}

function createMapControl(map, layer, addListButton) {
    // Clickable link to move the map
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

    // Button to show/hide the point of the map
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


    // Bold text, containing the link and a colon
    const bold = document.createElement("b");
    bold.appendChild(link);
    bold.appendChild(document.createTextNode(": "))

    // the full row of controls, containing everything relevant to this one point
    const row = document.createElement("li");
    row.className = "map-list-entry";
    row.appendChild(hideButton);
    row.appendChild(document.createTextNode(" "));
    if (addListButton) {
        // Button to add the map element to the cart.
        const addToListButton = document.createElement("button");
        addToListButton.className = "btn btn-primary btn-sm";
        addToListButton.textContent = "+";
        addToListButton.onclick = function (e) {
            checkArrayExists(layer.name);
        };
        row.appendChild(addToListButton);
    }
    row.appendChild(document.createTextNode("  "));
    row.appendChild(bold);
    row.appendChild(document.createTextNode(layer.description));

    return row;
}

// Show or hide the corresponding map element.
function popUpWindow() {
    var popUp = document.getElementById("map-menu");

    if (popUp.style.display === "none") {
        popUp.style.display = "block";
    } else {
        popUp.style.display = "none";
    }
}