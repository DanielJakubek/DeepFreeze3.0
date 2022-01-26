    <?php
    
    if (isset($_POST['username'])) {
        echo "This is Button1 that is selected";
    }

    if (isset($_POST['password'])) {
        $password = crypt($_POST['password'], "FrozenBeans");
        echo "your password is ", $password, "Get pwned n00b >:)";
    }

    


    ?>