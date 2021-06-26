<?php
          
   
    if($_GET['code'] == "12345"){
       // Query
        $_SESSION['night_visits']++;
        $sqls = "UPDATE users SET night_visits='{$_SESSION['night_visits']}' WHERE email='{$_SESSION['email']}' ";
           
        if (mysqli_query($connection, $sqls)) {
            $message = "Enjoy Arcade Night";
        } else {
            $message = "Error with quiry";
        }
        
       // Create mysql query
        $stmt = mysqli_query($connection, $sqls);

    }else {
        $message = "Incorrect code";
    }
?>