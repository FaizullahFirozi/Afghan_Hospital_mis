<?php require_once("include/connection.inc.php"); ?>
  <!-- code by faizullah firozi 2020 -->
<?php 

    $patient_id = getValue($_GET["patient_id"]);

    $patient = mysqli_query($con, "DELETE FROM patient WHERE patient_id = $patient_id");

            if($patient)
                {
                    header("location:patient_list.php?delete=done");
                }


?>