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
        <h1 class="text-center">Partnerships for the Goals</h1>
        <img src="../Images/17.jpg" class="float-md-end mb-3 ms-md-3" alt="Partnerships For The Goals">
        <p>
          The SDGs can only be realized with strong global partnerships and cooperation.
        </p>
        <p>
          A successful development agenda requires inclusive partnerships — at the global, regional, national and local
          levels — built upon principles and values, and upon a shared vision and shared goals placing people and the
          planet at the centre.
        </p>
        <p>
          Many countries require Official Development Assistance to encourage growth and trade. Yet, aid levels are
          falling and donor countries have not lived up to their pledge to ramp up development finance.
        </p>
        <p>
          Due to the COVID-19 pandemic, the global economy is projected to contract sharply, by 3 per cent, in 2020,
          experiencing its worst recession since the Great Depression.
        </p>
        <p>
          Strong international cooperation is needed now more than ever to ensure that countries have the means to
          recover from the pandemic, build back better and achieve the Sustainable Development Goals.
        </p>
        <h3>Map Title</h3>
        <div class="map" id="map">
          <script>
            loadMap("map", <?php
              require_once("../Include/map.php");
              loadMap(17);
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
