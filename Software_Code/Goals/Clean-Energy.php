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
  <script src="../Scripts/maps.js"></script>
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
        <h1 class="text-center">Clean Energy</h1>
        <img src="../Images/7.jpg" class="float-md-end mb-3 ms-md-3" alt="Clean Energy">
        <p>
          The main goal of this development goal is to ensure access to affordable, reliable, sustainable and mordern
          energy for all.
        </p>
        <p>
          Despite significant progress over the past decade on improving access to electricity, increasing renewable
          energy use in the electricity sector and improving energy efficiency, the world is still falling short in
          providing affordable, reliable, sustainable and modern energy for all. Clean and sustainable energy should be
          at the heart of the COVID-19 response and of efforts to combat climate change.
        </p>
        <p>
          Global access to electricity increased from 83 per cent in 2010 to 90 per cent in 2019, with an increase in
          average annual electrification of 0.876 percentage points. The global access deficit decreased from 1.22
          billion in 2010 to 759 million in 2019. Despite the significant effort made, there may still be as many as 660
          million people without access worldwide in 2030. In addition, the COVID-19 pandemic will impede progress on
          future electrification.
        </p>
        <p>
          In 2019, 66 per cent of the global population had access to clean cooking fuels and technologies. For the
          period 2010–2019, most of the increases in such access occurred in the most populous low- and middle-income
          countries and territories: Brazil, China, India, Indonesia and Pakistan. People reliant on polluting fuels and
          technologies are exposed to high levels of household air pollution with serious consequences for their
          cardiovascular and respiratory systems, increasing their vulnerability to diseases including the COVID-19
          virus.
        </p>
        <p>
          The share of renewable energy in total final energy consumption increased gradually from 16.4 per cent in 2010
          to 17.1 per cent in 2018. However, the share of modern renewable sources in total final energy consumption
          rose by only 2.5 percentage points in a decade, remaining below 11 per cent in 2018. The pandemic is having a
          mixed impact on renewable energy development across end-use sectors: global electricity demand declined by 2
          per cent in 2020 compared to 2019, but the use of renewables for power generation increased by almost 7 per
          cent year on year.
        </p>
        <p>
          Global primary energy intensity increased from 5.6 megajoules per dollar of gross domestic product (GDP) in
          2010 to 4.8 megajoules in 2018, an average annual rate of improvement of 2 per cent. While early estimates for
          2019 also indicate an improvement of 2 per cent, the outlook for 2020 suggests a rate of only 0.8 per cent
          because of the pandemic. Annual improvement until 2030 will need to average 3 per cent if the Goal 7.3 target
          is to be met.
        </p>
        <p>
          International financial flows to developing countries in support of clean and renewable energy reached $14
          billion in 2018, 35 per cent lower than in 2017 but 32 per cent higher than in 2010. Hydropower projects
          received 27 per cent of flows in 2018, while projects relating to solar received 26 per cent, geothermal 8 per
          cent, wind 5 per cent and multiple or other renewable energies 34 per cent.
        </p>
        <p>
          Developing countries had a renewable energy capacity of 219 watts per capita at the end of 2019, an increase
          of 7 per cent over the year but slightly less than the 8.8 per cent expansion in per capita capacity for 2018.
          Per capita hydropower capacity remained stable in 2019, as total capacity increased in line with population
          growth during the year at approximately 0.4 per cent. Solar and wind capacities both expanded much faster than
          population growth, leading to increases in per capita capacity of 22.2 and 11.3 per cent, respectively.
        </p>
        <h3>Map Title</h3>
        <div class="map" id="map">
          <script>
            loadMap("map", <?php 
              require_once("../Include/load_map.php");
              load_map(15);
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