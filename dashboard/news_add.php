<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active ="news_add";

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
            $news_date = date("Y-m-d");
            $source = getValue($_POST["source"]);

            $sql = "INSERT INTO news VALUE(NULL, '$title', '$description', '$news_file', '$news_date', '$source', 0)";
            $result = mysqli_query($con, $sql);
        
            if($result) {
                header("location:news_list.php?add=done");
            }else{
                header("location:news_add.php?error=notadd");
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
                <h1 class="wardak_alert alert-danger text-center p-2 col-md-6 offset-3 "> نوی خبر اضافه نه شو بیا کښښ وکړئ </h1>
                <?php } ?>

                        <div class="card-box blog-author-name">
                            <h4 class="card-title bg-secondary text-light p-2">News Add Section</h4>
                            <form method="post">
                                <div class="form-group">
                                    <label>News Title</label>
                                    <input type="text" name="title" class="form-control">
                                    <span class="text-danger"><?php  if($error) echo $error_title; ?></span>      
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                    <span class="text-danger"><?php  if($error) echo $error_description; ?></span>       
                                </div>
                                <div class="form-group">
                                    <label>Photo Or Video</label>
                                    <input type="file" name="news_file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Source</label>
                                    <input type="text" name="source" class="form-control">
                                    <span class="text-danger"><?php  if($error) echo $error_source; ?></span>       
                                </div>
                                <div class="text-right">
                                    <button type="submit" name="submit" class="btn btn-primary">News Add</button>
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