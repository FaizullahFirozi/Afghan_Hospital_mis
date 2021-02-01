<?php require_once("include/connection.inc.php"); ?>
<?php 

    $staff_id  = getValue($_GET["staff_id"]);


    
    $photo = mysqli_query($con, "SELECT photo FROM staff WHERE staff_id =$staff_id");
    $row_photo = mysqli_fetch_assoc($photo);


    if (! ($row_photo["photo"] == "assets/images/staff/user_m.png" || $row_photo["photo"] == "assets/images/staff/user_f.png")) {  
        unlink($row_photo["photo"]);
    }   

     mysqli_query($con, "DELETE  FROM staff WHERE staff_id = $staff_id");

        header("location:staff_list.php?delete=done");


?>