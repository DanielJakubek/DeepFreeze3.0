    <?php
    
    //Set session if not set
    if (!isset($_SESSION)) { session_start(); }

    //get account input
    function query($id){
        include("..\Include\dbConnect.php");
        $sql = "SELECT * FROM accounts WHERE username LIKE '$id'";
    
        $rows = array();
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
        }
        $db->close();
        return $rows;
    }
    
    $valid_session = false; //This is a single var to check if all security checks out
    $username = '';
    $password = '';

    //Check if username set
    if (isset($_POST['username'])) {
        $_SESSION["username"] = $_POST['username']; 
        $username = $_SESSION["username"];
    }

    //Check if Password set
    if (isset($_POST['password'])) {
        $password = crypt($_POST['password'], "$username");
    }
    
    $get_user = [];
    $get_user = query($username);

    //Final password and username check
    if(count($get_user) > 0)
    {
        if($password == $get_user[0]['password'])
        {
            $valid_session = true;
            echo "You're now logged in, Please wait...";
            echo $valid_session;//All checks passed, approve valid session
        }
    }

    if($valid_session != true)
    {
        header("Location: admin_login.php"); //redirect if check is good
        die();
    }
    else if($valid_session == true)
    {
        $_SESSION["validSession"] = $valid_session;
        header("Location: admin_page.php");//redirect back to login if failed check
        die();
    }
    

    ?>
