<!doctype html>
<html lang="en">

<head>
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../Include/masterCSS.css">

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Gender Equality</title>

  <!-- MAP -->
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />

  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../Include/map.js"></script>
  <script src="../Include/goalList.js"></script>

</head>


<body>
  <!-- Navigation -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="../Index.php" id="SustainNavImg">
          <img src="../Images\dundeeSus.png" alt="UnLogoSustain" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0"></ul>


          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <h2 class="nav-link dropdown-toggle" id="navbarDropDown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Goals
              </h2>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropDown">
                <li><a class="dropdown-item" href="No-Poverty.php">No Poverty</a></li>
                <li><a class="dropdown-item" href="Zero-Hunger.php">Zero Hunger</a></li>
                <li><a class="dropdown-item" href="Good-Health-And-Well-Being.php">Good Health and Well-Being</a></li>
                <li><a class="dropdown-item" href="Quality-Education.php">Quality Education</a></li>
                <li><a class="dropdown-item" href="Gender-Equality.php">Gender Equality</a></li>
                <li><a class="dropdown-item" href="Clean-Water-And-Sanitation.php">Clean Water and Sanitation</a></li>
                <li><a class="dropdown-item" href="Clean-Energy.php">Affordable and Clean Energy </a></li>
                <li><a class="dropdown-item" href="Decent-Work-And-Economic-Growth.php">Decent Work and Economic
                    Growth</a></li>
                <li><a class="dropdown-item" href="Industry-Innovation-And-Infrastructure.php">Industry, Innovation and
                    Infrastructure</a></li>
                <li><a class="dropdown-item" href="Reduced-Inequalities.php">Reduced Inequalities</a></li>
                <li><a class="dropdown-item" href="Sustainable-Cities-And-Communities.php">Sustainable Cities and
                    communities</a></li>
                <li><a class="dropdown-item" href="Responsible-Consumption-And-Production.php">Responsible Consumption
                    and Production</a></li>
                <li><a class="dropdown-item" href="Climate-Action.php">Climate Action</a></li>
                <li><a class="dropdown-item" href="Life-Below-Water.php">Life Below Water</a></li>
                <li><a class="dropdown-item" href="Life-On-Land.php">Life On Land</a></li>
                <li><a class="dropdown-item" href="Peace-And-Justice.php">Peace, Justice and Strong Institutions</a>
                </li>
                <li><a class="dropdown-item" href="Partnerships-For-The-Goals.php">Partnership for the Goals</a></li>
              </ul>
            </li>
          </ul>

          <div id="listButton">
            <a type="button" data-bs-toggle="modal" id="listButton" data-bs-target="#goalListModal">
              <img src="../Images\noteBook.png" alt="listNoteBook" class="d-inline-block align-text-top"
                id="noteBookPng">
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <?php include "../Include/listModal.php"; //Modal for the list, increases readabiliy of this page?>


  <!--https://sdgs.un.org/goals/goal1-->
  <!-- The main text of the page -->
  <div class="container">
    <div class="row">
      <div class="col clearfix">
        <h1 class="text-center">Gender Equality</h1>
        </br>
        <h2 class="text-center">
          ...
        </h2>
        <div class="accordion" id="accordion1">
          <div class="accordion-item">
            <h2 class="accordion-header" id="header1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="false" aria-controls="collapseOne">
                Accordion Item #1
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#accordion1">
              <div class="accordion-body">
                <img src="../images/5.jpg" class="float-md-end mb-3 ms-md-3" alt="placeholder"
                  style="max-width:250px; max-height:250px;">
                <p>
                  <?php
                    include "../Include/printPageGoals.php";
                    printData("1","GenderEquality");
                  ?>
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="header2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="header2"
              data-bs-parent="#accordion1">
              <div class="accordion-body">
                <img src="../images/5.jpg" class="float-md-end mb-3 ms-md-3" alt="placeholder"
                  style="max-width:250px; max-height:250px;">
                <p>
                  <?php
                    printData("2","GenderEquality");
                  ?>
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="header3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordion1">
              <div class="accordion-body">
                <div class="container">
                  <img src="../images/5.jpg" class="float-md-end mb-3 ms-md-3" alt="placeholder"
                    style="max-width:250px; max-height:250px;">
                  <p>
                    <?php
                      printData("3","GenderEquality");
                    ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="map" id="map">
          <script>
            loadMap("map", <?php
              require_once("../Include/map.php");
              loadMap(5);
            ?>);
          </script>
        </div>
        <div id="map-menu"></div>
        <div class="container-flex">
          <div class="infoContainer">
            <?php
              printData("4","GenderEquality");
            ?>
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