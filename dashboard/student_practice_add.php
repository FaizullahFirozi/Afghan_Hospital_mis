<?php require_once("include/connection.inc.php"); ?>
<?php ob_start(); ?>
<?php 
        $for_active ="student_practice_add";
        require_once("include/header.inc.php"); ?>

<?php 

        $department = mysqli_query($con, "SELECT * FROM department ORDER BY department_id ASC");
        $row_department = mysqli_fetch_assoc($department);

    if(isset($_POST["firstname"]))
    {

        // echo "afghan"; exit;

                $firstname = getValue($_POST["firstname"]);
                $lastname = getValue($_POST["lastname"]);
                $phone = getValue($_POST["phone"]);
                $email = getValue($_POST["email"]);
                if($email == '')
                {
                    $email = " NULL ";
                }
                else 
                {
                    $email = "'" . $email . "'";
                }
                $gender = getValue($_POST["gender"]);
                $address = getValue($_POST["address"]);
                $university = getValue($_POST["university"]);
                $department_id = getValue($_POST["department_id"]);
                $start_date = getValue($_POST["start_date"]);
                $end_date = getValue($_POST["end_date"]);

                if($_FILES["photo"]["type"] != "")
                {

                    $filetype = $_FILES["photo"]["type"];

                   if($filetype == "image/jpeg" || $filetype == "image/jpg" || $filetype == "image/png" || $filetype == "image/gif")
                   {
                    if($_FILES["photo"]["size"] <= 4 * 1024 * 1024)
                    {
                        $path = "assets/images/student_practice/" . time() .$_FILES["photo"]["name"];
                        $result = move_uploaded_file($_FILES["photo"]["tmp_name"], $path );
    
                    }
                    else
                    {
                        header("location:student_practice_add.php?filesize=invalid");
                        exit();
                    }
                }
                else
                {
                    header("location:student_practice_add.php?filetype=invalid");
                    exit();
                }
            }
            else 
            {
                if($gender == 0){
                            $path = "assets/images/staff/user_m.png";
                }
                else 
                {
                        $path = "assets/images/staff/user_f.png";
                }
            }

            
              $result = mysqli_query($con, "INSERT INTO practice VALUE (NULL, '$firstname', '$lastname','$phone', $email,  $gender,'$address',  '$path', '$university', $department_id , '$start_date', '$end_date' )");
         
             if($result)
            {
                header("location:student_practice_list.php?add=done");
            }
            else
            {
                header("location:student_practice_add.php?error=notadd");
            }
      

            }

?>


<div class="row ">
                    <div class="col-md-6 offset-3">
                        <form  method="post" enctype="multipart/form-data">
                            <div class="card-box">

                                <div class="row alert-link alert-secondary">
                                    <div class="col-md-12 ">
                                        <h4 class="card card-footer alert-warning mt-4  ">Student Practice details</h4>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Name:</label>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" name="firstname" autocomplete="off" placeholder="First name" class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="lastname" autocomplete="off" placeholder="Last name" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Phone:</label>
                                            <div class="col-lg-9">
                                                <input type="text" autocomplete="off" class="form-control" name="phone">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Email:</label>
                                            <div class="col-lg-9">
                                                <input type="text" autocomplete="off" class="form-control" name="email">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Gender</label>
                                            <div class="col-md-9">
												<div class="form-check form-check-inline">
                                                <label class="form-check-label" >    
                                                <input class="form-check-input" type="radio" name="gender" value="0" checked="">
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
                                            <label class="col-lg-3 col-form-label">Address:</label>
                                            <div class="col-lg-9">
                                                <input type="text" autocomplete="off" class="form-control" name="address">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">University:</label>
                                            <div class="col-lg-9">
                                                <input type="text" autocomplete="off" class="form-control" name="university">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Department:</label>
                                                 <div class="col-lg-9">
                                             
                                                 <select name="department_id" class="select form-control">
                                                    
                                                 
                                                 <option value="1">None</option>

                                                 <?php if($row_department > 0) { ?>
                                                    <!-- code is by developer: faizullah firozi -->
                                                 <?php do { ?>

                                                    <option value="<?php echo $row_department["department_id"] ?>"><?php echo $row_department["department_name"] ?></option>
                                                    
                                                 <?php } while($row_department = mysqli_fetch_assoc($department)); ?>
                                                
                                                 <?php } ?>

                                                </select>
                                                                            
                                                 </div>
                                                 
                                        </div>
                                        
                                       
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Start Date:</label>
                                            <div class="col-lg-9">
                                                <input type="date" value="<?php echo date("Y-m-d") ?>" class="form-control" name="start_date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">End Date:</label>
                                            <div class="col-lg-9">
                                                <input type="date"  class="form-control" name="end_date">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Photo:</label>
                                            <div class="col-lg-9">
                                                <input type="file"  class="form-control" name="photo">
                                            </div>
                                        </div>
                                     
                                    </div>
                                    <div class="form-group ml-lg-5 ml-md-5 ">
                                    <button type="submit" name="submit" class="btn btn-lg btn-outline-success ">Register Student Practice</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>