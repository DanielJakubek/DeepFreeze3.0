<!doctype html>
<html lang="en">

<head>
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../Include/masterCSS.css">

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Index</title>
  <!-- MAP -->
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
  <script src="../Include/map.js"></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />
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
        <h1 class="text-center">Life on land</h1>
        </br>
        <img src="../Images/15.jpg" class="float-md-end mb-3 ms-md-3" alt="Life On Land">
        <p>
          Protect, restore and promote sustainable use of terrestrial ecosystems, sustainably to manage forests, combat
          desertification and halt and reverse land degradation and halt biodiversity loss
        </p>
        <p>
          Deforestation and forest degradation, continued biodiversity loss and the ongoing degradation of ecosystems
          are having profound consequences for human well-being and survival. The world fell short on 2020 targets to
          halt biodiversity loss. The COVID-19 pandemic has shown that, by threatening biodiversity, humanity threatens
          its own survival
        </p>
        <p>
          While great efforts are being made to expand sustainable forest management, increase coverage of key
          biodiversity areas and sign up t o legislation and treaties for protecting biodiversity and ecosystems, much
          more needs to be done to put the health of the planet at the centre of all plans and policies.
        </p>
        <p>
          While the rate of deforestation in tropical regions has slowed in the past decad e, vigilance and targeted
          efforts are required to maintain this trend. The proportion of forest area fell from 31.9 per cent of total
          land area in 2000 to 31.2 per cent in 2020, representing a net loss of almost 100 million hectares of the
          world’s forests.
        </p>
        <p>
          Despite the losses in forest cover, above-ground forest biomass per hectare, the proportion of forest area in
          protected areas and under long-term management plans, and certified forest area all increased or remained
          stable at the global level and in most of the regions of the world, demonstrating global progress towards
          sustainable forest management
        </p>
        <p>
          In 2020, an average of 43 per cent of each terrestrial key biodiversity area, 42 per cent of each freshwater
          key biodiversity area, and 41 per cent of each mountain key biodiversity area were within protected areas, an
          increase of 13 to14 percentage points since 2000.
        </p>
        <p>
          As of February 2021, 127 countries and territories had committed to setting voluntary targets for achieving
          land degradation neutrality, and 68 countries and territories had already officially endorsed their targets
        </p>
        <p>
          <a href="https://ww2.rspb.org.uk/groups/dundee/"> The RSPB is a group of people dedicated to managing the
            habitat of multiple species </a>
        </p>
        <h3>Map Title</h3>
        <div class="map" id="map">
          <script>
            loadMap("map", <?php
              require_once("../Include/map.php");
              loadMap(15);
            ?>);
          </script>
        </div>
        <sub>Information about the map</sub>
        <nav id="map-menu"></nav>
      </div>
    </div>
  </div>
</body>


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</html>
