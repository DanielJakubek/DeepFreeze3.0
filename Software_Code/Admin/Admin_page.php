<?php

//Security check to make sure that this page while accessed with a valid login

if (!isset($_SESSION)) { session_start(); }

if (isset($_SESSION['validsession'])) {
    if ($_SESSION['validsession']==true) // Login set and password was approved
    {
        //Session is valid, continue loading page
    }
    else //Login set but password was not approved 
    {
        echo "Invalid Session! Please log in";
        header("Location: admin_login.php");
        die();
    }
}
else //Neithe login nor passwaord approval set
{
    echo "Invalid Session! Please log in";
    header("Location: admin_login.php");
    die();
}

$usertab = false // Used to control if user tab is shown

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
    <button style='margin: 5%; width: 80%;' class="btn btn-primary" >Create a new Admin User</button>
    <button style='margin: 5%; width: 35%;' class="btn btn-primary">Edit Website</button>
    <button style='margin: 5%; width: 35%;' class="btn btn-danger" onclick="location.assign('admin_login.php');"> Log Out</button>
    </div>
  </div>
  </div>
</div>

<?php if($usertab == true){  ?>
<div class="container" id="background">
<div class="card text-dark bg-light mb-3" style='margin: 5%'>
  <div class="row justify-content-start">
    <div class="col-4">
    <div class="card-body">
        <p>  </p>
    </div>
    </div>
  </div>
</div>
</div>
<?php } ?>
  
</div>
</div>
</div>
</body>

</html>