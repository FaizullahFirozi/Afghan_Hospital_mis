<?php ob_start(); ?>
<?php
    require_once("include/connection.inc.php");
    $for_active ="staff_edit";
    require_once("include/header.inc.php"); 

        $staff_id = getValue($_GET["staff_id"]);
        $sql = "SELECT * FROM staff WHERE staff_id = $staff_id";
        $staff = mysqli_query($con, $sql);
        $row_staff = mysqli_fetch_assoc($staff);
// select 

        $sql = "SELECT * FROM department ORDER BY department_id ASC";
        $department = mysqli_query($con, $sql);
        $row_department = mysqli_fetch_assoc($department);

        
        $error_firstname = $error_lastname = $error_phone = $error_email = $error_address = $error_nic = $error_position = $error_Salary = "";
        $error = false;
    if(isset($_POST["submit"])){
    // ****** Validation Section ******
        if(!empty($_POST["firstname"])){
            if(!ctype_alpha($_POST["firstname"])){
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
        
        if(!empty($_POST["email"])){
            if(strlen($_POST["email"]) < 10 ){
                $error_email = " * Lenght of Email must be at lest 10 ! ";
                $error = true;
            } 
        }else{
            $error_email = " * Please Enter Email ! ";
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
        
        if(!empty($_POST["nic"])){  
            if(strlen($_POST["nic"]) < 10 ){
                $error_nic = " * Lenght of NIC must be at lest 10 ! ";
                $error = true;
            }
        }else{
            $error_nic = " * Please Enter NIC ! ";
            $error = true;
        }
      
        if(!empty($_POST["position"])){
            if(strlen($_POST["position"]) < 3 ){
                $error_position = " * Lenght of Position must be at lest 3 ";
                $error = true;
            } 
            if(!ctype_alnum($_POST["position"])){
                $error_position = " * Not Valid Position !  ";
                $error = true;
            } 
        }else{
            $error_position = " * Please Enter Position ! ";
            $error = true;
        }

        if(!empty($_POST["gross_salary"])){
            if(!ctype_digit($_POST["gross_salary"])){
                $error_Salary = " * Not Valid Salary Type !  ";
                $error = true;
            } 
        }else{
            $error_Salary = " * Please Enter Salary ! ";
            $error = true;
        }

        // ****** Variable Section ******
        if(!$error){
                $firstname = getValue($_POST["firstname"]);
                $lastname = getValue($_POST["lastname"]);
                $gender = getValue($_POST["gender"]);
                $dob = getValue($_POST["dob"]);
                $phone = getValue($_POST["phone"]);
                $email = getValue($_POST["email"]);
                if($email == ''){
                    $email = " NULL ";
                }else {
                    $email = "'" . $email . "'";
                }
                $address = getValue($_POST["address"]);
                $nic = getValue($_POST["nic"]);
                $position = getValue($_POST["position"]);
                $gross_salary = getValue($_POST["gross_salary"]);
                $curency = getValue($_POST["curency"]);
                $hire_date = getValue($_POST["hire_date"]);
                $staff_type = getValue($_POST["staff_type"]);
                $department_id = getValue($_POST["department_id"]);

            $filetype = $_FILES["photo"]["type"];
                   if($filetype == "image/jpeg" || $filetype == "image/jpg" || $filetype == "image/png" || $filetype == "image/gif"){
                    if($_FILES["photo"]["size"] <= 4 * 1024 * 1024){
                        $path = "images/staff/" . time() .$_FILES["photo"]["name"];
                        $result = move_uploaded_file($_FILES["photo"]["tmp_name"], $path );

                        if($result){
                             $result = mysqli_query($con, "INSERT INTO staff VALUE (NULL, '$firstname', '$lastname', $gender, $dob, '$nic', '$path', '$position', $gross_salary, '$curency', '$phone', $email, '$address', '$hire_date', $staff_type, $department_id)");
                            if($result){
                                header("location:staff_list.php?add=done");
                            }else{
                                header("location:staff_add.php?error=notadd");
                            }
                        }else{
                            header("location:staff_add.php?upload=failed");
                        }
                    }else{
                        header("location:staff_add.php?filesize=invalid");
                    }
                }else{
                    header("location:staff_add.php?filetype=invalid");
                }
        }
    }

?>


<div class="row ">
                    <div class="col-md-6 offset-3">
                        <form  method="post" enctype="multipart/form-data">
                            <div class="card-box">

                                <div class="row alert-link alert-primary">
                                    <div class="col-md-12 ">
                                        <h4 class="card card-footer alert-success mt-4  ">Personal details</h4>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Name:</label>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?php echo $row_staff["firstname"]; ?>" name="firstname" placeholder="First name" class="form-control">
                                                        <span class="text-danger"><?php  if($error) echo $error_firstname; ?></span>       
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?php echo $row_staff["lastname"]; ?>" name="lastname" placeholder="Last name" class="form-control">
                                                        <span class="text-danger"><?php  if($error) echo $error_lastname; ?></span>       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Gender</label>
                                            <div class="col-md-9">
												<div class="form-check form-check-inline">
                                                <label class="form-check-label" >    
                                                <input class="form-check-input" type="radio" name="gender" value="0" <?php if($row_staff["gender"] == 0 ){ echo 'checked';} ?> >
													Male
													</label>
												</div>
												<div class="form-check form-check-inline">
                                                <label class="form-check-label" >
                                                <input class="form-check-input" type="radio" name="gender"  value="1" <?php if($row_staff["gender"] == 1 ){ echo 'checked';} ?>>
													Female
													</label>
												</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Date of Birth:</label>
                                                 <div class="col-lg-9">
                                             
                                                 <select class="select form-control" name="dob">
                                                     <?php

                                                     $year = date("Y");
                                                     $max = $year - 18;
                                                     $min = $year - 65;
                                                     for($x = $max; $x > $min; $x--)
                                                     {  ?>
                                                     <option value="<?php echo $x; ?>" <?php if($row_staff["dob"] == $x) {echo "selected";} ?> ><?php echo $x; ?> </option>
                                                    <?php  }  ?>

                                                     ?>
                                                  </select>
                                        
                                                 </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Phone:</label>
                                            <div class="col-lg-9">
                                                <input type="text" value="<?php echo $row_staff["phone"]; ?>"class="form-control" name="phone">
                                                <span class="text-danger"><?php  if($error) echo $error_phone; ?></span>       
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Email:</label>
                                            <div class="col-lg-9">
                                                <input type="text" value="<?php echo $row_staff["email"]; ?>"class="form-control" name="email">
                                                <span class="text-danger"><?php  if($error) echo $error_email; ?></span>       
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Address:</label>
                                            <div class="col-lg-9">
                                                <input type="text" value="<?php echo $row_staff["address"]; ?>"class="form-control" name="address">
                                                <span class="text-danger"><?php  if($error) echo $error_address; ?></span>       
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">NIC:</label>
                                            <div class="col-lg-9">
                                                <input type="text" value="<?php echo $row_staff["nic"]; ?>"class="form-control" name="nic">
                                                <span class="text-danger"><?php  if($error) echo $error_nic; ?></span>       
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Position:</label>
                                            <div class="col-lg-9">
                                                <input type="text" value="<?php echo $row_staff["position"]; ?>"class="form-control" name="position">
                                                <span class="text-danger"><?php  if($error) echo $error_position; ?></span>       
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Salary:</label>
                                            <div class="col-lg-9">
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" name="gross_salary" value="<?php echo $row_staff["gross_salary"]; ?>"placeholder="Salary" class="form-control">
                                                        <span class="text-danger"><?php  if($error) echo $error_Salary; ?></span>       
                                                    </div>
                                                    <div class="col-md-6">
                                                        
                                                          <select class="select form-control" name="curency">
                                                              
                                                               <option <?php if($row_staff["currency"] == "AFN") { echo "selected"; } ?>>AFN</option>
                                                               <option <?php if($row_staff["currency"] == "USD") { echo "selected"; } ?>>USD</option>
                                                           </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Hire Date:</label>
                                            <div class="col-lg-9">
                                                <input type="text" value="<?php echo $row_staff["hire_date"]; ?>" required autocomplete="off" class="form-control" id="hire_date" name="hire_date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Staff Type:</label>
                                                 <div class="col-lg-9">
                                             
                                                 <select name="staff_type" class="select form-control">
                                                    <option value="1" <?php if($row_staff["staff_type"] == 1) { echo "selected"; } ?>>Doctor</option>
                                                    <option value="2"<?php if($row_staff["staff_type"] == 2) { echo "selected"; } ?>>Nurse</option>
                                                    <option value="3" <?php if($row_staff["staff_type"] == 3) { echo "selected"; } ?>>Employee</option>
                                                </select>
                                                                            
                                                 </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Department:</label>
                                                 <div class="col-lg-9">
                                             
                                                 <select name="department_id" class="select form-control">
                                                    
                                                 
                                                 <option value="NULL">None</option>

                                                 <?php if($row_department > 0) { ?>
                                                    <!-- code is by developer: faizullah firozi -->
                                                 <?php do { ?>

                                                    <option value="<?php echo $row_department["department_id"] ?>" <?php if($row_staff["department_id"] == $row_department["department_id"] ) { echo "selected"; } ?> ><?php echo $row_department["department_name"] ?></option>
                                                    
                                                 <?php } while($row_department = mysqli_fetch_assoc($department)); ?>
                                                
                                                 <?php } ?>

                                                </select>
                                                                            
                                                 </div>
                                                 
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Photo:</label>
                                            <div class="col-lg-9">
                                            <img class="img-fluid "  src="<?php echo $row_staff["photo"]; ?>" width="100px">
                                                <input type="file"   address="<?php echo $row_staff["photo"]; ?>" class="form-control" name="photo">
                                            </div>
                                        </div>
                                     
                                    </div>
                                    <div class="form-group ml-lg-5 ml-md-5">
                                    <button type="submit" name="submit" class="btn btn-lg btn-outline-success ">Register Staff</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

<script Type="text/javascript">

Calendar.setup({
    inputField      :    "hire_date",
    ifFormat        :    "%Y-%m-%d",
    showsTime       :    false,
    timeFormat      :    "24"
});
</script>
<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>