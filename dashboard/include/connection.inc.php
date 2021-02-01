<?php

        $con = mysqli_connect("localhost","root","");
        mysqli_select_db( $con, "afghan_hospital");
    
        if(mysqli_connect_errno()){
            echo "Your Connection Error " . mysqli_connect_error();   
        }

        if(!isset($_SESSION)){
            session_start();
        }


        // wraper faunction
        function getValue ($value)
        {
            global $con;
            return mysqli_real_escape_string($con, $value);
        }
            
    if(!isset($_SESSION["user_id"])){
        header("location:login.php?invalid=login");
        exit();
    }
?>