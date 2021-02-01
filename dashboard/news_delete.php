<?php require_once("include/connection.inc.php"); ?>
  <!-- code by faizullah firozi 2020 -->
<?php 

  $news_id = getValue($_GET["news_id"]);

    $news = mysqli_query($con, "DELETE FROM news WHERE news_id = $news_id");

            if($news)
                {
                    header("location:news_list.php?delete=done");
                }


?>