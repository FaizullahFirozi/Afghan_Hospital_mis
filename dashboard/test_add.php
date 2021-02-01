<?php ob_start(); ?>
<?php
    require_once("include/connection.inc.php"); 
    $for_active ="test_add";
    require_once("include/header.inc.php"); 

   $error_test_name = $error_test_type = $error_price = $error_normal_result = "";
   $error = false;

    if(isset($_POST["submit"])) {
        
        if(!empty($_POST["test_name"])){
            if(!ctype_alnum($_POST["test_name"])){
                $error_test_name = " * Not Valid Test Name ! ";
                $error = true;
            }
            if(strlen($_POST["test_name"]) < 3 ){
                $error_test_name = " * Lenght of Your Test Name must be at lest 3 ! ";
                $error = true;
            }
        }else{
                $error_test_name = " * Please Enter Test Name ! ";
                $error = true;
        }

        if(!empty($_POST["test_type"])){
           
            if(strlen($_POST["test_type"]) < 3 ){
                $error_test_type = " * Lenght of Your Test Type must be at lest 3 ! ";
                $error = true;
            }
        }else{
                $error_test_type = " * Please Enter Test Type ! ";
                $error = true;
        }

        if(!empty($_POST["price"])){
            if(!ctype_digit($_POST["price"])){
                $error_price = " * Not Valid Price Type ! ";
                $error = true;
            }
           
        }else{
                $error_price = " * Please Enter Price ! ";
                $error = true;
        }
        
        if(!empty($_POST["normal_result"])){
           
            if(strlen($_POST["normal_result"]) < 5 ){
                $error_normal_result = " * Lenght of Your Test Result must be at lest 5 ! ";
                $error = true;
            }
        }else{
                $error_normal_result = " * Please Enter Test Result ! ";
                $error = true;
        }
        
      
        if(!$error){

        $test_name = getValue($_POST["test_name"]);
        $test_type = getValue($_POST["test_type"]);
        $price = getValue($_POST["price"]);
        $normal_result = getValue($_POST["normal_result"]);
        
        $sql = "INSERT INTO test VALUES (NULL,'$test_name', '$test_type', $price, '$normal_result')";
        $result = mysqli_query($con, $sql);
      
        if ($result) {
        header("location:test_list.php?add=done");

        } else {
            header("location:test_add.php?error=notupdate");

        }


        }

    }

?>

<div class="card card-header col-lg-6 offset-lg-3 mt-2">

    <div class="card card-header text-danger">

        <h1>
            <span class="glyphicon glyphicon-plus"></span> Add Test 
            <span class="glyphicon glyphicon-plus"></span>
            </h1>
    </div>

    <div class="card card-body">

    <!-- form  -->
    <form method="post">

    
    <div class="input-group-text m-2">
       <span class="w-25">
         <span class="glyphicon glyphicon-time"></span>

         Test Name:</span> 
                     
                     <input autocomplete="off" type="text" name="test_name" class="form-control">
            </select>
        </div>
        <span class="text-danger"><?php  if($error) echo $error_test_name; ?></span>       
    <div class="input-group-text m-2">
       <span class="w-25">
         <span class="glyphicon glyphicon-time"></span>

         Test Type:</span> 
                     
                     <input autocomplete="off" type="text" name="test_type" class="form-control">
            </select>
        </div>
        <span class="text-danger"><?php  if($error) echo $error_test_type; ?></span>       
        <div class="input-group-text m-2">
       <span class="w-25">
         <span class="glyphicon glyphicon-time"></span>

         Price:</span> 
                     
                     <input autocomplete="off" type="text" name="price" class="form-control">
            </select>
        </div>
        <span class="text-danger"><?php  if($error) echo $error_price; ?></span>       

        <div class="input-group-text m-2">
       <span class="w-25">
         <span class="glyphicon glyphicon-time"></span>

         Normal Result:</span> 
                     
                     <input autocomplete="off" type="text" name="normal_result" class="form-control">
            </select>
        </div>
        <div>
        <span class="text-danger"><?php  if($error) echo $error_normal_result; ?></span>       
        </div>
        <input type="submit" name="submit" value="Add Test" class="btn btn-outline-danger m-3">
    </form>
<!-- message orror -->
    <?php if(isset($_GET["error"])) { ?>
                    <h3 class="wardak_alert alert alert-danger alert-dismissable text-center" >
                        <button class="close" area-hidden="true" data-dismiss="alert">&times </button>
                ټیسټ اضافه نشو بیا هڅه وکړئ
                    </h3>

                <?php } ?>
        </div>

</div>






<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>