<?php
        require_once("include/connection.inc.php"); 
        $for_active ="about_hospital"; 
        require_once("include/header.inc.php"); 

        $about_hospital = mysqli_query($con, "SELECT * FROM about_hospital ");
        $row_about_hospital = mysqli_fetch_assoc($about_hospital);
?>


<div class="card-box">

	<!-- login -->
	<?php if(isset($_GET["add"])) { ?>
	<div class="wardak_alert alert-success text-danger text-center p-3 col-md-10 offset-1 h1"> Information Succesful Changed ! </div>
	<?php } ?>

        <div class="card-header">
        <div>
        <a href="about_hospital_edit.php" class="btn btn-danger btn-lg " ><b>Edit</b></a>
        </div>
        
        <hr>
                <h1><?= $row_about_hospital["title"]; ?> </h1>
                <hr>
                
                <?= $row_about_hospital["description"]; ?> 

  </div>          
  </div>          
      
<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>