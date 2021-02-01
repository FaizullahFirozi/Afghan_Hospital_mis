<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active ="news_edit";

    $news_id =  getValue($_GET["news_id"]);

    $news = mysqli_query($con, "SELECT * FROM news WHERE news_id = $news_id");
    $row_news = mysqli_fetch_assoc($news);
   
    $error_title = $error_description = $error_source = "";
    $error = false;

    if(isset($_POST["submit"])){  
        // ****** Validation Section ******
        if(empty($_POST["title"])){
            $error_title = " * Please Enter News Title ! ";
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
        if(empty($_POST["source"])){
            $error_source = " * Please Enter Source ! ";
            $error = true;
        }
    
        if(!$error){
            $title = getValue($_POST["title"]);
            $description = getValue($_POST["description"]);
            $news_file = getValue($_POST["news_file"]);
            $news_date = getValue($_POST["news_date"]);
            $source = getValue($_POST["source"]);

            $sql = "UPDATE news SET title='$title', description='$description', news_file='$news_file', news_date= '$news_date',  source='$source' WHERE news_id = $news_id";
            $result = mysqli_query($con,  $sql);
        
            if($result){
                header("location:news_list.php?edit=done");
            }else{
                header("location:news_edit.php?news_id=$news_id&error=notedit");
            }
        }
    }

?>
<?php  require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->

 <div class="row" style="background-color:lightgray"> 
                    <div class="col-md-10 offset-1 mt-2 ">
                                              
 <!-- error -->
<?php if(isset($_GET["error"])) { ?>
                <h1 class="wardak_alert alert-danger text-center p-2 col-md-6 offset-3 "> خبر تغیر نه شو بیا کښښ وکړئ </h1>
                <?php } ?>

                        <div class="card-box bg-transparent">
                            <h4 class="card-title bg-warning text-light p-2">News Edit Section</h4>
                            <form method="post">
                                <div class="form-group">
                                    <label>News Title</label>
                                    <input type="text" value="<?= $row_news["title"]; ?>" name="title" class="form-control">
                                    <span class="text-danger"><?php  if($error) echo $error_title; ?></span>      
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10"><?= $row_news["description"]; ?></textarea>
                                    <span class="text-danger"><?php  if($error) echo $error_description; ?></span>       
                                </div>
                                <div class="form-group">
                                    <label>Photo Or Video</label>
                                    <?= $row_news["news_file"]; ?>
                                    <input type="file" name="news_file"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Source</label>
                                   <input type="text"  value="<?= $row_news["source"]; ?>" name="source" class="form-control">
                                    <span class="text-danger"><?php  if($error) echo $error_source; ?></span>       
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                   <input type="date"  value="<?= $row_news["news_date"]; ?>" name="news_date" class="form-control">
                                </div>
                                <div class="">
                                    <button type="submit" name="submit" class="btn btn-danger">News Edit</button>
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