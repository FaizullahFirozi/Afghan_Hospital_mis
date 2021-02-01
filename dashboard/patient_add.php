<?php require_once("include/connection.inc.php"); ?>
<?php 

    $for_active ="patient_add";

    $error_firstname = $error_lastname = $error_address = $error_phone = $error_gender = $error_birth_year = $error_history = $error_date_save = "";
    $error = false;

    if(isset($_POST["submit"])){
        
        if(!empty($_POST["firstname"])){
            if(!ctype_alnum($_POST["firstname"])){
                $error_firstname = " * Not Valid First Name ! ";
                $error = true;
            }
            if(strlen($_POST["firstname"]) < 3 ){
                $error_firstname = " * Lenght of Your First Name must be at lest 3 ! ";
                $error = true;
            }
        }else{
                $error_firstname = " * Please Enter First Name ! ";
                $error = true;
        }

        if(!empty($_POST["lastname"])){
            if(!ctype_alnum($_POST["lastname"])){
                $error_lastname = " * Not Valid Last Name ! ";
                $error = true;
            }
            if(strlen($_POST["lastname"]) < 3 ){
                $error_lastname = " * Lenght of Your Last Name must be at lest 3 ! ";
                $error = true;
            }
        }else{
            $error_lastname = " * Please Enter Last Name ! ";
            $error = true;
        }

        if(!empty($_POST["address"])){
            
            if(strlen($_POST["address"]) < 5 ){
                $error_address = " * Lenght of Address must be at lest 5 ! ";
                $error = true;
            }
        }else{
            $error_address = " * Please Enter Address ! ";
            $error = true;
        }

        if(!empty($_POST["phone"])){
           
            if(strlen($_POST["phone"]) < 10){
                $error_phone = " * Numbers Must at lest 10 ";
                $error = true;
            }
            if(!ctype_digit($_POST["phone"])){
                $error_phone = " * Please Enter Numbers Like 0780002528 ";
                $error = true;
            }

        }else{
            $error_phone = " * Please Enter Phone Number ! ";
            $error = true;
        }
      
        if(!$error){
            $firstname = getValue($_POST["firstname"]);
            $lastname = getValue($_POST["lastname"]);
            $address = getValue($_POST["address"]);
            $phone = getValue($_POST["phone"]);
            $gender = getValue($_POST["gender"]);
            $birth_year = getValue($_POST["birth_year"]);
            $history = getValue($_POST["history"]);
            $date_save = date("Y-m-d");
        
            $sql = "INSERT INTO patient VALUES(NULL, '$firstname', '$lastname', '$address', '$phone', $gender, $birth_year, '$history', '$date_save')";
            $patient = mysqli_query($con, $sql);

            if($patient){
                    header("location:patient_list.php?add=done");
            }else{
                    header("location:patient_add.php?error=notadd");
            }
        }  
    }




?>
<?php require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->

 <div class="row">
    <div class="col-md-6 offset-3 bg-info ">
                        
                                                
<!-- error -->
<?php if(isset($_GET["error"])) { ?>
<h3 class="wardak_alert alert-danger text-center p-2 col-md-6 offset-3 "> مریض اضافه نه شو بیا کوښښ وکړئ </h3>
<?php } ?>

        <div class="card-box mt-4">
            <h1 class="card-title text-success ">Add New Patient</h1>
            <form method="post">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label h4">First Name</label>
                            <div class="col-md-9">
                                <input type="text" name="firstname"  autocomplete="off" placeholder="First Name" class="form-control">
                                <span class="text-danger"><?php  if($error) echo $error_firstname; ?></span>       
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label h4">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" name="lastname"  autocomplete="off"  placeholder="Last Name" class="form-control">
                                <span class="text-danger"><?php  if($error) echo $error_lastname; ?></span>       
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label h4">Address</label>
                            <div class="col-md-9">
                                <input type="text" name="address"  autocomplete="off"   placeholder="Address" class="form-control">
                                <span class="text-danger"><?php  if($error) echo $error_address; ?></span>       
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label h4">Phone</label>
                            <div class="col-md-9">
                                <input type="text" name="phone"  autocomplete="off"  placeholder="Phone" class="form-control">
                                <span class="text-danger"><?php  if($error) echo $error_phone; ?></span>       
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label h4">Gender</label>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">   
                                <input class="form-check-input" type="radio" name="gender"  value="0" checked="">
                                    Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" >
                                <input class="form-check-input" type="radio" name="gender"  value="1">
                                    Female
                                    </label>
                                </div>
                            </div>
                        </div>
                            
                        
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label h4">Birth Year</label>
                            <div class="col-md-9">
                                <select class="select select2-hidden-accessible" name="birth_year">
                                        <?php 
                                                $year = date("Y");
                                                $max = $year - 18; 
                                                $min = $year - 65; 
                                        ?>
                                    <?php for($x = $max; $x > $min; $x--) { ?>
                                        <option value="<?= $x; ?>"> <?= $x; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label h4">History</label>
                            <div class="col-md-9">
                                <textarea name="history" autocomplete="off"  placeholder="Hitory About Patient !"  class="form-control " id="" ></textarea>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div>
                    <button type="submit" name="submit" class="btn  btn-outline-success w-100">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>