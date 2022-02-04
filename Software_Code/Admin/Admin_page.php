<?php

//Security check to make sure that this page while accessed with a valid login

if (!isset($_SESSION)) {
  session_start();
}

if (isset($_SESSION['validSession'])) {
  if ($_SESSION['validSession'] == true) // Login set and password was approved
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

//=========================== Check for form submission ===================================

//Create a new database entry for the new user
function createNewUser($name, $pass)
{
    include("..\Include\dbconnect.php");

    //Updates the table
    $query = "INSERT INTO accounts (`username`, `password`) VALUES ('$name', '$pass');";
    $stmt = $db->prepare($query);
    $stmt->execute(); 

    $db->close();
}

$newPassword = "";
$newUsername = "";
$valid = true; //Check to ensure that password and username are not empty

//Read for new username from POST
if (isset($_POST['newUsername'])) {
    if($_POST['newUsername'] != "")
    {
        $newUsername = $_POST['newUsername']; 
    }
    else
    {
        $valid = false;
    }
}
else
{
    $valid = false;
}

//Read for new password from POST
if (isset($_POST['newPassword'])) {
    if($_POST['newPassword'] != "")
    {
        $newPassword = crypt($_POST['newPassword'], "$newUsername");
    }
    else
    {
        $valid = false;
    }
}
else
{
    $valid = false;
}

//If all checks passed with no issues, call method to add
if($valid == true){

    createNewUser($newUsername, $newPassword);
}

//=========================== Edit Page Logic ===================================

$page = "Page to edit"; 
$element = "Element to edit";
$text = ""; // text from database

//Check if anything was input into page dropdown
if(isset($_POST["selection1"]))
{
    //Save in session
    $_SESSION["page"] = $_POST["selection1"];
    $page = $_SESSION["page"];
}
else {

    //restore input to display it later
    if(isset($_SESSION["page"]))
    {
        $page = $_SESSION["page"];
    }
    
}

//Check if anything was input into section/element dropdown
if(isset($_POST["selection2"]))
{
    //Save in session
    $_SESSION["element"] = $_POST["selection2"];
    $element = $_SESSION["element"];
}
else {

    //restore input to display it later
    if(isset($_SESSION["element"]))
    {
        $element = $_SESSION["element"];
    }

}

//Check if text has been changed
if(isset($_POST["text"]))
{
    $text = $_POST["text"];
    setTexto($page, $element, $text); //save to database
}

//Get text from database
function getTexto($page, $element)
{
    
    if(!isset($_SESSION["element"]))
    {
        if(!isset($_SESSION["text"]))
        {
            return "Please select which page and section in that page you wish to edit";
        }
    }
    
    include("..\Include\dbconnect.php");

    //Updates the table
    $query = "SELECT `Text` FROM `pagetextsegments` WHERE `PageName`='$page' AND `SegmentID`='$element'; ";
    
    $rows = array();
    $result = $db->query($query);
    while ($row = $result->fetch_assoc()) {
        $returnText = $row['Text'];
    }
    
    $db->close();
    return $returnText;
    
}

//Write text changes to database
function setTexto($page, $element, $text)
{
    include("..\Include\dbconnect.php");

    //Updates the table
    $query = "UPDATE `pagetextsegments` SET `PageName`='$page',`SegmentID`='$element',`Text`='$text' WHERE `PageName`='$page' AND `SegmentID`='$element';" ;
    $stmt = $db->prepare($query);
    $stmt->execute(); 

    $db->close();
}

?>
<html>

<head>
    <!-- Bootstrap CSS import -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body style="background-color: #ffffff;
  opacity: 1;
  background-image:  linear-gradient(#f4f4f4 2.8000000000000003px, transparent 2.8000000000000003px), linear-gradient(to right, #f4f4f4 2.8000000000000003px, #ffffff 2.8000000000000003px);
  background-size: 56px 56px;">

    <div class="container">
        <div class="card text-dark bg-light mb-3" style='margin: 5%'>
            <div class="row justify-content-start">
                <div class="col-4">
                    <div class="card-body" style="width: 300px;">
                        <img src="userprofile.png" class="card-img-top" alt="Default profile image"
                            style="width: 200px; padding-left: 0%; padding-right: 64px;">
                        <br><br>
                        <h2> Admin Dashboard </h2>
                        <h5> Welcome <?php echo $_SESSION['username']; ?> </h5>
                    </div>
                </div>
                <div class="col-4" style="padding-top: 8px; margin-left: 10px;">
                    <button style='margin: 5%; width: 242px;' class="btn btn-primary" onclick="openUserPanel();">Create
                        a
                        new Admin User</button>
                    <button style='margin: 5%; width: 242px;' class="btn btn-primary" onclick="openTab();">Edit
                        Website</button>
                    <button style='margin: 5%; width: 242px;' class="btn btn-danger"
                        onclick="location.assign('admin_login.php');"> Log Out</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id='userpanel'>
        <div class="card text-dark bg-light mb-3" style='margin: 5%'>
            <div class="row justify-content-start">
                <div class="col-4">
                    <div class="card-body" style="width: 300px;">
                        <form action=" Admin_page.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">New Username</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="newUsername">
                                <div id="emailHelp" class="form-text"> Please only input A-Z without any numbers
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    name="newPassword">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id='panel'>
        <div class="card text-dark bg-light mb-3" style='margin: 5%' id='panel'>
            <div class="row justify-content-start" id='panel'>
                <div class="col-4" id='panel'>
                    <div class="card-body" id='panel'>


                        <div class="container">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php  
                                    echo $page;
                                    ?>
                                </button>
                                <ul class="dropdown-menu overflow-auto" aria-labelledby="dropdownMenuButton1"
                                    style="height: 500px; width: 400px;" name="page">
                                    <form action="Admin_page.php" method="post">
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="Energy">Clean Energy</button>
                                        </li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="Clean-Water-And-Sanitation">Clean Water and Sanitation</button>
                                        </li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="Climate">Climate Action</button></li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="Decent-Work-And-Economic-Growth">Decent Work and Economic
                                                Growth</button></li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="GenderEquality">Gender Equality</button></li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="GH-WB">Good Health and Well Being</button>
                                        </li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="Industry">Industry Innovation and
                                                Infastructure</button>
                                        </li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="LifeBelowWater">Life Below Water</button></li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="LifeOnLand">Life On Land</button></li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="No-Poverty">No Poverty</button></li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="Partnerships">Partnerships For The Goals</button>
                                        </li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="PeaceAndJustice">Peace And Justice</button></li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="Quality-Education">Quality Education</button></li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="Reduced-Inequalities">Reduced Inequalities</button></li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="Responsible-Consumption-And-Production">Responsible Consumption
                                                And Production</button>
                                        </li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="Cities-Comm">Sustainable Cities And
                                                Communities</button>
                                        </li>
                                        <li><button class="dropdown-item" name="selection1" type="submit"
                                                value="Zero-Hunger">Zero Hunger</button></li>
                                    </form>
                                </ul>
                            </div>
                        </div>


                        <div class="container" style="margin-top: 25px;">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php  
                                    echo $element;
                                    ?>
                                </button>
                                <ul class="dropdown-menu overflow-auto" aria-labelledby="dropdownMenuButton1"
                                    style="height: 150px; width: 200px;" name="element">
                                    <form action="Admin_page.php" method="post">
                                        <li><button class="dropdown-item" name="selection2" type="submit" value="1">Item
                                                #1</button></li>
                                        <li><button class="dropdown-item" name="selection2" type="submit" value="2">Item
                                                #2</button></li>
                                        <li><button class="dropdown-item" name="selection2" type="submit" value="3">Item
                                                #3</button></li>
                                        <li><button class="dropdown-item" name="selection2" type="submit" value="4">Item
                                                #4</button></li>
                                    </form>
                                </ul>
                            </div>
                        </div>

                      

                    </div>
                </div>
                <div class="col-7" id='panel'>
                    <div class="card-body" id='panel' style="margin-left: 60px">
                    <form action="Admin_page.php" method="post">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"
                            style='width: 100%;' name='text'> <?php echo getTexto($page, $element); ?> </textarea>
                            <button type="submit" class="btn btn-primary" name="check">Submit</button>
                    </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    </div>

    <script>

    //Show edit button panel
    document.getElementById('panel').style.display = 'none';
    //Show add user button panel
    document.getElementById('userpanel').style.display = 'none';

    //Boolean checks if panel is open or closed
    var tab = false;
    var userPanel = false;

    //Import previous state of bool checks
    var panelMemory = <?php echo json_encode($_POST['selection1'] ?? null) ?>;
    var panelMemory2 = <?php echo json_encode($_POST['selection2'] ?? null) ?>;

    //Check bool and open if clicked before hand as dictated by memory variables^
    if (panelMemory != null) {
        openTab();
    }
    if (panelMemory2 != null) {
        openTab();
    }

    //Open and close panels
    function openTab() {
        if (tab == false) {
            document.getElementById('panel').style.display = 'block';
            tab = true;
        } else {
            document.getElementById('panel').style.display = 'none';
            tab = false;
        }
    }

    //Open and close panels
    function openUserPanel() {
        if (userPanel == false) {
            document.getElementById('userpanel').style.display = 'block';
            userPanel = true;
        } else {
            document.getElementById('userpanel').style.display = 'none';
            userPanel = false;
        }
    }
    </script>

</body>

</html>
