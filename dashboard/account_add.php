<?php 

    ob_start();
    require_once("include/connection.inc.php");
    $for_active ="account_add"; 
    require_once("include/header.inc.php"); 
    
    $error_first_name = $error_last_name = $error_user_name =  $error_password = $error_retyp_password = "";
    $error = false;

        
    if(isset($_POST["submit"])){
        if(!empty($_POST["first_name"])){
            if(strlen($_POST["first_name"]) < 3){
                $error_first_name = " * first_name must at lest 3 ";
                $error = true; 
            }
        }else{
            $error_first_name = " * Please Enter first_name ";
            $error = true;
        }
        if(!empty($_POST["last_name"])){
            if(strlen($_POST["last_name"]) < 3){
                $error_last_name = " * last_name must at lest 3 ";
                $error = true; 
            }
        }else{
            $error_last_name = " * Please Enter last_name ";
            $error = true;
        }
        if(!empty($_POST["user_name"])){
            if(strlen($_POST["user_name"]) < 3){
                $error_user_name = " * User Name must at lest 3 ";
                $error = true; 
            }
        }else{
            $error_user_name = " * Please Enter User Name ";
            $error = true;
        }
        if(!empty($_POST["user_password"])){
            if(strlen($_POST["user_password"]) < 6){
                $error_password = " * Password must at lest 6 ";
                $error = true;
            }
        }else{
            $error_password = " * Please Enter Password ";
            $error = true;
        }
        if(!empty($_POST["retype_password"])){
            if(strlen($_POST["retype_password"]) < 6 ){
                $error_retyp_password = " * Retyp Password must at lest 6 ";
                $error = true;
            }
        }else{
            $error_retyp_password = " * Please Enter Retyp Password ";
            $error = true;
        }

        if(!$error){
        $first_name = getValue($_POST["first_name"]);
        $last_name = getValue($_POST["last_name"]);
        $user_name = getValue($_POST["user_name"]);
        $user_password = getValue($_POST["user_password"]);
        $user_level = getValue($_POST["user_level"]);
        $account_status = getValue($_POST["account_status"]);
        // $_FILES["photo"];
        
        $admin; $website;

        if($user_level == "admin"){
            $admin = 1;
            $website = 1;
        }
        else if ($user_level == "website"){
            $admin = 0;
            $website = 1;
        }

            $sql = "INSERT INTO users VALUES (NULL, '$first_name', '$last_name','$user_name', PASSWORD('$user_password') , NULL, $account_status, $admin, $website)";
            $result = mysqli_query($con, $sql);

        if($result){
            header("location:account_management.php?add=don");
        }else{
            header("location:account_add.php?error=notadd");
        }
        }
    }

    ?>

        
        <!-- error -->
        <?php if(isset($_GET["error"])) { ?>
        <h2 class="wardak_alert alert-danger text-center p-2 col-md-6 offset-3 "> نوی اکونټ اضافه نه شو بیا کښښ وکړئ </h2>
        <?php } ?>

 <!-- header section by faizullah firozi  -->

 <div class="main-wrapper  account-wrapper">
    <div class="account-page">
        <div class="account-center">
            <div class="account-box">
                <form method="post" class="form-signin" >
                    <div class="account-logo">
                        <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                    </div>
                    <div class="form-group">
                        <label>Firs Name</label>
                        <input type="text" name="first_name" class="form-control">
                        <div class="text-danger" ><?php if($error) echo $error_first_name; ?></div>
                    </div> 
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control">
                        <div class="text-danger" ><?php if($error) echo $error_last_name; ?></div>
                    </div> 
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user_name" class="form-control">
                        <div class="text-danger" ><?php if($error) echo $error_user_name; ?></div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="new"  name="user_password" class="form-control">
                        <div class="text-danger" ><?php if($error) echo $error_password; ?></div>
                    </div>
                    <div class="form-group">
                        <label>ReType Password</label>
                        <input type="password" id="retype" name="retype_password" class="form-control">
                        <div class="text-danger" ><?php if($error) echo $error_retyp_password; ?></div>
                    </div>
                    
                    <div class="form-group">
                        <label>Level</label>
                        <select  name="user_level" class="form-control select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                <option value="admin">Admin</option>
                            <option value="website">website </option>
                        </select>
                    </div>
                
                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Account Status</label>
                                        <div class="col-md-9">
                                            <div class="form-check form-check-inline">
                                            <label class="form-check-label" >
                                                <input class="form-check-input" type="radio" name="account_status"  value="1" checked="">
                                                Active
                                            </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="account_status"  value="0" >
                                                Disable
                                            </label>
                                            </div>
                                        </div>
                                    </div>

                    <div class="form-group">
                        <label>photo</label>
                        <input type="file" name="photo" class="form-control">
                    </div>

                    
                    <div class="form-group text-center">
                        <button class="btn btn-primary account-btn" type="submit" name="submit" >Signup</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>