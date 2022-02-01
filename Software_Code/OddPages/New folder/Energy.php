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
        <h1 class="text-center">Clean Energy</h1>
        </br>

        <img src="7.jpg" class="float-md-end mb-3 ms-md-3" alt="placeholder" style="height:300px; width:300px;">
        <p>
          The main goal of this development goal is to ensure access to affordable, reliable, sustainable and mordern energy for all. 
        </p>
        <p>
            Despite significant progress over the past decade on improving access to electricity, increasing renewable energy use in the electricity sector and improving energy efficiency, the world is still falling short in providing affordable, reliable, sustainable and modern energy for all. Clean and sustainable energy should be at the heart of the COVID-19 response and of efforts to combat climate change.

            Global access to electricity increased from 83 per cent in 2010 to 90 per cent in 2019, with an increase in average annual electrification of 0.876 percentage points. The global access deficit decreased from 1.22 billion in 2010 to 759 million in 2019. Despite the significant effort made, there may still be as many as 660 million people without access worldwide in 2030. In addition, the COVID-19 pandemic will impede progress on future electrification.
            
            In 2019, 66 per cent of the global population had access to clean cooking fuels and technologies. For the period 2010–2019, most of the increases in such access occurred in the most populous low- and middle-income countries and territories: Brazil, China, India, Indonesia and Pakistan. People reliant on polluting fuels and technologies are exposed to high levels of household air pollution with serious consequences for their cardiovascular and respiratory systems, increasing their vulnerability to diseases including the COVID-19 virus.
        </p>

        <p>
            The share of renewable energy in total final energy consumption increased gradually from 16.4 per cent in 2010 to 17.1 per cent in 2018. However, the share of modern renewable sources in total final energy consumption rose by only 2.5 percentage points in a decade, remaining below 11 per cent in 2018. The pandemic is having a mixed impact on renewable energy development across end-use sectors: global electricity demand declined by 2 per cent in 2020 compared to 2019, but the use of renewables for power generation increased by almost 7 per cent year on year.

            Global primary energy intensity increased from 5.6 megajoules per dollar of gross domestic product (GDP) in 2010 to 4.8 megajoules in 2018, an average annual rate of improvement of 2 per cent. While early estimates for 2019 also indicate an improvement of 2 per cent, the outlook for 2020 suggests a rate of only 0.8 per cent because of the pandemic. Annual improvement until 2030 will need to average 3 per cent if the Goal 7.3 target is to be met.
        </p>

        <p>
            International financial flows to developing countries in support of clean and renewable energy reached $14 billion in 2018, 35 per cent lower than in 2017 but 32 per cent higher than in 2010. Hydropower projects received 27 per cent of flows in 2018, while projects relating to solar received 26 per cent, geothermal 8 per cent, wind 5 per cent and multiple or other renewable energies 34 per cent.

            Developing countries had a renewable energy capacity of 219 watts per capita at the end of 2019, an increase of 7 per cent over the year but slightly less than the 8.8 per cent expansion in per capita capacity for 2018. Per capita hydropower capacity remained stable in 2019, as total capacity increased in line with population growth during the year at approximately 0.4 per cent. Solar and wind capacities both expanded much faster than population growth, leading to increases in per capita capacity of 22.2 and 11.3 per cent, respectively.
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
                        "coordinates": [-2.890867, 56.482700]
                      },
                      "properties": {
                        "description": "Michelin Scotland Innovation Parc",
                        "icon": "marker"
                      }
                      },

                      {
                      "type": "Feature",
                      "geometry": {
                        "type": "Point",
                        "coordinates": [-2.903293, 56.486067]
                      },
                      "properties": {
                        "description": "MVV Environment Baldovie",
                        "icon": "marker"
                      }
                    },

                    {
                      "type": "Feature",
                      "geometry": {
                        "type": "Point",
                        "coordinates": [-2.961118, 56.466156]
                      },
                      "properties": {
                        "description": "Princes Street Charging Hub",
                        "icon": "marker"
                      }
                    },

                    {
                      "type": "Feature",
                      "geometry": {
                        "type": "Point",
                        "coordinates": [-2.973936, 56.456712]
                      },
                      "properties": {
                        "description": "Greenmarket MSC",
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
           MSIP - "Michelin Scotland Innovation Parc - a world class innovation parc in Dundee for sustainable mobility and decarbonisation. 
        
          <br>
          <br>
          MVV Environment Baldovie - Energy from waste facility - may be able to offer tours/ open days. Opportunity to learn about biomass/ energy from waste

          <br>
          <br>
          Princes Street Charging Hub - EV charging hub with solar canopies. 
          Queen Street Charging Hub - EV charging hub with solar canopies.


          <br>
          <br>
          Multi Storey car parks (MSPs) - Green Market, Olympia and Gellatly Street MSP's all have EV charging points. These sites encourage commuters to charge during the day and nearby residents to charge their EV at night.



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