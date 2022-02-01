<?php

//Security check to make sure that this page while accessed with a valid login

if (!isset($_SESSION)) {
  session_start();
}

if (isset($_SESSION['validsession'])) {
  if ($_SESSION['validsession'] == true) // Login set and password was approved
  {
    //Session is valid, continue loading page
  } else //Login set but password was not approved 
  {
    echo "Invalid Session! Please log in";
    header("Location: admin_login.php");
    die();
  }
} else //Neithe login nor passwaord approval set
{
  echo "Invalid Session! Please log in";
  header("Location: admin_login.php");
  die();
}

$usertab = false; // Used to control if user tab is shown


?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="masterCss.css">
</head>

<body id="background-grid">

    <div class="container">
        <div class="card text-dark bg-light mb-3" style='margin: 5%'>
            <div class="row justify-content-start">
                <div class="col-4">
                    <div class="card-body">
                        <img src="userprofile.png" class="card-img-top" alt="Default profile image"
                            style="width: 20%; padding-left: 0%;">
                        <br><br>
                        <h2> Admin Dashboard </h2>
                        <h5> Welcome <?php echo $_SESSION['username']; ?> </h5>
                    </div>
                </div>
                <div class="col-4">
                    <button style='margin: 5%; width: 80%;' class="btn btn-primary">Create a new Admin User</button>
                    <button style='margin: 5%; width: 35%;' class="btn btn-primary" onclick="openTab();">Edit
                        Website</button>
                    <button style='margin: 5%; width: 35%;' class="btn btn-danger"
                        onclick="location.assign('admin_login.php');"> Log Out</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id='panel'>
        <div class="card text-dark bg-light mb-3" style='margin: 5%' id='panel'>
            <div class="row justify-content-start" id='panel'>
                <div class="col-4" id='panel'>
                    <div class="card-body" id='panel'>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu overflow-auto" aria-labelledby="dropdownMenuButton1" style="height: 500px; width: 200px;">
                                <li><a class="dropdown-item" href="#">Poverty</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu overflow-auto" aria-labelledby="dropdownMenuButton1" style="height: 500px; width: 200px;">
                                <li><a class="dropdown-item" href="#">Poverty</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-4" id='panel'>
                    <div class="card-body" id='panel'>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"
                            style='width: 700px;'></textarea>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
    </div>

    <script>
    document.getElementById('panel').style.display = 'none';
    var tab = false;

    function openTab() {
        if (tab == false) {
            document.getElementById('panel').style.display = 'block';
            tab = true;
        } else {
            document.getElementById('panel').style.display = 'none';
            tab = false;
        }
    }
    </script>

</body>

</html>