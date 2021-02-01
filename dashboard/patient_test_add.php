<?php ob_start(); ?>
<?php
    require_once("include/connection.inc.php"); 
    $for_active ="patient_test_add";
    require_once("include/header.inc.php"); 
        
        $test = mysqli_query($con , "SELECT * FROM test");
        $row_test = mysqli_fetch_assoc($test);

        $patient = mysqli_query($con , "SELECT patient_id, firstname FROM patient");
        $row_patient = mysqli_fetch_assoc($patient);

        $error_test_date = $error_test_result = "";
        $error = false;

    if(isset($_POST["submit"])) {
        
        if(empty($_POST["test_result"])){
                $error_firstname = " * Please Enter Date ! ";
                $error = true;
        }
        if(!empty($_POST["test_result"])){
            
            if(strlen($_POST["test_result"]) < 10 ){
                $error_firstname = " * Lenght of Your Test Result must be at lest 3 ! ";
                $error = true;
            }
        }else{
                $error_firstname = " * Please Enter Test Result ! ";
                $error = true;
        }

        if(!$error){
            $patient_id = getValue($_POST["patient_id"]);
            $test_id = getValue($_POST["test_id"]);
            $test_date = getValue($_POST["test_date"]);
            $test_result = getValue($_POST["test_result"]);

            $sql = "INSERT INTO patient_test VALUES (NULL, $patient_id, $test_id, '$test_date', '$test_result')";
            $result = mysqli_query($con, $sql);
           
            if ($result) {
            header("location:patient_test_list.php?add=done");
            } else {
                header("location:patient_test_add.php?error=notupdate");
            }
        }
    }

?>
<div class="card card-header col-lg-6 offset-lg-3 mt-2">
    <div class="card card-header text-danger">
        <h1>
            <span class="glyphicon glyphicon-plus"></span> Add Patient Test 
            <span class="glyphicon glyphicon-plus"></span>
            </h1>
    </div>
    <div class="card card-body">
    <!-- form  -->
    <form method="post">         
    <div class="input-group-text m-2">
       <span class="w-25">
       <span class="glyphicon glyphicon-user"></span>
            Patient Name:</span> <select class="form-control" name="patient_id">                   
                     <?php do { ?>
                        <option value="<?= $row_patient["patient_id"]; ?>"> <?= $row_patient["firstname"]; ?> </option>
                     <?php } while ($row_patient = mysqli_fetch_assoc($patient)); ?>                    
            </select>
        </div> 
    <div class="input-group-text m-2">
       <span class="w-25">
       <span class="glyphicon glyphicon-user"></span>
            Test Name:</span> <select class="form-control" name="test_id">                
                            <?php do { ?>
                                <option value="<?= $row_test["test_id"]; ?>"> <?= $row_test["test_name"]; ?> </option>
                            <?php } while ($row_test = mysqli_fetch_assoc($test)); ?>                
                            </select>
        </div>
        <div class="input-group-text m-2">
       <span class="w-25">
         <span class="glyphicon glyphicon-time"></span>
            Test Date:</span>                    
                     <input autocomplete="off" type="date" name="test_date" class="form-control">
            </select>
        </div>
        <span class="text-danger"><?php  if($error) echo $error_test_date; ?></span>     
        <div class="input-group-text m-2">
       <span class="w-25">
         <span class="glyphicon glyphicon-time"></span>
            Test Result:</span> 
                     <textarea name="test_result" class="form-control" cols="30" rows="10"></textarea>
                </select>
        </div>
        <div>
        <span class="text-danger"><?php  if($error) echo $error_firstname; ?></span>       
        </div>

        <input type="submit" name="submit" value="Add patient test" class="btn btn-outline-success m-3">
    </form>
<!-- message orror -->
    <?php if(isset($_GET["error"])) { ?>
                    <h3 class="wardak_alert alert alert-danger alert-dismissable text-center" >
                        <button class="close" area-hidden="true" data-dismiss="alert">&times </button>
                    اضافه نه شو بیا کشش وکړئ
                    </h3>

                <?php } ?>
        </div>

</div>






<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>