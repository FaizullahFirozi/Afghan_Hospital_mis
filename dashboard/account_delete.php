<?php 
   require_once("include/connection.inc.php"); 
   $employee_id = $_GET["employee_id"];

   
    $sql =  "DELETE FROM users WHERE user_id=$employee_id";
    $result = mysqli_query($con, $sql);    
    
    if($result){
           header("location:account_management.php?delete=done");
        }

?>
