<?php

if (!isset($_SESSION)) { session_start(); }

if (isset($_SESSION['validsession'])) {
    if ($_SESSION['validsession']==true)
    {
        //Session is valid, continue loading page
    }
    else
    {
        echo "Invalid Session! Please log in";
        //header("Location: admin_login.php");
        die();
    }
}
else
{
    echo "Invalid Session! Please log in";
    //header("Location: admin_login.php");
    die();
}


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

<html>

<body id="background">

<div class="container">
<div class="card text-dark bg-light mb-3" style='margin: 5%'>
  <div class="row justify-content-start">
    <div class="col-4">
    <div class="card-body">
    <img src="userprofile.png" class="card-img-top" alt="Default profile image" style="width: 20%; padding-left: 0%;">
    <br><br>
    <h2> Admin Dashboard </h2>
    <h5> Welcome <?php echo $_SESSION['username']; ?> </h5>
  </div>
    </div>
    <div class="col-4">
    <button style='margin: 5%; width: 80%;' class="btn btn-primary">Create a new Admin User</button>
    <button style='margin: 5%; width: 35%;' class="btn btn-primary">Edit Website</button>
    <button style='margin: 5%; width: 35%;' class="btn btn-danger">Log Out</button>
    </div>
  </div>
  </div>
</div>
  
</div>
</div>
</div>
</body>

</html>