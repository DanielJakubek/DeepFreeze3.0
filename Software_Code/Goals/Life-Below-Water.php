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
  <script src="../Scripts/maps.js"></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light" id="nav">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Company Name</a>
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
        <h1 class="text-center">Life Below Water</h1>
        </br>
        <img src="../Images/14.jpg" class="float-md-end mb-3 ms-md-3" alt="Life Below Water">
        <p>
          Our goal is to conserve and sustainably use the oceans, seas and marine resources for sustainable development
        </p>
        <p>
          More than 3 billion people rely on the oceans for their livelihoods, and more than 80 per cent of world
          merchandise trade by volume is carried by sea. The oceans, seas and marine resources are under constant threat
          from pollution, warming and acidification that are disrupting marine ecosystems and the communities they
          support.
        </p>
        <p>
          While efforts to reduce nutrient inputs into coastal zones are showing success in some regions, algal blooms
          indicate that coastal eutrophication continues to be a challenge. Globally, anomalies of chlorophyll-a (the
          pigment responsible for photosynthesis in all plants and algae) in national exclusive economic zones decreased
          by 20 per cent from 2018 to 2020.
        </p>
        <p>
          Ocean acidification is caused by the absorption of atmospheric carbon dioxide by the ocean, resulting in a
          decreasing pH and threatening marine organisms and ocean-based services.
        </p>
        <p>
          Mean protected area coverage of marine key biodiversity areas increased globally from 28 per cent in 2000 to
          44 per cent in 2020. However, there is considerable geographical variation in this progress, with coverage
          still less than one quarter of key biodiversity areas in Oceania (excluding Australia and New Zealand).
        </p>
        <p>
          Improved regulation, together with effective monitoring and surveillance, has proved successful in restoring
          overfished stocks to biologically sustainable levels. However, the adoption of such measures has generally
          been slow, in many developing countries in particular.
        </p>
        <p>
          Between 2018 and 2020, the average degree of implementation of international instruments to combat illegal,
          unreported and unregulated fishing improved around the world, with the global score measuring the
          implementation of the five principal instruments rising from 3 to 4 out of 5.
        </p>
        <p>
          On average, only 1.2 per cent of national research budgets was allocated to ocean science between 2013 and
          2017, with amounts ranging from 0.02 per cent to 9.5 per cent. This is a small proportion in view of the
          conservatively estimated $1.5 trillion contribution of the ocean to the global economy in 2010.
        </p>
        <p>
          <a href="https://www.dundeecity.gov.uk/service-area/city-development/broughty-ferry-flood-protection-scheme">The
            broughty Ferry flood protection scheme is one ways Dundee is protecting life below water</a>
        </p>
        <h3>Map Title</h3>
        <div class="map" id="map">
          <script>
            loadMap("map", <?php
              require_once("../Include/load_map.php");
              load_map(14);
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
