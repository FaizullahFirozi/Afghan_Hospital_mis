<?php require_once("include/connection.inc.php"); ?>


<?php  // code for feedback
    if(isset($_POST["submit_feedback"]))
    {
      $name = getValue($_POST["name"]);
      $email = getValue($_POST["email"]);
      $phone = getValue($_POST["phone"]);
      $title = getValue($_POST["title"]);
      $message = getValue($_POST["message"]);
      $feedback_date = date("Y-m-d");
      
      $feedback = mysqli_query($con, "INSERT INTO feedback VALUES(NULL, '$name', '$email', '$phone', '$title', '$message', '$feedback_date')");

      if($feedback)
      {
        header("location:../index.php?feedback=sent");
      }
    }
 ?>
 