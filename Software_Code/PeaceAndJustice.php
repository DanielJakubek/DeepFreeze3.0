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
      height: 100%;
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
        <h1 class="text-center">Peace and Justice</h1>
        </br>

        <img src="16.png" class="float-md-end mb-3 ms-md-3" alt="placeholder" style="height:300px; width:300px;">
        <p>
          The main goal is to promote peaceful and inclusive societies for sustainable development, prove access to justice for all and build effective, accountable and inclusive institutions at all levels
        </p>
        <p>
          The world is still a long way from achieving the goal of building peaceful, just and inclusive societies, with millions of people living in fragile and conflict-affected States. At the end of 2019, 79.5 million people had been forcibly displaced worldwide, equivalent to 1 per cent of the global population.

          The COVID-19 pandemic has exposed inequalities and discrimination and has tested, weakened, and in some cases shattered rights and protection systems in countries and territories.
        </p>

        <p>
          Globally, around 437,000 people were victims of homicide in 2019. However, lethal violence is slowly decreasing, and homicide rates declined from 6 v ictims per 100,000 population in 2015 to 5.7 per 100,000 in 2019.

          Two thirds of all homicide victims were in sub-Saharan Africa and Latin America and the Caribbean, with no sign of numbers falling in sub-Saharan Africa.
        </p>

        <p>
          The United Nations recorded 69,276 civilian deaths in 12 of the world’s deadliest armed conflicts between 2018 and 2020. In 2020, there were five civilians killed per 100,000 population, one in seven of which was a woman or child.

          Even before the pandemic, violence against children was widespread, affecting victims regardless of wealth or social status. In 77 mostly low- and middle-income countries and territories with available data from 2012 to 2020, 8 in 10 children, ranging from 1 to 14 years of age, had been subjected to some form of psychological aggression or physical punishment at home in the previous month.
        </p>

      </div>
    </div>
    <div class="row">
      <div class="col">
        <p>
          One World Centre Dundee
          <br>
          <button type="button" class="btn btn-dark" onclick="popUpWindow();">More info</button>

          <div class="infoPopup" id="infoPage" style="display: none;" >
            <form action="/No-Poverty.php" class="infoContainer">
              <label for="info">In 2019, 12,000 disag poverty by providing quality reusable furniture and electrical household items to disadvantaged local groups, and training and employment opportunities for local people having difficulties in finding a job whilst reducing the amou</label>
            </form>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
        </p>

      </div>
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
                        "coordinates": [-2.957968, 56.467758]
                      },
                      "properties": {
                        "description": "One World Centre Dundee",
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
  <!-- Map -->
  <!-- How do you get this thing to float correctly in the text surrounding it? -->
  <div class="container" id="container2">
    <div class="col">
<<<<<<< HEAD
=======
      <p>
        Dundee Bairns is a charity working to benefit children in Dundee, addressing inequality in basic needs such as food and clothing.
        <br>
        <br>
        Dundee Fighting for Fairness is a charity to voice for people in poverty in Dundee.
        <br>
        <br>
        Positive Steps Partnership is a that charity provides supported accommodation services for vulnerable adults
        <br>
        <br>
        FareShare Dundee provides support to homeless and vulnerable individuals and offers training and volunteering opportunities. One of their projects - Transform Furniture - is a community based project that works towards overcoming poverty by providing quality reusable furniture and electrical household items to disadvantaged local groups, and training and employment opportunities for local people having difficulties in finding a job whilst reducing the amount of household goods that end up in landfill.
      </p>
>>>>>>> 9a33fb3939f6f3326e1496e853b4e1ca25dcfbef
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
<<<<<<< HEAD
=======

      <button type="button" class="btn btn-dark" onclick="popUpWindow();">More info</button>

      <div class="infoPopup" id="infoPage" style="display: none;" >
        <form action="/No-Poverty.php" class="infoContainer">
          <label for="info">In 2019, 12,000 disag poverty by providing quality reusable furniture and electrical household items to disadvantaged local groups, and training and employment opportunities for local people having difficulties in finding a job whilst reducing the amou</label>
        </form>
      </div>
>>>>>>> 9a33fb3939f6f3326e1496e853b4e1ca25dcfbef
  </div>
</div>
</div>
</body>


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</html>
