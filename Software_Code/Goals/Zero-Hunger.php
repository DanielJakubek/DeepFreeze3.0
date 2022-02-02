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
      height: 50vh;
    }
  </style>
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
        <h1 class="text-center">Zero Hunger</h1>
        </br>

        <img src="images/2.jpg" class="float-md-end mb-3 ms-md-3" alt="No Hunger">
        <p>
          Even before the COVID-19 pandemic, the number of people experiencing hunger globally and suffering from food
          insecurity had been rising gradually since 2014. The pandemic has increased the vulnerabilities and
          inadequacies of global food systems, potentially leaving hundreds of millions more people chronically
          undernourished and making the goal of ending hunger more difficult to achieve. Between 83 and 132 million more
          people may already have been pushed into chronic hunger in 2020. In addition, countries and territories around
          the world continue to struggle with multiple forms of malnutrition.
        </p>
        <p>
          It is estimated that almost 690 million people around the world experienced hunger in 2019, equivalent to 8.9
          per cent of the world population – an increase of nearly 60 million in five years. Updated estimates due for
          publication in July 2021 will provide a more recent picture of the effects of the pandemic on hunger.
        </p>
        <p>
          An estimated 2 billion people, 25.9 per cent of the world population, were affected by moderate or severe food
          insecurity in 2019, up from 22.4 per cent in 2015. The fastest rise was recorded in Latin America and the
          Caribbean, although the highest levels were registered in sub-Saharan Africa.
        </p>
        <p>
          Globally, 149.2 million children under the age of 5, some 22 per cent of all children, suffer from stunting
          (low height for age) according to the latest estimates available for 2020,2 a decrease from 24.4 per cent in
          2015. However, these figures may rise as a result of continued constraints on access to nutritious food and
          essential nutrition services during the pandemic, the full impact of which may take years to manifest.
        </p>
        <p>
          In 2020, wasting (low weight for height) and overweight affected 6.7 per cent (45.4 million) and 5.7 per cent
          (38.9 million) of children under the age of 5, respectively. Wasting will be one of the conditions most
          affected by the pandemic in the short term: around 15 per cent more children than estimated may have suffered
          from wasting as a result of a decline in household wealth and disruptions in the availability and
          affordability of nutritious food and essential nutrition services. Childhood overweight (high weight for
          height) may also rise in some countries and territories where unhealthy foods replaced fresh, nutritious
          foodstuffs and restrictions on movement constrained opportunities for physical activity for long periods.
        </p>
        <p>
          In women, anaemia increases the risk of adverse maternal and neonatal outcomes. In 2019, the global prevalence
          of anaemia was 29.9 per cent in women of reproductive age, 29.6 per cent in non-pregnant women and 36.5 per
          cent in pregnant women. The prevalence was higher in Central and Southern Asia, at 47.5 per cent in women of
          reproductive age.
        </p>
        <p>
          The average agricultural output per labour day of small-scale food producers in the limited number of
          countries and territories surveyed is lower than that of large - scale producers, who also earn up to two or
          three times the annual income of smallscale producers. In almost all countries and territories surveyed,
          households headed by males achieve higher labour productivity and earn larger annual incomes compared to their
          female counterparts.
        </p>
        <p>
          Global holdings of plant genetic resources for food and agriculture in 2020 reached 5.7 million accessions
          conserved in 831 gene banks by 114 countries and territories and 17 regional and international research
          centres. Although the total number of global holdings has risen, the growth rate decreased over the past 10
          years, reaching its lowest level in 2020.
        </p>
        <p>
          The world is still far off target for maintaining the genetic diversity of farmed and domesticated animals,
          either in the field or in gene banks. The risk status of 61 per cent of local livestock breeds remains
          unknown. Of the limited number surveyed, 74 per cent are deemed to be at risk of extinction, yet there is only
          sufficient material in gene banks for 203 out of a global total of 7,700 local livestock breeds to
          reconstitute the breed in the event of its extinction.
        </p>
        <p>
          While the share of agricultural aid has remained constant at about 5 percent, it has more than doubled in
          volume since 2002, with total disbursements amounting to $13 billion in 2019.
        </p>
        <p>
          A steady downward trend has been observed in export subsidy outlays notified to the World Trade Organization
          (WTO). Total notified annual outlays fell from a peak of $6.7 billion in 1999 to $138 million in 2018. In
          December 2015, WTO members adopted the ministerial decision on export competition, formally agreeing to
          eliminate all forms of agricultural export subsidy entitlements.
        </p>
        <p>
          At the global level, the number of countries and territories afflicted by high food prices decreased from 2014
          to 2019, with the notable exception of some countries in Central, Southern and Western Asia as well as
          Northern Africa, owing to the reduced domestic availability of staple foods and to currency depreciations.
        </p>
        <h3>Map Title</h3>
        <div id='map'>
          <script src="scripts/Zero-Hunger-map.js"></script>
        </div>
        <div class="container" id="container2">
          <div class="col">
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

            <button type="button" class="btn btn-dark" onclick="popUpWindow();">More info</button>

            <div class="infoPopup" id="infoPage" style="display: none;" >
              <form action="/No-Poverty.php" class="infoContainer">
                <label for="info">In 2019, 12,000 disag poverty by providing quality reusable furniture and electrical household items to disadvantaged local groups, and training and employment opportunities for local people having difficulties in finding a job whilst reducing the amou</label>
              </form>
            </div>
        </div>
    </div>
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