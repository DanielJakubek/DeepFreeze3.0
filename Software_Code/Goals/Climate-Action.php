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
        <h1 class="text-center">Climate Action</h1>
        <img src="../Images/13.jpg" class="float-md-end mb-3 ms-md-3" alt="Climate Action">
        <p>
          The main goal of this development goal is to take urgent action to combat climate change and its impacts.
        </p>
        <p>
          Atmospheric concentrations of the major greenhouse gases continued to increase despite the temporary reduction
          in emissions in 2020 related to measures taken in response to the COVID-19 pandemic. The six years from 2015
          to 2020 are likely to be the warmest on record. Climate change is making the achievement of many Goals less
          likely. To limit global warming to 1.5°C above pre-industrial levels in accordance with the Paris Agreement,
          the world would need to achieve net zero carbon dioxide emissions by around 2050.
        </p>
        <p>
          As of April 2020, 118 countries and territories had reported the development and adoption of national or local
          disaster risk reduction strategies, an increase from 48 countries and territories in the first year of the
          Sendai Framework.
        </p>
        <p>
          As at 31 December 2020, 190 parties (189 countries and territories plus the European Union) had communicated
          their first nationally determined contribution to the United Nations Framework Convention on Climate Change,
          of which 44 were least developed countries and 40 were small island developing States. A further 48 countries
          and territories, of which one is a least developed country and five are small island developing States, have
          also communicated a second or updated nationally determined contribution. Of these 48 countries and
          territories, 39 included adaptation information in their new or updated contribution. The nationally
          determined contributions demonstrate that countries and territories are articulating more quantified targets
          and indicators for adaptation and identifying links between adaptation, the Goals and other frameworks.
        </p>
        <p>
          As at 31 March 2021, 125 of 154 developing countries were carrying out measures for national adaptation plans
          and prioritizing the formulation and implementation of the plans in their adaptation efforts. Moreover, six
          least developed countries (including three small island developing States) and another four small island
          developing States have completed a national adaptation plan. Further least developed countries have draft
          national adaptation plans and are on track to complete and submit these with a view to ensuring that all least
          developed countries have national adaptation plans by 2021.
        </p>
        <p>
          According to scientists, global emissions should be cut to 45 per cent below 2010 levels by 2030 in order to
          limit global warming to 1.5°C above pre -industrial levels. Emissions from developed countries were
          approximately 6.2 per cent lower in 2019 than in 2010, while emissions from 70 developing countries rose by
          14.4 per cent in 2014.
        </p>
        <p>
          Total climate finance reported by States parties included in annex I to the Framework Convention on Climate
          Change continues to increase, reaching an annual average of $48.7 billion in the period 2017–2018. This
          represents an increase of 10 per cent compared to the 2015–2016 period. While more than half of all
          climatespecific financial support in the 2017 and 2018 was targeted at mitigation action, the share of
          adaptation support is growing, and many countries and territories are prioritizing adaptation in their
          financial support provision.
        </p>
        <h3>Map Title</h3>
        <div class="map" id="map">
          <script>
            loadMap("map", <?php
              require_once("../Include/load_map.php");
              load_map(13);
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
