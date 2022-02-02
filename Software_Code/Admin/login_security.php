    <?php
    
    if (!isset($_SESSION)) { session_start(); }

    function query($id){
        include("Include\dbConnect.php");
        $sql = "SELECT * FROM accounts WHERE username LIKE '$id'";
    
        $rows = array();
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
        }
        $db->close();
        return $rows;
    }
    

    $valid_session = false;
    $username = '';
    $password = '';

    if (isset($_POST['username'])) {
        $_SESSION["username"] = $_POST['username']; 
        $username = $_SESSION["username"];
    }

    if (isset($_POST['password'])) {
        $password = crypt($_POST['password'], "$username");
    }
    
    $get_user = [];
    $get_user = query($username);

    if(count($get_user) > 0)
    {
        if($password == $get_user[0]['password'])
        {
            $valid_session = true;
            echo "You're now logged in, Please wait...";
            echo $valid_session;
        }
    }

    if($valid_session != true)
    {
        header("Location: Admin\admin_login.php");
        die();
    }
    else if($valid_session == true)
    {
        $_SESSION["validSession"] = $valid_session;
        header("Location: Admin\admin_page.php");
        die();
    }
    

    ?>
