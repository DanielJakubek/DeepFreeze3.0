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
  <script src="../Sripts/maps.js"></script>
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
            <a class="nav-link" href="#">Item1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Item2</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col clearfix">
        <h1 class="text-center">Responsible Consumption and Production</h1>
        </br>
        <img src="../Images/12.jpg" class="float-md-end mb-3 ms-md-3" alt="Responsible Consumption and Production">
        <p>
          For decades, scientists have been explaining the ways in which humanity is driving the three planetary crises
          of climate, biodiversity and pollution, all of which are linked to unsustainable production and consumption.
          Changes in consumption and production patterns can help to promote the decoupling of economic growth and human
          well-being from resource use and environmental impact. They can also trigger the transformations envisaged in
          global commitments on biodiversity, the climate, and sustainable development in general. The COVID-19 pandemic
          provides a window of opportunity for exploring more inclusive and equitable development models that are
          underpinned by sustainable consumption and production.
        </p>
        <p>
          From 2017 to 2020, 83 countries, territories and the European Union shared information on their contribution
          to the implementation of the 10-Year Framework of Programmes on Sustainable Consumption and Production
          Patterns. In 2020, 136 policies and 27 implementation activities were reported, bringing the total number to
          over 700. While specific actions have been taken to improve resource use efficiency in a specific industry or
          area, this has not resulted in their widespread adoption across sectors and industries.
        </p>
        <p>
          Data indicate a rise of almost 40 per cent in the global material footprint per capita, from 8.8 metric tons
          in 2000 to 12.2 metric tons in 2017. Similarly, domestic material consumption per capita increased by more
          than 40 per cent, from 8.7 metric tons in 2000 to 12.2 metric tons in 2017.
        </p>
        <p>
          Although limited data are available, as of 2016, almost 14 per cent of food produced globally was lost before
          reaching the retail sector. Estimates vary across regions, from 20.7 per cent in Central and Southern Asia to
          5.8 per cent in Australia and New Zealand.
        </p>
        <p>
          In 2019, the amount of e-waste generated was 7.3 kg per capita, with only 1.7 kg per capita documented to be
          managed in an environmentally sustainable manner. E-waste generation is expected to grow by 0.16 kg per capita
          annually to reach 9 kg per capita in 2030. The annual rate of growth in e-waste recycling over the past decade
          was 0.05 kg per capita, which will need to increase more than tenfold if all e-waste is to be recycled by
          2030.
        </p>
        <p>
          A pilot review conducted in 2020 on a random sample of about 4,000 companies in the United Nations Global
          Compact database and the Sustainability Disclosure database of the Global Reporting Initiative indicates that
          85 per cent of companies reported on minimum requirements for sustainability issues and 40 per cent on
          advanced requirements for such issues.
        </p>
        <p>
          As of December 2020, 40 countries and territories had reported on sustainable public procurement policies and
          action plans or equivalent legal dispositions aimed at encouraging the procurement of environmentally sound,
          energy-efficient products and promoting more socially responsible purchasing practices and sustainable supply
          chains.
        </p>
        <p>
          Fossil fuel subsidies declined in 2019 to $431.6 billion as a result of lower fuel prices, reversing the
          upward trend from 2017 to 2018. Fossil fuel subsidies are expected to fall sharply owing to the collapse in
          demand caused by COVID-19 mitigation efforts and the oil price shock experienced in 2020.
        </p>
        <p>
          Source<em>:<a href="https://undocs.org/en/E/2021/58">&nbsp;</a></em><a
            href="https://undocs.org/en/E/2021/58">Progress towards the Sustainable Development Goals – E/2021/58</a>
        </p>
        <h3>Map Title</h3>
        <div class="map" id="map">
          <script>
            loadMap("map", <?php
              require_once("../Include/load_map.php");
              load_map(12);
            ?>);
          </script>
        </div>
        <sub>Information about the map</sub>
      </div>
    </div>
  </div>
  <footer class="footer border-top">
    <div class="container">
      <p>This is a footer</p>
    </div>
  </footer>
</body>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
