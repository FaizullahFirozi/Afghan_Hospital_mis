<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active = "advertisement_edit";
        $advertisement_id =  getValue($_GET["advertisement_id"]);

        $advertisement = mysqli_query($con, "SELECT * FROM advertisement WHERE advertisement_id = $advertisement_id");
        $row_advertisement = mysqli_fetch_assoc($advertisement);

    $error_title = $error_description = $error_url = "";
    $error = false;

    if(isset($_POST["submit"])){   
        // ****** Validation Section ******
        if(empty($_POST["title"])){
            $error_title = " * Please Enter Advertisment Title ! ";
            $error = true;
        }  

        if(!empty($_POST["description"])){  
            if(strlen($_POST["description"]) < 20 ){
                $error_description = " * Lenght of description must be at lest 20 ! ";
                $error = true;
            }
        }else{
            $error_description = " * Please Enter Description ! ";
            $error = true;
        }

        if(empty($_POST["url"])){
            $error_url = " * Please Enter URL ! ";
            $error = true;
        }  

        if(!$error){
            $title = getValue($_POST["title"]);
            $description = getValue($_POST["description"]);
            $url = getValue($_POST["url"]);
            $photo = getValue($_POST["photo"]);
            $start_date = getValue($_POST["start_date"]);
            $end_date = getValue($_POST["end_date"]);

        
            $result = mysqli_query($con, "UPDATE advertisement SET title='$title', description='$description', url='$url', photo='$photo', start_date='$start_date', end_date='$end_date'");
        
            if($result){
                header("location:advertisement_list.php?add=done");
            }else{
                header("location:advertisement_add.php?error=notadd");
            }
        }

    }

?>
<?php require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->

 <div class="row" style="background-color:lightgray"> 
    <div class="col-md-10 offset-1 mt-2 ">
                
        <!-- error -->
        <?php if(isset($_GET["error"])) { ?>
        <h1 class="wardak_alert alert-danger text-center p-2 col-md-6 offset-3 ">  اعلان تغیر نه شو بیا کښښ وکړئ </h1>
        <?php } ?>

            <div class="card-box bg-light">
                <h4 class="card-title bg-success text-light p-2">Advertisement Edit Section</h4>
                <form method="post">
                    <div class="form-group">
                        <label>Advertisement Title</label>
                        <input type="text"  name="title" value="<?= $row_advertisement["title"]; ?>" class="form-control">
                        <span class="text-danger"><?php  if($error) echo $error_title; ?></span>      
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"> <?= $row_advertisement["description"]; ?></textarea>
                        <span class="text-danger"><?php  if($error) echo $error_description; ?></span>       
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <input type="text" name="url" value="<?= $row_advertisement["url"]; ?>" class="form-control">
                        <span class="text-danger"><?php  if($error) echo $error_url; ?></span>       
                    </div>
                    <div class="form-group">
                        <label>photo : </label>
                        <?= $row_advertisement["photo"]; ?>
                        <input type="file" name="photo"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Start Date</label>
                        <input type="date" name="start_date" value="<?= $row_advertisement["start_date"]; ?>" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>End Date</label>
                        <input type="date" name="end_date" value="<?= $row_advertisement["end_date"]; ?>" class="form-control">
                    </div>
                    
                    <div class="text-right">
                        <button type="submit" name="submit" class="btn btn-primary">Aadvertisement Edit</button>
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