<?php

?>

<html lang="en">
  <head>
    <!-- UN FONT -->
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="masterCSS.css">

    <meta charset="utf-8" /> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Index</title>
  </head>

  <body id="bgImage">
    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="Index.php" id="SustainNavImg">
          <img src="Images\dundeeSus.png" alt="UnLogoSustain" class="d-inline-block align-text-top">
        </a>
        <form class="d-flex justify-content-center">
          <input class="form-control me-2" type="search" placeholder="Search. . ." aria-label="Search" id="searchForm">
          <a type="button" data-bs-toggle="modal" data-bs-target="#listModal">
            <img src="Images\noteBook.png" alt="listNoteBook" class="d-inline-block align-text-top" id="noteBookPng">
          </a>
        </form>
      </div>
    </nav>
    <!-- Main Content/body -->
    <content>
      <div class="bg-image">
        <div class="container-flex" id="siteTitle">
          <h1> Sustainable Dundee </h1>
        </div>

        <!-- First carousel -->
        <div id="browserCarousel">
          <div class="container-flex" id="carouselArea">
            <div class="d-flex justify-content-center" id="mobileCarouselTitle">
              <h2> Hover over me </h2>
            </div>
            <div id="firstCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="d-flex justify-content-center">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-lg-6">
                        <a href="OddPages/New folder/No-Poverty.html">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="Images\1.jpg" class="d-block w-100" alt="No Poverty">
                              </div>
                              <div class="flip-card-back" style="background-color: #C92137;">
                                <h1>No Poverty</h1>
                                <p>Implement Dundee's Fairness Strategy and Action Plan. </p>
                                <p>Test a new model of advice on welfare benefits and budgeting to decrease the number of people affected by debt. </p>
                                <p>Increase the number of Dundee organisations and businesses signed up to the Scottish Living Wage and seek to have Dundee accredited as a 'Living Wage City.  </p>
                                <u>Find out more</u>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-lg-6">
                        <a href="Zero-Hunger.html">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                              <img src="Images\2.jpg" class="d-block w-100" alt="Zero Hunger">
                              </div>
                              <div class="flip-card-back" style="background-color: #BF9132;">
                                <h1>Zero Hunger</h1>
                                <p>Support the delivery of a 'Fun and Food' programme giving families access to free meals and activities during school holidays. </p>
                                <p>Streamline procedures for applying for Free School Meals to maximise take-up. </p>
                                <p>Work with Greenspace Scotland to develop a Local Food Growing Strategy and expand the number of community growing projects and support them with skills training, materials and capacity building. </p>
                                <u>Find out more</u>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-lg-6">
                        <a href="OddPages/New folder/GH-WB.html">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                              <img src="Images\3.jpg" class="d-block w-100" alt="Good Health">
                              </div>
                              <div class="flip-card-back" style="background-color: #448E3F;">
                                <h1>Good Health and Well-Being</h1>
                                <p>Reduce teenage pregnancy and implement a strategy on Pregnancy and Parenthood Or Young People. </p>
                                <p>Improve identification and responses to children at risk of harm from parental substance misuse. </p>
                                <p>Work with NHS Tayside and Scottish Natural Heritage to develop a Green Health Partnership, linking health care and greenspace initiatives. </p>
                                <u>Find out more</u>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-lg-6">
                        <a href="Quality-Education.html">
                         <div class="flip-card">
                           <div class="flip-card-inner">
                             <div class="flip-card-front">
                             <img src="Images\4.jpg" class="d-block w-100" alt="Education">
                             </div>
                             <div class="flip-card-back" style="background-color: #AF1F2B;">
                               <h1>Quality Education</h1>
                               <p>Deliver the Scottish Attainment Challenge and use Pupil Equity Funding to provide extra support to pupils with identified needs. </p>
                               <p>Develop new and refurbished school buildings that support learning. </p>
                               <p>Develop an 'Aspire and Achieve project that supports young people from the most deprived areas to access and sustain college places. </p>
                               <u>Find out more</u>
                             </div>
                           </div>
                         </div>
                        </a>
                      </div>
                    </div>
                  </div>


                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-lg-6">
                        <a href="OddPages/New folder/GenderEquality.html">
                         <div class="flip-card">
                           <div class="flip-card-inner">
                             <div class="flip-card-front">
                             <img src="Images\5.jpg" class="d-block w-100" alt="Gender Equality">
                             </div>
                             <div class="flip-card-back" style="background-color: #CF3827;">
                               <h1>Gender Equality</h1>
                               <p>Increase the % of employees in the top salary bands who are female. </p>
                               <p>Work with partners on initiatives to prevent domestic abuse, target perpetrators and support victims.</p>
                               <p>Improve a range of services that will, in practice, impact particularly on women eg expand provision of ready years and childcare and improve support for carers. </p>
                               <u>Find out more</u>
                             </div>
                           </div>
                         </div>
                        </a>
                      </div>
                      <div class="col-lg-6">
                        <a href="OddPages/New folder/water.html">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="Images\6.jpg" class="d-block w-100" alt="Clean water">
                              </div>
                              <div class="flip-card-back" style="background-color: #24A8CA;">
                                <h1>Clean Water and Sanitation</h1>
                                <p>Undertake Flood protection schemes between Camperdown Dock and Dundee Airport and in Broughty Ferry. </p>
                                <p>Work with Scottish Water to improve the city's water/sewage infrastructure. </p>
                                <p>Undertake coastal and watercourse inspections and organise repairs and maintenance as part of our Flood Risk Management plan. </p>
                                <u>Find out more</u>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-lg-6">
                        <a href="OddPages/New folder/Energy.html">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="Images\7.jpg" class="d-block w-100" alt="Clean Energy">
                              </div>
                              <div class="flip-card-back" style="background-color: #DCAC12;">
                                <h1>Affordable and Clean Energy</h1>
                                <p>Maximise the External Wall Insulation programme to reduce fuel bills and carbon emissions.</p>
                                <p>Increase the number of District Heating Schemes and develop a Low Carbon District Energy Hub at the Regional Performance Centre for Sport. </p>
                                <p>Instal photovoltaic panels on new buildings and major refurbishments (eg schools, sports centres, community buildings) where feasible. </p>
                                <u>Find out more</u>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                      <div class="col-lg-6">
                        <a href="Decent-Work-And-Economic-Growth copy.html">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="Images\8.jpg" class="d-block w-100" alt="Growth">
                              </div>
                              <div class="flip-card-back" style="background-color: #901B3D;">
                                <h1>Decent work and Economic Growth</h1>
                                <p>Develop a programme to reach, engage and provide intensive early support to those most at risk of long term unemployment, including multi-agency community hubs delivering employability support in two areas of the city. </p>
                                <p>Develop a skills development pathway which well enable people to progress into better paid employment and tackle in-work poverty. </p>
                                <p>Develop facilities to promote skills development eg a regional hospitality and tourism centre. </p>
                                <u>Find out more</u>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#firstCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#firstCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            <div class="d-flex justify-content-center" id="sliderCounter">
              <button type="button" data-bs-target="#firstCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#firstCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#firstCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#firstCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
          </div>
        </div>

        <!-- Mobile Carousel -->
        <div id="mobileCarousel" style="display:none">
          <div class="container-flex" id="carouselArea">
            <div class="d-flex justify-content-center" id="mobileCarouselTitle">
              <h2> Tap on each to find out more </h2>
            </div>
            <div id="smallFirstCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="d-flex justify-content-center">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="OddPages/New folder/No-Poverty.html">
                      <img src="Images\1.jpg" class="d-block w-100" alt="No Poverty">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="Zero-Hunger.html">
                      <img src="Images\2.jpg" class="d-block w-100" alt="Zero Hunger">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="OddPages/New folder/GH-WB.html">
                      <img src="Images\3.jpg" class="d-block w-100" alt="Good Health">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="Quality-Education.html">
                      <img src="Images\4.jpg" class="d-block w-100" alt="Education">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="OddPages/New folder/GenderEquality.html">
                      <img src="Images\5.jpg" class="d-block w-100" alt="Gender Equality">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="Clean-Water-And-Sanitation.html">
                      <img src="Images\6.jpg" class="d-block w-100" alt="Clean Water">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="OddPages/New folder/Energy.html">
                      <img src="Images\7.jpg" class="d-block w-100" alt="Clean Energy">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="Decent-Work-And-Economic-Growth copy.html">
                      <img src="Images\8.jpg" class="d-block w-100" alt="Growth">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="OddPages/New folder/Industry.html">
                      <img src="Images\9.jpg" class="d-block w-100" alt="innovation">
                    </a>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#smallFirstCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#smallFirstCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>

        <!-- White Space -->
        <div class="container-fluid" id="intermissionArea">
          <div class="container" id="textAreaIndex">
            <h2>What is sustainability and what does it mean for Dundee?</h2>

            <p>Sustainability is concerned with looking after our natural environment whilst ensuring a strong economy and a fair and healthy society. These three pillars of economy, environment and society are dependent on each other for a Sustainable Dundee: </p>

            <h3> Society </h3>
            <p> - Health, Security, Equality </p>
            <h3> Environment </h3>
            <p> - Air Quality, Green space, Energy, Waste </p>
            <h3> Economy </h3>
            <p> - Jobs, Development, Connectivity </p>

          </div>
        </div>

        <!-- Second Carousel -->
        <div id="browserCarousel">
          <div class="container-flex" id="carouselArea">
            <div class="d-flex justify-content-center" id="mobileCarouselTitle">
              <h2> Hover over me </h2>
            </div>
            <div id="secondCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="d-flex justify-content-center">
                <div class="carousel-inner">

                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-lg-6">
                        <a href="OddPages/New folder/Industry.html">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="Images\9.jpg" class="d-block w-100" alt="innovation">
                              </div>
                              <div class="flip-card-back" style="background-color: #D45E2A;">
                                <h1>Industry, Innovation and Infrastructure</h1>
                                <p>Establish Dundee as a location for oil and gas decommissioning and renewables. </p>
                                <p>Develop incubation facilities and affordable workspace for the creative sector. </p>
                                <p>Develop and implement a revised Social Enterprise Action Plan for the city. </p>
                                <u>Find out more</u>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-6">
                        <a href="Reduced-Inequalities.html">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="Images\10.jpg" class="d-block w-100" alt="Reduce">
                              </div>
                              <div class="flip-card-back" style="background-color: #C51474;">
                                <h1>Reduced Inequalities</h1>
                                <p>Develop a single Equality Plan to address discrimination due to disabiity, race, religion, gender, LGBT or age, and the duty of socio-economic inclusion.</p>
                                <p>Develop a single gateway to provide early support to those with a health condition or disability who are in work, off sick or recently unemployed. </p>
                                <p>Deliver a Breakthrough Mentoring Programme for Looked After Children and ensure all looked after children have access to advocacy support. </p>
                                <u>Find out more</u>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-6">
                        <a href="OddPages/New folder/Cities-Comm.html">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                  <img src="Images\11.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="flip-card-back" style="background-color: #DA8B27;">
                                <h1>Sustainable cites and communities</h1>
                                <p>Build 1,000 new affordable homes over 5 years. </p>
                                <p>Continue to develop the city's electric vehicle charging infrastructure and the Council's own fleet of electric vehicles. </p>
                                <p>Improve neighbourhood bus services, develop a financially sustainable model of accessible transport and implement a range of 'active travel' projects which encourage people to walk, cycle or use pubic transport </p>
                                <u>Find out more</u>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-lg-6">
                        <a href="Responsible-Consumption-And-Production.html">
                         <div class="flip-card">
                           <div class="flip-card-inner">
                             <div class="flip-card-front">
                                <img src="Images\12.jpg" class="d-block w-100" alt="Consume">
                             </div>
                             <div class="flip-card-back" style="background-color: #A87D29;">
                                 <h1>Responsible Consumption and Production</h1>
                                 <p>Complete the roll-out of a new household recycling service which meets the Charter for Recycling and Code of Practice. </p>
                                 <p>Rationalise use of the Council's buildings, land and vehicles to achieve efficiencies  and minimise our impact on the environment. </p>
                                 <p>Reduce energy consumption in Council buildings through measures such as SMART metering, Building Energy Management systems and behavioural changes, and expand the use of LED streetlighting. </p>
                                 <u>Find out more</u>
                             </div>
                           </div>
                         </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-lg-6">
                        <a href="OddPages/New folder/Climate.html">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="Images\13.jpg" class="d-block w-100" alt="Climate">
                              </div>
                              <div class="flip-card-back" style="background-color: #3A713F;">
                                <h1>Climate Action</h1>
                                <p>Publish a Strategic Energy and Climate Change Action Plan, designed to deliver sustained reduction in COs emissions, and undertake a Climate Change Risk and Vulnerability Assessment. </p>
                                <p>Deliver a range of projects promoting low carbon fuels, including expanding the % of electric vehicles in the city.</p>
                                <p>Implement the most appropriate option from the National Low Emission Framework to improve air quality. </p>
                                <u>Find out more</u>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                      <div class="col-lg-6">
                        <a href="LifeBelowWater.html">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="Images\14.jpg" class="d-block w-100" alt="Water">
                              </div>
                              <div class="flip-card-back" style="background-color: #1D85BA;">
                                <h1>Life Below Water</h1>
                                <p>Contribute to maintaining the water quality of the River Tay, which supports a wide range of internationally recognised habitats. </p>
                                <p>Continue to maintain the MOM corridor of the Dighty Burn, which promotes habitat continuity and supports conservation. </p>
                                <p>Maintain the Beach Award for Broughty Ferry beach, working in partnership with the Community Council, SEPA, Port Authority, Scottish Water and Scottish Natural Heritage to manage the beach. </p>
                                <u>Find out more</u>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-lg-6">
                       <a href="LifeOnLand.html">
                         <div class="flip-card">
                           <div class="flip-card-inner">
                             <div class="flip-card-front">
                                 <img src="Images\15.jpg" class="d-block w-100" alt="Life on land">
                             </div>
                             <div class="flip-card-back" style="background-color: #50A440;">
                               <h1>Life On Land</h1>
                               <p>Prepare a new Bio-diversity Duty Plan, with actions on sites, habitats, species and people.</p>
                               <p>Encourage citizens to take personal and shared responsibility for the environment through the 'Take Pride In Your City' campaign.</p>
                               <p>Complete the regeneration of Dundee Law and continue to invest in improvements to our green spaces in partnership with community groups.</p>
                               <u>Find out more</u>
                             </div>
                           </div>
                         </div>
                        </a>
                      </div>

                      <div class="col-lg-6">
                        <a href="PeaceAndJustice.html">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="Images\16.jpg" class="d-block w-100" alt="Peace">
                              </div>
                              <div class="flip-card-back" style="background-color: #135E8C;">
                                <h1>Peace, Justice and Strong institutions</h1>
                                <p>Introduce a new Community Infrastructure Fund, using the "Dundee Decides" participatory budgeting process to give local people a say in spending on local infrastructure.</p>
                                <p>Deliver a more integrated health and social care service through Dundee Health and Social Care Partnership.</p>
                                <p>Support Dundee's Protecting People Framework, which co-ordinates multi-agency work on child protection, vulnerable adults, violence against women, alcohol and drug misuse and racist incidents.</p>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                      <div class="col-lg-6">
                        <a href="#">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="Images\17.jpg" class="d-block w-100" alt="Goals">
                              </div>
                              <div class="flip-card-back" style="background-color: #14425F;">
                                <h1>Partnerships for the goals</h1>
                                <p>Recognise Dundee Third Sector Interface - which supports social enterprises and the voluntary sector - as an equal partner in the delivery of the City Plan.</p>
                                <p>Deliver on the follow up to Dundee Faimess Commission, with people who have personal experience of poverty working with senior civic and business leaders to make proposals around key areas of anti-poverty work, and establish a Drugs Commission on a similar model.</p>
                                <p>Work with partners in the Tay Cities Region Joint Committee to manage the principal levers of economic growth across local government boundaries within Tayside.</p>
                                <u>Find out more</u>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#secondCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#secondCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            <div class="d-flex justify-content-center" id="sliderCounter">
              <button type="button" data-bs-target="#secondCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#secondCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#secondCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#secondCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#secondCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
          </div>
        </div>

        <!-- Mobile Carousel -->
        <div id="mobileCarousel" style="display:none">
          <div class="container-flex" id="carouselArea">
            <div class="d-flex justify-content-center" id="mobileCarouselTitle">
              <h2> Tap on each to find out more </h2>
            </div>
            <div id="smallSecondCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="d-flex justify-content-center">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="Reduced-Inequalities.html">
                      <img src="Images\10.jpg" class="d-block w-100" alt="Reduce">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="OddPages/New folder/Cities-Comm.html">
                      <img src="Images\11.jpg" class="d-block w-100" alt="...">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="Responsible-Consumption-And-Production.html">
                      <img src="Images\12.jpg" class="d-block w-100" alt="Consume">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="OddPages/New folder/Climate.html">
                      <img src="Images\13.jpg" class="d-block w-100" alt="Climate">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="LifeBelowWater.html">
                      <img src="Images\14.jpg" class="d-block w-100" alt="Water">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="LifeOnLand.html">
                      <img src="Images\15.jpg" class="d-block w-100" alt="Life on land">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="PeaceAndJustice.html">
                      <img src="Images\16.jpg" class="d-block w-100" alt="Peace">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="#">
                      <img src="Images\17.jpg" class="d-block w-100" alt="Goals">
                    </a>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#smallSecondCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#smallSecondCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>

        <!-- White Space -->
        <div class="container-fluid" id="intermissionArea">
          <div class="container" id="textAreaIndex">
            <h2>By Carring out activities</h2>

            <p>like reducing our waste, increasing our energy efficiency, improving public transport and cycling and walking options, developing renewables, enhancing biodiversity and green spaces and adapting to some of the impacts of climate change; we can proactively improve sustainability in Dundee and benefit from: </p>

            <h3>-Reduced fuel poverty</h3>
            <h3>-Improved air quality and human health</h3>
            <h3>-Reduced CO2 emissions and other greenhouse gases</h3>
            <h3>-Greater employment, apprenticeship opportunities, skills and supply chain development</h3>
            <h3>-Engaging with communities</h3>
            <h3>-Collaborative partnerships between public and private sector</h3>
            <h3>-Creating a knowledge and skills base</h3>
            <h3> -A secure local energy supply which supports the local economy</h3>



          </div>
        </div>

      </div>





    </content>

    <!-- Footer -->
    <footer class="footer">
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
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">Sample Text

          </div>
        </div>
      </div>
      <div class="container-fluid" id="copyrightText"> © 2022 DeepFreezeInc </div>
    </footer>

  </body>











  <!-- JavaScript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="indexJS.js"></script>
</html>
