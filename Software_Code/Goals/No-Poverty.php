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

  <div class="container">
    <div class="row">
      <div class="col clearfix">
        <h1 class="text-center">No Poverty</h1>
        </br>
        <img src="../Images/1.jpg" class="float-md-end mb-3 ms-md-3" alt="No Poverty">
        <p>
          Globally, the number of people living in extreme poverty declined from 36 per cent in 1990 to 10 per cent in
          2015. But the pace of change is decelerating and the COVID-19 crisis risks reversing decades of progress in
          the fight against poverty. New research published by the UNU World Institute for Development Economics
          Research warns that the economic fallout from the global pandemic could increase global poverty by as much as
          half a billion people, or 8% of the total human population. This would be the first time that poverty has
          increased globally in thirty years, since 1990.
        </p>
        <p>
          More than 700 million people, or 10 per cent of the world population, still live in extreme poverty today,
          struggling to fulfil the most basic needs like health, education, and access to water and sanitation, to name
          a few. The majority of people living on less than $1.90 a day live in sub-Saharan Africa. Worldwide, the
          poverty rate in rural areas is 17.2 per cent—more than three times higher than in urban areas.
        </p>
        <p>
          For those who work, having a job does not guarantee a decent living. In fact, 8 per cent of employed workers
          and their families worldwide lived in extreme poverty in 2018. One out of five children live in extreme
          poverty. Ensuring social protection for all children and other vulnerable groups is critical to reduce
          poverty.
        </p>
        <h3>Map Title</h3>
        <div class="map" id="map">
          <script>
            loadMap("map", <?php
              require_once("../Include/map.php");
              loadMap(1);
            ?>);
          </script>
        </div>
        <sub>Information about the map</sub>
        <nav id="map-menu"></nav>
      </div>
    </div>
</body>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
