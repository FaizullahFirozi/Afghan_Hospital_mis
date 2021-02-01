<?php require_once("include/connection.inc.php"); ?>
  <!-- code by faizullah firozi 2020 -->
<?php 

  $advertisement_id = getValue($_GET["advertisement_id"]);

    $advertisement = mysqli_query($con, "DELETE FROM advertisement WHERE advertisement_id = $advertisement_id");

            if($advertisement)
                {
                    header("location:advertisement_list.php?delete=done");
                }


?>