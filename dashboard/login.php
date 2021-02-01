<?php 

    if(!isset($_SESSION)){
        session_start();
    }

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db( $con, "afghan_hospital");
   
    if(mysqli_connect_errno()){
       echo "Your Connection Error " . mysqli_connect_error();
    }
    
    // wraper faunction
    function getValue($value){
        global $con;
        return mysqli_real_escape_string($con, $value);
    }

    // if you are login you can't to come the login file
   
    if(isset($_SESSION["user_id"])){  
        header("location:dashboard.php"); 
    }
        
    $error_username = $error_password = "";
    $error = false;

        if(isset($_POST["submit"])){
            if(!empty($_POST["username"])){
                if(strlen($_POST["username"]) < 3){
                    $error_username = " * User Name must at lest 3 ";
                    $error = true; 
                }
            }else{
                $error_username = " * Please Enter User Name ";
                $error = true;
            }

            if(!empty($_POST["password"])){
                if(strlen($_POST["password"]) < 3){
                    $error_password = " * Password must at lest 3 ";
                    $error = true;
                }
            }else{
                $error_password = " * Please Enter Password ";
                $error = true;
            }

            if(!$error){
                $username =  getValue($_POST["username"]);
                $password =  getValue($_POST["password"]);

            
                $sql = "SELECT * FROM users WHERE user_name = '$username' AND user_password=PASSWORD('$password')";
                $result = mysqli_query($con, $sql);

                if(mysqli_num_rows($result) == 1){
                    $row_result = mysqli_fetch_assoc($result);
                    $_SESSION["login"] = true;
                    $_SESSION["user_id"]  =   $row_result["user_id"];
                    $_SESSION["first_name"] = $row_result["first_name"];
                    $_SESSION["last_name"] =  $row_result["last_name"];
                    $_SESSION["user_name"] =  $row_result["user_name"];
                    $_SESSION["user_photo"] =  $row_result["user_photo"];
                    $_SESSION["admin_level"]  = $row_result["admin_level"];
                    $_SESSION["website_level"] = $row_result["website_level"];
                    setcookie("cookie" , "hospital" , time() + 3600 * 24 * 7 );
                    header("location:dashboard.php?login=succeseful");
                }else{
                    header("location:login.php?notlogin=failed");
                }
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Afghan Hospital </title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper account-wrapper bg-info">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">

         <!-- form start  -->
        <form method="post"  class="form-signin">

                             
           <!-- message if you not login and go to dashboard or other page -->
           <?php if(isset($_GET["invalid"])) {  ?>
                <div class="alert alert-warning text-center text-danger h4 p-3 alert-dismissable" >
                    <button class="close" area-hidden="true" data-dismiss="alert" style="font-size:40px; color:blue">&#88;</button><b>
                      مهربانی وکړئ لومړی قانونی ورته داخل شئ
                  </b>
              </div>
              <?php  }  ?>                                            
                               
           <!-- message if you not login and go to dashboard or other page -->
           <?php if(isset($_GET["notlogin"])) {  ?>
                <div class="alert alert-danger text-center text-danger h4 p-3 alert-dismissable" >
                    <button class="close" area-hidden="true" data-dismiss="alert" style="font-size:40px; color:blue">&#88;</button><b>
                      Username of Password is Incorrect
                  </b>
              </div>
              <?php  }  ?>                                            
          
                        <div class="text-center">
                        <img src="assets/img/logo-dark.png" width="100px" class="rounded-circle img-thumbnail">
                        </div>
						<!-- <div class="account-logo">
                            <a href="../index.php"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div> -->
                        <div class="text-center">
                        <!-- firozi        -->
                            <span class="spinner-grow text-dark" role="none"></span>
                            <span class="spinner-grow text-danger" role="none"></span>
                            <span class="spinner-grow text-success " role="none"></span>
                        </div>
                        <!-- firozi -->
                        <div class="form-group">

                            <label>Username or Email</label>
                            <input type="text" autocomplete="off" name="username" placeholder="Enter User Name" autofocus="" class="form-control">
                            <div class="text-danger" ><?php if($error) echo $error_username; ?></div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter Password" class="form-control">
                            <div class="text-danger"><?php if($error) echo $error_password; ?></div>
                        </div>
                        <div class="form-group text-right">
                            <a href="forgot-password.html">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                        <button type="submit" name="submit" class="btn btn-primary account-btn">Login</button>
                        <input type="button" onclick="history.back()" class="btn btn-danger account-btn" value="Back">
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="register.html">Register Now</a>
                        </div>
                    </form>
           <!-- form end  -->

                </div>
			</div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- login23:12-->
</html>