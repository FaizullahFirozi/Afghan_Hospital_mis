<?php ob_start(); ?>
<?php 
        require_once("include/connection.inc.php"); 
        $for_active ="account_reset";
        require_once("include/header.inc.php"); 

  $employee_id= $_GET["employee_id"];
  
    $sql =  "SELECT * FROM users WHERE user_id=$employee_id";
    $employee = mysqli_query($con, $sql);
    $row_employee = mysqli_fetch_assoc($employee);



if(isset($_POST["submit"])){
    $new = getValue($_POST["new"]);
    $retype = getValue($_POST["retype"]);

    $sql = "UPDATE users SET user_password= PASSWORD('$new') WHERE user_id= $employee_id";
    $result = mysqli_query($con, $sql);    
    
    if($result){
           header("location:account_management.php?edit=done");
        }else{
            header("location:account_reset.php?employee_id=$employee_id&error=notchange");
        }  
}

?>

    <div class="card card-body col-lg-6 offset-lg-3 mt-5 " >
        <div class="card card-header text-info">
            <h3 >Reset Password</h3>
        </div>

<!-- Alert section -->

 <!-- Old password Wrong  -->
            <?php if(isset($_GET["error"])){ ?>
                <div class="alert alert-danger alert-dismissable col-lg-8 offset-2" style="font-size:23px; margin-top: 20px; color:tomato; text-align:center">
                    <button class="close " area-hidden="true" data-dismiss="alert" style="font-size:30px; color:red">&#88;</button>
                    Wrong  !  ستاسو په کود کی غلت دی
                </div>
            <?php } ?>
<!--  end-->

    <div class="card card-body">

    <form method="post" id="change" >
        <h3 class="text mb-3">
             User Name: <span class="text-purple"> <?= $row_employee["first_name"] . " " . $row_employee["last_name"]?></span>
        </h3>
        <div class="input-group-text m-2">
            <span class="w-25 h6 mr-5">
                New Password:</span> <input  id="new" type="password" class="form-control" name="new">
        </div>


        <div class="input-group-text m-2">
            <span class="w-25 h6 mr-4">
                Retype Password:</span>  &nbsp;&nbsp;&nbsp; &nbsp;<input  id="retype" type="password" class="form-control" name="retype">
        </div>

        <input type="submit" name="submit" value="Rest Password" class="btn btn-success m-2">
    </form>



    </div>
</div>

<!--  code by faizullah firozi wardak 0780002528  -->


<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>