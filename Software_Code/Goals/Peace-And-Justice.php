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
  <script src="../Include/maps.js"></script>
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
        <h1 class="text-center">Peace and Justice</h1>
        <img src="../Images/16.jpg" class="float-md-end mb-3 ms-md-3" alt="Peace And Justice">
        <p>
          The main goal is to promote peaceful and inclusive societies for sustainable development, prove access to
          justice for all and build effective, accountable and inclusive institutions at all levels
        </p>
        <p>
          The world is still a long way from achieving the goal of building peaceful, just and inclusive societies, with
          millions of people living in fragile and conflict-affected States. At the end of 2019, 79.5 million people had
          been forcibly displaced worldwide, equivalent to 1 per cent of the global population.
        </p>
        <p>
          The COVID-19 pandemic has exposed inequalities and discrimination and has tested, weakened, and in some cases
          shattered rights and protection systems in countries and territories.
        </p>
        <p>
          Globally, around 437,000 people were victims of homicide in 2019. However, lethal violence is slowly
          decreasing, and homicide rates declined from 6 v ictims per 100,000 population in 2015 to 5.7 per 100,000 in
          2019.
        </p>
        <p>
          Two thirds of all homicide victims were in sub-Saharan Africa and Latin America and the Caribbean, with no
          sign of numbers falling in sub-Saharan Africa.
        </p>
        <p>
          The United Nations recorded 69,276 civilian deaths in 12 of the world’s deadliest armed conflicts between 2018
          and 2020. In 2020, there were five civilians killed per 100,000 population, one in seven of which was a woman
          or child.
        </p>
        <p>
          Even before the pandemic, violence against children was widespread, affecting victims regardless of wealth or
          social status. In 77 mostly low- and middle-income countries and territories with available data from 2012 to
          2020, 8 in 10 children, ranging from 1 to 14 years of age, had been subjected to some form of psychological
          aggression or physical punishment at home in the previous month.
        </p>
        <h3>Map Title</h3>
        <div class="map" id="map">
          <script>
            loadMap("map", <?php
              require_once("../Include/load_map.php");
              load_map(16);
            ?>);
          </script>
        </div>
        <sub>Information about the map</sub>
      </div>
    </div>
  </div>
</body>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
