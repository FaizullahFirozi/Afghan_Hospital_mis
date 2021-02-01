<?php ob_start(); ?>
<?php 
        require_once("include/connection.inc.php"); 
        $for_active ="change_password";
        require_once("include/header.inc.php"); 
 
if(!isset($_SESSION)){
    session_start();
}

if(isset($_POST["old"])){
    $old = getValue($_POST["old"]);
    $new = getValue($_POST["new"]);

    $sql =  "SELECT * FROM users WHERE user_id=". $_SESSION["login"] . " AND user_password= PASSWORD('". $old ."')";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) == 1){
        if(mysqli_query($con, "UPDATE users SET user_password= PASSWORD('$new') WHERE user_id=". $_SESSION["login"])){
           header("location:change_password.php?change=done");
        }else{
            header("location:change_password.php?error=notchange");
        }
    }else{
        header("location:change_password.php?old=wrong");
    }
}

?>

    <div class="card card-body col-lg-6 offset-lg-3 mt-5 " >
        <div class="card card-header text-info">
            <h1 >Change Password</h1>
        </div>

<!-- Alert section -->

<!-- change password successful  -->
            <?php if(isset($_GET["change"])){ ?>

                <div class="wardak_alert alert alert-success alert-dismissable col-lg-8 offset-2" style="font-size:23px; margin-top: 20px; color:tomato; text-align:center">

                    <button class="close " area-hidden="true" data-dismiss="alert" style="font-size:30px; color:red">&#88;</button>
                    Successful  ! په بریالئ توگه ستاسو کود تغیر شو!  مننه
                </div>
            <?php } ?>
 <!-- Old password Wrong  -->
            <?php if(isset($_GET["old"])){ ?>

                <div class="alert alert-danger alert-dismissable col-lg-8 offset-2" style="font-size:23px; margin-top: 20px; color:tomato; text-align:center">
                    <button class="close " area-hidden="true" data-dismiss="alert" style="font-size:30px; color:red">&#88;</button>
                    Wrong  !  ستاسو پخوانئ کود غلت دی
                </div>
            <?php } ?>
<!--  end-->

    <div class="card card-body">

    <form method="post" id="change" >
        <div class="input-group-text m-2">
            <span class="w-25 h6 mr-5">
        Old Password:</span> <input autofocus="autofocus" type="password" class="form-control " name="old">
        </div>

        <div class="input-group-text m-2">
            <span class="w-25 h6 mr-5">
                New Password:</span> <input minlength="6" id="new" type="password" class="form-control" name="new">
        </div>


        <div class="input-group-text m-2">
            <span class="w-25 h6 mr-4">
                Retype Password:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input minlength="6" id="retype" type="password" class="form-control" name="retype">
        </div>

        <input type="submit" value="Change Password" class="btn btn-success m-2">
    </form>



    </div>
</div>

<!--  code by faizullah firozi wardak 0780002528  -->


<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>