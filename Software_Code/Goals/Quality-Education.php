

<!doctype html>
<html lang="en">

<head>
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../Include/masterCSS.css">

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Quality Education</title>

  <!-- MAP -->
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />

  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../Include/map.js"></script>

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
    .mapboxgl-ctrl-logo {
    display: none !important;
    }
  </style>
</head>


<body>
  <!-- Navigation bar -->
  <nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href=".//IndexTwo.php" id="SustainNavImg">
        <img src="../Images/dundeeSus.png" alt="DundeeSus" class="d-inline-block align-text-top">
      </a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search. . ." aria-label="Search" id="searchForm">
        <img src="../Images\noteBook.png" alt="listNoteBook" class="d-inline-block align-text-top" id="noteBookPng">
      </form>
    </div>
  </nav>

  <!--https://sdgs.un.org/goals/goal1-->
  <!-- The main text of the page -->
  <div class="container">
    <div class="row">
      <div class="col clearfix">
        <h1 class="text-center">Zero Hunger</h1>
      </br>
        <h2 class="text-center">
          The our main goal is to end hunger
        </h2>
        <div class="accordion" id="accordion1">
          <div class="accordion-item">
            <h2 class="accordion-header" id="header1">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Accordion Item #1
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion1">
          <div class="accordion-body">
            <img src="Images/2.jpg" class="float-md-end mb-3 ms-md-3" alt="placeholder" style="max-width:250px; max-height:250px;">
              <p>
              <?php 
                    include "../Include/printPageGoals.php";

                    printData("1","Quality-Education");
                    
                  ?>
              </p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="header2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Accordion Item #2
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="header2" data-bs-parent="#accordion1">
          <div class="accordion-body">
            <img src="Images/2.jpg" class="float-md-end mb-3 ms-md-3" alt="placeholder" style="max-width:250px; max-height:250px;">
            <p>
            <?php 

                    printData("2","Quality-Education");
                    
                  ?>
            </p>
          </div>
        </div>
      </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="header3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Accordion Item #3
        </button>
        </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion1">
        <div class="accordion-body">
          <div class="container">
            <img src="Images/2.jpg" class="float-md-end mb-3 ms-md-3" alt="placeholder" style="max-width:250px; max-height:250px;">
            <p>
            <?php 

                    printData("3","Quality-Education");
                    
                  ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="row">
      <div class="col">

        <div class="map" id="map">
          <script>
            loadMap("map", <?php
              require_once("../Include/map.php");
              loadMap(4);
            ?>);
          </script>
        </div>
        <nav id="map-menu"></nav>
      </div>
    </div>

    <div class="container" id="container2">
      <div class="col">
        <ul>
          <br>
          <li>FareShare dundee</li>
          <br>
          <li>Dundee Community Fridge</li>
          <br>
          <li>Dundee & Angus Foodbank</li>
          <li>Dundee Bairns is a charity working to benefit children in Dundee, addressing inequality in basic needs such as food and clothing.</li>
          <br>
          <li>Dundee Fighting for Fairness is a charity to voice for people in poverty in Dundee. </li>
          <br>
          <li>Positive Steps Partnership is a that charity provides supported accommodation services for vulnerable adults </li>
          <br>
          <li>FareShare Dundee provides support to homeless and vulnerable individuals and offers training and volunteering opportunities. One of their projects - Transform Furniture - is a community based project that works towards overcoming poverty by providing quality reusable furniture and electrical household items to disadvantaged local groups, and training and employment opportunities for local people having difficulties in finding a job whilst reducing the amount of household goods that end up in landfill.</li>
        </ul>
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
          <?php 

                    printData("4","Quality-Education");
                    
                  ?>          </form>
        </div>
    </div>
</div>
</div>
</div>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <div class="container" id="footerContactUs">
              <h3>For enquiries</h3>
              <p>Please contact the Sustainability and Climate Change Team on: </p>
              <div>
                <a href="mailto:sustainability@dundeecity.gov.uk"> Email: sustainability@dundeecity.gov.uk </a>
              </div>
              <div>
                <a href="https://twitter.com/sust_dundee"> Twitter: @sust_dundee </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">

          </div>
          <div class="container-fluid" id="copyrightText"> © 2022 DeepFreezeInc </div>
        </div>
      </div>
    </footer>
  </body>
</html>
