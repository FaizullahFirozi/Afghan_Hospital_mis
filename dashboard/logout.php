<?php 

    require_once("include/connection.inc.php");
      
    session_destroy();
   
        $_SESSION["login"] = true;  
        unset($_SESSION["user_id"]);
        unset($_SESSION["first_name"]); 
        unset($_SESSION["last_name"]); 
        unset($_SESSION["user_name"]); 
        unset($_SESSION["user_photo"]);
        unset($_SESSION["admin_level"]);  
        unset($_SESSION["website_level"]);

        header("location: login.php");
    // created by faizullah firozi 2020/9/3
?>