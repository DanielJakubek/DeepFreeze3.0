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
        <h1 class="text-center">Climate</h1>
        </br>

        <img src="13.jpg" class="float-md-end mb-3 ms-md-3" alt="placeholder" style="height:300px; width:300px;">
        <p>
          The main goal of this development goal is to take urgent action to combat climate change and its impacts.
        </p>
        <p>
            Atmospheric concentrations of the major greenhouse gases continued to increase despite the temporary reduction in emissions in 2020 related to measures taken in response to the COVID-19 pandemic. The six years from 2015 to 2020 are likely to be the warmest on record. Climate change is making the achievement of many Goals less likely. To limit global warming to 1.5°C above pre-industrial levels in accordance with the Paris Agreement, the world would need to achieve net zero carbon dioxide emissions by around 2050.

            As of April 2020, 118 countries and territories had reported the development and adoption of national or local disaster risk reduction strategies, an increase from 48 countries and territories in the first year of the Sendai Framework.
        </p>

        <p>
            As at 31 December 2020, 190 parties (189 countries and territories plus the European Union) had communicated their first nationally determined contribution to the United Nations Framework Convention on Climate Change, of which 44 were least developed countries and 40 were small island developing States. A further 48 countries and territories, of which one is a least developed country and five are small island developing States, have also communicated a second or updated nationally determined contribution. Of these 48 countries and territories, 39 included adaptation information in their new or updated contribution. The nationally determined contributions demonstrate that countries and territories are articulating more quantified targets and indicators for adaptation and identifying links between adaptation, the Goals and other frameworks.

            As at 31 March 2021, 125 of 154 developing countries were carrying out measures for national adaptation plans and prioritizing the formulation and implementation of the plans in their adaptation efforts. Moreover, six least developed countries (including three small island developing States) and another four small island developing States have completed a national adaptation plan. Further least developed countries have draft national adaptation plans and are on track to complete and submit these with a view to ensuring that all least developed countries have national adaptation plans by 2021.
        </p>

        <p>
            According to scientists, global emissions should be cut to 45 per cent below 2010 levels by 2030 in order to limit global warming to 1.5°C above pre -industrial levels. Emissions from developed countries were approximately 6.2 per cent lower in 2019 than in 2010, while emissions from 70 developing countries rose by 14.4 per cent in 2014.

            Total climate finance reported by States parties included in annex I to the Framework Convention on Climate Change continues to increase, reaching an annual average of $48.7 billion in the period 2017–2018. This represents an increase of 10 per cent compared to the 2015–2016 period. While more than half of all climatespecific financial support in the 2017 and 2018 was targeted at mitigation action, the share of adaptation support is growing, and many countries and territories are prioritizing adaptation in their financial support provision.
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
                        "coordinates": [-2.986695, 56.456313]
                      },
                      "properties": {
                        "description": "Dundee Community Fridge",
                        "icon": "marker"
                      }
                      },

                      {
                      "type": "Feature",
                      "geometry": {
                        "type": "Point",
                        "coordinates": [-2.986396, 56.456256]
                      },
                      "properties": {
                        "description": "Dundee Community Wardrobe",
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
           Dundee Community Fridge (Gate Church Carbon Saving Project) - The Community Fridge at Gate Church is a communal place where surplus food is shared, by local businesses and individuals. The community fridge helps to cut food waste, build bonds within the community and re-distribute good quality food. Although the focus is on  food waste, the Community Fridge also helps to reduce food poverty in Dundee. 
        
          <br>
          <br>
          Dundee Community Wardrobe (Gate Church Carbon Saving Project) - The Dundee Community Wardrobe helps to stop good quality clothing going in the bin and teaches people how to live more sustainably. Encourages people to reuse, repair and share. *Potential to visit*


          <br>
          <br>
          Dundee Cycle Hub - The Dundee and Angus Cycle Hubs encourage people to lead healthier lives and reduce short car journeys and C02 emissions through cycling and recycling. They provide Bikeability training, bike hire, servicing and repairs and bike recycling.  


          <br>
          <br>
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