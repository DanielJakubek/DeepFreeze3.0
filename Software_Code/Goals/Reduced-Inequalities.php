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
        <h1 class="text-center">Reduced Inequalities</h1>
        </br>
        <img src="../Images/10.jpg" class="float-md-end mb-3 ms-md-3" alt="Reduced Inequalities">
        <p>
          Before the pandemic, modest gains had been made in the reduction of inequality in certain areas, for example,
          reducing income inequality in some countries and territories, continuing preferential trade status for
          lower-income countries and territories and decreasing transaction costs for remittances. However, inequality
          persists, whether in relation to income, wealth, opportunity or other dimensions. The pandemic is exacerbating
          existing inequalities within and among countries and territories and hitting the most vulnerable people and
          the poorest countries and territories hardest, and is likely to delay the progress of the poorest countries
          and territories on the Goals by a full 10 years. Globally, the number of refugees reached its highest level on
          record in 2020. Even with strict COVID-19-related restrictions on mobility around the world, thousands of
          migrants died on their migratory journey.
        </p>
        <p>
          According to estimates of the International Monetary Fund, the COVID-19 pandemic would increase the average
          Gini index for emerging market and developing economies by more than 6 per cent, with an even larger impact
          predicted for lowincome countries and territories.
        </p>
        <p>
          Data from 44 countries and territories for the period 2014–2020 show that almost one in five people reported
          having personally experienced discrimination on at least one of the grounds prohibited under international
          human rights law. Moreover, women were more likely to be victims of discrimination than men. The health
          and&nbsp;socioeconomic situations of many groups already experiencing higher levels of discrimination have
          been further affected by the pandemic.
        </p>
        <p>
          The data from 2019 on financial soundness indicators indicated some improvement of overall loan performance,
          while the levels of capital, which is the main buffer for absorbing losses, remained high despite a slight
          decline. The share of countries and territories reporting non-performing loans whose value exceeds 5 per cent
          of total loans declined from 41.9 per cent in 2018 to 39.5 per cent in 2019. Meanwhile, the share of countries
          and territories reporting a ratio of total regulatory capital to risk weighted assets of more than 15 per cent
          declined from 84.6 per cent in 2018 to 82.1 per cent in 2019, although the median rose from 17.9 per cent to
          18.2 per cent over the same period.
        </p>
        <p>
          In 2020, 4,186 deaths and disappearances were recorded along migratory routes worldwide, with an increase in
          fatalities on some routes. Despite the pandemic and mobility restrictions at borders across the world, tens of
          thousands of people continued to leave their homes and embark on dangerous journeys across deserts and seas.
        </p>
        <p>
          By mid-2020, the number of people who had fled their countries and territories and become refugees owing to
          war, conflict, persecution, human rights violations and events seriously disturbing public order had grown to
          24 million, the highest number on record. The number of refugees outside their country of origin has risen to
          307 out of every 100,000 persons, more than double the figure at the end of 2010.
        </p>
        <p>
          Globally, in 2019, 54 per cent of the 111 Governments with data reported having instituted a comprehensive
          set of policy measures to facilitate orderly, safe, regular and responsible migration and mobility of people,
          which means that they have reported having policy measures in place for at least 80 per cent of the
          subcategories that make up the six policy domains of this indicator. The degree to which the policy measures
          were reported, however, varies widely across policy domains, with most countries and territories reporting
          measures for cooperation and partnerships and for safe, orderly and regular migration, and fewest countries
          and territories reporting measures for migrant rights and for socioeconomic well-being.
        </p>
        <p>
          From 2017 to 2020, the proportion of products exported by the least developed countries and developing
          countries that receive duty-free treatment has remained unchanged at 66 and 52 per cent, respectively.
        </p>
        <p>
          In 2019, total resource flows for development to developing countries from Development Assistance Committee
          donors, multilateral agencies and other key providers amounted to $400 billion, of which $164 billion was ODA.
        </p>
        <p>
          The average global cost of sending a $200 remittance decreased from 9.3 per cent in 2011 to 6.5 per cent in
          2020, bringing it closer to the international target of 5 per cent. The average annual decrease was 0.31
          percentage points.
        </p>
        <p>Source<em>:<a href="https://undocs.org/en/E/2021/58">&nbsp;</a></em><a
            href="https://undocs.org/en/E/2021/58">Progress towards the Sustainable Development Goals – E/2021/58</a>
        </p>
        <h3>Map Title</h3>
        <div class="map" id="map">
          <script>
            loadMap("map", <?php 
              require_once("../Include/load_map.php");
              load_map(10);
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