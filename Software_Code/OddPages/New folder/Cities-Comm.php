<!doctype html>
<html lang="en">

<head>
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="masterCSS.css">

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Index</title>
  <!-- MAP -->
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: rgb(240, 240, 240);
    }

    #map {
      position: static;
      width: 100%;
      height: 50vh;
    }

    ;
  </style>
</head>


<body>
  <!-- Navigation -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light" id="nav">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="SDG.png" width="100" height="60" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Basket</a>
          </li>
        </ul>


        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="buttons"> 
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--https://sdgs.un.org/goals/goal1-->
  <div class="container">
    <div class="row">
      <div class="col clearfix">
        <h1 class="text-center">Sustainable Cities and Communities</h1>
        </br>

        <img src="11.png" class="float-md-end mb-3 ms-md-3" alt="placeholder" style="height:300px; width:300px;">
        <p>
          The main goal of this development goal is to make cities and human settlements inclusive, safe, resiliant and sustainable.
        </p>
        <p>
            Before the pandemic, cities had rising numbers of slum dwellers, worsening air pollution, minimal open public spaces and limited convenient access to public transport. The direct and indirect impacts of the COVID-19 pandemic are making it even more unlikely that this Goal will be achieved, with more people forced to live in slums, where quality of life is deteriorating and vulnerability increasing.

            The number of slum dwellers has continued to grow over the years, exceeding 1 billion in 2018. Slum dwellers are most prevalent in the three regions of Eastern and South-Eastern Asia (370 million), sub-Saharan Africa (238 million) and Central and Southern Asia (226 million).
        </p>

        <p>
            According to data from 2019 for 610 cities in 95 countries and territories, about half of the urban population has convenient access to public transport, defined as living within a walking distance of 500 metres to low-capacity transport systems, such as buses or trams, and 1,000 metres to high-capacity systems, such as trains and ferries. As a result of the COVID-19 response measures imposed in countries and territories throughout 2020, access to public transport in cities worldwide was significantly disrupted, from partial closures and reduced capacities to total closure of networks.

            Data collected for a sample of 911 cities from 114 countries and territories in 2020 indicate that between 1990 and 2019, spatial urbanization occurred at a much faster rate than population growth, and smaller cities were being urbanized more quickly than their larger counterparts. On average, all regions except sub-Saharan Africa and Eastern and South-Eastern Asia recorded a consistent increase in built-up area per capita, with the highest values in Australia and New Zealand.
        </p>

        <p>
            Data on a sample of 911 cities from 114 countries and territories indicate that the share of urban area allocated to streets and open public spaces averaged only about 16 per cent globally in 2020, well below the allocation recommended by United Nations Human Settlements Programme (UN-Habitat) of 30 per cent for streets and an additional 10 to 15 per cent for open public spaces.

            As of March 2021, 156 countries and territories have developed national urban policies, almost half of which are already at the implementation stage. Of these countries and territories, 38 per cent are in the early stages of plan development, while 13 per cent are monitoring and evaluating the performance of their plans.
        </p>

       
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div id='map'>
          <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiZ3JlZ29yZG9vbSIsImEiOiJja3l1NjF4Z2wwM2MwMm50NHVqeG52c2Y0In0.KNoSFWWsfL7xrj2kAnwjpQ';
            var map = new mapboxgl.Map({
              container: 'map',
              style: 'mapbox://styles/mapbox/streets-v11',
              center: [-2.982, 56.467],
              zoom: 11
            });

            //map.addControl(new mapboxgl.NavigationControl());
            map.on('load', function () {

                map.addSource("dundee", {
                "type": "geojson",
                  "data": {
                    "type": "FeatureCollection",
                    "features": [
                    {
                      "type": "Feature",
                      "geometry": {
                        "type": "Point",
                        "coordinates": [-2.969215, 56.456938]
                      },
                      "properties": {
                        "description": "Embark Dundee",
                        "icon": "marker"
                      }
                      },

                      {
                      "type": "Feature",
                      "geometry": {
                        "type": "Point",
                        "coordinates": [-2.967383, 56.461207]
                      },
                      "properties": {
                        "description": "Urban Foresight",
                        "icon": "marker"
                      }
                    },

                    {
                      "type": "Feature",
                      "geometry": {
                        "type": "Point",
                        "coordinates": [-2.965661, 56.458477]
                      },
                      "properties": {
                        "description": "Dundee Cycle Hub ",
                        "icon": "marker"
                      }
                    },

                    {
                      "type": "Feature",
                      "geometry": {
                        "type": "Point",
                        "coordinates": [-3.057481, 56.478230]
                      },
                      "properties": {
                        "description": "DEW Products",
                        "icon": "marker"
                      }
                    },

                    ]},
                  
                    
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

              
          </script>
        </div>





      </div>
    </div>


    <div class="container" id="container2">
      <div class="col">
      <p>
            Embark Dundee - Ride On operates the e-bike sharing services in Dundee. The e-bikes provide a sustainable and affordable mobility solution for moving around the city.  
        
          <br>
          <br>
          The MILL/ Urban Foresight - Mobility Innovation Living Lab, Dundee. The MILL is transforming Dundee ito a real-world test and experimentation environment for innovative mobility solutions. They provide expert support to large and small businesses. Including access to funding, infrastructure and end-users. 


          <br>
          <br>
          Dundee Cycle Hub - The Dundee and Angus Cycle Hubs encourage people to lead healthier lives and reduce short car journeys and C02 emissions through cycling and recycling. They provide Bikeability training, bike hire, servicing and repairs and bike recycling.  


          <br>
          <br>
          DEW Products - A Scottish company starting an eco-cleaning revolution from Dundee


        </p>
        <script>
          //Deals with hiding and showing the form
          function popUpWindow(){
            var popUp = document.getElementById("infoPage");

            if (popUp.style.display === "none") {
              popUp.style.display = "block";
            } else {
              popUp.style.display = "none";
            }
          }

        </script>

        <button type="button" class="btn btn-dark" onclick="popUpWindow();">More info</button>

        <div class="infoPopup" id="infoPage" style="display: none;" >
          <form action="/No-Poverty.php" class="infoContainer">
            <label for="info">In 2019, 12,000 disag poverty by providing quality reusable furniture and electrical household items to disadvantaged local groups, and training and employment opportunities for local people having difficulties in finding a job whilst reducing the amou</label>
          </form>
        </div>
    </div>
</div>
</body>


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</html>