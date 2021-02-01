<?php require_once("include/connection.inc.php"); ?>
  <!-- code by faizullah firozi 2020 -->
<?php 

  $blood_bank_id = getValue($_GET["blood_bank_id"]);

    $blood_bank = mysqli_query($con, "DELETE FROM blood_bank WHERE blood_bank_id = $blood_bank_id");

            if($blood_bank)
                {
                    header("location:blood_list.php?delete=done");
                }


?>