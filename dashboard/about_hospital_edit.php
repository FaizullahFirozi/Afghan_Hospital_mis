<?php require_once("include/connection.inc.php"); ?>
<?php 
   
   $for_active ="about_hospital_edit";
        $about_hospital = mysqli_query($con, "SELECT * FROM about_hospital ");
        $row_about_hospital = mysqli_fetch_assoc($about_hospital);

    $error_title = $error_description = $error_url = "";
    $error = false;

    if(isset($_POST["submit"])){   
        // ****** Validation Section ******
        if(empty($_POST["title"])){
            $error_title = " * Please Enter About Hospital Title ! ";
            $error = true;
        }  

        if(!empty($_POST["description"])){  
            if(strlen($_POST["description"]) < 10 ){
                $error_description = " * Lenght of About Hospital must be at lest 20 ! ";
                $error = true;
            }
        }else{
            $error_description = " * Please Enter Description ! ";
            $error = true;
        }

        if(!$error){
            $title = getValue($_POST["title"]);
            $description = getValue($_POST["description"]);
           
        
            $result = mysqli_query($con, "UPDATE about_hospital SET title='$title', description='$description'");
        
            if($result){
                header("location:about_hospital.php?add=done");
            }else{
                header("location:about_hospital_edit.php?error=notadd");
            }
        }

    }

?>
<?php
require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->

 <div class="row" style="background-color:lightgray"> 
    <div class="col-md-10 offset-1 mt-2 ">
                
        <!-- error -->
        <?php if(isset($_GET["error"])) { ?>
        <h1 class="wardak_alert alert-danger text-center p-2 col-md-6 offset-3 ">  معلومات تغیر نه شو بیا کښښ وکړئ </h1>
        <?php } ?>

            <div class="card-box bg-light">
                <h4 class="card-title bg-success text-light p-2">About Hospital</h4>
                <form method="post">
                    <div class="form-group">
                        <label>Hospital Title</label>
                        <input type="text"  name="title" value="<?= $row_about_hospital["title"]; ?>" class="form-control">
                        <span class="text-danger"><?php  if($error) echo $error_title; ?></span>      
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"> <?= $row_about_hospital["description"]; ?></textarea>
                        <span class="text-danger"><?php  if($error) echo $error_description; ?></span>       
                    </div>
                   
                    <div class="text-right">
                        <button type="submit" name="submit" class="btn btn-primary"> Edit</button>
                    </div>
                </form>
            </div>
        </div>
                   
                </div>


    <script src="assets/ckeditor/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace("description");
                  </script>
      
<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>