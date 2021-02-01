<?php require_once("include/connection.inc.php"); ?>
  <!-- code by faizullah firozi 2020 -->
<?php 

  $feedback_id = getValue($_GET["feedback_id"]);

    $feedback = mysqli_query($con, "DELETE FROM feedback WHERE feedback_id = $feedback_id");

            if($feedback_id)
                {
                    header("location:feedback_list.php?delete=done");
                }


?>